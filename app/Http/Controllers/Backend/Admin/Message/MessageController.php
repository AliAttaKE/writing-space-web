<?php

namespace App\Http\Controllers\Backend\Admin\Message;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use App\Models\Message;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatMessageSent;
use App\Events\SendMessage;
use Chatify\Facades\ChatifyMessenger as Chatify;
use App\Models\Email;
use App\Mail\EmailTemplate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class MessageController extends Controller
{


public function writerReply(Request $request)
{
    $rules = [
        'order_id' => 'required|integer|exists:orders,order_id',
        'send_to'  => 'required|in:Admin,Customer',   // Writer sirf Admin ya Customer ko reply karega
        'message'  => 'nullable|string',
        'media.*'  => 'nullable|file|mimes:pdf,docx,doc,txt,rtf,xls,xlsx,csv,pptx,jpeg,jpg,png,mp4,avi,mov,bin'
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors'  => $validator->errors()
        ], 422);
    }

    $input = $request->all();
    $input['send_by']  = 'Writer';  // Fixed
    $input['sender_id'] = Auth::id();

    // Receiver set karna
    if ($request->send_to === 'Admin') {
        $admin = User::where('role', 'admin')->first();
        if (!$admin) {
            return response()->json(['error' => 'Admin not found'], 404);
        }
        $input['receive_id'] = $admin->id;
    } elseif ($request->send_to === 'Customer') {
        $order = Orders::where('order_id', $request->order_id)->first();
        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }
        $input['receive_id'] = $order->user_id;
    }

    // Media Uploads
    if ($request->hasFile('media')) {
        $uploadedFiles = [];
        foreach ($request->file('media') as $file) {
            $uploadedFile = new \stdClass();
            $extension = $file->extension();

            $uploadedFile->type = in_array($extension, ['png','jpg','jpeg','gif','webp'])
                                ? 'image'
                                : (in_array($extension, ['mp4','avi','mov','bin'])
                                    ? 'video'
                                    : 'others');

            $fileName = uniqid().'.'.$extension;
            $path = $file->storeAs('media', $fileName, 'public');
            $uploadedFile->url = asset('storage/'.$path);

            $uploadedFiles[] = $uploadedFile;
        }
        $input['media'] = json_encode($uploadedFiles);
    }

    // Message create karo
    $message = Message::create($input);

    return response()->json([
        'success' => true,
        'message' => $message
    ]);
}


