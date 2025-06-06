<?php

namespace App\Http\Controllers\Backend\Customer\OrderManagement;

use App\Http\Controllers\Controller;
use App\Models\Academic_level;
use App\Models\Deadline;
use App\Models\Paper_Format;
use App\Models\Term_of_paper;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Pricing;
use App\Models\Subject;
use App\Models\Folder;
use App\Models\OrderLogs;
use App\Models\PricingPakage;
use App\Models\PricingOrder;
use App\Models\PakageLimit;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Coupon_Used;
use App\Models\RevisionSubmit;
use App\Models\files;
use App\Models\File;
use App\Models\Pay;
use App\Models\Transaction;
use ZipArchive;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailTemplate;
use App\Mail\InvoiceEmailTemplate;
use App\Mail\PkgInvoiceEmailTemplate;
use App\Mail\PkgIdInvoiceEmailTemplate1;
use App\Mail\PkgIdmanageInvoiceEmailTemplate;
use App\Mail\Pkg_Id_manage_optin1_Email_Template;
use App\Models\Email;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Exports\OrdersExport;
use App\Exports\OrdersExportInvoice;
use App\Models\Feedback;
use App\Models\Invoice;
use App\Models\Review;
use App\Models\Rewrite_Request;
use App\Models\Subscription;
use App\Models\User_Subscription;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;
use App\Models\Addons;
use App\Models\Language;
use App\Models\FileChatGPT;


