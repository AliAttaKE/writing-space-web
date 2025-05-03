<?php

namespace App\Http\Controllers\Backend\Admin\OrderManagement;

use App\Http\Controllers\Controller;
use App\Models\Academic_level;
use App\Models\Deadline;
use App\Models\Term_of_paper;
use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\files;
use App\Models\File;
use App\Models\Paper_Format;
use App\Models\Subject;
use ZipArchive;
use DateTime;
use DateInterval;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\RevisionSubmit;
use App\Models\CompleteToDelivered;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;
use App\Mail\EmailTemplate;
use App\Models\Language;
use App\Models\Folder;
use Illuminate\Support\Facades\Hash;






class PlaceOrderController extends Controller
{


     public function updateStatus(Request $request)
    {
        $request->validate([
            'selectedProducts' => 'required|array',
            'selectedProducts.*' => 'exists:orders,order_id',
            'order_status' => 'required',
        ]);
        $data = [];
        if ($request->order_status == 'Canceled') {
            foreach ($request->selectedProducts as $order)
            {
                $order = Orders::where('order_id', $order)->first();
                $data['order_id'] = $order->order_id;
                $data['customer_name'] = $order->user->name;
                $data['customer_email'] = $order->user->email;
                $email = Email::where('type','order_cancelled')->first();
                if ($email) {
                    Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
                }
            }

        }elseif ($request->order_status == 'Delivered') {
            foreach ($request->selectedProducts as $order)
            {
                $order = Orders::where('order_id', $order)->first();
                $data['order_id'] = $order->order_id;
                $data['customer_name'] = $order->user->name;
                $data['customer_email'] = $order->user->email;
                $email = Email::where('type','order_delivered')->first();
                if ($email) {
                    Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
                }
            }

        }elseif ($request->order_status == 'In-Progress') {
            foreach ($request->selectedProducts as $order)
            {
                $order = Orders::where('order_id', $order)->first();
                $data['order_id'] = $order->order_id;
                $data['customer_name'] = $order->user->name;
                $data['customer_email'] = $order->user->email;
                $email = Email::where('type','order_in-progress')->first();
                if ($email) {
                    Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
                }
            }

        }elseif ($request->order_status == 'Revision') {
            foreach ($request->selectedProducts as $order)
            {
                $order = Orders::where('order_id', $order)->first();
                $data['order_id'] = $order->order_id;
                $data['customer_name'] = $order->user->name;
                $data['customer_email'] = $order->user->email;
                $email = Email::where('type','order_in-revision')->first();
                if ($email) {
                    Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
                }
            }

        }

        Orders::whereIn('order_id', $request->selectedProducts)
               ->update(['order_status' => $request->order_status]);
        return back()->with('success', 'Status updated successfully.');
    }


    public function order_complete($id)
    {
        Orders::where('order_id', $id)->update(['order_status' => 'Completed']);
        return redirect()->back()->with('success', 'Order marked as complete.');
    }

   public function revision_exp($id)
    {
        $order = Orders::where('id',$id)->first();
        if ($order) {
            Orders::where('id', $id)->update(['revision_status' => 'revision status']);
            return redirect()->route('admin.delivered-order')->with('success', 'Revision order date update Successfully.');
        } else {
            return redirect()->back()->with('success', 'Order not found.');
        }
    }



    public function exportOrders($value)
    {
        $nu = rand(11, 999);
        return  Excel::download(new OrdersExport($value), 'ORDER-LIST-' . $nu . '.xlsx');
    }


    public function index(Request $request)
    {
        $order = Orders::where('order_type', 'Product')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->when($request->order_status != null, function ($q) use ($request) {
                return $q->where('order_status', $request->order_status);
            })
            ->get();

        $subjects = Subject::all();
        $academic = Academic_level::all();
        $term = Term_of_paper::all();
        $deadline = Deadline::all();
        $paper_format = Paper_Format::all();
        return view('backend.admin.orderManagement.place_order', compact('order', 'subjects', 'academic', 'term', 'deadline', 'paper_format'));
    }

    public function create_order(Request $request)
    {





        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            // 'mce_0' => 'required',
            'academic_level' => 'required',
            'type_of_paper' => 'required',
            'paper_format' => 'required',
            'language_spelling' => 'required',
            'number_of_pages' => 'required',
            'spacing' => 'required',
            'powerpoint_slide' => 'required',
            'no_of_extra_sources' => 'required',
            'deadline' => 'required',
            'statistical_analysis' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();;
        }
        $input = $request->all();
        // $user = User::findOrFail(Auth::user()->id);
        // $user->tier = 'tier_1';
        // $user->save();
        $currentDateTime = new DateTime();




        $input['description'] = $input['mce_0'];
        // $input['order_id'] = rand(000000000, 999999999);
        $lastOrderId = Orders::latest()->limit(1)->value('order_id');
        $order_id = ++$lastOrderId;
        $input['order_id'] = $order_id;

