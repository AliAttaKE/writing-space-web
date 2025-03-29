<?php

namespace App\Http\Controllers\Management\order_admin\NewOrder;
use App\Http\Controllers\Controller;
use App\Models\Management\Accounts\Account;
use App\Models\Management\ManageOrders\InProgressOrder\InProgressOrder;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageOrders\CreateOrder\instructionPivot;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\OrderSettings\AcademicLevel\AcademicLevel;
use App\Models\Management\OrderSettings\PaperType\PaperType;
use App\Models\Management\OrderSettings\SubjectType\SubjectType;
use App\Models\Management\OrderSettings\PaperFormat\PaperFormat;
use App\Models\Management\ManageSetting\commission\commission;
use App\Models\Worker\order_worker\Messages;
use App\Models\Management\OrderSettings\LanguageStyle\LanguageStyle;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\UserBids\UserBids;
use App\Models\User;
use App\Models\Worker\Submissions\Submission;
use App\Helpers\Qs;
use App\Notifications\OrderNotifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use function PHPUnit\Framework\isEmpty;

class NewOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $availoders = TeamOrder::where(['erp_user_id'=>null,'available_status'=>1,'pick_status'=>0,'complete_status'=>0])->groupby('erp_order_id')->get()->all();

        if(count($availoders)>0){
            foreach ($availoders as $availoders){
                $data['new_order'][]= CreateOrder::where(['id'=>$availoders->erp_order_id,'erp_status'=>1])->get()->first();
            }
        }else{
            $data['new_order'] = null;
        }

        $data['teamorder']= CreateOrder::where('erp_status',1)->get()->all();

        $data['bids'] = UserBids::with('order')->groupBy('erp_order_id')->get();


        return view('management.order_admin.NewOrder.index',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request , [
            "erp_order_topic"=>"required",
            "erp_order_message"=>"required",
            "erp_academic_name"=>"required",
            "erp_paper_type"=>"required",
            "erp_subject_name"=>"required",
            "erp_paper_format"=>"required",
            "erp_language_name"=>"required",
            "erp_team"=>"required",
            "erp_resource_materials"=>"required",
            "erp_number_Pages"=>"required",
            "erp_spacing"=>"required",
            "erp_powerPoint_slides"=>"required",
            "erp_extra_source"=>"required",
            "erp_deadline"=>"required",
            "erp_copy_sources"=>"required",
            "erp_page_summary"=>"required",
            "erp_paper_outline"=>"required",
            "erp_abstract_page"=>"required",
            "erp_statistical_analysis"=>"required",
        ]);

        if(!empty($request->erp_resource_file)){
            $ext = $request->file('erp_resource_file')->getClientOriginalExtension();
            $txt = time().rand(100,1000).'.'.$ext;
            $request->erp_resource_file->move(public_path('resourcefile'),$txt);
        }
        else
        {
            $txt = '';
        }

            if($request->erp_order_topic=='text'){
                 $title = $request->erp_order_text;
            }
            else{
                $title= $request->erp_subject_name;
            }


        $data=[
            'erp_user_id'=>auth()->user()->id,
            'erp_order_topic'=>$request->erp_order_topic,
            'erp_order_text'=>$title,
            'erp_order_message'=>$request->erp_order_message,
            'erp_academic_name'=>$request->erp_academic_name,
            'erp_academic_description'=>$request->erp_academic_description,
            'erp_paper_type'=>$request->erp_paper_type,
            'erp_paper_description'=>$request->erp_paper_description,
            'erp_subject_name'=>$request->erp_subject_name,
            'erp_subject_description'=>$request->erp_subject_description,
            'erp_paper_format'=>$request->erp_paper_format,
            'erp_format_description'=>$request->erp_format_description,
            'erp_language_name'=>$request->erp_language_name,
            'erp_team'=>$request->erp_team,
            'erp_resource_materials'=>$request->erp_resource_materials,
            'erp_resource_file'=>$txt,
            'erp_number_Pages'=>$request->erp_number_Pages,
            'erp_spacing'=>$request->erp_spacing,
            'erp_powerPoint_slides'=>$request->erp_powerPoint_slides,
            'erp_extra_source'=>$request->erp_extra_source,
            'erp_deadline'=>$request->erp_deadline,
            'erp_copy_sources'=>$request->erp_copy_sources,
            'erp_page_summary'=>$request->erp_page_summary,
            'erp_paper_outline'=>$request->erp_paper_outline,
            'erp_abstract_page'=>$request->erp_abstract_page,
            'erp_statistical_analysis'=>$request->erp_statistical_analysis,
        ];
        $createorder = CreateOrder::create($data);
        $this->teamOrder($request,$createorder);

        return redirect()->back()->with('success', 'Your Data Has Been Inserted');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
       {


        $data['order'] =CreateOrder::find($id);
        $data['new_order']= TeamOrder::where('erp_order_id',$id)->with('users', 'commissionwork', 'teams','order')->get()->first();
        $data['workers'] = TeamOrder::where(['erp_order_id' => $id])->with('users', 'commissionwork', 'teams','order')->get()->all();
        $data['submission'] = Submission::where(['order_id' => $id])->with('commission','user')->get()->all();
        $data['user_bids'] = UserBids::where('erp_order_id',$id)->with(['UserName','UserComission'])->orderBy('id')->get()->groupBy('commission_id');
        $data['messages'] = Messages::where(['order_id' => $id,])->with('reciever','users')->get()->all();


           $data['one-to-one'] = Messages::where(['order_id' => $id,'reciever_id'=>auth()->user()->id])->orWhere('sender_id',auth()->user()->id)->with('reciever','users')->get()->all();




           $data['teams']=Teams::all();
        $data['accounts']= Account::where('order_id',$id)->whereIn('order_status',[0,1,2,3])->with('commission')->get();
        $data['additional'] = instructionPivot::where('erp_order_id',$id)->with('instruction')->get()->all();



           if(count( $data['user_bids'])>0 ){
           foreach ($data['user_bids'] as $key => $bids){
           $commission = AddCommission::where(['id'=>$key])->get()->first();
           $data['bids'][$commission->package_name] = $bids;
       }}else{
           $data['bids'] = null;
       }
        return view('management.OrderDetail.index',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {



    $teamorder = TeamOrder::where('erp_order_id',$request->order_id )->get()->first();
    $teamid = CreateOrder::where('id',$request->order_id)->get()->first();

         if($teamorder == null) {

            $order = Teams::where('id',$request->erp_team_id)->get()->first();


               $commissions = json_decode($order->erp_package);
                foreach ($commissions as $commission_id)

                {
                                      $data = [
                                          'erp_commission_id' => $commission_id,
                                          'erp_order_id' => $request->order_id,
                                          'erp_team_id'=>$request->erp_team_id,
                                          'available_status' => 0,
                                          'pick_status' => 0,
                                          'complete_status' => 0,
                                          'flag_status' => 0,
                                          'order_cancel' => 0,
                                      ];
                                      TeamOrder::create($data);
                                  }
                $available = TeamOrder::where(['erp_order_id' => $request->order_id, 'erp_user_id' => null, 'available_status' => 0, 'pick_status' => 0, 'complete_status' => 0])->get()->first();


                                  $teamid->update([
                                              'erp_team' => $request->erp_team_id,
                                          ]);
                                   $available->update([
                                               'available_status' => 1
                                   ]);

}


        $bids = UserBids::where('id',$id)->get()->first();

        $mainorder =CreateOrder::where('id',$bids->erp_order_id)->get()->first();
        $mainorder->update(['erp_status'=>2]);

        $assignorder = TeamOrder::where(['erp_order_id'=>$request->order_id,'erp_user_id'=>null,'available_status'=>1,'pick_status'=>0,'complete_status'=>0])->get()->first();
               $createteamfornoneofthese = TeamOrder::where(['erp_order_id'=>$request->order_id,'erp_user_id'=>null,'available_status'=>1,'pick_status'=>0,'complete_status'=>0])->get()->first();

        if($assignorder != null || $createteamfornoneofthese == null){
            $bids->update([
                'erp_status'=>1,
            ]);
            if($assignorder != null){
            $assignorder->update([
                    'erp_user_id'=>$request->user_id,
                    'pick_status'=>1,
                     'bid_date' =>$request->date_time,
                ]);
            }elseif($createteamfornoneofthese == null){
            $createteamfornoneofthese->update([
                                'erp_user_id'=>$request->user_id,
                                'pick_status'=>1,
                            ]);
            }

    $user = User::find($request->user_id);
            $assigtouser=[
                'order_id'=>$mainorder->id,
//                'order_name'=>$mainorder->erp_order_topic,
                'body' =>'Congrats! Order Has Been Assign To You',
//                'button_title'=>'Check Order',
                'url'=>url('in-progress-orders'),
//                'lastmsg'=>'Thank you'
            ];
            Notification::send($user, new OrderNotifications($assigtouser));
        $comission = AddCommission::where('id',$assignorder->erp_commission_id)->pluck($mainorder->erp_deadline);
        $payment = [
                'order_id'=>$assignorder->erp_order_id,
                'team_order_id'=>$assignorder->id,
                'user_id'=>$assignorder->erp_user_id,
                'commission_id'=>$assignorder->erp_commission_id,
                'team_id'=>$assignorder->erp_team_id,
                'title'=>$mainorder->erp_order_topic,
                'hours'=>$mainorder->erp_deadline,
                'ext_source'=>$mainorder->erp_resource_file,
                'pages'=>$mainorder->erp_number_Pages,
                'spacing'=>$mainorder->erp_spacing,
                'commission_rate'=>$comission[0],
                'payment_status'=>0,
            ];
            Account::create($payment);

         $orderss = CreateOrder::where('id' , $request->order_id)->get()->first();

         $idorder =  $orderss['id'];

        $emaildata=[

                   'order'=>$orderss,
               ];
       $emailuser = User::where('id',$request->user_id)->get()->first();

       Qs::getSendMail($emailuser->email,'neworderall','Writing-Space – Order Information for ID'.' '.$idorder,$emaildata);

                          //  Send Notification

            return redirect()->back()->with('success','Order Has Been Assigned');
    }else{
            return redirect()->back()->withErrors(['Order Has Been Already Assigned To Someone!']);

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CRUD  $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=CreateOrder::where('id',$id)->get()->first()->delete();
        return redirect()->back()->with('success','Data Has Been Deleted');
    }

    public function orderProcess($id){
        $data = CreateOrder::where('id',$id)->get()->first();
        $team = TeamOrder::where(['erp_order_id'=>$id,'erp_user_id'=>null,'available_status'=>0,'pick_status'=>0,'complete_status'=>0,'order_status'=>0,'order_cancel'=>0])->pluck('erp_order_id');
        $data->update([
            'erp_status'=>1,
        ]);
    }

    public function teamOrder($request,$createorder){
        $data = Teams::where('id',$request->erp_team)->get()->first();
        $commissions =json_decode($data->erp_package);
        foreach( $commissions as $commission_id){
            $data = [
                'erp_team_id'=>$request->erp_team,
                'erp_commission_id'=>$commission_id,
               'erp_order_id'=>$createorder->id,
                'available_status'=>0,
                'pick_status'=>0,
                'complete_status'=>0,
                'order_status'=>0,
                'order_cancel'=>0
            ];
            TeamOrder::create($data);

        }

    }



    public function Adminmessages( request $request){


            $this->validate($request,[
               'subject' => 'required',
               'description' => 'required',
               ]);
     $data = [
                 'reciever_id' => $request->reciever_id,
                 'sender_id' => $request->sender_id,
                 'order_id' => $request->order_id,
                 'team_id'=> $request->team_id,
                 'commission_id'=>$request->commission_id,
                 'subject' => $request->subject,
                 'description' => $request->description,
             ];
             $message = Messages::Create($data);
       return redirect()->back()->with('success','Thank You! Your Order Has Been Submitted!');

       }

       public function OrderStatus(Request $request){
//         dd($request);
       }


    public function create_order(){

        return view('management/order_admin/create_order');
    }

     public function new_order(){

            return view('management/order_admin/new_order');
        }

    public function compeleted_order(){

        return view('management/order_admin/compeleted_order');
    }


    public function revision(){

        return view('management/order_admin/revision');
    }
    public function others(){

        return view('management/order_admin/others');
    }

}
