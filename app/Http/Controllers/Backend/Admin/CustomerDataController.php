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
    // Customer (safe) + keep $customers for existing blade compatibility
    $customer = DB::table('users')->where('id', $id)->first();
    if (!$customer) {
        abort(404);
    }
    $customers = collect([$customer]);
    $customers_email = $customer->email;

    // Latest used subscription (optional display)
    $used_subscription = User_Subscription::where('user_id', $id)->latest('id')->first();
    if ($used_subscription) {
        $subscription = Subscription::find($used_subscription->subscription_id);
        $used_subscription->subscription = $subscription;
    }

    // Years grouping datasets (as-is)
    $userPaymentRecords = DB::table('invoices')
        ->join('orders','invoices.order_id', '=', 'orders.order_id')
        ->where('invoices.email', $customers_email)
        ->select('invoices.*')
        ->latest('invoices.created_at')
        ->get();

    $yearsData = $userPaymentRecords->groupBy(function ($record) {
        $createdAt = Carbon::parse($record->created_at);
        return $createdAt->format('Y');
    });
    $years = $yearsData->keys()->toArray();

    $userPaymentRecordssub = DB::table('invoices')
        ->where('invoices.email', $customers_email)
        ->select('invoices.*')
        ->latest('invoices.created_at')
        ->get();

    $yearsDatasub = $userPaymentRecordssub->groupBy(function ($record1) {
        $createdAtsub = Carbon::parse($record1->created_at);
        return $createdAtsub->format('Y');
    });
    $yearssub = $yearsDatasub->keys()->toArray();

    $countries = DB::table('countries')->select('id','nicename')->get();

    // Custom invoices (explicit type)
    $CustomInvoices = DB::table('invoices as i')
        ->leftJoin('orders as o','i.order_id','=','o.order_id')
        ->where('i.email', $customers_email)
        ->where('i.invoice_type', 'custom_inc')
        ->select('i.*')
        ->orderByDesc('i.created_at')
        ->get();

    // Package invoices (explicit type)
    $PackageInvoices = DB::table('invoices as i')
        ->leftJoin('orders as o','i.order_id','=','o.order_id')
        ->where('i.email', $customers_email)
        ->where('i.invoice_type', 'package_inc')
        // ->whereRaw('i.id = (SELECT MAX(ii.id) FROM invoices ii WHERE ii.invoice_id = i.invoice_id)') // uncomment if only latest per invoice_id needed
        ->select('i.*')
        ->distinct()
        ->orderByDesc('i.created_at')
        ->get();

    // All types for admin table (Package / Custom / Addon(NULL)), exclude "Subscription"
    $AllInvoices = DB::table('invoices as i')
        ->leftJoin('orders as o','i.order_id','=','o.order_id')
        ->where('i.email', $customers_email)
        ->where(function ($q) {
            $q->where('o.order_type', '!=', 'Subscription')
              ->orWhereNull('o.order_type');
        })
        ->select('i.invoice_id','i.invoice_type','i.receipt_number','i.item_name','i.total','i.created_at')
        ->orderByDesc('i.created_at')
        ->get();

    $countCurrentOrders = Orders::where('user_id', $id)
        ->whereIn('order_status', ['Pending', 'Completed', 'Revision', 'Refund', 'Canceled', 'In-Progress'])
        ->count();

    $countPastOrders = Orders::whereUserId($id)->where('order_status', 'Delivered')->count();
    $countPackages   = User_Subscription::whereUserId($id)->count();

    return view('backend.admin.customerDataTable.show', compact(
        'customer',
        'customers',
        'customers_email',
        'CustomInvoices',
        'PackageInvoices',
        'AllInvoices',
        'used_subscription',
        'years',
        'userPaymentRecords',
        'yearsData',
        'countries',
        'userPaymentRecordssub',
        'yearsDatasub',
        'yearssub',
        'countCurrentOrders',
        'countPastOrders',
        'countPackages'
    ));
}



public function filterDate(Request $request, $id)
{
    // month is optional now (blank = show ALL)
    $monthStr  = $request->input('date'); // 'YYYY-MM' or ''
    $applyDate = false;
    $start = $end = null;

    if (!empty($monthStr)) {
        try {
            $start = Carbon::createFromFormat('Y-m', $monthStr)->startOfMonth();
            $end   = Carbon::createFromFormat('Y-m', $monthStr)->endOfMonth();
            $applyDate = true;
        } catch (\Throwable $e) {
            $applyDate = false; // bad month => ignore date filter
        }
    }

    // Customer
    $customer = DB::table('users')->where('id', $id)->first();
    if (!$customer) {
        return response()->json([
            'status' => false,
            'html'   => '<div id="admin-payment-section-wrapper"><div class="p-4 text-center">Customer not found</div></div>',
        ], 200);
    }
    $email = $customer->email;

    // Optional: latest subscription for display
    $used_subscription = User_Subscription::where('user_id', $id)->latest('id')->first();
    if ($used_subscription) {
        $subscription = Subscription::find($used_subscription->subscription_id);
        $used_subscription->subscription = $subscription;
    }

    // Type handling (supports package_inc, custom_inc, and NULL as addon via '')
    $typesInput   = (array) $request->input('type', []);
    $typesCol     = collect($typesInput);
    $wantsNull    = $typesCol->contains('');
    $nonNullTypes = $typesCol->filter(fn($t) => $t !== '' && $t !== null);

    // Base query (exclude Subscription orders)
    $query = DB::table('invoices as i')
        ->leftJoin('orders as o', 'i.order_id', '=', 'o.order_id')
        ->where('i.email', $email);

    // Apply date filter only if month provided
    if ($applyDate) {
        $query->whereBetween('i.created_at', [$start, $end]);
    }

    // Apply type filters
    $query->where(function($q) use ($nonNullTypes, $wantsNull) {
        if ($nonNullTypes->isNotEmpty()) {
            $q->whereIn('i.invoice_type', $nonNullTypes->all());
            if ($wantsNull) $q->orWhereNull('i.invoice_type');
        } else {
            if ($wantsNull) {
                $q->whereNull('i.invoice_type');
            }
            // else: no type filter => show all types
        }
    });

    $data = $query->select('i.invoice_id','i.invoice_type','i.receipt_number','i.item_name','i.total','i.created_at')
                  ->orderByDesc('i.created_at')
                  ->get();

    // Render admin partial (full card)
    $html = view('backend.admin.customerDataTable.partials.payment_section', [
        'data'              => $data,
        'used_subscription' => $used_subscription,
        'customerId'        => $id,
    ])->render();

    return response()->json([
        'status' => true,
        'html'   => $html,
    ], 200);
}

    
}