        $input['user_id'] = Auth::user()->id;
        $input['cost'] = 500;
        if ($input['no_of_extra_sources'] > $input['number_of_pages']) {
            $input['additional_cost'] = $input['no_of_extra_sources'] - $input['number_of_pages'];
        } else {
            $input['additional_cost'] = 0;
        }
        if ($input['statistical_analysis'] == 'yes') {
            $total_addition = $input['cost'] + $input['additional_cost'];
            $percentage = $total_addition * 15 / 100;
            $input['additional_cost'] = $input['additional_cost'] + $percentage;
            $input['statistical_analysis'] = true;
        } else {
            $input['statistical_analysis'] = false;
        }
        $input['total_cost'] = $input['cost'] + $input['additional_cost'];
        $input['order_type'] = 'Product';
        $input['order_show'] = 'Enable';
        $input['order_status'] = 'Pending';
        $order = Orders::create($input);
        $order_id = $input['order_id'];
        $path = "public/uploads_folders/" . $order_id;

        $permissions = 0775;

        if (!Storage::exists($path)) {

             Storage::makeDirectory($path, $permissions, true);
            $folder = new Folder();
            $folder->name = $order_id;
            $folder->description = $order_id;
            $folder->user_id = Auth::id();
            $folder->save();
        }

        chmod(storage_path("app/public/uploads_folders/{$order_id}"), 0777);

