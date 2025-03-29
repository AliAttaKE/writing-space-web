<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use App\Models\Orders;
use App\Models\File;
use App\Models\Folder;
use App\Models\User_Subscription;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\Inbox;

class CustomerManagementController extends Controller
{
    public function customerDeleteRecords($user_id)
    {

        $user = User::findOrFail($user_id);
        if (!$user) {
            return response()->json(['status' => false, 'message' => 'User not found!'], 404);
        }

        User_Subscription::where('user_id', $user_id)->delete();
        Invoice::where('email', $user->email)->delete();
        Message::where('sender_id', $user->id)->delete();
        Inbox::where('sender_id', $user->id)->delete();
        Orders::where('user_id', $user->id)->delete();
        
        $folders = Folder::where('user_id', $user->id)->get();
        if ($folders) {
            foreach($folders as $folder) {
                $files = File::where('folder_id', $folder->id)->get();
                if($files)
                {
                    foreach ($files as $file) {
                        $filePath = 'public/uploads_folders/'.$folder->name.'/'.$file->file_name;
                        Storage::delete($filePath);
                        $file->delete();
                    }
                }
                $folderPath = 'public/uploads_folders/'.$folder->name;
                Storage::deleteDirectory($folderPath);
                $folder->delete();
            }
        }

        $user->deleted_record = 1;
        $user->save();

        return response()->json(['status' => true, 'message' => 'User and associated records deleted successfully'], 200);
    }


    public function customerBlock($id)
    {
        $user = User::findOrFail($id);
        $user->is_block = ($user->is_block == 0) ? 1 : 0;
        $user->status = ($user->is_block == 1) ? 0 : 1;
        $user->save();
        return redirect()->back()->with('success', 'Customer Block Successfully');
    }

    public function exportByTier(Request $request) 
    {
        $nu = rand(11,999);
        $value = $request->input('tier');
        $fileName = strtoupper($request->input('tier'));
        return Excel::download(new UsersExport($value), 'CUSTOMER-LIST-'.$fileName.'.xlsx');
    }
    
    public function searchCustomer(Request $request)
    {
        $search = $request->search;
        $filter = $request->filter;
        
        if ($filter === 'all_customers') {
            $query = User::where('role', 'customer')
                         ->where('is_block', 0)
                         ->where('verified', 1);
        } elseif ($filter === 'blocked') {
            $query = User::where('is_block', 1);
        } else {
            $query = User::where('role', 'customer')
                         ->where('is_block', 0)
                         ->where('verified', 1)
                         ->where('tier', $filter);
        }
    
        // Apply search criteria
        if (!empty($search)) {
            $query->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');
            });
        }
    
        $records = $query->get();
    
        return response()->json($records);
    }
    
    

    public function showByTier($value)
    {
        
        if($value === 'all_customers'){
            $records = User::where('role', 'customer')
                            ->where('is_block', 0)
                            // ->where('verified', 1)
                            ->get();
        
        }elseif($value == 'blocked'){
            $records = User::where('is_block', 1)->get();
        }
        else{
            $records = User::where('role', 'customer')
                            ->where('tier', $value)
                            ->where('is_block', 0)
                            // ->where('verified', 1)
                            ->get();
        }
        return response()->json($records);
    }
    
    // Customer Managements
    public function customersManagement()
    {
        
        return view('backend.admin.customerManagement.index');
    }


    public function addNewCustomer()
    {
        $customers = User::where('role', 'customer')
                        ->where('is_block', 0)
                        ->where('verified', 1)
                        ->select('id', 'name', 'avatar', 'email','account_id')
                        ->latest()
                        ->get();
        return view('backend.admin.customerManagement.create',compact('customers'));
    }

    public function searchNewCustomer(Request $request)
    {
        $search = $request->search;

        $query = User::where('role', 'customer')
                    ->where('is_block', 0)
                    ->where('verified', 1)
                    ->select('id', 'name', 'avatar', 'email','account_id')
                    ->latest();

        // Apply search criteria
        if (!empty($search)) {
            $query->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('account_id', 'like', '%' . $search . '%');
            });
        }

        $records = $query->get();
        return response()->json($records);
    }



    public function storeNewCustomer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',

            //'phone'=>'required|numic',
        ]);

        $account_id = 'ID-' . rand(1000, 99999999);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()]);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make('1234'); // default password;
        $user->email = $request->input('email');
        $user->account_id = $account_id;
        $user->description = $request->input('description');
        $user->language = $request->input('language');
        $user->address_1 = $request->input('address_1');
        $user->address_2 = $request->input('address_2');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->postcode = $request->input('postcode');
        $user->country = $request->input('country');
         $user->phone = $request->input('phone');
         $user->verified = 1;

        if (!$user->save()) {
            return response()->json(['error' => 'Failed to save user']);
        }

        $path = 'images/users/customers/';
        $file = $request->file('avatar');

        if ($file) {
            $old_profile = $user->avatar;
            $filename = 'CUSTOMER_IMG_' . time() . '.' . $file->getClientOriginalExtension();

            if ($file->move(public_path($path), $filename)) {
                if ($old_profile != null && File::exists(public_path($path . $old_profile))) {
                    File::delete(public_path($path . $old_profile));
                }

                // Update the user with the new avatar filename
                $user->avatar = $filename;
                $user->save();
            } else {
                return response()->json(['error' => 'Failed to upload avatar']);
            }
        }

        return response()->json(['success' => 'Customer added successfully!', 'user' => $user]);
    }

    public function showCustomerDetails($id)
    {
        $customer = User::findOrFail($id);
        return view('backend.admin.customerManagement.details', compact('customer'));
    }   

    // Customer Managements end here
}
