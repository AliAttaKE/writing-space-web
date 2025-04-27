<?php

namespace App\Http\Controllers\Backend\Admin;
use App\Models\CustomerData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User_Subscription;
use App\Models\Subscription;
use App\Models\Orders;
use App\Exports\CustomerDataExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Carbon;
use DB;
use App\Models\BrandAmbassador;

class CustomerDataController extends Controller
{

    public function exportCustomers() 
    {
        $nu = rand(11,999);
        $data = CustomerData::get();
        if($data->isNotEmpty()){
            return Excel::download(new CustomerDataExport, 'CUSTOMERS-LIST-'.$nu.'.xlsx');
        }else{
            return back();
        }
    }

    public function index(Request $request)
    {
        // $customers = CustomerData::latest()->get();

         
        $customers = DB::table('users')
        ->where('role','customer')
        ->latest('created_at') // You can just pass 'created_at' without the table prefix
        ->get();
    
        
        // echo "<pre>";
        // print_r($customers);
        // die;
        
     

        // if ($request->filled('month')) {
        //     $month = $request->month;
        //     $customers->whereMonth('created_at', $month);
        // }

        // if ($request->filled('payment_method') && $request->payment_method != 'all') {
        //     $customers->where('payment_method', $request->payment_method);
        // }

        // $customers = $customers->get();
        
        return view('backend.admin.customerDataTable.index',compact('customers'));
     }
     
    public function referral(Request $request)
    {
       

        $brnadambassador = BrandAmbassador::get();
   
        return view('backend.admin.customerDataTable.referral',compact('brnadambassador'));
     }
     
     
     
     public function show($id)
    {
        
          $customers = DB::table('users')->where('id',$id )->get();
          
       ;
          
          $customers_email = $customers[0]->email;
          
          
           $used_subscription=User_Subscription::where('user_id','=',$id)->first();
        if($used_subscription){
            $subscription=Subscription::find($used_subscription->subscription_id);
            $used_subscription->subscription=$subscription;
        }

        $userPaymentRecords = DB::table('invoices')
                                ->join('orders','invoices.order_id', '=', 'orders.order_id')
                                ->where('invoices.email',$customers_email)
                                ->select('invoices.*')
                                ->latest('invoices.created_at')
                                ->get();
        
        $yearsData = $userPaymentRecords->groupBy(function ($record) {
        $createdAt = Carbon::parse($record->created_at);         
            return $createdAt->format('Y');
        });
        
        $years = $yearsData->keys()->toArray();
        

       
        //subcription
        
        $userPaymentRecordssub = DB::table('invoices')
                                // ->join('user_subscription','invoices.order_id', '=', 'user_subscription.subscription_id')
                                ->where('invoices.email',$customers_email)
                                ->select('invoices.*')
                                ->latest('invoices.created_at')
                                ->get();
        
        $yearsDatasub = $userPaymentRecordssub->groupBy(function ($record1) {
            $createdAtsub = Carbon::parse($record1->created_at);
            return $createdAtsub->format('Y');
        });

        $yearssub = $yearsDatasub->keys()->toArray();
        $countries = DB::table('countries')->select('id','nicename')->get();

        $CustomInvoices = DB::table('invoices')
                        ->leftJoin('orders','invoices.order_id', '=', 'orders.order_id')
                        ->leftJoin('user_subscription','invoices.order_id', '=', 'user_subscription.subscription_id')
                        ->where('invoices.email',$customers_email)
                        ->where('invoices.invoice_type', '!=', null)
                        ->where('invoices.invoice_type','custom_inc')
                        ->select('invoices.*')
                        ->latest('invoices.created_at')
                        ->get();

        $PackageInvoices = DB::table('invoices')
                        ->leftJoin('orders','invoices.order_id', '=', 'orders.order_id')
                        ->leftJoin('user_subscription','invoices.order_id', '=', 'user_subscription.subscription_id')
                        ->where('invoices.email',$customers_email)
                        ->where('invoices.invoice_type', '!=', null)
                        ->where('invoices.invoice_type','package_inc')
                        ->select('invoices.*')
                        ->latest('invoices.created_at')
                        ->get();

    

        $countCurrentOrders = Orders::where('user_id', $id)
        ->whereIn('order_status', ['Pending', 'Completed', 'Revision', 'Refund', 'Canceled', 'In-Progress'])
        ->count();


        $countPastOrders = Orders::whereUserId($id)->where('order_status', 'Delivered')->count();
        $countPackages = User_Subscription::whereUserId($id)->count();
                

    
        return view('backend.admin.customerDataTable.show', compact('customers','CustomInvoices','PackageInvoices','used_subscription', 'years',
             'userPaymentRecords', 'yearsData', 'countries','userPaymentRecordssub',
             'yearsDatasub','yearssub','countCurrentOrders','countPastOrders','countPackages'));
    }



    
}