        // return $this->index();
        return redirect()->route('admin.placeOrder')->with('message', 'Your order submit.!');
    }



    // public function importData(Request $request)
    // {
    //     // Validate the uploaded file
    //     $request->validate([
    //         'file' => 'required|mimes:csv,txt'
    //     ]);

    //     // Handle the uploaded file
    //     $file = $request->file('file')->getRealPath();

    //     // Open the file for reading
    //     if (($handle = fopen($file, 'r')) !== FALSE) {
    //         $header = fgetcsv($handle, 1000, ","); // Skip the header row

    //         DB::beginTransaction();

    //         try {
    //             while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

    //                 $currentDateTime = new DateTime();




    //                 $input['description'] = $row[2];
    //                 // $input['order_id'] = rand(000000000, 999999999);
    //                 $lastOrderId = Orders::latest()->limit(1)->value('order_id');
    //                 $order_id = ++$lastOrderId;
    //                 $input['order_id'] = $order_id;

    //                 $input['user_id'] = Auth::user()->id;
    //                 $input['cost'] = 500;
    //                 if ($row[10] > $row[7]) {
    //                     $input['additional_cost'] = $row[10] - $row[7];
    //                 } else {
    //                     $input['additional_cost'] = 0;
    //                 }
    //                 if ($row[12] == 'yes') {
    //                     $total_addition = $input['cost'] + $input['additional_cost'];
    //                     $percentage = $total_addition * 15 / 100;
    //                     $input['additional_cost'] = $input['additional_cost'] + $percentage;
    //                     $row[12] = true;
    //                 } else {
    //                     $row[12] = false;
    //                 }
    //                 $input['total_cost'] = $input['cost'] + $input['additional_cost'];
    //                 $input['order_type'] = 'Product';
    //                 $input['order_show'] = 'Enable';
    //                 $input['order_status'] = 'Pending';
    //                 $order = Orders::create($input);
    //                 $order_id = $input['order_id'];
    //                 $path = "public/uploads_folders/" . $order_id;

    //                 $permissions = 0775;

    //                 if (!Storage::exists($path)) {

    //                      Storage::makeDirectory($path, $permissions, true);
    //                     $folder = new Folder();
    //                     $folder->name = $order_id;
    //                     $folder->description = $order_id;
    //                     $folder->user_id = Auth::id();
    //                     $folder->save();
    //                 }

    //                 chmod(storage_path("app/public/uploads_folders/{$order_id}"), 0777);




    //             }

    //             DB::commit(); // Commit the transaction if everything is successful

    //         } catch (\Exception $e) {
    //             DB::rollBack(); // Rollback the transaction if there is an error
    //             fclose($handle);
    //             return redirect()->back()->with('error', 'Data import failed: ' . $e->getMessage());
    //         }

    //         fclose($handle);

    //     } else {
    //         return redirect()->back()->with('error', 'Failed to open the file.');
    //     }

    //     return redirect()->back()->with('success', 'Data Imported Successfully');
    // }


    public function importData(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        // Handle the uploaded file
        $file = $request->file('file')->getRealPath();

        // Open the file for reading
        if (($handle = fopen($file, 'r')) !== FALSE) {
            $header = fgetcsv($handle, 1000, ","); // Skip the header row

            DB::beginTransaction(); // Start database transaction

            try {
                while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // Validate and clean CSV row data
                    $description = $row[2] ?? null;
                    $cost = 500; // Default cost

                    // Increment order ID based on the latest order
                    $lastOrderId = Orders::latest()->limit(1)->value('order_id');
                    $order_id = $lastOrderId ? ++$lastOrderId : 1;

                    // Set input data for order creation
                    $input = [
                        'description' => $description,
                        'order_id' => $order_id,
                        'user_id' => Auth::user()->id,
                        'cost' => $cost,
                        'additional_cost' => 0, // Initialize additional cost
                        'order_type' => 'Product',
                        'order_show' => 'Enable',
                        'order_status' => 'Pending',
                        'total_cost' => $cost
                    ];

                    // Calculate additional cost if applicable
                    if ($row[10] > $row[7]) {
                        $input['additional_cost'] = $row[10] - $row[7];
                    }

                    // Apply 15% additional cost if the value in column 12 is 'yes'
                    if (strtolower($row[12]) === 'yes') {
                        $input['additional_cost'] += ($input['cost'] + $input['additional_cost']) * 0.15;
                    }

                    // Calculate total cost
                    $input['total_cost'] = $input['cost'] + $input['additional_cost'];

                    // Save the order to the database
                    $order = Orders::create($input);

                    // Create folder for the order
                    $path = "public/uploads_folders/" . $order_id;
                    $permissions = 0775;

                    if (!Storage::exists($path)) {
                        Storage::makeDirectory($path, $permissions, true);

                        // Create a folder record in the database
                        Folder::create([
                            'name' => $order_id,
                            'description' => $order_id,
                            'user_id' => Auth::id()
                        ]);
                    }

                    // Ensure proper folder permissions
                    chmod(storage_path("app/public/uploads_folders/{$order_id}"), 0777);
                }

                DB::commit(); // Commit the transaction

            } catch (\Exception $e) {
                DB::rollBack(); // Rollback the transaction on error
                fclose($handle);
                return redirect()->back()->with('error', 'Data import failed: ' . $e->getMessage());
            }

            fclose($handle); // Close the file
        } else {
            return redirect()->back()->with('error', 'Failed to open the file.');
        }

        return redirect()->back()->with('success', 'Data Imported Successfully');
    }


    public function new_order(Request $request)
    {
        // $order = Orders::where('order_status','Pending')->get();
        $order = Orders::where('order_status', 'Pending')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->latest()
            ->get();
        return view('backend.admin.orderManagement.new_order', compact('order'));
    }

    public function inprogress_order(Request $request)
    {
        $id = Auth()->user()->id;
        // $order=Orders::where('order_status','Inprogress')->get();
        $order = Orders::where('order_status', 'In-Progress')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
             ->latest()
            ->get();

        return view('backend.admin.orderManagement.inprogress_order', compact('order'));
    }



    public function revisionsubmit(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'order_id'=>'required',
            'revision_request'=>'required',
        ]);

        if($validator->passes())
        {
            $revision = new RevisionSubmit;
            $revision->order_id = $request->order_id;
            $revision->revision_request = $request->revision_request;
            $revision->save();
            Orders::where('order_id', $request->order_id)->update(['order_status' => 'Revision']);




                    $order = Orders::where('order_id', $request->order_id)->first();
                    $data['order_id'] = $order->order_id;
                    $data['customer_name'] = $order->user->name;
                    $data['customer_email'] = $order->user->email;
                    $email = Email::where('type','order_in-revision')->first();
                    if ($email) {
                        Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
                    }

                    return redirect()->back()->with('success', 'Revision request submitted successfully.');




        }
        else
        {
            return back()->withErrors($validator)->withInput();
        }
    }





    public function revision_order(Request $request)
    {
        $id = Auth()->user()->id;

        // $order=Orders::where('order_status','Revision')->get();

        $order = Orders::where('order_status', 'Revision')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->get();


        return view('backend.admin.orderManagement.revision_order', compact('order'));
    }

    public function completed_order(Request $request)
    {
        $id = Auth()->user()->id;
        // $order=Orders::where('order_status','Completed')->get();

        $order = Orders::where('order_status', 'Completed')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->get();



        return view('backend.admin.orderManagement.completed_order', compact('order'));
    }

    public function delivered_order(Request $request)
    {
        $id = Auth()->user()->id;
        // $order=Orders::where('order_status','Delivered')->get();
        $order = Orders::where('order_status', 'Delivered')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
             ->latest()
            ->get();

        return view('backend.admin.orderManagement.delivered_order', compact('order'));
    }




