<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Exports\InvoiceExport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class InvocieController extends Controller
{
  public function exportInvoices()
  {
    $nu = rand(11, 999);
    $data = Invoice::get();
    if ($data->isNotEmpty()) {
      return Excel::download(new InvoiceExport, 'INVOICE-LIST-' . $nu . '.xlsx');
    } else {
      return back();
    }
  }

//   public function sendInvoiceByEmail($email)
//   {
//       $invoice = Invoice::where('email', $email)->first();
//       $pdf = PDF::loadView('emails.invoice', ['invoice' => $invoice]);
//       Mail::send('emails.invoice', ['invoice' => $invoice], function($message) use ($invoice, $pdf){
//           $message->to($invoice->to_email)
//           ->subject($invoice->order_id)
//           ->attachData($pdf->output(), "$invoice->order_id.pdf");
//       });

//      return response()->json(['status' => true,'message'=>'Invoice Sent to email successfully!'],200);
//   }
    public function sendInvoiceByEmail($email)
    {
        try {
            $invoice = Invoice::where('email', $email)->first();
        // dd($invoice);
    
            if (!$invoice) {
                throw new \Exception("Invoice not found for the provided email.");
            }
    
            $pdf = PDF::loadView('emails.invoice', ['invoice' => $invoice]);
    
            Mail::send('emails.invoice', ['invoice' => $invoice], function($message) use ($invoice, $pdf){
                $message->to($invoice->email)
                        ->subject($invoice->order_id)
                        ->attachData($pdf->output(), "$invoice->order_id.pdf");
            });
    
            return response()->json(['status' => true, 'message' => 'Invoice sent to email successfully!'], 200);
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }
    
    public function generateInvoiceById($id)
{
    try {
        $invoice = Invoice::findOrFail($id);

        $pdf = PDF::loadView('emails.invoice', ['invoice' => $invoice]);

        $fileName = 'INVOICE-' . time() . '.pdf';
        $directory = public_path('invoices');

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }

        $filePath = public_path('invoices/' . $fileName);
        $pdf->save($filePath);

        return response()->download($filePath, $fileName)->deleteFileAfterSend();
    } catch (\Exception $e) {
        return response()->json(['message' => 'No invoice found for the provided order ID.'], 404);
    }
}




  public function generateInvoicePDF($order_id)
  {
      $invoice = Invoice::where('order_id', $order_id)->first();
    //   dd([$invoice, $order_id]);
      if($invoice)
      {
          $pdf = PDF::loadView('emails.invoice', ['invoice' => $invoice]);

          $fileName = 'INVOICE-' . time() . '.pdf';
          $directory = public_path('invoices');

          if (!File::exists($directory)) {
              File::makeDirectory($directory, 0755, true, true);
          }

          $filePath = public_path('invoices/' . $fileName);
          $pdf->save($filePath);
          return response()->download($filePath, $fileName)->deleteFileAfterSend();
      }
      else
      {

          return response()->json(['message' => 'No invoice found for the provided order ID.'], 404);
      }
  }


  public function viewJson($invoice_id)
  {
      try {
          $invoice = Invoice::findOrFail($invoice_id);
          return response()->json($invoice);
      } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
          $error = ['error' => 'Data not found'];
          return response()->json($error, 404);
      } catch (\Exception $exception) {
          $error = ['error' => 'Something went wrong'];
          return response()->json($error, 500);
      }
  }



  public function index(Request $request)
  {

    // $invoices = Invoice::when($request->invoice_id != null, function ($query) use ($request) {
    //     $query->where('order_id', $request->invoice_id);
    // })
    // ->when($request->item_name != null, function ($query) use ($request) {
    //     $query->where('item_name', $request->item_name);
    // })
    // ->where('invoice_type', 'package_inc')
    // ->latest()
    // ->get();

    $invoices = Invoice::latest()
        ->when($request->invoice_id != null, function ($q) use ($request) {
            return $q->where('order_id', $request->invoice_id);
        })
        ->when($request->item_name != null, function ($q) use ($request) {
            return $q->where('item_name', $request->item_name);
        })
        ->get();


    return view('backend.admin.invoiceManagement.index', compact('invoices'));
  }

  public function create()
  {
    return view('backend.admin.invoiceManagement.create');
  }

  public function destroy($id)
  {
    Invoice::find($id)->delete();

    return redirect()->route('admin.invoices')
      ->with('success', 'Email created successfully.');
  }

  //   public function destroy($id)
  //   {
  //       $invoice = Invoice::find($id);

  //       if (!$invoice) {
  //           return response()->json([
  //               'status' => 'error',
  //               'message' => 'Invoice not found.'
  //           ], 404);
  //       }

  //       $invoice->delete();

  //       return response()->json([
  //           'status' => 'success',
  //           'message' => 'Invoice deleted successfully.'
  //       ]);
  //   }



}
