<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use App\Models\User;
use Illuminate\Support\Facades\Validator;



class CustomerOrderController extends Controller
{
    public function index()
    {
        $orders = CustomerOrder::latest()->paginate(10);
        return view('backend.admin.customer_orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            // 'user_id' => 'nullable|exists:users,id',
            'no_of_orders' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        try {
            CustomerOrder::create($request->all());
            return response()->json(['success' => 'Customer order created successfully']);
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