public function orders_history(Request $request)
{
    $order = Orders::join('users', 'orders.user_id', '=', 'users.id') // Join with the users table
        ->select('orders.*', 'users.name as user_name') // Select order fields and the user's name
        ->when($request->order_id, function ($q) use ($request) {
            return $q->where('order_id', $request->order_id);
        })
        ->when($request->topic, function ($q) use ($request) {
            return $q->where('topic', $request->topic);
        })
        ->when($request->user_name, function ($q) use ($request) {
            return $q->where('users.name', 'LIKE', '%' . $request->user_name . '%');
        })
        ->when($request->status, function ($q) use ($request) {
            return $q->where('orders.order_status', $request->status);
        })
        ->when($request->start_date, function ($q) use ($request) {
            return $q->whereDate('orders.created_at', '>=', $request->start_date);
        })
        ->when($request->end_date, function ($q) use ($request) {
            return $q->whereDate('orders.created_at', '<=', $request->end_date);
        })
        ->latest()
        ->get();

    return view('backend.admin.orderManagement.orders_history', compact('order'));
}




    public function other_order(Request $request)
    {
        $id = Auth()->user()->id;
        $order_refund = Orders::where('order_status', 'Refund')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
             ->latest()
            ->get();

        $order_canceled = Orders::where('order_status', 'Canceled')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
             ->latest()
            ->get();


        return view('backend.admin.orderManagement.other_order', compact('order_refund', 'order_canceled'));
    }


    public function delete_order($id)
    {
        $order = Orders::find($id);
        if ($order) {
            $order->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Order not found'], 404);
        }
    }


    // public function deleverd_order($id,Request $request)
    // {
    //     $order = Orders::find($id);
    //     if ($order) {
    //         $user = User::findOrFail($order->user_id)->first();

    //         if($request->status == 'Delivered')
    //         {
    //             $completetodel = new CompleteToDelivered;
    //             $completetodel->order_id = $order->order_id;
    //             $completetodel->save();
    //             Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);

    //             $email = Email::where('type','=','Order Delivered')->first();
    //             if($email){
    //                 Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             }

    //             return response()->json(['success' => true, 'message' => 'Order Delivered Successfully']);
    //         }
    //         elseif ($request->status == 'In-Progress')
    //         {
    //              Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);

    //             // $email = Email::where('type','=','Order Inprogress')->first();
    //             // if($email){
    //             //     Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             // }

    //               $emailContent = "
    //             <p>Thank you for package Purchase</p>
    //             <p>If you have any questions or need further assistance, please contact us.</p>
    //             <p>Best regards,<br>" . config('app.name') . " Team</p>
    //         ";

    //         Mail::html($emailContent, function ($message) use ($user) {
    //             $message->to($user->email)
    //                     ->subject('package Purchase');
    //         });


    //              return response()->json(['success' => true, 'message' => 'Order In-Progress']);
    //         }
    //         elseif ($request->status == 'Completed')
    //         {
    //             Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);
    //             $email = Email::where('type','=','Order Completion')->first();
    //             if($email){
    //                 Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             }
    //             return response()->json(['success' => true, 'message' => 'Order In-Progress']);
    //         }
    //         elseif ($request->status == 'Revision')
    //         {
    //             Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);
    //             $email = Email::where('type','=','Order Revision')->first();
    //             if($email){
    //                 Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             }
    //             return response()->json(['success' => true, 'message' => 'Order In-Progress']);
    //         }
    //         elseif ($request->status == 'Refund')
    //         {
    //             Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);
    //             $email = Email::where('type','=','Order Refund')->first();
    //             if($email){
    //                 Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             }
    //             return response()->json(['success' => true, 'message' => 'Order In-Progress']);
    //         }
    //         elseif ($request->status == 'Canceled')
    //         {
    //             Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);
    //             $email = Email::where('type','=','Order Cancel')->first();
    //             if($email){
    //                 Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             }
    //             return response()->json(['success' => true, 'message' => 'Order In-Progress']);
    //         }
    //          elseif ($request->status == 'Pending')
    //         {
    //             Orders::where('order_id', $order->order_id)->update(['order_status' =>$request->status]);
    //             // $email = Email::where('type','=','Order Cancel')->first();
    //             // if($email){
    //             //     Mail::to($user->email)->send(new EmailTemplate($user,$email));
    //             // }
    //             return response()->json(['success' => true, 'message' => 'Order In-Progress']);
    //         }

    //     } else {
    //         return response()->json(['success' => false, 'message' => 'Order not found'], 404);
    //     }

    // }

