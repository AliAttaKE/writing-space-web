<?php

namespace App\Http\Controllers;
use App\Models\Management\Announcement\Announcement;
use App\Models\Management\bonuspenalty\bounaspenalty;
use App\Models\User;
use Auth;
use App\Helpers\Qs;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\Accounts\Account;
use App\Models\Worker\order_worker\Messages;
use App\Models\Worker\Submissions\Submission;
use App\Models\Management\UserBids\UserBids;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function wow()

    {
        if (Auth::check()) {
            if (Qs::userIsAdmin()) {
                return redirect('home');
            }elseif(Qs::userIsWorker()){
                return redirect('user-dashboard');
            }
        }

    }
    public function seen($id)

    {
     $wow =   DB::table('notifications')->where('id',$id)->update(['read_at'=>1]);
//     dd($wow);
return true;
    }
    public function notifications(){
        $data =   DB::table('notifications')->where('notifiable_id',Auth::user()->id)->orderBy('created_at', 'DESC')->get();
       dd($data);
        if(Qs::userIsWorker()){
            return view ('Notifications/allnotifications', compact('data'));
        }else{
            return view ('Notifications/managementnotifications', compact('data'));
        }
    }
    public function index()

    {


//       $data=[
//           'name'=> '',
//           'username'=>'naveedullahhere'
//       ];
//Qs::getSendMail('yasirshahpk8@gmail.com','test','Welcome to WMS',$data);
        $data['new'] = CreateOrder::where('erp_status', 1)->get()->all();
        $data['all'] = CreateOrder::get()->all();
        $data['prog'] = CreateOrder::where('erp_status', 2)->get()->all();
        $data['flag'] = CreateOrder::where('erp_status', 7)->get()->all();
        $data['comp'] = CreateOrder::where('erp_status', 3)->get()->all();
        $data['disputed'] = CreateOrder::where('erp_status', 6)->get()->all();

        $data['bonus'] =   bounaspenalty::where('type','penalty')->sum('amount');
        $data['penalty']  = bounaspenalty::where('type','bonus')->sum('amount');
        $data['payout'] = Account::sum('commission_rate');



        $data['revision'] = TeamOrder::where('order_status',2)->get()->all();

        $data['admin_message'] = Messages::where('reciever_id',null)->get()->all();
        $data['sub'] = Submission::get()->all();
        $data['announc'] = Announcement::get()->all();
        $data['deadline_approve'] = UserBids::where('deadlinestatus' , 1)->get()->all();
        $data['workers'] = User::where('user_type','worker')->get()->all();

        $date = Carbon::now()->subDays(15);
        $data['new_worker'] = User::where('created_at', '>=', $date)->where('user_type','worker')->get();

        $data['reliable'] = User::where('monitor',0)->where('user_type','worker')->get()->all();


















        return view('management/dashboard/index',compact('data'));
    }

}