use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class CustomerPlaceOrderController extends Controller
{

    public function pakageaddorderpage(Request $request)
    {
        $userId = Auth::id();
        $User_Subscription = User_Subscription::where('user_id', $userId)->first();

        if ($User_Subscription) {
            $remaining_pages =  $User_Subscription->remaining_pages - $request->page;
            $Orders = Orders::where('order_id', $request->order_id)->first();
            $Orders_pages = $Orders->number_of_pages + $request->page;
            $Orders_no_of_extra_sources = $Orders->no_of_extra_sources + $request->page;
            $Orders->update(['number_of_pages' => $Orders_pages,"no_of_extra_sources" => $Orders_no_of_extra_sources,  'deadline' => $request->deadline]);
            $User_Subscription->update(['remaining_pages' => $remaining_pages]);


            $userdata = User::findOrFail($userId);

            $createdAt = $User_Subscription->created_at;



            $customerName = $userdata->name;
            $orderid = $request->order_id;
            $AdditionalPagesAdded = $request->page;
            $TotalPagesUsed = $User_Subscription->total_pages - $User_Subscription->remaining_pages;;
            $remaining_pages = $remaining_pages;


            $orderlog = OrderLogs::create([
                                'user_id' => $userId,
                                'order_type'=> 'Package Order',
                                'order_id' => $orderid,
                                'status' => $Orders->order_status,
                                'pages_addon_type' => 'None',
                                'pages_addon' => $request->page,
                                'pages_purchase' => $Orders->number_of_pages,
                            ]);


            $email = Email::where('type','confirmation_of_additional_pages_purchase_order_id')->first();

            if ($email) {
                $subject = 'Confirmation of Additional Pages (In Packages) for Order ID';
                Mail::to($userdata->email)->send(new Pkg_Id_manage_optin1_Email_Template(
                    [
                        'customerName' => $customerName,
                        'orderid' => $orderid,
                        'AdditionalPagesAdded' => $AdditionalPagesAdded,
                        'TotalPagesUsed' => $TotalPagesUsed,
                        'remaining_pages' => $remaining_pages,

                    ],
                    $subject
                ));
            }



            return response()->json(['message' => 'Pages added successfully!']);
        } else {

            return response()->json(['error' => 'Something went wrong!']);
        }
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
             ->when($id != null, function ($q) use ($id) {
                return $q->where('user_id', $id);
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
             ->when($id != null, function ($q) use ($id) {
                return $q->where('user_id', $id);
            })
             ->latest()
            ->get();


        return view('backend.customer.orderManagement.other_order', compact('order_refund', 'order_canceled'));
    }


    //support message
    public function supportMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message_support' => 'required',
            'order_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $admin = User::where('role', 'admin')->first();

        $receiver_id = $admin->id;

        Message::create([
            'message' => $request->message_support,
            'order_id' => $request->order_id,
            'sender_id' => Auth::user()->id,
            'receiver_id' => $receiver_id, //admin id here;
        ]);

        // $email = Email::where('type', '=', 'Support Message')->first();
        // if ($email) {
        //     Mail::to($admin->email)->send(new EmailTemplate($admin, $email));
        // }
        $emailSubject = 'Message to Support Staff : Your Order ID ' . $request->order_id;
            $emailContent = "
                <p>Hi {$admin->name},</p>
                <p> {$request->message_support}</p>";
                Mail::html($emailContent, function ($message) use ($admin, $emailSubject) {
                    $message->to($admin->email)
                    ->subject($emailSubject);
                });
         //Mail::to($admin->email)->send(new EmailTemplate($admin, $email));

        return response()->json(['success' => true, 'message' => 'Message sent successfully'], 200);
    }

    //support message

    // customer custom subscription;
    public function customSubscription()
    {
        return view('backend.customer.orderManagement.partials._custom_place_order');
    }


    public function revision_submit_ajax(Request $request)
    {
        $revision = new RevisionSubmit;
        $admin = User::where('role', 'admin')->first();
        $receiver_id = $admin->id;

        $order = Orders::where('order_id', $request->order_id)->first();

        if ($order->order_status == 'Delivered') {

            $revision->order_id = $request->order_id;
            $revision->revision_request = $request->revision_request;

            Message::create([
            'message' => $request->revision_request,
            'order_id' => $request->order_id,
            'sender_id' => Auth::user()->id,
            'type' => 'revision',
            'receiver_id' => $receiver_id, //admin id here;
        ]);

            $revision->save();

            Orders::where('order_id', $request->order_id)->update(['order_status' => 'Revision']);
            $emailSubject = 'Status Update: Your Order ID ' . $request->order_id . ' is Revision Request';
            $emailContent = "
                <p>Hi {$admin->name},</p>
                <p>{$request->revision_request}</p>";
                Mail::html($emailContent, function ($message) use ($admin, $emailSubject) {
                    $message->to($admin->email)
                    ->subject($emailSubject);
                });
            return response()->json(['Success' => true, 'message' => 'Revision request submitted successfully.']);
        } else {
            return response()->json(['Success' => true, 'message' => 'Revision request not submitted order not deliver status.']);
        }

    }



    public function checkout()

    {



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/session',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),

        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $responseArray = json_decode($response, true);

        // dd($responseArray);

        // Check if the 'session' key exists
        if (isset($responseArray['session'])) {
            // Check if the 'id' key exists within the 'session' array
            if (isset($responseArray['session']['id'])) {
                // Access the 'id' value
                $sessionId = $responseArray['session']['id'];

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/session/{$sessionId}",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'PUT',
                    CURLOPT_POSTFIELDS => '{
                        "order": {
                    "amount": "10.00",
                    "currency": "PKR"
                    }
                }',
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);

                // Assuming $response is the JSON string
                $responseObject = json_decode($response);

                // Check if decoding was successful
                if ($responseObject) {
                    // Access the id property of the session object
                    $sessionId = $responseObject->session->id;

                    // Output the session id
                    // echo $sessionId;

                    session()->put('sessionId', $sessionId);




                    return response()->json(['sessionId' => $sessionId]);

                    //     return view('backend.customer.orderManagement.show', compact('sessionId'));


                } else {
                    // Handle JSON decoding error
                    echo "Error decoding JSON";
                }
            }
        }
    }

    public function checkoutshow($sessionid, Request $request)
    {

        $sessionid = $sessionid;
        return view('backend.customer.orderManagement.show', compact('sessionid'));
    }

    public function checkoutshowmangepages($sessionid, Request $request)
    {

        $sessionid = $sessionid;
        return view('backend.customer.orderManagement.show_mangepages', compact('sessionid'));
    }

    public function checkoutshowsub($sessionid, Request $request)
    {

        $sessionid = $sessionid;
        return view('backend.customer.orderManagement.show_sub', compact('sessionid'));
    }

    public function checkoutshowaddpage($sessionid, Request $request)
    {

        $sessionid = $sessionid;
        return view('backend.customer.orderManagement.show_add_pages', compact('sessionid'));
    }


    // public function customSubscriptionStore(Request $request)
    // {

    //     $input = $request->dataObject;

    //     if (empty($input['additional_info'])) {
    //         $input['additional_info'] = 0;
    //         $count = 0;
    //     } else {
    //         $count = count($input['additional_info']);
    //     }

    //     $total = (float)$count * (float)$input['cost_per_page'];

    //     $check_analysis = $input['statistical_analysis'];


    //     if ($check_analysis == '0') {
    //         $statistical_analysis = false;
    //     } else {
    //         $statistical_analysis = true;
    //     }
    //     $order_id = rand(000000000, 999999999);
        // $order_id = generateOrderID();
    //     $discount = '0';
    //     $discount = $input['discount'];

    //     if (empty($input['additional_info'])) {
    //         $input['additional_info'] = [];
    //     }

    //   $user = User::findOrFail(Auth::user()->id);

    //     $order = Orders::create([
    //         'subject' => $input['subject'],
    //         'description' => $input['description'],
    //         'topic' => $input['topic'],
    //         'cost_per_page' => $input['cost_per_page'],
    //         'submitting' => $input['submitting'],
    //         'deadline' => $input['due_date'],
    //         'no_of_extra_sources' => $input['no_of_extra_sources'],
    //         'powerpoint_slide' => null,
    //         'spacing' => null,
    //         'number_of_pages' => $input['no_of_pages'],
    //         'type_of_paper' => $input['term_of_paper'],
    //         'paper_format' => $input['paper_format'],
    //         'academic_level' => $input['academic_level'],
    //         'language_spelling' => $input['language_spelling'],
    //         'order_type' => 'Subscription',
    //         'discount' => $discount,
    //         'order_show' => 'Enable',
    //         'order_status' => 'Pending',
    //         'additional_info' => json_encode($input['additional_info']),
    //         'coupon' => null,
    //         'user_id' => $user->id,
    //         'payment_status' => 'Paid',
    //         'order_id' => $order_id,
    //         'total_cost' => $input['total_cost'],
    //         'cost' => $input['sub_total'],
    //         'additional_cost' => $total,
    //         'statistical_analysis' => $statistical_analysis,
    //         'email' => $input['email'],
    //         'backup_email' => $input['backup_email']
    //     ]);




    //     //update user_subscription record;
    //     $totalPages = 0;
    //     $remianingPages = 0;

    //     $subs = User_Subscription::where('user_id',$user->id)->first();
    //     $totalPages = $subs->total_pages;
    //     $remianingPages = $subs->remaining_pages;
    //     $subs->total_pages = $input['no_of_pages'] + $totalPages;
    //     $subs->remaining_pages = $remianingPages - $input['no_of_pages'];
    //     $subs->updated_at = now()   ;
    //     $subs->save();

    //     $user = User::find($order->user_id);



    //     $invoice = Invoice::create([
    //         'Name' => $user->name,
    //         'email' => $order->email,
    //         'page' => $order->number_of_pages,
    //         'price_per_page' => $order->cost_per_page,
    //         'item_name' => 'Order',
    //         'total' => $order->total_cost,
    //         'to_name' => 'Admin',
    //         'to_email' => 'admin@gmail.com',
    //         'order_id' => $order->order_id
    //     ]);


    //     $path = "public/uploads_folders/" . $order_id;


    //     if (!Storage::exists($path)) {
    //         Storage::makeDirectory($path);
    //         $folder = new Folder();
    //         $folder->name = $order_id;
    //         $folder->description = $order_id;
    //         $folder->user_id = Auth::id();
    //         $folder->save();
    //     }

    //     $email = Email::where('type', '=', 'Order Place Confirmation')->first();



    //     if ($email) {
    //         Mail::to($user->email)->send(new EmailTemplate($user, $email));
    //     }
    //     return response()->json(['success' => true, 'order' => $order, 'message' => 'Order placed successfully!']);
    // }

    public function customSubscriptionStore(Request $request)
    {

        $input = $request->dataObject;
        $user = User::findOrFail(Auth::user()->id);
        $subs = User_Subscription::where('user_id', $user->id)->first();
        $sub_get = Subscription::where('id', $subs->subscription_id)->first();
        $sub_name = $sub_get->subscription_name;

        $totalPages = $subs->total_pages;
        $remianingPages = $subs->remaining_pages;


        $used_pages = $totalPages - $remianingPages;

        if ($remianingPages >= $input['no_of_pages']) {
            if (empty($input['additional_info'])) {
                $input['additional_info'] = 0;
                $count = 0;
            } else {
                $count = count($input['additional_info']);
            }

            $total = (float)$count * (float)$input['cost_per_page'];
            $check_analysis = $input['statistical_analysis'];
            if ($check_analysis == '0') {
                $statistical_analysis = false;
            } else {
                $statistical_analysis = true;
            }
            // $order_id = rand(000000000, 999999999);

            $lastOrderId = Orders::latest()->limit(1)->value('order_id');
            $order_id = ++$lastOrderId;
            // dd($order_id, $lastOrderId);

            $discount = '0';
            $discount = $input['discount'];
            if (empty($input['additional_info'])) {
                $input['additional_info'] = [];
            }
            $user = User::findOrFail(Auth::user()->id);
            $order = Orders::create([
                'subject' => $input['subject'],
                'description' => $input['description'],
                'topic' => $input['topic'],
                'cost_per_page' => $input['cost_per_page'],
                'submitting' => $input['submitting'],
                'deadline' => $input['due_date'],
                'no_of_extra_sources' => $input['no_of_extra_sources'],
                'powerpoint_slide' => null,
                'spacing' => null,
                'number_of_pages' => $input['no_of_pages'],
                'type_of_paper' => $input['term_of_paper'],
                'paper_format' => $input['paper_format'],
                'academic_level' => $input['academic_level'],
                'language_spelling' => $input['language_spelling'],
                'order_type' => 'Subscription',
                'discount' => $discount,
                'order_show' => 'Enable',
                'order_status' => 'Pending',
                'additional_info' => json_encode($input['additional_info']),
                'coupon' => null,
                'user_id' => $user->id,
                'payment_status' => 'Paid',
                'order_id' => $order_id,
               // 'total_cost' => $input['total_cost'],
                //'cost' => $input['sub_total'],
                'additional_cost' => $total,
                'statistical_analysis' => $statistical_analysis,
                'email' => $input['email'],
                'backup_email' => $input['backup_email'],
                "plagiarism" => $input['plagiarism'],
                "ai_detection" => $input['ai_detection'],
                "outline" => $input['outline'],
                "summary" => $input['paper_summary']
            ]);
            //update user_subscription record;
            //dd($order);
            $totalPages = 0;
            $remianingPages = 0;

            $subs = User_Subscription::where('user_id', $user->id)->first();
            $totalPages = $subs->total_pages;
            $remianingPages = $subs->remaining_pages;
            $subs->remaining_pages = $remianingPages - $input['no_of_pages'];
           //  $subs->remaining_rollover_pages = $subs->remaining_rollover_pages - $input['no_of_pages'];
            //$subs->rollover_pages = $subs->rollover_pages - $input['no_of_pages'];
            $subs->updated_at = now();
            $subs->save();
            $user = User::find($order->user_id);




             $remainingPercentage = ($subs->remaining_pages / $subs->total_pages) * 100;
             if ($remainingPercentage <= 10 && $subs->rollover_pages == 0) {

    $warningEmailContent = "
        <p>Hello {$user->name},</p>
        <p>We've noticed that you're nearing the end of the pages available in your current package at Writing Space. To ensure you continue enjoying our services without interruption, we wanted to give you a heads-up and an exclusive offer.</p>

        <p><strong>Current Package Details:</strong></p>
        <ul>
            <li>Package Type: $sub_name</li>
            <li>Pages Remaining: {$subs->remaining_pages}</li>
        </ul>

        <p><strong>Exclusive Renewal Offer:</strong> We value your commitment to Writing Space and would like to offer you a special discount on your next package purchase. This is a great opportunity to continue accessing our comprehensive academic resources at a reduced rate.</p>

        <p><strong>Next Steps to Take Advantage of This Offer:</strong> Please contact our support team directly to claim your discounted renewal. They are ready to assist you in setting up your new package and ensuring you don't miss a beat in your academic journey.</p>

        <p>Contact Support:</p>
        <ul>
            <li>Email: <a href='support@writing-space.com'>support@writing-space.com</a></li>
        </ul>

        <p>Act now to replenish your page count and keep your academic resources flowing! We’re here to support your educational endeavors every step of the way.</p>

        <p>Thank you for choosing Writing Space. Let’s continue making your academic experience as successful and hassle-free as possible.</p>

        <p>Best regards,<br>Customer Success Team<br>Writing Space</p>
    ";



      $emailContent4 = "
                                    <p>Hello {$user->name},</p>
                                    <p>We've noticed that you're nearing the end of the pages available in your current package at Writing Space. To ensure you continue enjoying our services without interruption, we wanted to give you a heads-up and an exclusive offer.</p>

                                    <p><strong>Package Details:</strong></p>
                                    <ul>
                                        <li>Date Placed: {$order->created_at->format('Y-m-d')}</li>
                                        <li>Pages Used for This Order: {$input['no_of_pages']}</li>
                                        <li>Total Pages Used in Past Orders: {$used_pages}</li>
                                        <li>Remaining Pages in Your Package: {$subs->remaining_pages}</li>
                                    </ul>



                                  <p><strong>Exclusive Renewal Offer:</strong> We value your commitment to Writing Space and would like to offer you a special discount on your next package purchase. This is a great opportunity to continue accessing our comprehensive academic resources at a reduced rate.</p>

        <p><strong>Next Steps to Take Advantage of This Offer:</strong> Please contact our support team directly to claim your discounted renewal. They are ready to assist you in setting up your new package and ensuring you don't miss a beat in your academic journey.</p>

        <p>Contact Support:</p>
        <ul>
            <li>Email: <a href='support@writing-space.com'>support@writing-space.com</a></li>
        </ul>

        <p>Act now to replenish your page count and keep your academic resources flowing! We’re here to support your educational endeavors every step of the way.</p>

        <p>Thank you for choosing Writing Space. Let’s continue making your academic experience as successful and hassle-free as possible.</p>

        <p>Best regards,<br>Customer Success Team<br>Writing Space</p>
                                ";



Mail::html($emailContent4, function ($message) use ($user) {
    $message->to($user->email)
            ->subject('Heads Up: You’re Running Low on Your Writing Space Pages!');
});

// Small delay
sleep(1);


$finishedEmailContent = "
        <p>Hi {$user->name},</p>
        <p>It looks like you've used up all the pages in your Writing Space package. We hope you found each page helpful for your academic projects!</p>

        <p><strong>Don't Miss Out on Continuous Support: :</strong></p>
        <p>To keep the support and resources flowing, we encourage you to renew your package. By renewing, you’ll continue to benefit from our comprehensive academic support tailored to your needs.</p>

        <p><strong>Special Renewal Offer</strong></p>
        <p>As a thank you for being a valued member of Writing Space, we’re offering you a special discount on your next package. This offer is designed to give you the best value as you continue your educational journey with us.</p>
       <p><strong>How to Renew:</strong></p>
        <ul>
            <li><strong>1.Visit your dashboard.</strong> </li>
            <li><strong>2.	Go to the ‘Packages’ section.</strong></li>
            <li><strong>3.	Choose your renewal option and continue with uninterrupted access to our resources:</strong></li>
        </ul>

        <p>If you have any questions or need assistance with the renewal process, our customer support team is just an email or phone call away. We’re here to help you succeed!</p>
        <p>Thanks for choosing Writing Space, and let’s keep achieving great things together!</p>

         <p><strong>Best regards,</strong> </p>




        <p>Customer Success Team,<br>Writing Space</p>
    ";

    Mail::html($finishedEmailContent, function ($message) use ($user) {
        $message->to($user->email)
                ->subject('Time to Renew? Your Writing Space Pages Are All Used Up!');
    });

}


if ($subs->remaining_pages == 0) {

}


            $invoice = Invoice::create([
                'Name' => $user->name,
                'email' => $order->email,
                'page' => $order->number_of_pages,
                'price_per_page' => $order->cost_per_page,
                'item_name' => 'Order',
                'total' => $order->total_cost,
                'to_name' => 'Admin',
                'to_email' => 'ustadsharik@gmail.com',
                'order_id' => $order->order_id,
                'invoice_type' => 'custom_inc',
            ]);


            clearstatcache(); // Clears PHP file system cache

                $path = "uploads_folders/{$order->order_id}";
                Storage::disk('public')->deleteDirectory($path);

              //  dd(Storage::disk('public')->directoryExists($path));

                if (!Storage::disk('public')->directoryExists($path)) {
                    Storage::disk('public')->makeDirectory($path);

                    $folder = new Folder();
                    $folder->name = $order->order_id;
                    $folder->description = $order->order_id;
                    $folder->user_id = Auth()->user()->id;
                    $folder->save();
                }

                // Optional: Set permissions manually (if needed)
                $absolutePath = storage_path("app/public/{$path}");
                if (file_exists($absolutePath)) {
                    chmod($absolutePath, 0755);
                }
            //custom order
            $data['order_id'] = $order->order_id;
            $data['created_at'] = $order->created_at->format('Y-m-d');
            $data['pages_used_this_order'] = $input['no_of_pages']; // new oder pages;
            $data['total_pages_used'] = $used_pages; // old order remaining pages;
            $data['pages_remaining'] = $remianingPages; // old order remaining pages;
            $data['new_order_details'] = json_encode($input);
            $data['customer_name'] = $user->name;
            $data['customer_email'] = $user->email;
            // $email = Email::where('type','confirmation_of_new_order_id')->first();
            // if ($email) {
            //     Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
            // }

                              $emailContent = "
                                    <p>Hello {$user->name},</p>
                                    <p>Thank you for placing your order with Writing Space! We're here to support you as you progress through your academic journey.</p>

                                    <p><strong>Package Details:</strong></p>
                                    <ul>
                                        <li>Date Placed: {$order->created_at->format('Y-m-d')}</li>
                                        <li>Pages Used for This Order: {$input['no_of_pages']}</li>
                                        <li>Total Pages Used in Past Orders: {$used_pages}</li>
                                        <li>Remaining Pages in Your Package: {$subs->remaining_pages}</li>
                                    </ul>

                                    <p><strong>Order Details:</strong></p>
                                    <ul>
                                        <li>Order ID: {$order->order_id}</li>
                                        <li>Pages: {$input['no_of_pages']}</li>
                                        <li>Topic: {$input['topic']}</li>
                                        <li>Deadline: {$input['due_date']}</li>
                                    </ul>

                                    <p>Your order has been successfully recorded and is now being processed. We're committed to ensuring that you receive high-quality support tailored to your needs.</p>

                                    <p><strong>Next Steps:</strong></p>
                                    <ol>
                                        <li>Monitor the progress of your order from your dashboard under the \"My Orders\" section.</li>
                                        <li>You will receive updates as we process your order, including notifications when it is ready for review or download.</li>
                                    </ol>

                                    <p>If you have any questions or need further assistance while your order is being processed, please don't hesitate to reach out. Our team is here to help every step of the way.</p>

                                    <p>Thank you for choosing Writing Space. We are excited to help you make the most of every page!</p>

                                    <p>Best regards,<br>Customer Success Team<br>Writing Space</p>
                                ";

                                // Send the "Thank You" email for order placement
                                Mail::html($emailContent, function ($message) use ($user, $order) {
                                    $message->to($user->email)
                                            ->subject("Confirmation of Your New Order – ID {$order->order_id}");
                                });



            return response()->json(['success' => true, 'order' => $order, 'message' => 'Order placed successfully! customization']);
        } else {
                return response()->json([
                    'error' => false,
                    'message' => "<div style='text-align:left !important;'>Oops! You've exceeded your page limit.\n\n" .
                                 "You're trying to order {$input['no_of_pages']} pages, but you currently have only  {$remianingPages} page(s) left in your package.\n\n" .
                                 "<br><br>No worries — here’s how you can proceed:\n" .
                                 "<br><br><strong>1. Add More Pages:</strong><br><br><ul><li>Navigate to your Profile Page.</li><li>Locate the option to Add Pages to Your Existing Package and follow the prompts to purchase additional pages at your original rates.</li><li>Once you've added the pages, return here to create your new order.</li></ul> \n" .
                                 "<strong>2. Use Your Remaining Pages:</strong><br><br> If you prefer, you can place an order for the  {$remianingPages} pages you have remaining in your package right now. Later, you can navigate to the Order Details page for this order, go to the Manage Pages tab, and add the additional pages you need to complete the order at your original rates.\n" .

                                 "3. Contact Support: For more options or assistance, please reach out to our support team. We're here to help!</div>"
                ]);

            // return response()->json(['success' => true, 'message' => "Oops! Looks like you've exceeded your page limit.

            // Hi there! It looks like you're trying to order {$input['no_of_pages']} pages, but you currently have  only {$remianingPages} pages left
            // in your package. No worries, though! You can easily add more pages to continue with your order:

            // 1.	Add More Pages: Please navigate to the Order Details page of the order that you previously placed Using Your Package. Only in this
            // order will you find the option to manage and Add Pages. Click on the Manage Pages tab. There, you can add pages to your package at the
            // same rates you originally purchased. Once you've added the pages, you can easily come back and place your new order.

            // 2.	Contact Support: If you're looking for more options or need assistance, feel free to contact our support team. They can help you
            // find the best discount package pricing available.We're here to help, so don't hesitate to reach out if you need any assistance!
            // "]);
        }

    }



    public function payment_store(Request $request)
    {
        $test = $request->session;
        $dataObject = $request->dataObject;
        $total_cost = $dataObject['total_cost'];
        $truncatedSessionId = substr($test, 0, 35);

        $order_id = mt_rand(100000, 999999);
        $randomNumber = mt_rand(100, 999);
        $transactionId = "TRANS" . $randomNumber;




        session()->put('transactionId', $transactionId);
        session()->put('order_id', $order_id);
        $sessionId = session()->get('sessionId');


        $pay = new Pay;
        $pay->order_id = $order_id;
        $pay->session_id = $sessionId;
        $pay->truncatedSessionId = $transactionId;
        $pay->user_id = Auth()->user()->id;
        $pay->order_details = json_encode($dataObject);
        $pay->save();

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "session":{
                    "id": "' . $truncatedSessionId . '"
                },
                "apiOperation":"INITIATE_AUTHENTICATION",
                "correlationId":"INIT_AUTH11187-991090777766",
                "transaction":
                {
                    "reference": "' . $transactionId . '",
                },
                "order":{

                "reference": "' . $order_id . '",
                "currency":"PKR"
                },
                "authentication":{
                    "purpose":"PAYMENT_TRANSACTION",
                    "channel":"PAYER_BROWSER",
                "acceptVersions":"3DS2"
                }
                }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        // return response()->json(['response' => $response]);


        $localurl = url("/redirectResponseUrl");

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "apiOperation": "AUTHENTICATE_PAYER",
                "correlationId":"START_AUTH11187-991090777766",
            "device":{
            "browserDetails":{
            "screenWidth":1920,
            "javaEnabled":false,
            "screenHeight":1080,
            "3DSecureChallengeWindowSize":"FULL_SCREEN",
            "timeZone":-120,
            "language":"EN",
            "colorDepth":24
            },
            "browser":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/95.0.4638.54 Safari\\/537.36",
            "ipAddress":"182.185.178.141"
            },
                    "authentication": {
                        "redirectResponseUrl": "'.$localurl.'"
                    },
                "order": {
                    "amount": "' . $total_cost . '",
                    "currency": "PKR"
                },
                "session": {
                    "id": "' . $truncatedSessionId . '"
                }
            }
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);


        $response = json_decode($response, true);
        if (isset($response['authentication']['redirect']['html'])) {
            $htmlContent = $response['authentication']['redirect']['html'];
            return response()->json(['response' => $htmlContent]);
            // return view('payment.otp', compact('htmlContent'));
        } else {
            return response()->json(['response' => 'Invalid response format.']);
        }

        curl_close($curl);
    }


    public function payment_store_sub(Request $request)
    {

        //dd($request->all());

        $test = $request->session;
        $total_cost = $request->totalamount1;
        $number_of_page = $request->number_of_page;
        $cost_per_page_final = $request->cost_per_page_final;
        $total_costs[] = $request->totalamount1;
        $truncatedSessionId = substr($test, 0, 35);
        $randomNumber = mt_rand(100, 999);
        $transactionId = "TRANS" . $randomNumber;

        $order34 =  mt_rand(100000, 9999999);
        $order_id = $request->sub_id1;
        $order_id = $order_id . '-' . $order34;

        //not working
        // $lastOrderId = Orders::latest()->limit(1)->value('order_id');
        // if(!$lastOrderId)
        // {
        //     $order_id = '200000';
        // }
        // $order_id = ++$lastOrderId;

        session()->put('transactionId', $transactionId);
        session()->put('order_id', $order_id);
        $sessionId = session()->get('sessionId');





        $pay = new Pay;
        $pay->order_id = $order_id;
        $pay->session_id = $test;
        $pay->truncatedSessionId = $transactionId;
        $pay->total_cost = $total_cost;
        $pay->cost_per_page_final = $cost_per_page_final;
        $pay->number_of_page = $number_of_page;

        $pay->user_id = Auth()->user()->id;
        $pay->order_details = json_encode($total_costs);
        $pay->save();






        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "session":{
                    "id": "' . $truncatedSessionId . '"
                },
                "apiOperation":"INITIATE_AUTHENTICATION",
                "correlationId":"INIT_AUTH11187-991090777766",
                "transaction":
                {
                    "reference": "' . $transactionId . '",
                },
                "order":{

                "reference": "' . $order_id . '",
                "currency":"PKR"
                },
                "authentication":{
                    "purpose":"PAYMENT_TRANSACTION",
                    "channel":"PAYER_BROWSER",
                "acceptVersions":"3DS2"
                }
                }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        //return response()->json(['response' => $response]);



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "apiOperation": "AUTHENTICATE_PAYER",
                "correlationId":"START_AUTH11187-991090777766",
            "device":{
            "browserDetails":{
            "screenWidth":1920,
            "javaEnabled":false,
            "screenHeight":1080,
            "3DSecureChallengeWindowSize":"FULL_SCREEN",
            "timeZone":-120,
            "language":"EN",
            "colorDepth":24
            },
            "browser":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/95.0.4638.54 Safari\\/537.36",
            "ipAddress":"182.185.178.141"
            },
                    "authentication": {
                        "redirectResponseUrl": "'.url("/redirectResponseUrlSub").'"
                    },
                "order": {
                    "amount": "' . $total_cost . '",
                    "currency": "PKR"
                },
                "session": {
                    "id": "' . $truncatedSessionId . '"
                }
            }
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);


        $response = json_decode($response, true);
        if (isset($response['authentication']['redirect']['html'])) {
            $htmlContent = $response['authentication']['redirect']['html'];

            return response()->json(['response' => $htmlContent]);
            // return view('payment.otp', compact('htmlContent'));
        } else {
            return response()->json(['response' => 'Invalid response format.']);
        }

        curl_close($curl);
    }

    public function payment_store_addpages(Request $request)
    {



        $test = $request->session;

        $no_of_page = $request->input('no_of_page');
        $used_package_id = $request->input('used_package_id');
        $package_id = $request->input('package_id');
        $cost_per_page = $request->input('cost_per_page');

        // Calculate the total cost
        $total_cost = $no_of_page * $cost_per_page;

        // Prepare data array
        $data = [
            'no_of_page' => $no_of_page,
            'used_package_id' => $used_package_id,
            'package_id' => $package_id,
            'cost_per_page' => $cost_per_page,
            'total_cost' => $total_cost,
        ];

        // Check if order_id is available in the request
        if ($request->has('order_id')) {
            $order_id = $request->input('order_id');
            $data['order_id'] = $order_id;
        }

        $order34 =  mt_rand(100000, 9999999);
        $order_id = $order34;
        $order_id = $package_id . '-' . $order34;

        $total_costs[] = $total_cost;


        $truncatedSessionId = substr($test, 0, 35);
        $randomNumber = mt_rand(100, 999);
        $transactionId = "TRANS" . $randomNumber;


        // $lastOrderId = Orders::latest()->limit(1)->value('order_id');
        // if(!$lastOrderId)
        // {
        //     $order_id = '200000';
        // }
        // $order_id = ++$lastOrderId;

        session()->put('transactionId', $transactionId);
        session()->put('order_id', $order_id);
        $sessionId = session()->get('sessionId');

        $pay = new Pay;
        $pay->order_id = $order_id;
        $pay->session_id = $test;
        $pay->truncatedSessionId = $transactionId;
        $pay->user_id = Auth()->user()->id;
        $pay->order_details = json_encode($data);
        $pay->save();




        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "session":{
                    "id": "' . $truncatedSessionId . '"
                },
                "apiOperation":"INITIATE_AUTHENTICATION",
                "correlationId":"INIT_AUTH11187-991090777766",
                "transaction":
                {
                    "reference": "' . $transactionId . '",
                },
                "order":{

                "reference": "' . $order_id . '",
                "currency":"PKR"
                },
                "authentication":{
                    "purpose":"PAYMENT_TRANSACTION",
                    "channel":"PAYER_BROWSER",
                "acceptVersions":"3DS2"
                }
                }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        //return response()->json(['response' => $response]);


        $localurl = url("/redirectResponseUrladdpages");
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "apiOperation": "AUTHENTICATE_PAYER",
                "correlationId":"START_AUTH11187-991090777766",
            "device":{
            "browserDetails":{
            "screenWidth":1920,
            "javaEnabled":false,
            "screenHeight":1080,
            "3DSecureChallengeWindowSize":"FULL_SCREEN",
            "timeZone":-120,
            "language":"EN",
            "colorDepth":24
            },
            "browser":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/95.0.4638.54 Safari\\/537.36",
            "ipAddress":"182.185.178.141"
            },
                    "authentication": {
                        "redirectResponseUrl": "'.$localurl.'"
                    },
                "order": {
                    "amount": "' . $total_cost . '",
                    "currency": "PKR"
                },
                "session": {
                    "id": "' . $truncatedSessionId . '"
                }
            }
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);


        $response = json_decode($response, true);
        if (isset($response['authentication']['redirect']['html'])) {
            $htmlContent = $response['authentication']['redirect']['html'];

            return response()->json(['response' => $htmlContent]);
            // return view('payment.otp', compact('htmlContent'));
        } else {
            return response()->json(['response' => 'Invalid response format.']);
        }

        curl_close($curl);
    }

    public function payment_store_managepage(Request $request)
    {
        // $test = $request->session;
        // $total = $request->total;
        // $page = $request->page;
        // $deadline = $request->deadline;


        $test = $request->session;

        $order_id = $request->order_id;
        $total = $request->total;
        $page = $request->page;
        $deadline = $request->deadline;

        $order_id2 = $request->order_id;



        $data = [
            'order_id' => $order_id,
            'total' => $total,

            'page' => $page,
            'deadline' => $deadline,
        ];

        $order_id = $request->order_id;
        $order_id2 = $request->order_id;
        $order34 =  mt_rand(100000, 9999999);
        $order_id = $order34;
        $order_id = $order_id2 . '-' . $order34;


        $truncatedSessionId = substr($test, 0, 35);
        $randomNumber = mt_rand(100, 999);
        $transactionId = "TRANS" . $randomNumber;

        // $lastOrderId = Orders::latest()->limit(1)->value('order_id');
        // if(!$lastOrderId)
        // {
        //     $order_id = '200000';
        // }
        // $order_id = ++$lastOrderId;

        session()->put('transactionId', $transactionId);
        session()->put('order_id', $order_id);
        $sessionId = session()->get('sessionId');



        $pay = new Pay;
        $pay->order_id = $order_id;
        $pay->session_id = $test;
        $pay->truncatedSessionId = $transactionId;
        $pay->user_id = Auth()->user()->id;
        $pay->order_details = json_encode($data);
        $pay->save();




        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "session":{
                    "id": "' . $truncatedSessionId . '"
                },
                "apiOperation":"INITIATE_AUTHENTICATION",
                "correlationId":"INIT_AUTH11187-991090777766",
                "transaction":
                {
                    "reference": "' . $transactionId . '",
                },
                "order":{

                "reference": "' . $order_id . '",
                "currency":"PKR"
                },
                "authentication":{
                    "purpose":"PAYMENT_TRANSACTION",
                    "channel":"PAYER_BROWSER",
                "acceptVersions":"3DS2"
                }
                }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        //return response()->json(['response' => $response]);



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "apiOperation": "AUTHENTICATE_PAYER",
                "correlationId":"START_AUTH11187-991090777766",
            "device":{
            "browserDetails":{
            "screenWidth":1920,
            "javaEnabled":false,
            "screenHeight":1080,
            "3DSecureChallengeWindowSize":"FULL_SCREEN",
            "timeZone":-120,
            "language":"EN",
            "colorDepth":24
            },
            "browser":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/95.0.4638.54 Safari\\/537.36",
            "ipAddress":"182.185.178.141"
            },
                    "authentication": {
                        "redirectResponseUrl": "'.url("/redirectResponsemanagepages").'",
                    },
                "order": {
                    "amount": "' . $total . '",
                    "currency": "PKR"
                },
                "session": {
                    "id": "' . $truncatedSessionId . '"
                }
            }
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);


        $response = json_decode($response, true);
        if (isset($response['authentication']['redirect']['html'])) {
            $htmlContent = $response['authentication']['redirect']['html'];

            return response()->json(['response' => $htmlContent]);
            // return view('payment.otp', compact('htmlContent'));
        } else {
            return response()->json(['response' => 'Invalid response format.']);
        }

        curl_close($curl);
    }


    public function otp($creqValue, Request $request)
    {

        $creqValue = $creqValue;


        return view('backend.customer.orderManagement.otp', compact('creqValue'));
    }

    public function redirectResponseUrl(Request $request)

    {


        $data = $request->all();

        if ($data['result'] === 'SUCCESS') {


            return redirect()->route('pay', ['orderid' => $data['order_id']]);
        } else {

            $pay = Pay::where('order_id', $data['order_id'])->first();

            $user_id =  $pay->user_id;

            $user = User::find($user_id);
            Auth::login($user);


            return redirect()->route('customer.customerPlaceOrder');
        }
    }

    public function redirectResponseUrladdpages(Request $request)

    {


        $data = $request->all();


        if ($data['result'] === 'SUCCESS') {


            return redirect()->route('pay.add.pages', ['orderid' => $data['order_id']]);
        } else {

            $pay = Pay::where('order_id', $data['order_id'])->first();

            $user_id =  $pay->user_id;

            $user = User::find($user_id);
            Auth::login($user);


            return redirect()->route('customer.show.profile');
        }
    }

    public function redirectResponsemanagepages(Request $request)

    {


        $data = $request->all();

        if ($data['result'] === 'SUCCESS') {


            return redirect()->route('pay.add.manage', ['orderid' => $data['order_id']]);
        }
    }




    public function redirectResponseUrlSub(Request $request)

    {


        $data = $request->all();

        if ($data['result'] === 'SUCCESS') {


            return redirect()->route('pay.sub', ['orderid' => $data['order_id']]);
        } else {

            $pay = Pay::where('order_id', $data['order_id'])->first();

            $user_id =  $pay->user_id;

            $user = User::find($user_id);
            Auth::login($user);


            return redirect()->route('front.subscriptions');
        }
    }
    // Subscriptions Purchase / Uprgrade
    public function pay_sub($orderid)
    {
        try {
            $pay = Pay::where('order_id', $orderid)->first();
            $sessionId = $pay->session_id;
            $totalamountpro = $pay->total_cost;
            $order_id = $pay->order_id;
            $orderidexplode = explode('-', $order_id);
            $orderidexplode = $orderidexplode[0];
            $transactionId = $pay->truncatedSessionId;
            $order_detail = json_decode($pay->order_details);
            $amount = $order_detail[0];
            $randomNumber = mt_rand(100, 999);
          //  $noofpage = $order_detail->no_of_page;
            $transactionIdurl = $transactionId . $randomNumber;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionIdurl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_POSTFIELDS => '{
                                            "apiOperation": "PAY",
                                            "authentication":{
                                        "transactionId":"' . $transactionId . '"
                                        },
                                            "order": {
                                                "amount": "' . $amount . '",
                                                "currency": "PKR"
                                            },
                                            "session": {
                                                "id": "' . $sessionId . '"
                                            }

                                        }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $responseArray = json_decode($response, true);

            if ($responseArray) {
                $authenticationStatus = $responseArray['order']['authenticationStatus'];
                if ($authenticationStatus == 'AUTHENTICATION_SUCCESSFUL') {
                    $responseObject = json_decode($response);
                    $order = $responseObject->order;
                    $sourceOfFunds = $responseObject->sourceOfFunds->provided->card;
                    $transaction = new Transaction();
                    $creationTime = Carbon::parse($order->creationTime)->toDateTimeString();
                    // Assign values to the model's properties
                    $transaction->amount = $order->amount;
                    $transaction->authenticationStatus = $order->authenticationStatus;
                    $transaction->chargeback_amount = $order->chargeback->amount;
                    $transaction->chargeback_currency = $order->chargeback->currency;

                    $transaction->currency = $order->currency;
                    $transaction->reference = $order->reference;
                    $transaction->status = $order->status;
                    $transaction->merchantAmount = $order->merchantAmount;
                    $transaction->merchantCategoryCode = $order->merchantCategoryCode;
                    $transaction->merchantCurrency = $order->merchantCurrency;

                    $transaction->totalAuthorizedAmount = $order->totalAuthorizedAmount;
                    $transaction->totalCapturedAmount = $order->totalCapturedAmount;
                    $transaction->totalDisbursedAmount = $order->totalDisbursedAmount;
                    $transaction->totalRefundedAmount = $order->totalRefundedAmount;
                    $transaction->fundingMethod = $sourceOfFunds->fundingMethod;
                    $transaction->userid = $pay->user_id;
                    $transaction->save();

                    $user_id =  $pay->user_id;
                    $user = User::find($pay->user_id);
                    $sub_id = $order_id;
                    $checkUserSub = User_Subscription::where('user_id', $user->id)->first();

                    if($checkUserSub){
                          $total_chk = $checkUserSub->rollover_pages + $checkUserSub->remaining_pages; // 0

                    }else{
                        $total_chk = 0;
                    }
                    $pay_chk_update = Pay::where('order_id', $orderid)->first();
                    if ($checkUserSub) {
                        $subs = Subscription::find($orderidexplode);
                        $checkUserSub->subscription_id = $orderidexplode;
                       if($total_chk > 0){


                               $checkUserSub->total_pages = (float)$subs->min_page + (float)$checkUserSub->total_pages;


                        $checkUserSub->rollover_pages = ($subs->max_page - $subs->min_page) + (float)$checkUserSub->rollover_pages;

                        $checkUserSub->remaining_pages = (float)$subs->min_page + (float)$checkUserSub->remaining_pages;
                        $checkUserSub->remaining_rollover_pages = $subs->rollover_limit + (float)$checkUserSub->rollover_pages;
                        $checkUserSub->total_cost =$pay_chk_update->total_cost;
                        $checkUserSub->cost_per_page_final =$pay_chk_update->cost_per_page_final;
                        $checkUserSub->number_of_page =$pay_chk_update->number_of_page;

                        }
                      else{
                       $checkUserSub->total_pages = (float)$subs->min_page;


                            $checkUserSub->rollover_pages = ($subs->max_page - $subs->min_page);

                            $checkUserSub->remaining_pages = (float)$subs->min_page;
                            $checkUserSub->remaining_rollover_pages = $subs->rollover_limit ;

                            $checkUserSub->total_cost =$pay_chk_update->total_cost;
                            $checkUserSub->cost_per_page_final =$pay_chk_update->cost_per_page_final;
                            $checkUserSub->number_of_page =$pay_chk_update->number_of_page;
                      }
                        $checkUserSub->status = 'Active';
                        $checkUserSub->totalamountpro = $totalamountpro;
                        $checkUserSub->due_date = now()->addDays((int)$subs->set_time)->toDateTimeString();
                        $checkUserSub->save();

                        $user->subscription_id = $orderidexplode;
                        $user->save();
                        $invoice_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                        $receipt_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                        $total = (float)$order->totalAuthorizedAmount;
                        //find amdin email;
                        $admin = User::where('role', 'admin')->first();

                        $invoice = Invoice::create([
                            'Name' => $user->name,
                            'invoice_id' => $invoice_id,
                            'email' => $user->email,
                            'page' => $subs->min_page,
                            'price_per_page' => $subs->cost_per_page,
                            'item_name' => 'Subcription',
                            'total' => $transaction->merchantAmount,
                            'to_name' => $admin->name,
                            'to_email' => $admin->email,
                            'order_id' => $orderidexplode,
                            'invoice_type' => 'package_inc'
                        ]);
                        // $email = Email::where('type', 'Subscription Renew')->first();
                        // if ($email) {
                        //     Mail::to($user->email)->send(new EmailTemplate($user, $email));
                        // }





                        $purchaseDate = now()->format('Y-m-d');
                        $emailContent = "

                            <p>Hello {$user->name},</p>
                            <p>Congratulations on securing your new package at Writing Space! We're excited to support you with enhanced services and resources tailored to your academic needs.</p>

                            <p><strong>Package Details:</strong></p>
                            <ul>
                                <li><strong>Package Type:</strong> $subs->subscription_name</li>
                                <li><strong>Purchase Date:</strong> $purchaseDate</li>
                                <li><strong>Total Amount:</strong> $total $</li>
                                <li><strong>Total Pages:</strong> $checkUserSub->total_pages</li>
                            </ul>

                            <p>Your receipt and invoice for this transaction are attached to this email as a PDF. Please review these documents to ensure all details are correct and keep them for your records.</p>
                            <p>You can now access all the features and benefits of your package through your dashboard. Explore the additional resources and services available to you and make the most of your Writing Space experience!</p>
                            <p>If you have any questions about your package or need further assistance, our customer support team is ready to help.</p>
                            <p>Thank you for choosing Writing Space! We look forward to helping you achieve your academic goals.</p>

                            <p>Best regards,</p>
                            <p>Customer Success Team</p>
                            <p>Writing Space</p>
                        ";
                        $subject = 'Welcome to Your New Writing Space Package – Thank You for Your Purchase!';
                        $this->send_invoice($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject,$subs->min_page);

                        // return response()->json(['message' => 'Successfully Updated Subscription1']);



                        $user = User::find($user->id);
                        Auth::login($user);
                        return redirect()->route('customer.thankyou.sub');
                    } else {
                        $user->customer = "Subscription";
                        $user->subscription_id = $orderidexplode;
                        $user->save();

                        $subs = Subscription::find($orderidexplode);

                        $dueDate = now()->addDays((int)$subs->set_time)->toDateTimeString();


                        $pay_chk = Pay::where('order_id', $orderid)->first();

                       // dd($pay_chk);
                        $User_Subscription = User_Subscription::create([
                            'subscription_id' => $orderidexplode,
                            'total_pages' => $subs->min_page,
                            'rollover_pages' => $subs->min_page,
                            'remaining_pages' => $subs->min_page,
                            'remaining_rollover_pages' => $subs->rollover_limit,
                            'user_id' => $user->id,
                            'status' => 'Active',
                            'due_date' => $dueDate,

                            'total_cost' => $pay_chk->total_cost,
                            'cost_per_page_final' => $pay_chk->cost_per_page_final,
                            'number_of_page' => $pay_chk->number_of_page
                        ]);

                        $pakge = PakageLimit::first();
                        $remaining_pages =  $pakge->renaming - $subs->total_subscription;

                        $consum_pages = $pakge->consum + $subs->total_subscription;


                        $pakge->update(['renaming' => $remaining_pages, 'consum' => $consum_pages]);
                        $invoice_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                        $receipt_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);

                        //find amdin email;
                        $admin = User::where('role', 'admin')->first();

                        $invoice = Invoice::create([
                            'Name' => $user->name,
                            'invoice_id' => $invoice_id,
                            'email' => $user->email,
                            'page' => null,
                            'price_per_page' => null,
                            'item_name' => 'Subcription',
                            'total' => $transaction->merchantAmount,
                            'to_name' => $admin->name,
                            'to_email' => $admin->email,
                            'order_id' => $orderidexplode,
                            'invoice_type' => 'package_inc'
                        ]);


                        // $email = Email::where('type', 'package_purchase')->first();
                        // if ($email) {
                        //     Mail::to($user->email)->send(new EmailTemplate($user, $email));
                        // }


                        $createdAt = $invoice->created_at;
                        $orderid = $order->id;
                        $invoiceNumber = $invoice_id;
                        $receiptNumber = $receipt_id;
                        $dateOfIssue = $createdAt;
                        $dueDate = $dueDate;
                        $orderid = $orderid;

                        $customerName =$user->name;
                        $customerEmail = $user->email;
                        $customerAdress = $user->address_1.''.$user->address_2;

                        $itemName = $subs->subscription_name;
                        $totalPages = $subs->min_page;
                        $pricePerPage = $pay->cost_per_page_final;
                        $subTotal =$transaction->merchantAmount;
                        $payment_status ='Paid';


                        $discount = 0.0;

                        $total = $transaction->merchantAmount;




                    $purchaseDate = now()->format('Y-m-d');
                    $emailContent = "

                        <p>Hello {$user->name},</p>
                        <p>Congratulations on securing your new package at Writing Space! We're excited to support you with enhanced services and resources tailored to your academic needs.</p>

                        <p><strong>Package Details:</strong></p>
                        <ul>
                            <li><strong>Package Type:</strong> $subs->subscription_name</li>
                            <li><strong>Purchase Date:</strong> $purchaseDate</li>
                            <li><strong>Total Amount:</strong> $total $</li>
                            <li><strong>Total Pages:</strong> $totalPages</li>
                        </ul>

                        <p>Your receipt and invoice for this transaction are attached to this email as a PDF. Please review these documents to ensure all details are correct and keep them for your records.</p>
                        <p>You can now access all the features and benefits of your package through your dashboard. Explore the additional resources and services available to you and make the most of your Writing Space experience!</p>
                        <p>If you have any questions about your package or need further assistance, our customer support team is ready to help.</p>
                        <p>Thank you for choosing Writing Space! We look forward to helping you achieve your academic goals.</p>

                        <p>Best regards,</p>
                        <p>Customer Success Team</p>
                        <p>Writing Space</p>
                    ";
                    $subject = 'Welcome to Your New Writing Space Package – Thank You for Your Purchase!';
                    // Mail::html($emailContent, function ($message) use ($user) {
                    //     $message->to($user->email)
                    //             ->subject('Welcome to Your New Writing Space Package – Thank You for Your Purchase!');
                    // });

                    $this->send_invoice_pay_sub($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject,$subs->min_page);


                        $user_id =  $pay->user_id;
                        $user = User::find($user_id);
                        Auth::login($user);
                        return redirect()->route('customer.thankyou.sub');
                    } //checkuser if
                } //success attentication if

            } //resobse array if
            else {
                echo "Error decoding JSON";
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    // Package Add Pages from Profile and Manage pages

   public function pay_add_pages($orderid)
    {
        $real_order_id = $orderid;

       // try {
            $pay = Pay::where('order_id', $orderid)->first();
            $sessionId = $pay->session_id;
            $order_id = $pay->order_id;

            $orderidexplode = explode('-', $order_id);
            $orderidexplode = $orderidexplode[0];


            $transactionId = $pay->truncatedSessionId;

            $order_detail = json_decode($pay->order_details);


            $amount = $order_detail->total_cost;
            $noofpage = $order_detail->no_of_page;

            $randomNumber = mt_rand(100, 999);
            $transactionIdurl = $transactionId . $randomNumber;



            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionIdurl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_POSTFIELDS => '{
              "apiOperation": "PAY",
              "authentication":{
                "transactionId":"' . $transactionId . '"
                },
                    "order": {
                        "amount": "' . $amount . '",
                        "currency": "PKR"
                    },
                    "session": {
                        "id": "' . $sessionId . '"
                    }

                }',
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
                        ),
                    ));

            $response = curl_exec($curl);

            curl_close($curl);
            $responseArray = json_decode($response, true);



            if ($responseArray) {
                $authenticationStatus = $responseArray['order']['authenticationStatus'];
                if ($authenticationStatus == 'AUTHENTICATION_SUCCESSFUL') {

                    $responseObject = json_decode($response);
                    $order = $responseObject->order;
                    $sourceOfFunds = $responseObject->sourceOfFunds->provided->card;
                    $transaction = new Transaction();

                    $creationTime = Carbon::parse($order->creationTime)->toDateTimeString();

                    // Assign values to the model's properties
                    $transaction->amount = $order->amount;
                    $transaction->authenticationStatus = $order->authenticationStatus;
                    $transaction->chargeback_amount = $order->chargeback->amount;
                    $transaction->chargeback_currency = $order->chargeback->currency;

                    $transaction->currency = $order->currency;
                    $transaction->reference = $order->reference;
                    $transaction->status = $order->status;
                    $transaction->merchantAmount = $order->merchantAmount;
                    $transaction->merchantCategoryCode = $order->merchantCategoryCode;
                    $transaction->merchantCurrency = $order->merchantCurrency;

                    $transaction->totalAuthorizedAmount = $order->totalAuthorizedAmount;
                    $transaction->totalCapturedAmount = $order->totalCapturedAmount;
                    $transaction->totalDisbursedAmount = $order->totalDisbursedAmount;
                    $transaction->totalRefundedAmount = $order->totalRefundedAmount;
                    $transaction->fundingMethod = $sourceOfFunds->fundingMethod;
                    $transaction->userid = $pay->user_id;
                    $transaction->save();
                    $user_id =  $pay->user_id;

                    //  $user = User::find($pay->user_id);


                    $pages = $order_detail->no_of_page;
                    $user = User::findOrFail($pay->user_id);
                    $currentSubs = User_Subscription::where('user_id', $user->id)->first();
                    if ($currentSubs) {
                        $subs = Subscription::findOrFail($currentSubs->subscription_id);
                        $pageCost =  $subs->cost_per_page;
                    }

                    $billAmount =  $pages * $pageCost;

                    $currentSubs->total_pages += $pages;
                    $currentSubs->remaining_pages += $pages;
                    $currentSubs->rollover_pages -= $pages;
                    $currentSubs->save();




                    $orderDetails = json_decode($pay['order_details'], true);
                    $orderss = "";
                    //$orderidpkg = $orderDetails['order_id'];
                    $current_page = '';
                    if (isset($orderDetails['order_id'])) {
                        $orderidpkg = $orderDetails['order_id'];
                        $orderdetailspk = Orders::where('order_id', $orderidpkg)->first();

                        if ($orderdetailspk) {
                            $current_page = $orderdetailspk->number_of_pages;
                            $orderdetailspk->number_of_pages += $pages;
                            $orderdetailspk->no_of_extra_sources += $pages;

                            $orderdetailspk->save();
                            $user1 = User::findOrFail($pay->user_id);
                            $currentSubs1 = User_Subscription::where('user_id', $user1->id)->first();

                            if ($currentSubs1) {
                                $subs = Subscription::findOrFail($currentSubs1->subscription_id);
                            }
                            $currentSubs1->remaining_pages -= $pages;
                            $currentSubs1->save();
                        }
                        $orderss = Orders::where('order_id',$orderidpkg)->first();

                    }
                    $order_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                    $invoice_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                    $receipt_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                    $pakge = PakageLimit::first();
                    $remaining_pages =  $pakge->renaming - $pages;
                    $consum_pages = $pakge->consum + $pages;
                    $pakge->update(['renaming' => $remaining_pages, 'consum' => $consum_pages]);
                    $invoice = Invoice::create([
                        'Name' => $user->name,
                        'email' => $user->email,
                        'page' => $pages,
                        'description' => 'Purchased more pages',
                        'price_per_page' => $pageCost,
                        'item_name' => 'Pages',
                        'total' => $billAmount,
                        'to_name' => 'Admin',
                        'to_email' => 'admin@gmail.com',
                        'order_id' => $order_detail->used_package_id,
                        'invoice_id' => $invoice_id,

                    ]);

                    $user_id =  $pay->user_id;
                    $user = User::find($user_id);

                    //add new pages from customer profile and send email;
                    $data['order_id'] = $orderid;
                    $data['number_of_pages'] = $pages; // new oder pages;
                    $data['pages_remaining'] = $currentSubs->remaining_pages; // old order remaining pages;
                    $data['purchased_at'] = $invoice->created_at->format('Y-m-d');
                    $data['customer_name'] = $user->name;
                    $data['customer_email'] = $user->email;













                    $user23 = User::findOrFail($pay->user_id);
                    $currentSubs23 = User_Subscription::where('user_id', $user23->id)->first();

                    $createdAt = $invoice->created_at;
                    $orderid = $order->id;


                    $invoiceNumber = $invoice_id;
                    $dateOfIssue = $createdAt;
                    $dueDate = $currentSubs23->due_date;
                    $orderid = $orderid;

                     $remaining_pages = $currentSubs23->remaining_pages;

                    $customerName =$user->name;
                    $customerEmail = $user->email;
                    $customerAdress = $user->address_1.''.$user->address_2;

                    $itemName = $subs->subscription_name;
                    $totalPages = $pages;
                    $pricePerPage = $pageCost;
                    $subTotal =$billAmount;
                    $payment_status ='Paid';


                    $discount = 0.0;

                    $total = $billAmount;

                    // if ($email) {
                    //     $subject = 'Invoice package purchase';
                    //     Mail::to($user->email)->send(new PkgIdInvoiceEmailTemplate1(
                    //         [
                    //             'invoiceNumber' => $invoiceNumber,
                    //             'dateOfIssue' => $dateOfIssue,
                    //             'dueDate' => $dueDate,
                    //             'customerName' => $customerName,
                    //             'customerEmail' => $customerEmail,
                    //             'customerAdress' => $customerAdress,
                    //             'orderid' => $order->order_id,
                    //             'itemName' => $itemName,
                    //             'totalPages' => $totalPages,
                    //             'remaining_pages' => $remaining_pages,
                    //             'pricePerPage' => $pricePerPage,
                    //             'payment_status' => $payment_status,
                    //             'subTotal' => $subTotal,
                    //             'discount' => $discount,
                    //             'total' => $total,
                    //         ],
                    //         $subject
                    //     ));
                    // }

 $emailContent = "
            <p>Hello {$user->name},</p>
            <p>We’ve successfully added additional pages to your existing order at Writing Space. Here are the details:</p>

            <p><strong>Order Details:</strong></p>
            <ul>
                <li><strong>Order ID:</strong> $order_id</li>
                <li><strong>Additional Pages Added:</strong> $pages</li>
                <li><strong>Total Pages Used So Far:</strong> {$currentSubs->total_pages}</li>
                <li><strong>Remaining Pages in Your Package:</strong> {$currentSubs->remaining_pages}</li>
            </ul>

            <p><strong>What’s Next:</strong></p>
            <ol>
                <li>You can continue to track the progress of your order through your dashboard under the \"My Orders\" section.</li>
                <li>We’ll keep you updated as your order develops, and we’ll notify you when it’s ready for review or download.</li>
            </ol>

            <p>Adding these pages will help tailor your order more closely to your needs, ensuring that the final product meets all your academic requirements.</p>
            <p>If you need further modifications or have any questions, please don't hesitate to contact us. Our team is here to support you every step of the way.</p>
            <p>Thank you for utilizing your Writing Space package effectively. We look forward to delivering a product that exceeds your expectations.</p>

            <p>Best regards,</p>
            <p>Customer Success Team</p>
            <p>Writing Space</p>
        ";
        $subject = "Your Additional Pages Added to Order ID - $order_id";

        $this->send_invoice_just_Add_page($invoice_id, $receipt_id, $order_id, $subs, $invoice, $transaction, $user,$emailContent,$subject,$noofpage);
        // Mail::html($emailContent, function ($message) use ($user, $order_id) {
        //     $message->to($user->email)
        //             ->subject('Confirmation of Additional Pages Added to Order ID - ' . $order_id);
        // });

        $orderlog = OrderLogs::create([
                                'user_id' => $user->id,
                                'invoice_id' => $invoice_id,
                                'order_id' => $order_id,
                                'order_type'=> 'Pages Addon Package',
                                'status' => '',
                                'pages_addon_type' => 'Purchased',
                                'pages_addon' => $pages,
                                'pages_purchase' => $current_page,
                            ]);

                    Auth::login($user);


                    return redirect(url('/customer/thankyou'));
                }
            }
        // } catch (\Exception $e) {
        //     // Handle the exception
        //     return response()->json(['error' => $e->getMessage()]);
        // }
    }



    public function pay_add_manage($orderid)
    {
        //dd('dfd');
        //try {
            $pay = Pay::where('order_id', $orderid)->first();
            $sessionId = $pay->session_id;
            $order_id = $pay->order_id;
            $orderidexplode = explode('-', $order_id);
            $orderidexplode = $orderidexplode[0];


            $transactionId = $pay->truncatedSessionId;

            $order_detail = json_decode($pay->order_details);


            $amount = $order_detail->total;

            $randomNumber = mt_rand(100, 999);
            $transactionIdurl = $transactionId . $randomNumber;



            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionIdurl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_POSTFIELDS => '{
              "apiOperation": "PAY",
              "authentication":{
          "transactionId":"' . $transactionId . '"
          },
              "order": {
                  "amount": "' . $amount . '",
                  "currency": "PKR"
              },
              "session": {
                "id": "' . $sessionId . '"
              }

          }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $responseArray = json_decode($response, true);

            if ($responseArray) {



                $authenticationStatus = $responseArray['order']['authenticationStatus'];



                if ($authenticationStatus == 'AUTHENTICATION_SUCCESSFUL') {

                    $responseObject = json_decode($response);
                    $order = $responseObject->order;
                    $sourceOfFunds = $responseObject->sourceOfFunds->provided->card;
                    $transaction = new Transaction();

                    $creationTime = Carbon::parse($order->creationTime)->toDateTimeString();

                    // Assign values to the model's properties
                    $transaction->amount = $order->amount;
                    $transaction->authenticationStatus = $order->authenticationStatus;
                    $transaction->chargeback_amount = $order->chargeback->amount;
                    $transaction->chargeback_currency = $order->chargeback->currency;

                    $transaction->currency = $order->currency;
                    $transaction->reference = $order->reference;
                    $transaction->status = $order->status;
                    $transaction->merchantAmount = $order->merchantAmount;
                    $transaction->merchantCategoryCode = $order->merchantCategoryCode;
                    $transaction->merchantCurrency = $order->merchantCurrency;

                    $transaction->totalAuthorizedAmount = $order->totalAuthorizedAmount;
                    $transaction->totalCapturedAmount = $order->totalCapturedAmount;
                    $transaction->totalDisbursedAmount = $order->totalDisbursedAmount;
                    $transaction->totalRefundedAmount = $order->totalRefundedAmount;
                    $transaction->fundingMethod = $sourceOfFunds->fundingMethod;
                    $transaction->userid = $pay->user_id;
                    $transaction->save();
                    $user_id =  $pay->user_id;

                    //  $user = User::find($pay->user_id);



                    $user = User::findOrFail($pay->user_id);




                    $order = Orders::where('order_id', '=', $order_detail->order_id)->first();
                    if ($order) {
                        $originalDate =  $order_detail->deadline;

                        $carbonDate = Carbon::parse($originalDate);

                        $formattedDate = $carbonDate->format('Y-m-d H:i');


                        $new_page = (float)$order->number_of_pages + (float)$order_detail->page;
                        $order->number_of_pages = $new_page;
                        $order->deadline = $formattedDate;
                        $order->no_of_extra_sources = $order->no_of_extra_sources + $order_detail->page;
                        $order->save();
                      //  print_r($order->no_of_extra_sources + $order_detail->page );
                      //  dd($order);
                        $invoice_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                        $receipt_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);

                        $user = User::find($order->user_id);
                        $invoice = Invoice::create([
                            'Name' => $user->name,
                            'invoice_id' => $invoice_id,
                            'email' => $order->email,
                            'page' => $order_detail->page,
                            'price_per_page' => $order->cost_per_page,
                            'item_name' => 'Custom Order - Pages Addon',
                            'total' => $order_detail->total,
                            'to_name' => 'Admin',
                            'to_email' => 'admin@gmail.com',
                            'order_id' => $order->order_id,
                            'invoice_type' => 'custom_inc'

                        ]);
                    }

                    //dd($invoice);
                    $user23 = User::findOrFail($pay->user_id);
                    $currentSubs23 = Orders::where('user_id', $user23->id)->first();
                    // $currentSubs23 = User_Subscription::where('user_id', $user23->id)->first();

                    $createdAt = $invoice->created_at;
                    $orderid = $order->id;


                    $invoiceNumber = $invoice->idinvoice_id;
                    $dateOfIssue = $createdAt;
                    $dueDate = $currentSubs23->due_date;
                    $orderid = $orderid;

                     $remaining_pages = $currentSubs23->remaining_pages;

                    $customerName =$user->name;
                    $customerEmail = $user->email;
                    $customerAdress = $user->address_1.''.$user->address_2;

                    $itemName = 'Custom order Add Pages';
                    $totalPages = $order_detail->page;
                    $pricePerPage =  $order->cost_per_page;
                    $subTotal =$order_detail->total;
                    $payment_status ='Paid';




                    $discount = 0.0;

                    $total = $order_detail->total;

                    $email = Email::where('type','confirmation_of_additional_pages_purchase_order_id')->first();

                    if ($email) {
                        $subject = 'Confirmation of Additional Pages (In Packages) for Order ID';
                        Mail::to($user->email)->send(new PkgIdmanageInvoiceEmailTemplate(
                            [
                                'invoiceNumber' => $invoice_id,
                                'dateOfIssue' => $dateOfIssue,
                                'dueDate' => $dueDate,
                                'customerName' => $customerName,
                                'customerEmail' => $customerEmail,
                                'customerAdress' => $customerAdress,
                                'orderid' => $order->order_id,
                                'itemName' => $itemName,
                                'receipt_id' => $receipt_id,
                                'totalPages' => $totalPages,
                                'remaining_pages' => $remaining_pages,
                                'pricePerPage' => $pricePerPage,
                                'payment_status' => $payment_status,
                                'subTotal' => $subTotal,
                                'discount' => $discount,
                                'total' => $total,
                            ],
                            $subject
                        ));
                    }


$emailContent = "

    <p>Hi {$user->name},</p>
    <p>Thank you for expanding your order at Writing Space! We've successfully processed the purchase of additional pages for your ongoing project.</p>

    <p><strong>Order Details:</strong></p>
    <ul>
        <li><strong>Order ID:</strong>{$order->order_id}</li>
        <li><strong>Additional Pages Purchased:</strong> {$totalPages}</li>
        <li><strong>Date of Purchase:</strong>  $invoice->created_at</li>
    </ul>

    <p>Your invoice and receipt for this transaction are attached as a PDF. Please review these documents for your records.</p>
    <p>Should you have any queries or require further assistance, feel free to reach out to our support team.</p>
    <p>We appreciate your continued trust in Writing Space, and we're here to assist you every step of the way!</p>

    <p>Best regards,</p>
    <p>Customer Success Team</p>
    <p>Writing Space</p>
";

// Mail::html($emailContent, function ($message) use ($user, $order) {
//     $message->to($user->email)
//             ->subject("Confirmation of Additional Pages Purchase – Order ID {$order->order_id}");
// });
                    $subject = "Confirmation of Additional Pages Purchase – Order ID {$order->order_id}";
                $data = [
                                'invoiceNumber' => $invoice_id,
                                'receiptNumber' => $receipt_id,

                                'dateOfIssue' => $dateOfIssue,
                                'dueDate' => $dueDate,
                                'customerName' => $customerName,
                                'customerEmail' => $customerEmail,
                                'customerAdress' => $customerAdress,
                                'orderid' => $order->order_id,
                                'itemName' => $itemName,
                                'totalPages' => $totalPages,
                                'remaining_pages' => $remaining_pages,
                                'pricePerPage' => $pricePerPage,
                                'payment_status' => $payment_status,
                                'subTotal' => $subTotal,
                                'discount' => $discount,
                                'total' => $total,
                            ];
                Mail::to($user->email)->send(new PkgInvoiceEmailTemplate(
                        $data,$data,
                        $subject,
                        $emailContent
                    ));

                    $user_id =  $pay->user_id;
                    $orderlog = OrderLogs::create([
                                'user_id' => $user->id,
                                'invoice_id' => $invoice_id,
                                'order_id' => $order->order_id,
                                'order_type'=> 'Customer Order - Addon',
                                'status' => $order->order_status,
                                'pages_addon_type' => 'Purchased',
                                'pages_addon' => $order->number_of_pages,
                                'pages_purchase' => $totalPages,
                            ]);
                    $user = User::find($user_id);
                    Auth::login($user);


                    return redirect('https://ws.elementary-solutions.com/customer/thankyou');
                }
            }
        // } catch (\Exception $e) {
        //     // Handle the exception
        //     return response()->json(['error' => $e->getMessage()]);
        // }
    }

    // Normal Custom Order
    public function pay($orderid)
    {


        $pay = Pay::where('order_id', $orderid)->first();
        $sessionId = $pay->session_id;
        $order_id = $pay->order_id;
        $transactionId = $pay->truncatedSessionId;
        $order_detail = json_decode($pay->order_details);
        $total_amount = $order_detail->total_cost;
        $amount = $total_amount;
        $randomNumber = mt_rand(100, 999);
        $transactionIdurl = $transactionId . $randomNumber;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test-bankalfalah.gateway.mastercard.com/api/rest/version/74/merchant/TESTWRITINGSPACE/order/' . $order_id . '/transaction/' . $transactionIdurl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                                        "apiOperation": "PAY",
                                        "authentication":{
                                    "transactionId":"' . $transactionId . '"
                                    },
                                        "order": {
                                            "amount": "' . $amount . '",
                                            "currency": "PKR"
                                        },
                                        "session": {
                                            "id": "' . $sessionId . '"
                                        }

                                    }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Basic bWVyY2hhbnQuVEVTVFdSSVRJTkdTUEFDRToyZjk4ZWJhNWE5ZmFmYzk0YjBmZTVmMTM5NjQ5MWZmYg=='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $responseArray = json_decode($response, true);

        if ($responseArray) {
            // dd($responseArray);
            $authenticationStatus = $responseArray['order']['authenticationStatus'];
            echo $authenticationStatus;
            if ($authenticationStatus == 'AUTHENTICATION_SUCCESSFUL') {

                $responseObject = json_decode($response);
                $order = $responseObject->order;
                $sourceOfFunds = $responseObject->sourceOfFunds->provided->card;
                $transaction = new Transaction();

                $creationTime = Carbon::parse($order->creationTime)->toDateTimeString();

                // Assign values to the model's properties
                $transaction->amount = $order->amount;
                $transaction->authenticationStatus = $order->authenticationStatus;
                $transaction->chargeback_amount = $order->chargeback->amount;
                $transaction->chargeback_currency = $order->chargeback->currency;

                $transaction->currency = $order->currency;
                $transaction->reference = $order->reference;
                $transaction->status = $order->status;
                $transaction->merchantAmount = $order->merchantAmount;
                $transaction->merchantCategoryCode = $order->merchantCategoryCode;
                $transaction->merchantCurrency = $order->merchantCurrency;

                $transaction->totalAuthorizedAmount = $order->totalAuthorizedAmount;
                $transaction->totalCapturedAmount = $order->totalCapturedAmount;
                $transaction->totalDisbursedAmount = $order->totalDisbursedAmount;
                $transaction->totalRefundedAmount = $order->totalRefundedAmount;
                $transaction->fundingMethod = $sourceOfFunds->fundingMethod;
                $transaction->userid = $pay->user_id;

                $transaction->save();
                $user_id =  $pay->user_id;
                $input = $order_detail;

                if (empty($input->additional_info)) {
                    $input->additional_info = 0;
                    $count = 0;
                } else {
                    $count = count($input->additional_info);
                }

                $total = (float)$count * (float)$input->cost_per_page;
                $check_analysis = $input->statistical_analysis;
                $statistical_analysis = ($check_analysis == '0') ? false : true;
                if ($input->coupon == '' || $input->coupon == null) {
                    $discount = '0';
                } else {
                    $discount = $input->discount;
                }

                if (empty($input->additional_info)) {
                    $input->additional_info = [];
                }

                //  dd($input);
                $lastOrderId = Orders::latest()->limit(1)->value('order_id');
                $order_id = ++$lastOrderId;
                // dd($order_id, $lastOrderId);
                $order = Orders::create([
                    'subject' => $input->subject,
                    'description' => $input->description,
                    'topic' => $input->topic,
                    'cost_per_page' => $input->cost_per_page,
                    'submitting' => $input->submitting,
                    'deadline' => $input->due_date,
                    'no_of_extra_sources' => $input->no_of_extra_sources,
                    'powerpoint_slide' => null,
                    'spacing' => null,
                    'number_of_pages' => $input->no_of_pages,
                    'type_of_paper' => $input->term_of_paper,
                    'paper_format' => $input->paper_format,
                    'academic_level' => $input->academic_level,
                    'language_spelling' => $input->language_spelling,
                    'order_type' => 'Custom',
                    'discount' => $discount,
                    'powerpoint_slide' => $input->powerpoint_slide,
                    'order_show' => 'Enable',
                    'order_status' => 'Pending',
                    'additional_info' => json_encode($input->additional_info),
                    'coupon' => $input->coupon,
                    'user_id' => $user_id,
                    'payment_status' => 'Paid',
                    'order_id' => $order_id,
                    'total_cost' => $input->total_cost,
                    'cost' => $input->sub_total,
                    'additional_cost' => $total,
                    'statistical_analysis' => $statistical_analysis,
                    'email' => $input->email,
                    'backup_email' => $input->backup_email,
                "plagiarism" => $input->plagiarism,
                "ai_detection" => $input->ai_detection,
                "outline" => $input->outline,
                "summary" => $input->paper_summary
                    // 'email' =>auth()->user()->email,
                    // 'backup_email' => auth()->user()->email
                ]);

                if (!empty($input->coupon)) {
                    $coupon_used = Coupon_Used::create([
                        'user_id' => $user_id,
                        'coupon' => $input->coupon,
                    ]);
                }

                $user = User::find($order->user_id);
                $invoice_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
                 $receipt_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);

                $invoice = Invoice::create([
                    'Name' => $user->name,
                    'invoice_id' => $invoice_id,
                    'email' => $order->email,
                    'page' => $order->number_of_pages,
                    'price_per_page' => $order->cost_per_page,
                    'item_name' => 'Custom Order',
                    'total' => $order->total_cost,
                    'to_name' => 'Admin',
                    'to_email' => 'admin@gmail.com',
                    'order_id' => $order->order_id,
                    'invoice_type' => 'custom_inc'

                ]);
                $createdAt = $invoice->created_at;
                $orderid = $order->id;
                $order_id2 = $order->order_id;
                clearstatcache(); // Clears PHP file system cache

                $path = "uploads_folders/{$order_id}";
                Storage::disk('public')->deleteDirectory($path);

              //  dd(Storage::disk('public')->directoryExists($path));

                if (!Storage::disk('public')->directoryExists($path)) {
                    Storage::disk('public')->makeDirectory($path);

                    $folder = new Folder();
                    $folder->name = $order_id;
                    $folder->description = $order_id;
                    $folder->user_id = $user_id;
                    $folder->save();
                }

                // Optional: Set permissions manually (if needed)
                $absolutePath = storage_path("app/public/{$path}");
                if (file_exists($absolutePath)) {
                    chmod($absolutePath, 0755);
                }

                // if (!Storage::disk('public')->exists($path)) {
                //     Storage::disk('public')->makeDirectory($path);

                //     $folder = new Folder();
                //     $folder->name = $order_id;
                //     $folder->description = $order_id;
                //     $folder->user_id = $user_id;
                //     $folder->save();
                // }

                // // Optional: set permission if needed
                // chmod(storage_path("app/public/uploads_folders/{$order_id}"), 0777);




                $user = User::find($user_id);
                $email = Email::where('type', '=', 'order_place_confirmation')->first();

                // if ($email) {
                //     Mail::to($user->email)->send(new EmailTemplate($user, $email));
                // }



                $invoiceNumber = $invoice_id;
                 $receiptNumber = $receipt_id;

                $dateOfIssue = $createdAt;
                $dueDate = $input->due_date;
                $orderid = $orderid;
                $order = $order;

                $customerName =$user->name;
                $customerEmail = $user->email;
                $customerAdress = $user->address_1.''.$user->address_2;

                $itemName = $input->subject;
                $totalPages = $order->number_of_pages;
                $pricePerPage = $order->cost_per_page;
                $subTotal =$order->total_cost;
                $payment_status ='Paid';


                $discount = 0.0;

                $total = $order->total_cost;

              $order = Orders::where('order_id', $order_id)->first();

                $order_discount = $order && $order->discount !== null ? $order->discount : 0;
            
                // $totaladdon = optional($order)->total_cost - optional($order)->cost;

                // $finaltotaladdon = $totaladdon 
                // + optional($order)->no_of_extra_sources 
                // + optional($order)->statistical_analysis;



                // dd($order->discount);
                // if($order->discount == null){
                //     $totafinal = $pricePerPage * $totalPages;
                //      $finaltotaladdon = abs($totafinal - $subTotal);
                // }
                // else{

                    
                //         $totafinal = $pricePerPage * $totalPages;

                //        $originalPrice = $subTotal / (1 - ($discount / 100));
                //           $finaltotaladdon = abs($totafinal - $originalPrice);
                // }

               $totafinal = $pricePerPage * $totalPages;

                    // Cast discount to float
                    $discount = (float) $order->discount;

                    if (!$discount) {
                        // No discount (null, 0, or empty string)
                        $finaltotaladdon = abs($totafinal - $subTotal);
                    } else {
                        // Discount is given in percentage
                        $originalPrice = $subTotal / (1 - ($discount / 100));
                        $finaltotaladdon = abs($totafinal - $originalPrice);
                    }



                if ($email) {
                    $subject = 'Your Writing Space Purchase Confirmation – Order ID '.$order_id;
                    Mail::to($user->email)->send(new InvoiceEmailTemplate(
                        [
                            'invoiceNumber' => $invoiceNumber,
                              'receiptNumber' => $receiptNumber,
                            'dateOfIssue' => $dateOfIssue,
                            'dueDate' => $dueDate,
                            'customerName' => $customerName,
                            'customerEmail' => $customerEmail,
                            'customerAdress' => $customerAdress,
                            'orderid' => $order_id,
                            'order' => $order,
                           'itemName' => 'Custom Order ID-' . $order_id,
                            'totalPages' => $totalPages,
                            'pricePerPage' => $pricePerPage,
                            'payment_status' => $payment_status,
                            'subTotal' => $subTotal,
                            'discount' => $discount,
                            'total' => $total,
                            'finaltotaladdon' => $finaltotaladdon ?: '0.0',
                            'discounttotalamount' => $discounttotalamount = ($order && $order->discount !== null)
                            ? number_format($order->discount, 2) . '%'
                            : '0.00%',

                        ],
                        $subject
                    ));
                }

                    $emailContent = "

                    <p>Hi {$user->name},</p>
                    <p>Thank you for expanding your order at Writing Space! We've successfully processed the purchase of additional pages for your ongoing project.</p>

                    <p><strong>Order Details:</strong></p>
                    <ul>
                        <li><strong>Order ID:</strong>{$order->order_id}</li>
                        <li><strong>Additional Pages Purchased:</strong> {$totalPages}</li>
                        <li><strong>Date of Purchase:</strong>  $invoice->created_at</li>
                    </ul>

                    <p>Your invoice and receipt for this transaction are attached as a PDF. Please review these documents for your records.</p>
                    <p>Should you have any queries or require further assistance, feel free to reach out to our support team.</p>
                    <p>We appreciate your continued trust in Writing Space, and we're here to assist you every step of the way!</p>

                    <p>Best regards,</p>
                    <p>Customer Success Team</p>
                    <p>Writing Space</p>
                ";



                    $subject = "Your Writing Space Purchase Confirmation – Order ID {$order->order_id}";
                    $data = [
                            'invoiceNumber' => $invoiceNumber,
                              'receiptNumber' => $receiptNumber,
                            'dateOfIssue' => $dateOfIssue,
                            'dueDate' => $dueDate,
                            'customerName' => $customerName,
                            'customerEmail' => $customerEmail,
                            'customerAdress' => $customerAdress,
                            'orderid' => $order_id,
                            'order' => $order,
                           'itemName' => 'Custom Order ID-' . $order_id,
                            'totalPages' => $totalPages,
                            'pricePerPage' => $pricePerPage,
                            'payment_status' => $payment_status,
                            'subTotal' => $subTotal,
                            'discount' => $discount,
                            'total' => $total,
                            'finaltotaladdon' => $finaltotaladdon ?: '0.0',
                            'discounttotalamount' => $discounttotalamount = ($order && $order->discount !== null)
                            ? number_format($order->discount, 2) . '%'
                            : '0.00%'
                        ,
                        ];
                Mail::to($user->email)->send(new PkgInvoiceEmailTemplate(
                        $data,$data,
                        $subject,
                        $emailContent
                    ));

                    $orderlog = OrderLogs::create([
                                'user_id' => $user->id,
                                'invoice_id' => $invoiceNumber,
                                'order_id' => $order_id,
                                'order_type'=> 'Customer Order',
                                'status' => $order->order_status,
                                'pages_addon_type' => 'Purchased',
                                'pages_addon' => 'None',
                                'pages_purchase' => $totalPages,
                            ]);

                $user_id =  $pay->user_id;
                $user = User::find($user_id);
                Auth::login($user);

                return redirect(url('/customer/thankyou'));
            }
        } else {

            echo "Error decoding JSON";
        }
    }

    // customer custom subscription;
    public function thankyou()
    {
        // $user_id = Auth::user()->id;
        // $user = User::findOrFail($user_id);
        // $user->tier = 'tier_1';
        // $user->save();

        return view('backend.customer.orderManagement.thankyou');
    }

    public function thankyouSub()
    {
        // $user_id = Auth::user()->id;
        // $user = User::findOrFail($user_id);
        // $user->tier = 'tier_2';
        // $user->save();
        return view('backend.customer.orderManagement.thankyou-subscription');
    }

    public function updateTierAfterPayment()
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->tier = 'tier_2';
        $user->save();
        return response()->json(['status' => true, 'message' => 'Customer dashboard'], 200);
    }


    public function exportInvoiceprofile($value)
    {


        $nu = rand(11, 999);
        return  Excel::download(new OrdersExportInvoice($value), 'ORDER-LIST-' . $nu . '.xlsx');
    }

    public function index()
    {

        $used_subscription = User_Subscription::where('user_id', '=', Auth()->user()->id)->first();
        if ($used_subscription) {
            $subscription = Subscription::find($used_subscription->subscription_id);
            $used_subscription->subscription = $subscription;
        }


        $Addons = Addons::orderBy('id', 'desc')->first();



        $subjects = Subject::orderBy('title', 'asc')->get();
        $academic = Academic_level::orderBy('title', 'asc')->get();
        $excludeds = ['Other (explain in description)','Other (Not Listed Above)'];
        $term = Term_of_paper::whereNotIn('title', $excludeds)->orderBy('title', 'asc')->get();
        $deadline = Deadline::all();
        $excluded = ['None', 'Let the writer choose', 'Does Not Matter','Other (Not Listed Above)'];
        $paper_format = Paper_Format::whereNotIn('title', $excluded)->orderBy('title', 'asc')->get();
        $Languages = Language::orderBy('title', 'asc')->get();

       // $pricing = Pricing::orderBy('id', 'desc')->get();


        if (auth()->check()) {
            $user_id = Auth::user()->id;
            $subsDetails = User_Subscription::where('user_id', $user_id)->first();

            if ($subsDetails) {
                $subscribed = $subsDetails->user_id;
                $totalPages = $subsDetails->remaining_pages + $subsDetails->rollover_pages;

                if ($subscribed && $totalPages > 0) {
                    $subsDetailsamount = Subscription::where('id', $subsDetails->subscription_id)->first();
                    $cost_per_page = $subsDetails->cost_per_page_final;
                    $pricing = PricingPakage::orderBy('id', 'desc')->get();

                    return view('backend.customer.orderManagement.custom_place_order', compact(
                        'Languages', 'used_subscription', 'Addons', 'pricing', 'subjects', 'academic', 'term', 'deadline', 'paper_format', 'subscribed', 'subsDetails', 'cost_per_page'
                    ));
                }
            }
        }
     $pricing = PricingOrder::orderBy('id', 'desc')->get();


        $subscribed = null;
        $subsDetails = null;

        return view('backend.customer.orderManagement.place_order', compact('Languages','pricing', 'subjects', 'Addons', 'academic', 'term', 'deadline', 'paper_format', 'subscribed', 'subsDetails'));
    }







    public function addMorePages(Request $request)
    {
        // dd($request->all());
        //dd('add more pages');
        $pages = $request->pages;
        $user = User::findOrFail(Auth::user()->id);


        $currentSubs = User_Subscription::where('user_id', $user->id)->first();

        if ($currentSubs) {
            $subs = Subscription::findOrFail($currentSubs->subscription_id);
            $pageCost =  $subs->cost_per_page;
        }

        $billAmount =  $pages * $pageCost;

        $currentSubs->total_pages += $pages;
        $currentSubs->remaining_pages += $pages;
        $currentSubs->save();

        $order_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);
        $invoice_id = str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT);

        $invoice = Invoice::create([
            'Name' => $user->name,
            'email' => $user->email,
            'page' => $pages,
            'description' => 'Purchased more pages',
            'price_per_page' => $pageCost,
            'item_name' => 'Pages',
            'total' => $billAmount,
            'to_name' => 'Admin',
            'to_email' => 'admin@gmail.com',
            'order_id' => $order_id,
            'invoice_id' => $invoice_id
        ]);

        if ($invoice) {
            $email = Email::where('type', '=', 'Order Place Confirmation')->first();

            if ($email) {
                Mail::to($user->email)->send(new EmailTemplate($user, $email));
            }

            return response()->json(['message' => 'Pages added successfully!']);
        } else {

            return response()->json(['error' => 'Something went wrong!']);
        }
    }


    public function exportOrders()
    {
        $nu = rand(11, 999);
        // Pass the checked IDs to the OrdersExport class
        return  Excel::download(new OrdersExport, 'ORDER-LIST-' . $nu . '.xlsx');
    }

    public function changeDate($id)
    {
        $pricing = PricingOrder::find($id);
        if ($pricing) {

            return response()->json(['success' => true, 'message' => $pricing]);
        } else {
            return response()->json(['success' => false, 'message' => 'Pricing not found'], 404);
        }
    }
    public function changeDatepkg($id)
    {
        $pricing = PricingPakage::find($id);
        if ($pricing) {

            return response()->json(['success' => true, 'message' => $pricing]);
        } else {
            return response()->json(['success' => false, 'message' => 'Pricing not found'], 404);
        }
    }


    public function create_order(Request $request, $id)
    {

        $input = $request->dataObject;

        if (empty($input['additional_info'])) {
            $input['additional_info'] = 0;
            $count = 0;
        } else {
            $count = count($input['additional_info']);
        }

        $total = (float)$count * (float)$input['cost_per_page'];

        $check_analysis = $input['statistical_analysis'];

        if ($check_analysis == '0') {
            $statistical_analysis = false;
        } else {
            $statistical_analysis = true;
        }
        $order_id = rand(000000000, 999999999);
        if ($input['coupon'] == '' || $input['coupon'] == null) {
            $discount = '0';
        } else {
            $discount = $input['discount'];
        }

        if (empty($input['additional_info'])) {
            $input['additional_info'] = [];
        }

        $lastOrderId = Orders::latest()->limit(1)->value('order_id');
        $order_id = ++$lastOrderId;

        // dd($order_id, $lastOrderId);
        $order = Orders::create([
            'subject' => $input['subject'],
            'description' => $input['description'],
            'topic' => $input['topic'],
            'cost_per_page' => $input['cost_per_page'],
            'submitting' => $input['submitting'],
            'deadline' => $input['due_date'],
            'no_of_extra_sources' => $input['no_of_extra_sources'],
            'powerpoint_slide' => null,
            'spacing' => null,
            'number_of_pages' => $input['no_of_pages'],
            'type_of_paper' => $input['term_of_paper'],
            'paper_format' => $input['paper_format'],
            'academic_level' => $input['academic_level'],
            'language_spelling' => $input['language_spelling'],
            'order_type' => 'Custom',
            'discount' => $discount,
            'order_show' => 'Enable',
            'order_status' => 'Pending',
            'additional_info' => json_encode($input['additional_info']),
            'coupon' => $input['coupon'],
            'user_id' => $id,
            'payment_status' => 'Paid',
            'order_id' => $order_id,
            'total_cost' => $input['total_cost'],
            'cost' => $input['sub_total'],
            'additional_cost' => $total,
            'statistical_analysis' => $statistical_analysis,
            'email' => $input['email'],
            'backup_email' => $input['backup_email']
        ]);

        if ($input['coupon'] != '' || $input['coupon'] != null) {
            $coupon_used = Coupon_Used::create([
                'user_id' => $id,
                'coupon' => $input['coupon'],
            ]);
        }

        $user = User::find($order->user_id);

        $invoice = Invoice::create([
            'Name' => $user->name,
            'email' => $order->email,
            'page' => $order->number_of_pages,
            'price_per_page' => $order->cost_per_page,
            'item_name' => 'Order',
            'total' => $order->total_cost,
            'to_name' => 'Admin',
            'to_email' => 'admin@gmail.com',
            'order_id' => $order->order_id,
            'invoice_type' => 'custom_inc'

        ]);

        clearstatcache(); // Clears PHP file system cache

                $path = "uploads_folders/{$order->order_id}";
                Storage::disk('public')->deleteDirectory($path);

                dd(Storage::disk('public')->directoryExists($path));

                if (!Storage::disk('public')->directoryExists($path)) {
                    Storage::disk('public')->makeDirectory($path);

                    $folder = new Folder();
                    $folder->name = $order->order_id;
                    $folder->description = $order->order_id;
                    $folder->user_id = $user_id;
                    $folder->save();
                }

                // Optional: Set permissions manually (if needed)
                $absolutePath = storage_path("app/public/{$path}");
                if (file_exists($absolutePath)) {
                    chmod($absolutePath, 0755);
                }


        // $user = User::find($id);
        // $email = Email::where('type', '=', 'Order Place Confirmation')->first();

        // if ($email) {
        //     Mail::to($user->email)->send(new EmailTemplate($user, $email));
        // }




        return response()->json(['success' => true, 'message' => $order]);
    }


    public function new_order(Request $request)
    {
        $id = Auth()->user()->id;
        // $order = Orders::where('user_id', $id)->where('order_status', 'Pending')->get();
        $order = Orders::where('user_id', $id)->where('order_status', 'Pending')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->latest()
            ->get();
        return view('backend.customer.orderManagement.new_order', compact('order'));
    }

    public function inprogress_order(Request $request)
    {
        $id = Auth()->user()->id;


        $order = Orders::where('user_id', $id)->whereIn('order_status', ['In-Progress', 'Completed'])
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->latest()
            ->get();

        return view('backend.customer.orderManagement.inprogress_order', compact('order'));
    }


    public function revision_order(Request $request)
    {
        $id = Auth()->user()->id;

        // $order = Orders::where('user_id', $id)->where('order_status', 'Revision')->get();
        $order = Orders::where('user_id', $id)->where('order_status', 'Revision')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->latest()
            ->get();

        return view('backend.customer.orderManagement.revision_order', compact('order'));
    }

    public function delivered_order(Request $request)
    {
        $id = Auth()->user()->id;
        // $order = Orders::where('user_id', $id)->where('order_status', 'Delivered')->get();
        $order = Orders::where('user_id', $id)->where('order_status', 'Delivered')
            ->when($request->order_id != null, function ($q) use ($request) {
                return $q->where('order_id', $request->order_id);
            })
            ->when($request->topic != null, function ($q) use ($request) {
                return $q->where('topic', $request->topic);
            })
            ->latest()
            ->get();

        return view('backend.customer.orderManagement.delivered_order', compact('order'));
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


    public function order_detail($id)
    {
        $order = Orders::where('order_id', $id)->first();
        if(!$order)
        {
            abort(404);
        }
        if(Auth::user()->id != $order->user_id)
        {
            abort(404);
        }
        $language = Language::where('title',$order->language_spelling)->first();
        $folder = Folder::where('name', $order->order_id)->first();
        $feedback = Feedback::where('order_id', $order->order_id)->get();
        $order['feedback'] = $feedback;

        if ($order) {
            $request = Rewrite_Request::where('order_id', '=', $order->order_id)->get();
            if ($request->count() > 0) {
                $order['request'] = $request;
            }
        }
        $used_subscription = User_Subscription::where('user_id', '=', Auth()->user()->id)->first();
        if ($used_subscription) {
            $subscription = Subscription::find($used_subscription->subscription_id);
            $used_subscription->subscription = $subscription;
        }

        $completedOrders = FileChatGPT::where('status',1)->where('order_id', $id)->get();
        // dd($completedOrders);
        return view('backend.customer.orderManagement.order_detail', compact('order', 'used_subscription','language','folder','completedOrders'));
    }

    public function order_detail_request(Request $request)
    {

        if ($request->text != null) {
            $rewrite = Rewrite_Request::create([
                'order_id' => $request->order_id,
                'request' => $request->text,

            ]);
            return response()->json(['success' => true, 'message' => 'Create Successfully']);
        } else {
            return response()->json(['success' => false, 'message' => 'Empty Request'], 404);
        }
    }



    public function order_detail_review(Request $request)
    {
        $feedback = Review::where('order_id', '=', $request->order_id)->where('type', '=', $request->type)->first();
        if ($feedback) {
            return response()->json(['success' => true, 'message' => 'Feedback sent Successfully']);
        } else {
            $rewrite = Review::create([
                'order_id' => $request->order_id,
                'feedback' => $request->feedback,
                'type' => $request->type,
            ]);
            return response()->json(['success' => true, 'message' => 'Feedback sent Successfully']);
        }
    }

    public function order_detail_feedback(Request $request)
    {

        $rewrite = Feedback::create([
            'order_id' => $request->order_id,
            'feedback' => $request->feedback,
        ]);

        if ($rewrite) {
            $email = Email::where('type', '=', 'Order Place Confirmation')->first(); // change to feedback template
            $user = User::findOrFail(Auth::user()->id);

            if ($email) {
                Mail::to($user->email)->send(new EmailTemplate($user, $email));
            }
        }

        return response()->json(['message' => 'Feedback sent successfully']);
        // return redirect()->route('customer.order-detail', $request->order_id)->with('success', 'Feedback sent Successfully');
    }


    public function update_detail_order(Request $request, $id)
    {

        $order = Orders::where('order_id', '=', $id)->first();
        if ($order) {
            $originalDate = $request->deadline;

            $carbonDate = Carbon::parse($originalDate);

            $formattedDate = $carbonDate->format('Y-m-d H:i');


            $new_page = (float)$order->number_of_pages + (float)$request->page;
            $order->number_of_pages = $new_page;
            $order->deadline = $formattedDate;
            $order->save();
            $user = User::find($order->user_id);
            $invoice = Invoice::create([
                'Name' => $user->name,
                'email' => $order->email,
                'page' => $request->page,
                'price_per_page' => $order->cost_per_page,
                'item_name' => 'Order',
                'total' => $request->total,
                'to_name' => 'Admin',
                'to_email' => 'admin@gmail.com',
                'order_id' => $order->order_id
            ]);
            return response()->json(['success' => true, 'message' => 'edit Successfully']);
        } else {

            return response()->json(['success' => false, 'message' => 'order id not found'], 404);
        }
    }


    public function select_plan($sub_id)
    {


        $user = User::find(auth()->user()->id);

        $checkUserSub = User_Subscription::where('user_id', $user->id)->first();

        if ($checkUserSub) {

            $currentDate = now()->format('Y-m-d H:i:s');
            if ($checkUserSub->due_date > $currentDate) {
                return response()->json(['message' => 'You Already Purchased Packages']);
            } else {
                $subs = Subscription::find($sub_id);
                $checkUserSub->subscription_id = $sub_id;
                $checkUserSub->total_pages = (float)$subs->total_subscription + (float)$checkUserSub->remaining_pages;
                $checkUserSub->rollover_pages = $subs->rollover_limit;
                $checkUserSub->remaining_pages = (float)$subs->total_subscription + (float)$checkUserSub->remaining_pages;
                $checkUserSub->remaining_rollover_pages = $subs->rollover_limit;
                $checkUserSub->status = 'Active';
                $checkUserSub->due_date = now()->addDays((int)$subs->set_time)->toDateTimeString();
                $checkUserSub->save();
                $user->subscription_id = $sub_id;
                $user->save();

                $email = Email::where('type', 'Subscription Renew')->first();

                if ($email) {
                    Mail::to($user->email)->send(new EmailTemplate($user, $email));
                }


                // return view('backend.customer.index')->with('message', 'Successfully Updated Subscription');


                return response()->json(['message' => 'Successfully Updated Subscription']);


            }
        } else {
            $user->customer = "Subscription";
            $user->subscription_id = $sub_id;
            $user->save();

            $subs = Subscription::find($sub_id);

            $dueDate = now()->addDays((int)$subs->set_time)->toDateTimeString();

            User_Subscription::create([
                'subscription_id' => $sub_id,
                'total_pages' => $subs->min_page,
                'rollover_pages' => $subs->rollover_limit,
                'remaining_pages' => $subs->min_page,
                'remaining_rollover_pages' => $subs->rollover_limit,
                'user_id' => $user->id,
                'status' => 'Active',
                'due_date' => $dueDate
            ]);

            $email = Email::where('type', 'Subscription Buy')->first();

            if ($email) {
                Mail::to($user->email)->send(new EmailTemplate($user, $email));
            }






            // return view('backend.customer.index')->with('message', 'Successfully Subscribed');

            return response()->json(['message' => 'Successfully Subscribed']);
        }
    }

    public function cancel_subscription($id)
    {
        $subscription = User_Subscription::find($id);
        $customer_id = Auth::user()->id;

        if (!$subscription) {
            $notification = array(
                'message' => 'Subscription not found',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $user = User::find($subscription->user_id);

        if ($subscription->status == 'Active') {
            $subscription->status = 'InActive';

            $email = Email::where('type', 'Subscription Cancel')->first();

            if ($email) {
                Mail::to($user->email)->send(new EmailTemplate($user, $email));
            }

            $notification = array(
                'message' => 'Subscription cancelled',
                'alert-type' => 'success'
            );
        } elseif ($subscription->status == 'InActive') {
            // Check if due date is greater than current date
            $dueDate = $subscription->due_date;
            $currentDate = now()->format('Y-m-d H:i:s');

            if ($dueDate > $currentDate) {
                $subscription->status = 'Active';
                $email = Email::where('type', 'Subscription Renew')->first();

                if ($email) {
                    Mail::to($user->email)->send(new EmailTemplate($user, $email));
                }

                $notification = array(
                    'message' => 'Subscription renewed',
                    'alert-type' => 'success'
                );
            } else {
                $notification = array(
                    'message' => 'Subscription due date has passed',
                    'alert-type' => 'error'
                );
                return redirect()->route('front.subscriptions')->with($notification);
            }
        }

        $subscription->save();

        return redirect()->back()->with($notification);
    }
    public function date_check(Request $request)
    {
        $current = Carbon::now(); // Get the current date and time
        $date = Carbon::parse($request->date); // Parse the date from the request

        // Calculate the difference in days
        $dayDiff = $current->diffInDays($date);
        $data = '';
        $pricing = Pricing::all();
        if ($pricing->count() > 0) {
            foreach ($pricing as $p) {
                if ($p->max == 'Later') {
                    $p->max = $dayDiff;
                }
                if ($p->min <= $dayDiff && $p->max >= $dayDiff) {
                    $data = $p;
                }
            }
            return response()->json(['success' => true, 'message' => $data]);
        } else {
            return response()->json(['success' => false, 'message' => 'pricing not found'], 404);
        }
    }
    public function date_check_pkg(Request $request)
    {
        $current = Carbon::now(); // Get the current date and time
        $date = Carbon::parse($request->date); // Parse the date from the request

        // Calculate the difference in days
        $dayDiff = $current->diffInDays($date);
        $data = '';
        $pricing = PricingPakage::all();
        if ($pricing->count() > 0) {
            foreach ($pricing as $p) {
                if ($p->max == 'Later') {
                    $p->max = $dayDiff;
                }
                if ($p->min <= $dayDiff && $p->max >= $dayDiff) {
                    $data = $p;
                }
            }
            return response()->json(['success' => true, 'message' => $data]);
        } else {
            return response()->json(['success' => false, 'message' => 'pricing not found'], 404);
        }
    }
    public function check_package($sub_id)
    {
        $user = User::find(auth()->user()->id);

        $checkUserSub = User_Subscription::where('user_id', $user->id)->first();

        if ($checkUserSub) {
            $currentDate = now()->format('Y-m-d H:i:s');

            if($checkUserSub->remaining_pages === 0){
                return response()->json(['message' => 'Upgrade Packages'], 200);
            }else{
                if ($checkUserSub->due_date > $currentDate) {
                    return response()->json(['message' => 'You Already Purchased Packages'], 400);
                } else {
                    return response()->json(['message' => 'Upgrade Packages'], 200);
                }
            }


        } else {
            return response()->json(['message' => 'Packages'], 200);
        }
    }

    public function send_invoice($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject,$noofpage)
    {
       // dd($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject);
        try{
            $createdAt = $invoice->created_at;
            $orderid = $orderidexplode;
            $dueDate = now()->addDays((int)$subs->set_time)->toDateTimeString();


            $invoiceNumber = $invoice_id;
            $receiptNumber = $receipt_id;
            $dateOfIssue = $createdAt;
            $dueDate = $dueDate;
            $orderid = $orderid;

            $customerName =$user->name;
            $customerEmail = $user->email;
            $customerAdress = $user->address_1.''.$user->address_2;

            $itemName = $subs->subscription_name;

           $toalamountsub =  $subs->cost_per_page * $subs->min_page;



            $totalPages = $subs->min_page;

            $subTotal = $transaction->merchantAmount;

           $discounttotalamount = $toalamountsub - $subTotal;

            $pricePerPage = ($totalPages != 0) ? ($subTotal / $noofpage) : 0;

            $payment_status ='Paid';




            $discount = 0.0;
            $purchaseDate = now()->format('Y-m-d');
            $total = $transaction->merchantAmount;

            $data = [
                'invoiceNumber' => $invoiceNumber,
                'receiptNumber' => $receiptNumber,
                'dateOfIssue' => $dateOfIssue,
                'dueDate' => $dueDate,
                'customerName' => $customerName,
                'customerEmail' => $customerEmail,
                'customerAdress' => $customerAdress,
                'orderid' => $orderid,
                'itemName' => $itemName,
                'totalPages' => $noofpage,
                'pricePerPage' => $pricePerPage,
                'payment_status' => $payment_status,
                'subTotal' => $subTotal,
                'discount' => $discount,
                'total' => $total,
                'discounttotalamount' => $discounttotalamount,
            ];



            $subject = "Welcome to Your New Writing Space Package – Thank You for Your Purchase!";
            Mail::to($user->email)->send(new PkgInvoiceEmailTemplate(
                $data,$data,
                $subject,
                $emailContent
            ));
        }
        catch(\Exception $e){
            dd($e);
        }

    }
    public function send_invoice_pay_sub($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject,$noofpage)
    {
       // dd($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject);
        try{
            $createdAt = $invoice->created_at;
            $orderid = $orderidexplode;
            $dueDate = now()->addDays((int)$subs->set_time)->toDateTimeString();


            $invoiceNumber = $invoice_id;
            $receiptNumber = $receipt_id;
            $dateOfIssue = $createdAt;
            $dueDate = $dueDate;
            $orderid = $orderid;

            $customerName =$user->name;
            $customerEmail = $user->email;
            $customerAdress = $user->address_1.''.$user->address_2;

            $itemName = $subs->subscription_name;

           $toalamountsub =  $subs->cost_per_page * $subs->min_page;



            $totalPages = $subs->min_page;

            $subTotal = $transaction->merchantAmount;

           $discounttotalamount = $toalamountsub - $subTotal;

            $pricePerPage = ($totalPages != 0) ? ($subTotal / $noofpage) : 0;

            $payment_status ='Paid';




            $discount = 0.0;
            $purchaseDate = now()->format('Y-m-d');
            $total = $transaction->merchantAmount;

            $data = [
                'invoiceNumber' => $invoiceNumber,
                'receiptNumber' => $receiptNumber,
                'dateOfIssue' => $dateOfIssue,
                'dueDate' => $dueDate,
                'customerName' => $customerName,
                'customerEmail' => $customerEmail,
                'customerAdress' => $customerAdress,
                'orderid' => $orderid,
                'itemName' => 'Package Purchase',
                'totalPages' => $noofpage,
                'pricePerPage' => $pricePerPage,
                'payment_status' => $payment_status,
                'subTotal' => $subTotal,
                'discount' => $discount,
                'total' => $total,
                'discounttotalamount' => $discounttotalamount,
            ];



            $subject = "Welcome to Your New Writing Space Package – Thank You for Your Purchase!";
            Mail::to($user->email)->send(new PkgInvoiceEmailTemplate(
                $data,$data,
                $subject,
                $emailContent
            ));
        }
        catch(\Exception $e){
            dd($e);
        }

    }
    public function send_invoice_just_Add_page($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject,$noofpage)
    {
       // dd($invoice_id, $receipt_id, $orderidexplode, $subs, $invoice, $transaction, $user,$emailContent,$subject);
        try{
            $createdAt = $invoice->created_at;
            $orderid = $orderidexplode;
            $dueDate = now()->addDays((int)$subs->set_time)->toDateTimeString();


            $invoiceNumber = $invoice_id;
            $receiptNumber = $receipt_id;
            $dateOfIssue = $createdAt;
            $dueDate = $dueDate;
            $orderid = $orderid;

            $customerName =$user->name;
            $customerEmail = $user->email;
            $customerAdress = $user->address_1.''.$user->address_2;

           $itemName = 'Order ID - ' . $orderid . ' - Add pages';

            // $itemName = $subs->subscription_name;

           $toalamountsub =  $subs->cost_per_page * $subs->min_page;



            $totalPages = $subs->min_page;

            $subTotal = $transaction->merchantAmount;

           $discounttotalamount = $toalamountsub - $subTotal;

            $pricePerPage = ($totalPages != 0) ? ($subTotal / $noofpage) : 0;

            $payment_status ='Paid';




            $discount = 0.0;
            $purchaseDate = now()->format('Y-m-d');
            $total = $transaction->merchantAmount;

            $data = [
                'invoiceNumber' => $invoiceNumber,
                'receiptNumber' => $receiptNumber,
                'dateOfIssue' => $dateOfIssue,
                'dueDate' => $dueDate,
                'customerName' => $customerName,
                'customerEmail' => $customerEmail,
                'customerAdress' => $customerAdress,
                'orderid' => $orderid,
                'itemName' => $itemName,
                'totalPages' => $noofpage,
                'pricePerPage' => $pricePerPage,
                'payment_status' => $payment_status,
                'subTotal' => $subTotal,
                'discount' => $discount,
                'total' => $total,
                'discounttotalamount' => '0.0',
            ];



            $subject = "Welcome to Your New Writing Space Package – Thank You for Your Purchase!";
            Mail::to($user->email)->send(new PkgInvoiceEmailTemplate(
                $data,$data,
                $subject,
                $emailContent
            ));
        }
        catch(\Exception $e){
            dd($e);
        }

    }

}