public function deleverd_order($id, Request $request)
{
    $order = Orders::find($id);



    if (!$order) {
        return response()->json(['success' => false, 'message' => 'Order not found'], 404);
    }

    $user = User::findOrFail($order->user_id);

    Orders::where('order_id', $order->order_id)->update(['order_status' => $request->status]);

    switch ($request->status) {
        case 'Pending':
            $emailSubject = 'Status Update: Your Order ID ' . $order->order_id . ' is Pending Approval';
            $emailContent = "
                <p>Hi {$user->name},</p>
                <p>Just a quick update on your order with Writing Space: Your order ID {$order->order_id} is currently pending approval. We are reviewing the details to ensure everything is set to meet your expectations.</p>
                <p><strong>What’s Next?</strong></p>
                <ul>
                    <li>You will receive a notification once your order has been approved and moved to the next stage of our process.</li>
                </ul>
                <p>Thank you for your patience. If you have any questions or need to adjust any details, please reach out to us.</p>
                <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            break;

        case 'In-Progress':
            $emailSubject = 'Status Update: Your Order ID ' . $order->order_id . ' is Now In-Progress';
            $emailContent = "
                <p>Hi {$user->name},</p>
                <p>We're excited to let you know that your order ID {$order->order_id} is now in-progress! Our team is actively working on your request to provide you with quality results.</p>
                <p><strong>What’s Next?</strong></p>
                <ul>
                    <li>We'll keep you updated on the progress and notify you as soon as your order is ready for the next phase.</li>
                </ul>
                <p>Feel free to check your order status anytime from your dashboard.</p>
                <p>Thank you for choosing Writing Space!</p>
                <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            break;

        case 'Revision':
            $emailSubject = 'Status Update: Your Order ID ' . $order->order_id . ' is In-Revision';
            $emailContent = "
                <p>Hi {$user->name},</p>
                <p>Your revision request is received and your Order ID {$order->order_id} is currently in the revision stage. We are making the necessary adjustments to ensure that the final product aligns perfectly with your specifications.</p>
                <p><strong>What’s Next?</strong></p>
                <ul>
                    <li>Once revisions are complete, we will move forward to finalizing your order. You will receive a notification when your order is ready for delivery.</li>
                </ul>
                <p>Thank you for your collaboration and patience.</p>
                <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            break;

        case 'Delivered':
            $emailSubject = 'Good News: Your Order ID ' . $order->order_id . ' Has Been Delivered!';
            $emailContent = "
                <p>Hi {$user->name},</p>
                <p>We are pleased to announce that your order ID {$order->order_id} has been delivered! You can now download and access your materials through your Writing Space dashboard.</p>
                <p><strong>What’s Next?</strong></p>
                <ul>
                    <li>We hope you find everything to your satisfaction. Please review your delivered materials and let us know if there are any issues or further assistance needed.</li>
                </ul>
                <p>Thank you for trusting us with your academic needs. We look forward to serving you again!</p>
                <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            break;

            //    case 'Completed':
            // $emailSubject = 'Good News: Your Order ID ' . $order->order_id . ' Has Been Completed!';
            // $emailContent = "
            //     <p>Hi {$user->name},</p>
            //     <p>We are pleased to announce that your order ID {$order->order_id} has been delivered! You can now download and access your materials through your Writing Space dashboard.</p>
            //     <p><strong>What’s Next?</strong></p>
            //     <ul>
            //         <li>We hope you find everything to your satisfaction. Please review your delivered materials and let us know if there are any issues or further assistance needed.</li>
            //     </ul>
            //     <p>Thank you for trusting us with your academic needs. We look forward to serving you again!</p>
            //     <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            // break;
            


            
        case 'Canceled':
            $emailSubject = 'Notification: Your Order ID ' . $order->order_id . ' Has Been Cancelled';
            $emailContent = "
                <p>Hi {$user->name},</p>
                <p>We regret to inform you that your order ID {$order->order_id} has been cancelled. We apologize for any inconvenience this may have caused.</p>
                <p><strong>What’s Next?</strong></p>
                <ul>
                    <li>If you have any questions or would like to discuss alternatives or reordering, please don't hesitate to contact us.</li>
                </ul>
                <p>We thank you for your understanding and apologize for any inconvenience. We hope to assist you again in the future.</p>
                <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            break;

        case 'Refund':
            $emailSubject = 'Notification: Your Refund for Order ID ' . $order->order_id . ' Has Been Processed';
            $emailContent = "
                <p>Hi {$user->name},</p>
                <p>We wanted to inform you that a refund for your order ID {$order->order_id} has been successfully processed. You should see the refunded amount of [Refund Amount] reflected in your original payment method within 30 business days.</p>
                <p><strong>What’s Next?</strong></p>
                <ul>
                    <li>If you have any questions about your refund or need further assistance, please don't hesitate to contact us. We're here to help!</li>
                </ul>
                <p>We apologize for any inconvenience this may have caused and appreciate your understanding. We hope to have the opportunity to assist you again in the future.</p>
                <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            break;

        default:
            return response()->json(['success' => false, 'message' => 'Invalid status provided'], 400);
    }

    Mail::html($emailContent, function ($message) use ($user, $emailSubject) {
        $message->to($user->email)
                ->subject($emailSubject);
    });

    return response()->json(['success' => true, 'message' => 'Order status updated and email sent']);
}



    public function revision_date(Request $request)
    {
        $order = Orders::where('order_id',$request->order_id)->first();
        if ($order)
        {
          $CompleteToDelivered = CompleteToDelivered::where('order_id',$request->order_id)->first();
            if ($CompleteToDelivered)
            {
                CompleteToDelivered::where('order_id', $order->order_id)->update(['created_at' => $request->order_created_at]);
            }
            else
            {
                return redirect()->back()->with('success', 'Order not found.');
            }

            return redirect()->route('admin.delivered-order')->with('success', 'Revision order date update Successfully.');
        } else {
            return redirect()->back()->with('success', 'Order not found.');
        }
    }

    public function order_detail($id)
    {

        $order = Orders::where('order_id', $id)->first();
        $language = Language::where('title',$order->language_spelling)->first();
        $folder   = Folder::where('name',$order->order_id)->first();

        return view('backend.admin.orderManagement.order_detail', compact('order','language','folder'));
    }


    //api

    public function new_order_api()
    {
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name as users_name')
            ->latest('orders.created_at')
            ->get();

        if ($orders->isEmpty()) {
            return response()->json(['message' => 'No orders found'], 404);
        }

        return response()->json(['orders' => $orders], 200);
    }

   public function new_folder_api(Request $request)
{
    // Validate request data
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()->first()], 400);
    }

    // Extract email and password from request
    $credentials = $request->only('email', 'password');

    // Query the database for a user with the provided email and appropriate API role
    $user = User::where('api_role', 'api')->where('email', $credentials['email'])->first();

    // Check if a user with the provided email exists and if the password is correct
    if ($user && Hash::check($credentials['password'], $user->password)) {
        // Authentication successful, proceed with retrieving folders

        $folders = Folder::all();
        $data = [];

        if ($folders->count() > 0) {
            foreach ($folders as $folder) {
                $user = User::find($folder->user_id);

                if ($user) {
                    $folder['user_name'] = $user->name;
                }

                $files = File::where('folder_id', $folder->id)->get();

                if ($files->count() > 0) {
                    $folder['files'] = $files;
                }

                $data[] = $folder;
            }

            return response()->json(['folders' => $data], 200);
        } else {
            return response()->json(['folders' => 'No folders found'], 404);
        }
    } else {
        // Authentication failed, return 401 Unauthorized
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}

    public function new_order_api_status(Request $request)
    {


        $request->validate([
            'order_id' => 'required|exists:orders',
            'order_status' => 'required|in:pending,processing,completed,cancelled',
        ]);

        $orderId = $request->order_id;
        $orderStatus = $request->order_status;

        // Update order status
        DB::table('orders')->where('order_id', $orderId)->update(['order_status' => $orderStatus]);

        // Get the updated order
        $updatedOrder = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name as users_name')
            ->where('orders.order_id', $orderId)
            ->first();

        $message = "Order status updated successfully.";

        return response()->json(['order' => $updatedOrder, 'message' => $message], 200);
    }



    public function new_order_api_completeds()
    {

        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('folders', 'folders.user_id', '=', 'users.id')
            ->join('files', 'files.folder_id', '=', 'folders.id')
            ->select('orders.*', 'users.name as users_name')
            ->where('order_status', 'Pending')
            ->latest('orders.created_at')
            ->get();

        if ($orders->isNotEmpty()) {
            return response()->json(['order' => $orders], 200);
        } else {
            return response()->json(['Order' => 'No orders found'], 404);
        }
    }


    // public function new_order_api_completed()
    // {
    //     $orders = Orders::all();
    //     $data = [];
    //     if ($orders->count() > 0) {
    //         foreach ($orders as $o) {
    //             if ($o->submitting == 'No' || $o->submitting == null) {
    //                 $data[] = $o;
    //             } else {
    //                 $folder = Folder::where('name', '=', $o->order_id)->first();
    //                 if ($folder) {
    //                     $file = File::where('folder_id', '=', $folder->id)->get();
    //                     if ($file->count() > 0) {
    //                         $data[] = $o;
    //                     }
    //                 }
    //             }
    //         }
    //         $data = array_reverse($data);
    //         return response()->json(['order' => $data], 200);
    //     } else {
    //         return response()->json(['order' => 'not found'], 404);
    //     }
    // }



    // public function new_order_api_completed()
    // {
    //     $orders = Orders::all();
    //     $data = [];
    //     if ($orders->count() > 0) {
    //         foreach ($orders as $o) {
    //             if ($o->order_status == 'In-Progress') {



    //                  $folder = Folder::where('name', '=', $o->order_id)->first();


    //                 if ($folder) {


    //                     $file = File::where('folder_id', '=', $folder->id)->get();

    //                     if ($file->count() > 0) {


    //                         $data[] = $o;
    //                     }
    //                 }


    //                 $data[] = $o;
    //             }

    //         }
    //         $data = array_reverse($data);
    //         return response()->json(['order' => $data], 200);
    //     } else {
    //         return response()->json(['order' => 'not found'], 404);
    //     }
    // }

