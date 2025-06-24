<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Models\User;
use App\Models\Folder;
use App\Models\Orders;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\LoginSession;
use App\Models\Subscription;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\User_Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\OrderLogs;

class CustomerController extends Controller
{




    public function index()
    {
        $auth_id = Auth::user()->id;
        $orders = Orders::where('user_id', $auth_id)
                            ->where('order_status', 'Pending')
                            ->latest()
                            ->limit(5)
                            ->get();
        $coupons = Coupon::limit(2)->latest()->get();
        $best_offers = Subscription::where('best_offer', 1)->limit(3)->latest()->get();
        $countMessages = Message::where('sender_id', $auth_id)->count('sender_id');
        $countFolders = Folder::where('user_id', $auth_id)->count();
        $showLatestMsgs = Message::where('sender_id', $auth_id)->latest()->limit(5)->get();
        $showLatestFolders = Folder::where('user_id', $auth_id)->latest()->limit(5)->get();
        $used_subscription = User_Subscription::where('user_id','=',Auth()->user()->id)->first();
        if($used_subscription){
            $subscription = Subscription::find($used_subscription->subscription_id);
            $used_subscription->subscription = $subscription;
        }

        // $countCurrentOrders = Orders::whereUserId(Auth()->user()->id)->where('order_status', 'Pending')->count();

        $countCurrentOrders = Orders::where('user_id', Auth::user()->id)
    ->whereIn('order_status', ['Pending', 'Completed', 'Revision', 'Refund', 'Canceled', 'In-Progress'])
    ->count();



        $countPastOrders = Orders::whereUserId(Auth()->user()->id)->where('order_status', 'Delivered')->count();
        $countPackages = User_Subscription::whereUserId(Auth()->user()->id)->count();

        return view('backend.customer.index', compact(
            'countMessages', 'countFolders', 'orders', 'showLatestMsgs',
            'showLatestFolders', 'best_offers','used_subscription','countCurrentOrders','countPastOrders','countPackages','coupons'
        ));
    }




    public function filterDate(Request $request)
    {
        $date = $request->input('date');
        $month = date('m', strtotime($date)); // Get month (e.g., '07')
        $year = date('Y', strtotime($date));

        $data = DB::table('invoices')
                        ->leftJoin('orders', 'invoices.order_id', '=', 'orders.order_id')
                        ->leftJoin('user_subscription', 'invoices.order_id', '=', 'user_subscription.subscription_id')
                        ->where('invoices.email', Auth::user()->email)
                        ->where('invoices.invoice_type', '!=', null)
                        ->where('invoices.invoice_type', $request->input('type'))
                        ->whereYear('invoices.created_at', $year)
                        ->whereMonth('invoices.created_at', $month)
                        ->select('invoices.*')
                        ->latest('invoices.created_at')
                        ->get();
        if($data->isNotEmpty())
        {
            return response()->json(['status' => true, 'data' => $data], 200);
        }else{
            return response()->json(['status' => false, 'message' => 'Data not found'], 404);
        }

    }




   public function showProfile()
    {
        $used_subscription=User_Subscription::where('user_id','=',Auth()->user()->id)->first();
        if($used_subscription){
            $subscription=Subscription::find($used_subscription->subscription_id);
            $used_subscription->subscription=$subscription;
        }

        $userPaymentRecords = DB::table('invoices')
                                ->join('orders','invoices.order_id', '=', 'orders.order_id')
                                ->where('invoices.email', Auth::user()->email)
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
                                ->where('invoices.email', Auth::user()->email)
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
                        ->where('invoices.email', Auth::user()->email)
                        ->where('invoices.invoice_type', '!=', null)
                        ->where('invoices.invoice_type','custom_inc')
                        ->select('invoices.*')
                        ->latest('invoices.created_at')
                        ->get();




          $PackageInvoices = DB::table('invoices')
                        ->leftJoin('orders', 'invoices.order_id', '=', 'orders.order_id')
                        ->leftJoin('user_subscription', 'invoices.order_id', '=', 'user_subscription.subscription_id')
                        ->leftJoin('subscription', 'user_subscription.subscription_id', '=', 'subscription.id')
                        ->leftJoin('user_subscription as sub2', 'sub2.id', '=', 'invoices.order_id')
                        ->leftJoin('subscription as sub3', 'sub2.subscription_id', '=', 'sub3.id')
                        ->where('invoices.email', Auth::user()->email)
                        //->whereNotNull('invoices.invoice_type')
                        //->where('invoices.invoice_type', 'package_inc')
                       ->select('invoices.*','orders.order_id as order_table_id','subscription.subscription_name','sub3.subscription_name as package_id')
                        ->distinct() // Yeh duplicate records remove karega
                        ->latest('invoices.created_at')
                        ->get();

                        //dd($PackageInvoices);

        // $countCurrentOrders = Orders::whereUserId(Auth()->user()->id)->where('order_status', 'Pending')->count();
        //use App\Models\OrderLogs;

        $countCurrentOrders = Orders::where('user_id', Auth::user()->id)
        ->whereIn('order_status', ['Pending', 'Completed', 'Revision', 'Refund', 'Canceled', 'In-Progress'])
        ->count();

        $orders = Invoice::with('order.user.userSubscription.subscription')->where('email', Auth::user()->email)->get();
//dd(OrderLogs::first()->order_id);
        //dd($orders);
        $countPastOrders = Orders::whereUserId(Auth()->user()->id)->where('order_status', 'Delivered')->count();
        $countPackages = User_Subscription::whereUserId(Auth()->user()->id)->count();
        // dd(compact(
        //     'CustomInvoices','PackageInvoices','used_subscription', 'years',
        //      'userPaymentRecords', 'yearsData', 'countries','userPaymentRecordssub',
        //      'yearsDatasub','yearssub','countCurrentOrders','countPastOrders','countPackages'
        //     ));
        return view('backend.customer.profile.index',compact(
            'CustomInvoices','PackageInvoices','used_subscription', 'years',
             'userPaymentRecords', 'yearsData', 'countries','userPaymentRecordssub',
             'yearsDatasub','yearssub','countCurrentOrders','countPastOrders','countPackages','orders'
            ));
    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::findOrFail(Auth::user()->id);

        if($user)
        {
            //group_name and billing checkbox missing;

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->description = $request->input('description');
            $user->language = $request->input('language');
            $user->address_1 = $request->input('address_1');
            $user->address_2 = $request->input('address_2');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->postcode = $request->input('postcode');
            $user->country = $request->input('country');
            $user->save();
            $path = 'images/users/customers/';

            $file = $request->file('avatar');

            if ($file) {
                $old_profile = $user->getAttributes()['avatar'];
                $file_path = $path . $old_profile;
                $filename = 'CUSTOMER_IMG_' . time() . '.' . $file->getClientOriginalExtension();
                if ($file->move(public_path($path), $filename)) {

                    if ($old_profile != null && File::exists(public_path($path . $old_profile))) {
                        File::delete(public_path($path . $old_profile));
                    }

                    $user->update([
                    'avatar' => $filename
                    ]);
                    $user->save();
                }

            }
            return response()->json(['success' => 'Profile updated successfully!']);

        }else{
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }



    public function destroy(Request $request)
    {
        $loginSessionId = session()->get('logged_id');
        $user_id = Auth()->id();

        if ($loginSessionId) {
            $loginSession = LoginSession::where('id', $loginSessionId)->orWhere('user_id', $user_id)->first();

            if ($loginSession) {
                $loginSession->update([
                    'is_logout' => 0,
                    'logout_time' => now(),
                    'updated_at' => now(),
                ]);
            }
        }


        session()->forget('logged_id');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
