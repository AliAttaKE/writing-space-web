<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use App\Models\User;
use App\Models\Orders;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

 


class CustomerOrderController extends Controller
{
public function index(Request $request)
{
    $query = CustomerOrder::query();

    // 🟢 Search by name or email
    if ($request->filled('search')) {
        $query->where(function($q) use ($request) {
            $q->where('customer_name', 'like', '%' . $request->search . '%')
              ->orWhere('customer_email', 'like', '%' . $request->search . '%');
        });
    }

    // 🟢 Filter by date range (created_at)
    if ($request->filled('start_date') && $request->filled('end_date')) {
        $start = \Carbon\Carbon::parse($request->start_date)->startOfDay();
        $end = \Carbon\Carbon::parse($request->end_date)->endOfDay();

        $query->whereBetween('created_at', [$start, $end]);
    }

    $orders = $query->latest()->paginate(10);

    return view('backend.admin.customer_orders.index', compact('orders'))
           ->with([
               'start_date' => $request->start_date,
               'end_date' => $request->end_date,
               'search' => $request->search,
           ]);
}



    public function sendReminder(Request $request)
{
    $order = Orders::join('users', 'orders.user_id', '=', 'users.id')
        ->select('orders.*', 'users.name as user_name', 'users.email as email')
        ->where('orders.order_id', $request->order_id)
        ->first();

    if (!$order) {
        return response()->json(['success' => false, 'message' => 'Order not found']);
    }

    $type = $request->type;
    $subject = '';
    $body = '';

    if ($type == 3) {
        // Friendly Reminder Email
        $subject = "Reminder: Payment Pending – Order ID-{$order->order_id}";
        $body = "
            Hello {$order->user_name},<br><br>
            We hope your paper has been helpful to you. This is a friendly reminder that payment for the following order is still pending:<br>
            <strong>Order ID:</strong> {$order->order_id}<br><br>
            Please remember:<br>
            • The paper remains under Writing Space copyright until payment is cleared.<br>
            • Once you pay, you gain exclusive rights and full usage privileges.<br><br>
            🧾 <strong>How to make payment:</strong><br>
            1. Log in to your Customer Panel<br>
            2. Go to the “Delivered Orders” page<br>
            3. Search for Order ID: {$order->order_id}<br>
            4. Click “Pay Now” to finalize<br><br>
            Completing your payment today will protect your privacy and ensure uninterrupted use of your paper.<br><br>
            Warm regards,<br>
            <strong>The Writing Space Team</strong>
        ";
    } elseif ($type == 4) {
        // Final Notice Email
        $subject = "Final Notice – Payment Required for Order ID-{$order->order_id}";
        $body = "
            Hello {$order->user_name},<br><br>
            This is a final notice regarding your pending payment:<br>
            <strong>Order ID:</strong> {$order->order_id}<br><br>
            If payment is not received immediately, Writing Space will be forced to exercise its rights and:<br>
            • Publish the paper online<br>
            • Or otherwise make it publicly available, since ownership remains with us until payment is cleared.<br><br>
            🧾 <strong>How to make payment (last chance):</strong><br>
            1. Sign in to your Customer Panel<br>
            2. Open the “Delivered Orders” page<br>
            3. Search for Order ID: {$order->order_id}<br>
            4. Click “Pay Now” and complete the process<br><br>
            To retain exclusive rights and confidentiality, please act without delay.<br><br>
            Sincerely,<br>
            <strong>The Writing Space Team</strong>
        ";
    } else {
        return response()->json(['success' => false, 'message' => 'Invalid email type']);
    }

    // Send email
    try {
        // Mail::raw(strip_tags($body), function ($message) use ($order, $subject, $body) {
        //     $message->to($order->email)
        //         ->subject($subject)
        //         ->setBody($body, 'text/html');
        // });


           Mail::html($body, function ($message) use ($order, $subject) {
    $message->to($order->email)
            ->subject($subject);
});

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()]);
    }
}


   

  

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'customer_name' => 'required|string|max:255',
        'customer_email' => 'required|email|max:255',
        'no_of_orders' => 'required|integer|min:1',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()->first()], 422);
    }

    try {
        // Create the record
        $customerOrder = CustomerOrder::create($request->all());

        // Extract first name (for personalized greeting)
        $firstName = explode(' ', trim($request->customer_name))[0];

        // Prepare email content
        $subject = "Welcome to Writing Space";
        $content = "
            <p>Hello <strong>{$firstName}</strong>,</p>
            <p>This is to inform you that you can now login to create your free order.</p>
            <p>Regards,<br>
            <strong>Writing Space</strong><br>
            Customer Success Team</p>
        ";

        // Send email
        Mail::html($content, function ($message) use ($request, $subject) {
            $message->to($request->customer_email)
                    ->subject($subject);
        });

        // Mail::html($content, function ($message) use ($request, $subject) {
        //     $message->to($request->customer_email)
        //             ->subject($subject);
        // });


        return response()->json(['success' => 'Customer order created successfully and email sent']);
    } catch (\Exception $e) {
       
        return response()->json(['error' => 'Oops! Something went wrong'], 500);
    }
}


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            // 'user_id' => 'nullable|exists:users,id',
            'no_of_orders' => 'required|integer|min:1',
            'order_id' => 'required|exists:customer_orders,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        try {
            $order = CustomerOrder::findOrFail($request->order_id);
            $order->update($request->all());
            return response()->json(['success' => 'Customer order updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Oops! Something went wrong'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $order = CustomerOrder::findOrFail($id);
            $order->delete();
            return response()->json(['success' => 'Customer order deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Order not found'], 404);
        }
    }

    public function searchUsers(Request $request)
    {
        $search = $request->get('search');
        
        $users = User::where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->select('id', 'name', 'email')
                    ->limit(10)
                    ->get();

        return response()->json($users);
    }
}
