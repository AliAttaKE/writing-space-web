<?php

namespace App\Http\Controllers;


use App\Models\FileChatGPT;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FileChatGPTController extends Controller
{
    public function index()
    {
        $files = FileChatGPT::all();
        return view('file_chat_gpts.index', compact('files'));
    }
    

    public function create()
    {
        $Orders = Orders::all();
        return view('file_chat_gpts.create',compact('Orders'));
    }

    public function approvedFiles()
{
    $approvedFiles = FileChatGPT::where('status', 1)
    ->where('user_id', auth()->id())
    ->get(); // Fetch files where status = 1
    return view('file_chat_gpts.approved', compact('approvedFiles'));
}

// public function store(Request $request)
// {
//     $request->validate([
//         'order_id' => 'required|exists:orders,order_id',
//         'title' => 'array',
//         'title.*' => 'nullable|string',
//         'file' => 'required|array',
//         'file.*' => 'required|file',
//         'status' => 'required|in:0,1',
//     ]);

//     $order = Orders::where('order_id', $request->order_id)->first();
//     $user_id = $order->user_id;

//     foreach ($request->file('file') as $index => $uploadedFile) {
//         $filePath = $uploadedFile->store('complete_order', 'public');

//         FileChatGPT::create([
//             'file_name' => $request->title[$index] ?? null,
//             'title' => $request->title[$index] ?? null,
//             'order_id' => $request->order_id,
//             'user_id' => $user_id,
//             'file_path' => $filePath,
//            'file_type' => $uploadedFile->getClientOriginalExtension(), 
//            'Size' => $this->formatFileSize($uploadedFile->getSize()),
//             'status' => $request->status,
//         ]);
//     }

//     // Check if status == 1 and update order status and send email
//     if ($request->status == 1) {
//         Orders::where('order_id', $order->order_id)->update(['order_status' => 'Delivered']);

//         $user = User::find($user_id); // Load user details
//         $orderId = $order->order_id;

//         if ($user) {
//        $emailSubject = 'Good News: Your Order ID ' . $orderId . ' Has Been Delivered!';
// $emailContent = "
//     <p>Hi {$user->name},</p>
//     <p>We are pleased to announce that your order ID {$orderId} has been delivered! You can now download and access your materials through your Writing Space dashboard.</p>
//     <p><strong>What’s Next?</strong></p>
//     <ul>
//         <li>We hope you find everything to your satisfaction. Please review your delivered materials in this order’s details page and let us know if there are any issues or further assistance needed.</li>
//         <li>If you’d like any small adjustments, you can post a free revision within 7 days and we’ll be happy to help.</li>
//     </ul>   
//     <p>Thank you for trusting us with your academic needs. We look forward to serving you again!</p>
//     <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";


//             Mail::html($emailContent, function ($message) use ($user, $emailSubject) {
//                 $message->to($user->email)->subject($emailSubject);
//             });
//         }
//     }

//     return redirect()->route('file_chat_gpts.index')->with('success', 'Files uploaded successfully.');
// }


public function store(Request $request)
{
    $request->validate([
        'order_id' => 'required|exists:orders,order_id',
        'title' => 'array',
        'title.*' => 'nullable|string',
        'file' => 'required|array',
        'file.*' => 'required|file',
        'status' => 'required|in:0,1',
    ]);

    $order = Orders::where('order_id', $request->order_id)->first();
    $user_id = $order->user_id;

    foreach ($request->file('file') as $index => $uploadedFile) {
        $filePath = $uploadedFile->store('complete_order', 'public');

        FileChatGPT::create([
            'file_name' => $request->title[$index] ?? null,
            'title' => $request->title[$index] ?? null,
            'order_id' => $request->order_id,
            'user_id' => $user_id,
            'file_path' => $filePath,
            'file_type' => $uploadedFile->getClientOriginalExtension(),
            'Size' => $this->formatFileSize($uploadedFile->getSize()),
            'status' => $request->status,
        ]);
    }

    // ✅ If delivered, update order status and send email based on payment_status
    if ($request->status == 1) {
        Orders::where('order_id', $order->order_id)->update(['order_status' => 'Delivered']);

        $user = User::find($user_id);
        $orderId = $order->order_id;

        if ($user) {
            // Check if the order is Free or Paid
            if ($order->payment_status === 'Free') {
                // 🟢 Free Order Email (same as deleverd_order function)
                $emailSubject = 'Your Paper is Delivered – Order ID-' . $orderId;
                $emailContent = "
                    <p>Hello {$user->name},</p>
                    <p>We’re pleased to let you know that your paper is now complete and delivered.</p>
                    <p>Order ID: {$orderId}</p>
                    <p>Attached you’ll find:</p>
                    <ul>
                        <li>Your custom-written paper</li>
                        <li>The official Turnitin plagiarism and AI-detection reports</li>
                    </ul>
                    <p><strong>Important Reminder:</strong></p>
                    <p>Writing Space retains full copyright ownership of this paper until payment is made. 
                    If payment is not received, we reserve the right to publish this paper online or repurpose it.</p>
                    <p><strong>How to make payment:</strong></p>
                    <ol>
                        <li>Log in to your Customer Panel</li>
                        <li>Navigate to the “Delivered Orders” page</li>
                        <li>Locate your order using Order ID: {$orderId}</li>
                        <li>Click “Pay Now” and complete your payment</li>
                    </ol>
                    <p>Thank you for choosing Writing Space. We look forward to supporting your academic success.</p>
                    <p>Best regards,<br>The Writing Space Team</p>";
            } else {
                // 💰 Paid Order Email
                $emailSubject = 'Good News: Your Order ID ' . $orderId . ' Has Been Delivered!';
                $emailContent = "
                    <p>Hi {$user->name},</p>
                    <p>We are pleased to announce that your order ID {$orderId} has been delivered! You can now download and access your materials through your Writing Space dashboard.</p>
                    <p><strong>What’s Next?</strong></p>
                    <ul>
                        <li>We hope you find everything to your satisfaction. Please review your delivered materials in this order’s details page and let us know if there are any issues or further assistance needed.</li>
                        <li>If you’d like any small adjustments, you can post a free revision within 7 days and we’ll be happy to help.</li>
                    </ul>   
                    <p>Thank you for trusting us with your academic needs. We look forward to serving you again!</p>
                    <p>Best regards,<br>Customer Success Team<br>Writing Space</p>";
            }

            // Send Email
            Mail::html($emailContent, function ($message) use ($user, $emailSubject) {
                $message->to($user->email)->subject($emailSubject);
            });
        }
    }

    return redirect()->route('file_chat_gpts.index')->with('success', 'Files uploaded successfully.');
}



private function formatFileSize($bytes)
{
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } else {
        return $bytes . ' bytes';
    }
}


    public function edit(FileChatGPT $fileChatGPT)
    {
        return view('file_chat_gpts.edit', compact('fileChatGPT'));
    }

    public function update(Request $request, FileChatGPT $fileChatGPT)
    {
        $request->validate([
            'file_name' => 'required|string|max:255',
            'title' => 'nullable|string',
        ]);

        $filePath = $fileChatGPT->file_path;

        if ($request->hasFile('file')) {
            Storage::delete($fileChatGPT->file_path);
            $filePath = $request->file('file')->store('uploads/files');
        }

        $fileChatGPT->update([
            'file_name' => $request->file_name,
            'title' => $request->title,
            'order_id' => $request->order_id,
            'file_path' => $filePath,
            'file_type' => $request->file->getMimeType(),
            'Size' => $request->file->getSize(),
        ]);

        return redirect()->route('file_chat_gpts.index')->with('success', 'File updated successfully.');
    }