public function adminToWriterMessages($order_id)
{
 $messages = Message::where('order_id', $order_id)
    ->where(function($q) {
        $q->where('send_by', 'Writer')
          ->orWhere('send_to', 'Writer');
    })
    ->orderBy('created_at', 'desc')
    ->get();



    $messages->transform(function ($message) {
        // Receiver
        if ($message->receive_id) {
            $receiver = User::find($message->receive_id);
            $message->receiver_name   = $receiver->name ?? '';
            $message->receiver_avatar = $receiver->avatar ?? '';
            $message->receiver_role   = $receiver->role ?? '';
        }

        // Sender
        if ($message->sender_id) {
            $sender = User::find($message->sender_id);
            $message->sender_name   = $sender->name ?? '';
            $message->sender_avatar = $sender->avatar ?? '';
            $message->sender_role   = $sender->role ?? '';
        }

        // Media Handling (agar hai to full URL bana do)
        if (!empty($message->media)) {
            $mediaFiles = json_decode($message->media, true);
            if (is_array($mediaFiles)) {
                foreach ($mediaFiles as &$file) {
                    $file['full_url'] = asset('storage/' . $file['url']);
                }
                $message->media = $mediaFiles;
            }
        }

        return $message;
    });

    return response()->json([
        'success' => true,
        'messages' => $messages
    ]);
}

    public function index()
    {
        $inbox = Inbox::latest()->paginate(5);
        $data = [];

        if ($inbox->count() > 0) {
            foreach ($inbox as $i) {
                $count = 0;
                $status = Orders::where('order_id', $i->order_id)->first();

               // $i['order_status'] = $status->order_status;
               $i['order_status'] = $status ? $status->order_status : 'Unknown';
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
        return view('backend.admin.messageManagement.index', compact('data'));
    }
//     public function sendMessage(Request $request)
//     {


//         $input = $request->all();

//         $input['sender_id'] = Auth()->user()->id;
//         $user = User::find(Auth()->user()->id);
//         if ($user->role == 'admin') {
//             $order = Orders::where('order_id', $request['order_id'])->first();
//             $input['receive_id'] = $order->user_id;
//         } else {
//             $admin = User::where('role', 'admin')->first();
//             $input['receive_id'] = $admin->id;
//         }

//         if ($request->message) {
//             $input['message'] = $request->message;
//         }

//         if ($request->media) {
//             $uploadedFiles = [];

//             foreach ($request->file('media') as $file) {
//                 $uploadedFile = new \stdClass(); // Use \stdClass directly without the namespace

//                 $extension = $file->extension(); // Get the file extension

//                 // Determine the type of the file based on its extension
//                 if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp'])) {
//                     $uploadedFile->type = 'image';
//                 } elseif (in_array($extension, ['mp4', 'avi', 'mov', 'bin'])) {
//                     $uploadedFile->type = 'video';
//                 } else {
//                     $uploadedFile->type = 'others';
//                 }
//                 $uploadedImage = rand(10000000, 999999990) . '.' . $file->extension();
//                 $path = $file->storeAs('media', $uploadedImage, 'public');
//                 $uploadedFile->url =  $path;

//                 $uploadedFiles[] = $uploadedFile;
//             }

//             $input['media'] = json_encode($uploadedFiles);
//         }
//         $message = Message::create($input);

//         //send email to customer;



// $data['message_content'] = 'message check.'; // Dynamic message content



//         $data['customer_name'] = $user->name;
//         $data['customer_email'] = $user->email;
//         $data['sender_role'] = 'Admin';
//         $data['order_id'] = $input['order_id'];
//         $email = Email::where('type','new_message_from_admin_to_customer')->first();
//         // if ($email) {
//         //     Mail::to($data['customer_email'])->send(new EmailTemplate($email, $data));
//         // }


//         $emailContent = "
//     <html>
//         <body>
//             <p>Hi,</p>
//             <p>We're keeping the lines of communication open at Writing Space! You've just received a new message in your account. Here’s what you need to know:</p>
//             <p><strong>From:</strong> {$data['sender_role']}<br>
//               <strong>Order ID:</strong> {$data['order_id']}<br>
//               <strong>Message:</strong> <br>{$data['message_content']}</p>
//             <p><strong>What’s Next?</strong></p>
//             <p>
//                 We encourage you to review the message and respond if necessary. Staying engaged and communicating effectively is key to making the most of our services and ensuring your academic journey is smooth.<br>
//                 You can reply directly through your dashboard under the “Messages” section. It’s easy, fast, and secure.
//             </p>
//             <p>If you have any questions or need further assistance, our support team is just an email away. We're here to help you succeed!</p>
//             <p>Thanks for choosing Writing Space as your trusted academic partner.</p>
//             <p>Warm regards,<br>
//             Customer Success Team<br>
//             Writing Space</p>
//         </body>
//     </html>
// ";

// // Send the email
// Mail::html($emailContent, function ($message) use ($data) {
//     $message->to($data['customer_email'])
//             ->subject('You\'ve Got a New Message at Writing Space!');
// });


//         $receiver = $message->receive_id;
//         $status = 'New Message Arrive!';
//         $order = $message->order_id;
//         event(new SendMessage($receiver, $status, $order));
//         $inbox = Inbox::where('order_id', $request['order_id'])->first();

//         if ($inbox) {
//             $inbox->sender_id = $input['sender_id'];
//             $inbox->receive_id = $input['receive_id'];

//             if ($input['message']) {
//                 $inbox->message = $input['message'];
//             }

//             if ($request['media']) {

//                 $inbox->media = json_encode($request['media']);
//             }
//             $inbox->save();
//         } else {
//             $inbox_create = Inbox::create($input);
//         }

//         //return response()->json(['success' => true, 'message' => $message]);
//         return response()->json(['success' => 'Message added successfully!', 'message' => $message]);
//     }


public function sendMessage(Request $request)
{


    // dd($request->All());
    $rules = [
        'media.*' => 'nullable|file|mimes:pdf,docx,doc,txt,rtf,xls,xlsx,csv,pptx,jpeg,jpg,png',
        'send_as' => 'required|in:Admin,Writer',
        'send_to' => 'required|in:Admin,Writer,Customer',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors'  => $validator->errors()
        ], 422);
    }

    $input = $request->all();
    $input['sender_id'] = Auth::user()->id;
    $user = User::find($input['sender_id']);

    // Determine receiver based on send_to
    if ($request->send_to === 'Customer') {
        $order = Orders::where('order_id', $request['order_id'])->first();
        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }
        $input['receive_id'] = $order->user_id;
    } elseif ($request->send_to === 'Admin') {
        $admin = User::where('role', 'admin')->first();
        if (!$admin) {
            return response()->json(['error' => 'Admin not found'], 404);
        }
        $input['receive_id'] = $admin->id;
    } elseif ($request->send_to === 'Writer') {
        $writer = User::where('role', 'writer')->first();
        if (!$writer) {
            return response()->json(['error' => 'Writer not found'], 404);
        }
        $input['receive_id'] = $writer->id;
    }

    // Validate if the receiving user exists
    $userCheck = User::find($input['receive_id']);
    if (!$userCheck) {
        return response()->json(['error' => 'Receiver not found'], 404);
    }

    // Add message content
    if ($request->message) {
        $input['message'] = $request->message;
    }

    // Handle media uploads if any
    if ($request->hasFile('media')) {
        $uploadedFiles = [];
        foreach ($request->file('media') as $file) {
            $uploadedFile = new \stdClass();

            $extension = $file->extension();
            $uploadedFile->type = in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp']) ? 'image' :
                                (in_array($extension, ['mp4', 'avi', 'mov', 'bin']) ? 'video' : 'others');

            $fileName = uniqid() . '.' . $extension;
            $path = $file->storeAs('media', $fileName, 'public');
            $uploadedFile->url = $path;

            $uploadedFiles[] = $uploadedFile;
        }
        $input['media'] = json_encode($uploadedFiles);
    }

    // Create the message
    $message = Message::create($input);

    // Prepare email data
    $data = [
        'customer_name'   => $user->name,
        'customer_email'  => $user->email,
        'sender_role'     => $request->send_as,
        'order_id'        => $request['order_id'],
        'message_content' => $request->message
    ];

    $recipientName = $userCheck->name;

    $emailContent = "
    <html>
        <body>
            <p>Hi {$recipientName},</p>

            <p>We’re keeping the lines of communication open at Writing Space! You’ve just received a new message in your account. Here’s what you need to know:</p>

            <p>
                <strong>From:</strong> {$data['sender_role']}<br>
                <strong>To:</strong> {$request->send_to}<br>
                <strong>Order ID:</strong> {$data['order_id']}
            </p>

            <p><strong>Message:</strong></p>
            <p>{$data['message_content']}</p>

            <p><strong>What’s Next?</strong></p>
            <p>
                We encourage you to review the message and respond if needed. Staying engaged and communicating effectively is key to getting the most out of our services and ensuring a smooth academic experience.
            </p>

            <p>
                You can reply directly through your dashboard under the <strong>“Messages”</strong> section. It’s simple, fast, and secure.
            </p>

            <p>
                If you have any questions or need assistance, our support team is just an email away. We're here to help you succeed!
            </p>

            <p>Thanks for choosing Writing Space as your trusted academic partner.</p>

            <p>
                Warm regards,<br>
                Customer Success Team<br>
                Writing Space
            </p>
        </body>
    </html>
    ";

    // Send email
    Mail::html($emailContent, function ($mail) use ($userCheck) {
        $mail->to($userCheck->email)
             ->subject('You\'ve Got a New Message at Writing Space!');
    });

    // Broadcast message event
    $receiver = $message->receive_id;
    $status = 'New Message Arrive!';
    $order = $message->order_id;
    event(new SendMessage($receiver, $status, $order));

    // Update or create inbox
    Inbox::updateOrCreate(
        ['order_id' => $request['order_id']],
        [
            'sender_id' => $input['sender_id'],
            'receive_id' => $input['receive_id'],
            'message' => $input['message'] ?? null,
            'media' => $input['media'] ?? null
        ]
    );

    return response()->json(['success' => true, 'message' => $message]);
}

    // public function sendMessage(Request $request)
    // {
    // $rules = [
    //     'media.*' => 'nullable|file|mimes:pdf,docx,doc,txt,rtf,xls,xlsx,csv,pptx,jpeg,jpg',
    // ];
        
    //     $validator = Validator::make($request->all(), $rules);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'errors'  => $validator->errors()
    //         ], 422);
    //     }
    //     $input = $request->all();
    //     $input['sender_id'] = Auth::user()->id; // Use Auth facade for consistency
    //     $user = User::find($input['sender_id']);

    //     if ($user->role === 'admin') {
    //         $order = Orders::where('order_id', $request['order_id'])->first();
    //         if (!$order) {
    //             return response()->json(['error' => 'Order not found'], 404);
    //         }
    //         $input['receive_id'] = $order->user_id;
    //     } else {
    //         $admin = User::where('role', 'admin')->first();
    //         if (!$admin) {
    //             return response()->json(['error' => 'Admin not found'], 404);
    //         }
    //         $input['receive_id'] = $admin->id;
    //     }

    //     // Validate if the receiving user exists
    //     $userCheck = User::find($input['receive_id']);
    //     if (!$userCheck) {
    //         return response()->json(['error' => 'Receiver not found'], 404);
    //     }

    //     // Add message content
    //     if ($request->message) {
    //         $input['message'] = $request->message;
    //     }

    //     // Handle media uploads if any
    //     if ($request->hasFile('media')) {
    //         $uploadedFiles = [];
    //         foreach ($request->file('media') as $file) {
    //             $uploadedFile = new \stdClass();

    //             $extension = $file->extension();
    //             $uploadedFile->type = in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp']) ? 'image' :
    //                                 (in_array($extension, ['mp4', 'avi', 'mov', 'bin']) ? 'video' : 'others');

    //             $fileName = uniqid() . '.' . $extension;
    //             $path = $file->storeAs('media', $fileName, 'public');
    //             $uploadedFile->url = $path;

    //             $uploadedFiles[] = $uploadedFile;
    //         }
    //         $input['media'] = json_encode($uploadedFiles);
    //     }

    //     // Create the message
    //     $message = Message::create($input);

    //     // Prepare email data
    //     $data = [
    //         'customer_name' => $user->name,
    //         'customer_email' => $user->email,
    //         'sender_role' => $user->role === 'admin' ? 'Admin' : 'Customer',
    //         'order_id' => $request['order_id'],
    //         'message_content' => $request->message
    //     ];

    //     $senderRole = ($input['statusRadio'] == 'Admin') ? 'Admin' : 'Writer';
    //     $recipientName = auth()->user()->name;

    

    //     $emailContent = "
    //     <html>
    //         <body>
    //             <p>Hi ,</p>

    //             <p>We’re keeping the lines of communication open at Writing Space! You’ve just received a new message in your account. Here’s what you need to know:</p>

    //             <p>
    //                 <strong>From:</strong> {$senderRole}<br>
    //                 <strong>To:</strong> Customer<br>
    //                 <strong>Order ID:</strong> {$data['order_id']}
    //             </p>

    //             <p><strong>Message:</strong></p>
    //             <p>{$data['message_content']}</p>

    //             <p><strong>What’s Next?</strong></p>
    //             <p>
    //                 We encourage you to review the message and respond if needed. Staying engaged and communicating effectively is key to getting the most out of our services and ensuring a smooth academic experience.
    //             </p>

    //             <p>
    //                 You can reply directly through your dashboard under the <strong>“Messages”</strong> section. It’s simple, fast, and secure.
    //             </p>

    //             <p>
    //                 If you have any questions or need assistance, our support team is just an email away. We're here to help you succeed!
    //             </p>

    //             <p>Thanks for choosing Writing Space as your trusted academic partner.</p>

    //             <p>
    //                 Warm regards,<br>
    //                 Customer Success Team<br>
    //                 Writing Space
    //             </p>
    //         </body>
    //     </html>
    // ";


    //     // Send email
    //     Mail::html($emailContent, function ($mail) use ($userCheck) {
    //         $mail->to($userCheck->email)
    //             ->subject('You\'ve Got a New Message at Writing Space!');
    //     });

    //     // Broadcast message event
    //     $receiver = $message->receive_id;
    //     $status = 'New Message Arrive!';
    //     $order = $message->order_id;
    //     event(new SendMessage($receiver, $status, $order));

    //     // Update or create inbox
    //     Inbox::updateOrCreate(
    //         ['order_id' => $request['order_id']],
    //         [
    //             'sender_id' => $input['sender_id'],
    //             'receive_id' => $input['receive_id'],
    //             'message' => $input['message'] ?? null,
    //             'media' => $input['media'] ?? null
    //         ]
    //     );

    //     return response()->json(['success' => true, 'message' => $message]);
    // }




    public function new_message()
    {
        $order = Orders::latest()->get();
        $data = [];
        foreach ($order as $o) {
            $inbox = Inbox::where('order_id', $o->order_id)->first();
            if ($inbox) {
                $data[] = $inbox;
            }
        }
        return view('backend.admin.messageManagement.newmessage', compact('order', 'data'));
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
        $order = Orders::all();
        $data = [];
        foreach ($order as $o) {
            $inbox = Inbox::where('order_id', $o->order_id)->first();
            if ($inbox) {
                $data[] = $inbox;
            }
        }
        return view('backend.admin.messageManagement.replymessage', compact('message', 'order_id', 'data'));
    }
}
