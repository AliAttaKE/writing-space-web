<?php

namespace App\Http\Controllers\Backend\Customer\MessageController;

use App\Events\ChatMessageSent;
use App\Events\SendMessage;
use App\Http\Controllers\Controller;
use App\Models\Inbox;
use App\Models\Message;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Chatify\Facades\ChatifyMessenger as Chatify;
use App\Models\Email;
use App\Mail\EmailTemplate;
use Illuminate\Support\Facades\Mail;


class MessageManagementController extends Controller
{
    public function index()
    {
        //$inbox=Inbox::all();
        $inbox = Inbox::paginate(5);
        $data = [];


        if ($inbox->count() > 0) {
            foreach ($inbox as $i) {
                $count = 0;
                $status = Orders::where('order_id', $i->order_id)->first();

                if ($status->user_id === Auth()->user()->id) {


                    $i['order_status'] = $status->order_status;
                    $message = Message::where('order_id', $i->order_id)->get();
                    foreach ($message as $m) {
                        if ($m->receive_id === Auth()->user()->id) {
                            if ($m->status == 'UnRead') {
                                $count++;
                            }
                        }
                    }
                    $i['New_message'] = $count;
                    $data[] = $i;
                }
            }
        }
        return view('backend.customer.messageManagement.index', compact('data'));
    }


    // public function sendMessage(Request $request)
    // {


    //     $input = $request->all();

       
        
    //     $input['sender_id'] = Auth()->user()->id;
    //     $user = User::find(Auth()->user()->id);
    //     $admin_email = User::where('role', 'admin')->first()->email;

    //     if ($user->role == 'admin') {
    //         $order = Orders::where('order_id', $request['order_id'])->first();
    //         $input['receive_id'] = $order->user_id;
    //     } else {
    //         $admin = User::where('role', 'admin')->first();
    //         $input['receive_id'] = $admin->id;
    //     }

    //     if ($request->message) {
    //         $input['message'] = $request->message;
    //     }

    //     if ($request->media) {
    //         $uploadedFiles = [];

    //         foreach ($request->file('media') as $file) {
    //             $uploadedFile = new \stdClass(); // Use \stdClass directly without the namespace

    //             $extension = $file->extension(); // Get the file extension

    //             // Determine the type of the file based on its extension
    //             if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp'])) {
    //                 $uploadedFile->type = 'image';
    //             } elseif (in_array($extension, ['mp4', 'avi', 'mov', 'bin'])) {
    //                 $uploadedFile->type = 'video';
    //             } else {
    //                 $uploadedFile->type = 'word';
    //             }
    //             $uploadedImage = rand(10000000, 999999990) . '.' . $file->extension();
    //             $path = $file->storeAs('media', $uploadedImage, 'public');
    //             $uploadedFile->url =  $path;

    //             $uploadedFiles[] = $uploadedFile;
    //         }

    //         $input['media'] = json_encode($uploadedFiles);
    //     }

    //     $input['send_by'] = $request->send_by;

    //     $message = Message::create($input);
    //     $receiver = $message->receive_id;
    //     $status = 'New Message Arrive!';
    //     $order = $message->order_id;
    //     event(new SendMessage($receiver, $status, $order));
       
    //     $inbox = Inbox::where('order_id', $request['order_id'])->first();

    //     if ($inbox) {
    //         $inbox->sender_id = $input['sender_id'];
    //         $inbox->receive_id = $input['receive_id'];

    //         if ($input['message']) {
    //             $inbox->message = $input['message'];
    //         }

    //         if ($request['media']) {

    //             $inbox->media = json_encode($request['media']);
    //         }
    //         $inbox->save();
    //     } else {
    //         $inbox_create = Inbox::create($input);
           
    //     }

    //     return response()->json(['success' => true, 'message' => $message]);
    // }
    