//  public function new_order_api_completed()
//     {
//         $orders = Orders::where('order_status', '=', 'In-Progress')->get();
//         $data = [];
//         if ($orders->count() > 0) {
//             foreach ($orders as $o) {
//                 $folder = Folder::where('name', '=', $o->order_id)->first();

//                 if ($folder) {
//                     $files = File::where('folder_id', '=', $folder->id)->get();
//                 } else {

//                     $files = collect([]);
//                 }

//                 $orderData = [
//                     'order' => $o,
//                     'files' => $files
//                 ];

//                 $data[] = $orderData;
//             }
//             $data = array_reverse($data);
//             return response()->json(['order' => $data], 200);
//         } else {
//             return response()->json(['order' => 'not found'], 404);
//         }
//     }

    // public function order_by_id($id)
    // {
    //     $orders = Orders::where('order_id', '=', $id)->first();
    //     if ($orders) {
    //         return response()->json(['order' => $orders], 200);
    //     } else {
    //         return response()->json(['order' => 'not found'], 404);
    //     }
    // }


//     public function new_order_api_completed()
// {
//       $orders = Orders::where('order_status', '=', 'In-Progress')
//         ->select('id', 'order_id', 'subject', 'description', 'academic_level',
//                   'type_of_paper', 'paper_format', 'order_status',
//                   'language_spelling', 'number_of_pages', 'powerpoint_slide',
//                   'no_of_extra_sources as sources', 'deadline', 'topic')
//         ->get();