// public function store_api(Request $request)
//     {
//         $validated = $request->validate([
//             'file_name' => 'required|array',
//             'file_name.*' => 'required|string|max:255',
          
//             'file' => 'required|array',
//             'file.*' => 'required|file',
//             'order_id' => 'required|exists:orders,order_id',
//         ]);
    
//         $order = Orders::where('order_id', $validated['order_id'])->firstOrFail();
//         $uploadedFiles = [];
    
//         foreach ($request->file('file') as $index => $file) {
//             $filePath = $file->store('complete_order', 'public');
    
//             $fileChat = FileChatGPT::create([
//                 'file_name' => $validated['file_name'][$index] ?? 'Untitled',  // Ensure string
//                 'title' => $validated['file_name'][$index] ?? null,  // Ensure string
//                 'order_id' => $validated['order_id'],
//                 'user_id' => $order->user_id,
//                 'file_path' => $filePath,
//                 'file_type' => $file->getMimeType(),
//                 'size' => $file->getSize(),
              
//             ]);
    
//             $uploadedFiles[] = $fileChat;
//         }
    
//         return response()->json([
//             'message' => 'Files uploaded successfully.',
//             'data' => $uploadedFiles,
//         ], 201);
//     }


public function store_api(Request $request)
{
    // Authenticate user with email and password
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'file_name' => 'required|array',
        'file_name.*' => 'required|string|max:255',
        'file' => 'required|array',
        'file.*' => 'required|file',
        'order_id' => 'required|exists:orders,order_id',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // ✅ Check if the user is admin
    if ($user->role !== 'admin') {
        return response()->json(['error' => 'Only admin can upload files.'], 403);
    }

    // Continue file upload
    $order = Orders::where('order_id', $request->order_id)->firstOrFail();
    $uploadedFiles = [];

    foreach ($request->file('file') as $index => $file) {
        $filePath = $file->store('complete_order', 'public');

        $fileChat = FileChatGPT::create([
            'file_name' => $request->file_name[$index] ?? 'Untitled',
            'title' => $request->file_name[$index] ?? null,
            'order_id' => $request->order_id,
            'user_id' => $order->user_id,
            'file_path' => $filePath,
            'file_type' => $file->getMimeType(),
            'size' => $file->getSize(),
        ]);

        $uploadedFiles[] = $fileChat;
    }

    return response()->json([
        'message' => 'Files uploaded successfully.',
        'data' => $uploadedFiles,
    ], 201);
}
    
    public function destroy(FileChatGPT $fileChatGPT)
    {
        Storage::delete($fileChatGPT->file_path);
        $fileChatGPT->delete();

        return redirect()->route('file_chat_gpts.index')->with('success', 'File deleted successfully.');
    }

}