    public function sendMessage(Request $request)
{
    $input = $request->all();
    $input['sender_id'] = auth()->user()->id;
    $user = User::find(auth()->user()->id);

    // Determine the receiver
    if ($user->role == 'admin') {
        $order = Orders::where('order_id', $request['order_id'])->first();
        $input['receive_id'] = $order ? $order->user_id : null;
    } else {
        $admin = User::where('role', 'admin')->first();
        $input['receive_id'] = $admin->id;
    }

    // Handle the message content
    if ($request->message) {
        $input['message'] = $request->message;
    }

    // Handle file uploads
    if ($request->hasFile('media')) {
        $uploadedFiles = [];
        foreach ($request->file('media') as $file) {
            $uploadedFile = new \stdClass();

            $extension = $file->extension();
            if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp'])) {
                $uploadedFile->type = 'image';
            } elseif (in_array($extension, ['mp4', 'avi', 'mov', 'bin'])) {
                $uploadedFile->type = 'video';
            } else {
                $uploadedFile->type = 'document';
            }

            $uploadedImage = rand(10000000, 999999990) . '.' . $extension;
            $path = $file->storeAs('media', $uploadedImage, 'public');
            $uploadedFile->url = $path;

            $uploadedFiles[] = $uploadedFile;
        }

        $input['media'] = json_encode($uploadedFiles);
    }

    // Save the message
    $message = Message::create($input);

    // Fire the event
    event(new SendMessage($message->receive_id, 'New Message Arrived!', $message->order_id));

    // Update or create the inbox entry
    $inbox = Inbox::firstOrNew(['order_id' => $request['order_id']]);
    $inbox->sender_id = $input['sender_id'];
    $inbox->receive_id = $input['receive_id'];
    $inbox->message = $request->message ?? $inbox->message;
    $inbox->media = $input['media'] ?? $inbox->media;
    $inbox->save();

    // Prepare the email content
    $admin_email_get = User::where('role', 'admin')->first()->email;
    $messageContent = $request->message ?? '(No message provided)';

    $emailContent = "
        <html>
            <body>
                <p>Hi,</p>
                <p>You've received a new message in your account at Writing Space:</p>
                <p><strong>From:</strong> admin<br>
                   <strong>Order ID:</strong> {$message->order_id}<br>
                   <strong>Message:</strong><br> {$messageContent}</p>
                <p><strong>Next Steps:</strong></p>
                <p>
                    Review the message and respond through your dashboard under the “Messages” section.<br>
                    Communication is key to making the most of our services!
                </p>
                <p>If you have any questions, our support team is just an email away. We're here to help!</p>
                <p>Warm regards,<br>
                Customer Success Team<br>
                Writing Space</p>
            </body>
        </html>
    ";

    // Send the email
    Mail::html($emailContent, function ($message) use ($admin_email_get) {
        $message->to($admin_email_get)
            ->subject('You\'ve Got a New Message at Writing Space!');
    });

    // Return a success response
    return response()->json(['success' => true, 'message' => $message]);
}


    public function new_message()
    {
        $id = Auth()->user()->id;
        $order = Orders::where('user_id', $id)->get();
        $data = [];
        foreach ($order as $o) {
            $inbox = Inbox::where('order_id', $o->order_id)->first();
            if ($inbox) {
                $data[] = $inbox;
            }
        }
        return view('backend.customer.messageManagement.newmessage', compact('order', 'data'));
    }

    public function reply_message($order_id)
    {
        $message = Message::where('order_id', $order_id)->get();
        foreach ($message as $m) {
            if ($m->receive_id === Auth()->user()->id) {
                $m->status = 'Read';
                $m->save();
            }
        }
        $order = Orders::where('user_id', Auth()->user()->id)->get();
        $data = [];
        foreach ($order as $o) {
            $inbox = Inbox::where('order_id', $o->order_id)->first();
            if ($inbox) {
                $data[] = $inbox;
            }
        }
        return view('backend.customer.messageManagement.replymessage', compact('message', 'order_id', 'data'));
    }
}