//     $data = [];
//     if ($orders->count() > 0) {
//         foreach ($orders as $o) {
//             $folder = Folder::where('name', '=', $o->order_id)->first();
//             $attachment_file = 'no'; // Default value

//             if ($folder) {
//                 $files = File::where('folder_id', '=', $folder->id)->get();
//                 if ($files->isNotEmpty()) {
//                     $attachment_file = 'yes'; // Files are attached
//                 }
//             }

//             $orderData = [
//                 'order' => $o,
//                 'attachment_file' => $attachment_file ,
//                 'files' => $files ?? collect([])

//             ];

//             $data[] = $orderData;
//         }
//         $data = array_reverse($data);
//         return response()->json(['order' => $data], 200);
//     } else {
//         return response()->json(['order' => 'not found'], 404);
//     }
// }

// public function new_order_api_completed(Request $request)
// {
//     // Validate request data
//     $validator = Validator::make($request->all(), [
//         'email' => 'required|email',
//         'password' => 'required',
//     ]);

//     // Check if validation fails
//     if ($validator->fails()) {
//         return response()->json(['error' => $validator->errors()->first()], 400);
//     }

//     // Extract email and password from request
//     $credentials = $request->only('email', 'password');

//     // Query the database for a user with the provided email
//     $user = User::where('api_role','api')->where('email', $credentials['email'])->first();

//     // Check if a user with the provided email exists and if the password is correct
//     if ($user && Hash::check($credentials['password'], $user->password)) {
//         // Authentication successful, proceed with retrieving orders

//         $orders = Orders::where('order_status', '=', 'In-Progress')
//             ->select('id', 'order_id', 'subject', 'description', 'academic_level',
//                       'type_of_paper', 'paper_format', 'order_status',
//                       'language_spelling', 'number_of_pages', 'powerpoint_slide',
//                       'no_of_extra_sources as sources', 'deadline', 'topic')
//             ->get();

//         $data = [];
//         if ($orders->count() > 0) {
//             foreach ($orders as $o) {
//                 $folder = Folder::where('name', '=', $o->order_id)->first();
//                 $attachment_file = 'no';

//                 if ($folder) {
//                     $files = File::where('folder_id', '=', $folder->id)->get();
//                     if ($files->isNotEmpty()) {
//                         $attachment_file = 'yes';
//                     }
//                 }

//                 $orderData = [
//                     'order' => $o,
//                     'attachment_file' => $attachment_file ,
//                     'files' => $files ?? collect([])

//                 ];

//                 $data[] = $orderData;
//             }
//             $data = array_reverse($data);
//             return response()->json(['order' => $data], 200);
//         } else {
//             return response()->json(['order' => 'not found'], 404);
//         }
//     } else {
//         // Authentication failed, return 401 Unauthorized
//         return response()->json(['error' => 'Unauthorized'], 401);
//     }
// }

