<?php

namespace App\Http\Controllers\Backend\Admin\CustomInvoice;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\CustomInvoice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CustomInvoiceController extends Controller
{
     //Invoice templates
  public function create()
  {
    $customInvoices = CustomInvoice::latest()->paginate(5);
    // dd($customInvoices);
    return view('backend.admin.CustomInvoice.create', compact('customInvoices'));
  }


  public function view($id)
  {
    $invoice = CustomInvoice::findOrFail($id);
    // dd($invoice);
    if($invoice){
        return view('backend.admin.CustomInvoice.view', compact('invoice'));
    }else{
        return back()->with('error', 'Data not found!');
    }
  }

  public function viewJson($invoice_id)
  {
      try {
          $invoice = CustomInvoice::findOrFail($invoice_id);
          return response()->json($invoice);
      } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
          $error = ['error' => 'Data not found'];
          return response()->json($error, 404);
      } catch (\Exception $exception) {
          $error = ['error' => 'Something went wrong'];
          return response()->json($error, 500);
      }
  }
  

  public function sendInvoice($id)
  {
      $invoice = CustomInvoice::findOrFail($id);
      $pdf = PDF::loadView('emails.custom_invoice', ['invoice' => $invoice]);
      Mail::send('emails.custom_invoice', ['invoice' => $invoice], function($message) use ($invoice, $pdf){
          $message->to($invoice->to_email)
          ->subject($invoice->invoice_id)
          ->attachData($pdf->output(), "$invoice->invoice_id.pdf");
      });
      return response()->json(['status' => true,'message'=>'Email has been sent!'],200);

  }

  public function sendInvoiceByEmail($email)
  {
      $invoice = CustomInvoice::where('to_email', $email)->first();
      $pdf = PDF::loadView('emails.custom_invoice', ['invoice' => $invoice]);
      Mail::send('emails.custom_invoice', ['invoice' => $invoice], function($message) use ($invoice, $pdf){
          $message->to($invoice->to_email)
          ->subject($invoice->invoice_id)
          ->attachData($pdf->output(), "$invoice->invoice_id.pdf");
      });

     return response()->json(['status' => true,'message'=>'Invoice Sent to email successfully!'],200);
  }

  public function generateInvoicePDF($id)
  {
    $invoice = CustomInvoice::findOrFail($id);
    $pdf = PDF::loadView('emails.custom_invoice', ['invoice' => $invoice]);
  
      $fileName = 'CUSTOM-' . time() . '.pdf';
      $directory = public_path('custom_invoices');
  
      if (!File::exists($directory)) {
          File::makeDirectory($directory, 0755, true, true);
      }
  
      $filePath = public_path('custom_invoices/' . $fileName);
      $pdf->save($filePath);
      return response()->download($filePath, $fileName)->deleteFileAfterSend();

  }



  public function store(Request $request)
  {
    // dd($request->all());
      $rules = [
          'invoice_id' => 'required|string',
          'date' => 'required|date',
          'from_name' => 'required|string',
          'from_email' => 'required|email',
          'from_note' => 'nullable|string',
          'to_name' => 'required|string',
          'to_email' => 'required|email',
          'to_note' => 'nullable|string',
          'item_name' => 'required|array',
          'description' => 'nullable|array',
          'pages' => 'required|array',
          'price_per_page' => 'required|array',
      ];

      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
      }

      $data = [];
      $data = $request->all();

      $data['user_id'] = Auth::user()->id;
      $data['item_name'] = json_encode($data['item_name']);
      $data['description'] = json_encode($data['description']);
      $data['pages'] = json_encode($data['pages']);
      $data['price_per_page'] = json_encode($data['price_per_page']);

      $invoice = CustomInvoice::updateOrCreate(
        ['invoice_id' => $data['invoice_id']],
        $data
      );

      // send email 
      $lastAddedId = $invoice->id;      
      $invoice = CustomInvoice::findOrFail($lastAddedId);
      
      if($invoice)
      {
        try{
            $pdf = PDF::loadView('emails.custom_invoice', ['invoice' => $invoice]);
            Mail::send('emails.custom_invoice', ['invoice' => $invoice], function($message) use ($invoice, $pdf){
                $message->to($invoice->to_email)
                ->subject($invoice->invoice_id)
                ->attachData($pdf->output(), "$invoice->invoice_id.pdf");
            });
            
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $exception){
            return back()->with('error', 'Something went wrong!');
        }
      }
   
      $customInvoices = CustomInvoice::latest()->paginate(10);

      if($customInvoices){
        return view('backend.admin.CustomInvoice.create', compact('customInvoices'))->with('success', 'Invoice email template created');
      }else{
        return view('backend.admin.CustomInvoice.create', compact('customInvoices   '))->with('error', 'Oops! something went wrong!');
      }
  }



  public function destroy($id)
  {
      try {
          $data = CustomInvoice::findOrFail($id);
          $data->delete();
          
          return response()->json(['message' => 'Record deleted successfully'], 200);
      } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
          return response()->json(['error' => 'Record not found'], 404);
      }
  }
}