public function new_order_api_completed(Request $request)
{
    // Validate request data
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()->first()], 400);
    }

    // Extract email and password from request
    $credentials = $request->only('email', 'password');

    // Query the database for a user with the provided email
    $user = User::where('api_role', 'api')->where('email', $credentials['email'])->first();

    // Check if a user with the provided email exists and if the password is correct
    if ($user && Hash::check($credentials['password'], $user->password)) {
        // Authentication successful, proceed with retrieving orders

        $orders = Orders::where('order_status', '=', 'In-Progress')
            ->select('id', 'order_id', 'subject', 'description', 'academic_level',
                      'type_of_paper', 'paper_format', 'order_status',
                      'language_spelling', 'number_of_pages', 'powerpoint_slide',
                      'no_of_extra_sources as sources', 'deadline', 'topic')
            ->get();

        $data = [];
        if ($orders->count() > 0) {
            foreach ($orders as $o) {
                $folder = Folder::where('name', '=', $o->order_id)->first();
                $attachment_file = 'no';
                $filesData = collect([]); // Initialize an empty collection for files data

                if ($folder) {
                    $files = File::where('folder_id', '=', $folder->id)->get();
                    if ($files->isNotEmpty()) {
                        $attachment_file = 'yes';

                        // Construct files data including file_path
                        $filesData = $files->map(function ($file) {
                            $file_path = str_replace('public/', '', $file->file_path);
                            $url = config('app.url').'/storage/' . $file_path;

                            return [
                                'file_name' => $file->title,
                                'file_path' =>$file->file_path,
                                'file_url' => $url,
                            ];
                        });
                    }
                }

                $orderData = [
                    'order' => $o,
                    'attachment_file' => $attachment_file,
                    'files' => $filesData, // Include the files data with file information
                ];

                $data[] = $orderData;
            }

            $data = array_reverse($data);
            return response()->json(['order' => $data], 200);
        } else {
            return response()->json(['order' => 'not found'], 404);
        }
    } else {
        // Authentication failed, return 401 Unauthorized
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}



    public function order_by_id($id)
{



     $order = Orders::where('order_id', '=', $id)->first();



    if ($order) {

        $folder = Folder::where('name', $order->order_id)->first();


        $files = File::where('folder_id', '=', $folder->id)->get();

        // Return the response with files and folder information
        return response()->json(['order' => $order, 'folder' => $folder, 'files' => $files], 200);
    } else {
        return response()->json(['message' => 'Order not found'], 404);
    }
}




    public function order_complete_rs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'response' => 'required|string', // Assuming response is required and must be a string
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $orderId = $request->order_id;


        $fileName = uniqid() . '_response.txt';
        $filePath = storage_path('app/public/uploads_folders/' . $fileName);


        file_put_contents($filePath, $request->response);


        DB::table('file_chat_g_p_t_s')->insert([
            'file_name' => $fileName,
            'title' => 'Response',
            'order_id' => $orderId,
            'file_path' => 'public/files/' . $fileName,
            'file_type' => 'text/plain',
        ]);

        $message = "Order file details updated successfully.";

        return response()->json(['message' => $message], 200);
    }

    public function new_order_api_completed_string(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 400);
        }

        // Extract email and password from request
        $credentials = $request->only('email', 'password');

        // Query the database for a user with the provided email
        $user = User::where('api_role', 'api')->where('email', $credentials['email'])->first();

        // Check if a user with the provided email exists and if the password is correct
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Authentication successful, proceed with retrieving orders
            $orders = Orders::where('order_status', '=', 'In-Progress')
                ->select('id', 'order_id', 'subject', 'description', 'academic_level',
                          'type_of_paper', 'paper_format', 'order_status',
                          'language_spelling', 'number_of_pages', 'powerpoint_slide',
                          'no_of_extra_sources as sources', 'deadline', 'topic')
                ->get();

            $data = [];
            if ($orders->count() > 0) {
                foreach ($orders as $o) {
                    $folder = Folder::where('name', '=', $o->order_id)->first();
                    $attachment_file = 'no';
                    $filesData = [];

                    if ($folder) {
                        $files = File::where('folder_id', '=', $folder->id)->get();
                        if ($files->isNotEmpty()) {
                            $attachment_file = 'yes';

                            // Construct files data including file_path
                            $filesData = $files->map(function ($file) {
                                $file_path = str_replace('public/', '', $file->file_path);
                                $url = config('app.url').'/storage/' . $file_path;

                                return [
                                    'file_name' => (string) $file->title,
                                    'file_path' => (string) $file->file_path,
                                    'file_url' => (string) $url,
                                ];
                            })->toArray();
                        }
                    }


                    $orderDetails =
                        "Order Number: " . (string) $o->order_id . " " .
                        "Pages: " . (string) $o->number_of_pages . " " .
                        "Arrival Date: " . date('d-m-Y') . " " .
                        "Due Date: " . (string) $o->deadline . " " .
                        "Citation: APA " .
                        "Subject: " . (string) $o->subject . " " .
                        "Level: " . (string) $o->academic_level . " " .
                        "Document Type: " . (string) $o->type_of_paper . " " .
                        "No Of Sources: " . (string) $o->sources . " " .
                        "Topic: " . (string) $o->topic . " " .
                       "Instructions: " . strip_tags(html_entity_decode($o->description));


                    $orderData = [
                        'Details' => $orderDetails,
                        'Attachment' => (string) $attachment_file,
                        'Files' => $filesData,
                    ];

                    $data[] = $orderData;
                }

                // Reverse the order array if needed
                $data = array_reverse($data);

                // Return JSON response with orders data
                return response()->json(['order' => $data], 200);
            } else {
                return response()->json(['order' => 'not found'], 404);
            }
        } else {
            // Authentication failed, return 401 Unauthorized
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }




}
