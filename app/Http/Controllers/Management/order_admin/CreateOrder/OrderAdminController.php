<?php

namespace App\Http\Controllers\Management\order_admin\CreateOrder;
use App\Models\Management\Accounts\Account;
use App\Http\Controllers\Controller;
use App\Models\Management\ManageOrders\InProgressOrder\InProgressOrder;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageOrders\CreateOrder\instructionPivot;
use App\Models\Management\OrderSettings\AcademicLevel\AcademicLevel;
use App\Models\Management\OrderSettings\PaperType\PaperType;
use App\Models\Management\OrderSettings\SubjectType\SubjectType;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
use App\Models\Management\OrderSettings\PaperFormat\PaperFormat;
use App\Models\Management\OrderSettings\Citation_Style\Citation_Style;
use App\Models\Management\OrderSettings\DocumentType\DocumentType;
use App\Models\Management\ManageSetting\commission\commission;
use App\Models\Management\OrderSettings\LanguageStyle\LanguageStyle;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\Management\TeamOrder\TeamOrder;
use App\Models\Management\UserBids\UserBids;
use App\Models\User;
use App\Helpers\Qs;
use App\Models\Worker\Accounting\Accounting;
use App\Models\Worker\order_worker\RequestPages;
use App\Notifications\OrderNotifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['academic_level'] = AcademicLevel::get()->all();
        $data['paper_type'] = DocumentType::get()->all();
        $data['subject_type'] = SubjectType::get()->all();
        $data['paper_format'] = citation_Style::get()->all();
        $data['team'] = Teams::get()->all();
        $data['language_style'] = LanguageStyle::get()->all();
        $data['create_order'] = CreateOrder::where('erp_status', 0)->get()->all();
        return view('management.order_admin.CreateOrder.index', $data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            "erp_order_topic" => "required",
            "erp_order_message" => "required",
            "erp_academic_name" => "required",
            "erp_paper_type" => "required",
            "erp_subject_name" => "required",
            "erp_paper_format" => "required",
            "erp_language_name" => "required",
            "erp_team" => "required",
            "erp_resource_materials" => "required",
            "erp_number_Pages" => "required",
            "erp_spacing" => "required",
            "erp_powerPoint_slides" => "required",
            "erp_extra_source" => "required",
            "erp_deadline" => "required",
            "erp_copy_sources" => "required",
            "erp_page_summary" => "required",
            "erp_paper_outline" => "required",
            "erp_abstract_page" => "required",
            "erp_statistical_analysis" => "required",
        ]);
//            Managing or setting Date Time
        $date_time =   $this->datetimefunction($request->erp_deadline);
        if ($request->file('erp_resource_file')) {
            $ext = $request->file('erp_resource_file')->getClientOriginalExtension();
            $txt = time() . rand(100, 1000) . '.' . $ext;
            $request->erp_resource_file->move(public_path('image/resource'), $txt);
        } else {
            $txt = '';
        }
        $academiclevel = $request->erp_academic_name != "other" ? $request->erp_academic_name : $request->erp_academic_description;
        $subject = $request->erp_subject_name != "other" ? $request->erp_subject_name : $request->erp_sub;
        $topic = $request->erp_order_topic != "other" ? $subject : $request->erp_order_text;
        $paper_type = $request->erp_paper_type != "other" ? $request->erp_paper_type : $request->erp_paper_description;
        $paper_format = $request->erp_paper_format != "other" ? $request->erp_paper_format : $request->erp_format_description;
        $erp_team = $request->erp_team != "none" ? null : null;
        $erp_multi = $request->erp_team;
        $file = DocumentType::where('id' , $request->erp_paper_type)->get()->first();
        $file2 = citation_Style::where('id', $request->erp_paper_format)->get()->first();
        $paperty =  $file->erp_document_file;
        $paper_desc = $file->erp_document_message;
        $paperfor = $file2->erp_file_type;
        $paperform_desc = $file2->erp_citation_message;


        $data = [
            'erp_user_id' => auth()->user()->id,
            'erp_order_topic' => $topic,
            'erp_order_message' => $request->erp_order_message,
            'erp_academic_name' => $academiclevel,
            'erp_paper_type' => $paper_type,
            'erp_subject_name' => $subject,
            'erp_paper_format' => $paper_format,
            'erp_language_name' => $request->erp_language_name,
            'erp_team' => $erp_team,
            'all_team' =>json_encode($erp_multi),
            'erp_resource_materials' => $request->erp_resource_materials,
            'erp_resource_file' => $txt,
            'erp_number_Pages' => $request->erp_number_Pages,
            'erp_spacing' => $request->erp_spacing,
            'erp_powerPoint_slides' => $request->erp_powerPoint_slides,
            'erp_extra_source' => $request->erp_extra_source,
            'erp_deadline' => $request->erp_deadline,
            'erp_datetime'=>$date_time,
            'erp_copy_sources' => $request->erp_copy_sources,
            'erp_page_summary' => $request->erp_page_summary,
            'erp_paper_outline' => $request->erp_paper_outline,
            'erp_abstract_page' => $request->erp_abstract_page,
            'erp_statistical_analysis' => $request->erp_statistical_analysis,
            'papertype_file' => $paperty,
            'paperformat_file'=> $paperfor,
            'papertype_desc' => $paper_desc,
            'paperformat_desc' => $paperform_desc
        ];

        $createorder = CreateOrder::create($data);

        $this->teamOrder($request, $createorder);

        return redirect()->back()->with('success', 'Your Data Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CreateOrder::where('id', $id)->get()->first();
        return view('management/quiz/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $createorder = CreateOrder::where('id', $id)->get()->first();
        //        if processing order
        if ($request->orderProcess == 'orderProcess') {
            $this->orderProcess($id,$request);
        } else {
            $data = CreateOrder::where('id', $id)->get()->first();




            $this->validate($request, [
                "erp_order_topic" => "required",
                "erp_order_message" => "required",
                "erp_academic_name" => "required",
                "erp_paper_type" => "required",
                "erp_subject_name" => "required",
                "erp_paper_format" => "required",
                "erp_language_name" => "required",
//             "erp_commission_level"=>"required",
                "erp_resource_materials" => "required",
                "erp_number_Pages" => "required",
                "erp_spacing" => "required",
                "erp_powerPoint_slides" => "required",
                "erp_extra_source" => "required",
                "erp_deadline" => "required",
                "erp_copy_sources" => "required",
                "erp_page_summary" => "required",
                "erp_paper_outline" => "required",
                "erp_abstract_page" => "required",
                "erp_statistical_analysis" => "required",
            ]);

//            Erp Date Time Managing
            $date_time =   $this->datetimefunction($request->erp_deadline);


            if ($request->file('erp_resource_file')) {
                $ext = $request->file('erp_resource_file')->getClientOriginalExtension();
                $txt = time() . rand(100, 1000) . '.' . $ext;
                $request->erp_resource_file->move(public_path('image/resource'), $txt);
            }else{
                $txt = $data->erp_resource_file;
            }

            $academiclevel = $request->erp_academic_name != "other" ? $request->erp_academic_name : $request->erp_academic_description;
            $subject = $request->erp_subject_name != "other" ? $request->erp_subject_name : $request->erp_sub;
            $topic = $request->erp_order_topic != "other" ? $request->erp_subject_name : $request->erp_order_text;
            $paper_type = $request->erp_paper_type != "other" ? $request->erp_paper_type : $request->erp_paper_description;
            $paper_format = $request->erp_paper_format != "other" ? $request->erp_paper_format : $request->erp_format_description;
            $erp_team = $request->erp_team != "none" ? $request->erp_team : null;
            $data->update([
                'erp_user_id' => auth()->user()->id,
                'erp_order_topic' => $topic,
                'erp_order_message' => $request->erp_order_message,
                'erp_academic_name' => $academiclevel,
                'erp_paper_type' => $paper_type,
                'erp_subject_name' => $subject,
                'erp_paper_format' => $paper_format,
                'erp_language_name' => $request->erp_language_name,
                'erp_team' =>  $erp_team,
                'erp_resource_materials' => $request->erp_resource_materials,
                'erp_resource_file' => $txt,
                'erp_number_Pages' => $request->erp_number_Pages,
                'erp_spacing' => $request->erp_spacing,
                'erp_powerPoint_slides' => $request->erp_powerPoint_slides,
                'erp_extra_source' => $request->erp_extra_source,
                'erp_deadline' => $request->erp_deadline,
                'erp_datetime'=>$date_time,
                'erp_copy_sources' => $request->erp_copy_sources,
                'erp_page_summary' => $request->erp_page_summary,
                'erp_paper_outline' => $request->erp_paper_outline,
                'erp_abstract_page' => $request->erp_abstract_page,
                'erp_statistical_analysis' => $request->erp_statistical_analysis,
            ]);


            $teamorder = teamorder::where('erp_order_id', $id)->delete();

            $this->teamOrderupd($request, $createorder,$id);


        }
        return redirect()->back()->with('success', 'Order Has Been Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CRUD $cRUD
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CreateOrder::where('id', $id)->get()->first()->delete();

        return redirect()->back()->with('success', 'Data Has Been Deleted');
    }

    public function orderProcess($id,$request)
    {

        $team = TeamOrder::where(['erp_order_id' => $id, 'erp_user_id' => null, 'available_status' => 0, 'pick_status' => 0, 'complete_status' => 0])->get()->first();
        $data = CreateOrder::where('id', $id)->get()->first();
        $data->update([
            'erp_status' => 1,
        ]);


        if ($data['erp_team'] != null)
        {
            $team->update([
                'available_status' => 1
            ]);
        }

        $creat = createorder::where('id' ,$id)->get()->toArray();

        $teamid = $creat[0]['erp_team'];


        $orderss = CreateOrder::where('id' , $id)->get()->toArray();
        $emaildata=[
            'emailmesage'=>'A New Order has been Posted in the Writing-Space System',
            'order'=>$orderss,
        ];
        $notidata=[
            'order_id'=>$id,
            'body' =>'A New Order has been Posted in the Writing-Space System',
            'url'=>url('user-dashboard'),
        ];
        if($teamid != null)
        {

            $data = Teams::where('id' , $teamid)->get()->first();

            $commissions = json_decode($data->erp_package);
            $orderss = CreateOrder::where('id' , $id)->get()->toArray();
            $role = RolesAssign::where('commission_id' , $commissions)->get()->unique('user_id')->toArray();
            foreach($role as $user){

                //Send Email
                $emailuser = User::where('id',$user['user_id'])->get()->first();
                Qs::getSendMail($emailuser->email,'neworder','A New Order has been Posted in the Writing-Space System',$emaildata);

                //  Send Notification

                Notification::send($emailuser, new OrderNotifications($notidata));
            }
        }
        else
        {
            $data = Teams::get()->all();

            foreach($data as $allteams){
                $commissions = json_decode($allteams->erp_package);
                $role = RolesAssign::where('commission_id' , $commissions)->get()->unique('user_id')->toArray();
                foreach($role as $user){
                    $emailuser = User::where('id',$user['user_id'])->get()->first();
                    Qs::getSendMail($emailuser->email,'neworder','A New Order has been Posted in the Writing-Space System',$emaildata);
                    //  Send Notification
                    Notification::send($emailuser, new OrderNotifications($notidata));
                }
            }
        }


//
    }

    public function teamOrder($request, $createorder)
    {



        if($createorder->erp_team != null)
        {
            $data = Teams::where('id', $request->erp_team)->get()->first();
            $commissions = json_decode($data->erp_package);


            foreach ($commissions as $commission_id) {
                $data = [
                    'erp_team_id' => $request->erp_team,
                    'erp_commission_id' => $commission_id,
                    'erp_order_id' => $createorder->id,
                    'available_status' => 0,
                    'pick_status' => 0,
                    'complete_status' => 0,
                    'flag_status' => 0,
                    'order_cancel' => 0
                ];
                TeamOrder::create($data);
            }
        }
//


    }

    public function teamOrderupd($request, $createorder,$id)
    {

        $updateteam = CreateOrder::where('id',$id)->get()->first();

        if($updateteam->erp_team != null)
        {
            $data = Teams::where('id', $request->erp_team)->get()->first();
            $commissions = json_decode($data->erp_package);


            foreach ($commissions as $commission_id) {
                $data = [
                    'erp_team_id' => $request->erp_team,
                    'erp_commission_id' => $commission_id,
                    'erp_order_id' => $createorder->id,
                    'available_status' => 0,
                    'pick_status' => 0,
                    'complete_status' => 0,
                    'flag_status' => 0,
                    'order_cancel' => 0
                ];
                TeamOrder::create($data);
            }
        }
        //


    }

    public function PageRequest()
    {
        $data[] =Null;
        $pages  = RequestPages::get()->all();

        foreach($pages as &$page){
            $teamorder = TeamOrder::where('id',$page->team_order_id)->with('users','order','commissionwork')->get()->first();



            $page->order = $teamorder['order'];
            $page->users = $teamorder['users'];
            $page->commissionwork = $teamorder['commissionwork'];

        }

        $data['req'] = $pages;

        return view('management.order_admin.RequestPages.index', compact('data'));



    }


    public function deadline()
    {
        $data = Userbids::with('user')->get()->all();

        return view('management/order_admin/Deadline/index', compact('data'));
    }

    public function OrderStatus(Request $request){


        $data = CreateOrder::where('id',$request->order_id)->get()->first();

        $data->update(['erp_status' =>$request->order_status]);


        Account::where('order_id',$request->order_id)->update(['order_status'=>$request->order_status]);
        $teamorder = TeamOrder::where('erp_order_id',$request->order_id)->where('erp_user_id','!=',null)->where('pick_status', 1)->where('complete_status',0)->get()->first();
        $newteam = TeamOrder::where('erp_order_id',$request->order_id)->where('erp_user_id','!=',null)->where('complete_status',1)->get()->all();
        $complete = TeamOrder::where('erp_order_id',$request->order_id)->where('erp_user_id','!=',null)->where('pick_status', 1)->where('complete_status',0)->where('order_status' ,2)->get()->first();



        $ordercount = 1;
   if($newteam != null){
         foreach ($newteam as $team){

             if($team != null && $request->order_status == 2)
             {

                 $team->update([
                     'erp_user_id' => null,
                     'available_status' => $ordercount == 1 ? 1 : 0,
                     'pick_status' => 0,
                     'complete_status' => 0,
                 ]);

             }

            $ordercount++;

         }
   }



   if($complete != null)
   {
       if($request->order_status == 3)
       {
           $complete->update([
           'complete_status' => 1,
       ]);
       }
   }

//         order statusf changed in teamorder
        if($teamorder != null)
        {
//
            if($request->order_status == 1)
            {
            $teamorder->update([
                'erp_user_id' => null,
                'pick_status' => 0,
            ]);
            }


        }


        if($request->order_status == 4){
            $status='Cancelled';

        }
        elseif($request->order_status == 5){
            $status='refunded';
        }
        elseif($request->order_status == 6){
            $status='disputed';
        }else{
            $status=null;

        }
        if($status != null){
            $emaildata=[
                'order'=>$data,
                'status'=>$status
            ];
            $notidata=[
                'order_id'=>$request->order_id,
                'body' =>'Order ID-'.$request->order_id.' '.$status,
                'url'=>url('in-progress-orders',$request->order_id),
            ];
            //Send Email
//            foreach ($teamorder as $order){
//                $emailuser = User::where('id',$order->erp_user_id)->get()->first();
//                Qs::getSendMail($emailuser->email,'userorderstatus','Order ID-'.' '.$request->order_id .' '.$status,$emaildata);
//                //  Send Notification
//                Notification::send($emailuser, new OrderNotifications($notidata));
//            }
        }
        return redirect()->back();
    }

    public function CompleteOrder(){
        $data = CreateOrder::where('erp_status',3)->get()->all();
        if(empty($data)){
            $data = Null;
        }
        return view('management.order_admin.CompleteOrder.index',compact('data'));

    }

    public function otherOrders()
    {
        $data['cancel'] = CreateOrder::where('erp_status',4)->with('users')->get()->all();
        $data['refunded'] = CreateOrder::where('erp_status',5)->with('users')->get()->all();
        $data['disputed'] = CreateOrder::where('erp_status',6)->with('users')->get()->all();
        $data['flag'] = CreateOrder::where('erp_status',7)->with('users')->get()->all();

        return view('management.order_admin.others.index',compact('data'));
    }

    public function datetimefunction($date_time){
        $current_date =date('Y-m-d H:i:s');
        if($date_time == 'erp_eight_hrs'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+8 hour'));
        }elseif($date_time == 'erp_tf_hrs'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+1 days'));
        }elseif($date_time == 'erp_fe_hrs'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+2 days'));
        }elseif($date_time == 'erp_three_days'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+3 days'));
        }elseif($date_time == 'erp_five_days'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+5 days'));
        }elseif($date_time == 'erp_seven_days'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+7 days'));
        }elseif($date_time == 'erp_fourteen_days'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+14 days'));
        }elseif($date_time == 'erp_fourteen_plus_days'){
            $convertedTime = date('Y-m-d H:i:s',strtotime($current_date.'+24 days'));
        }
        return $convertedTime;
    }

    public function flagOrder(Request $request){
        CreateOrder::find($request->order_id)->update(['erp_status'=>7,'reason'=>$request->reason,'return_user'=>auth()->user()->id]);
        Account::where('order_id',$request->order_id)->update(['order_status'=>7]);

        return redirect()->back()->with('success','Order Has Been Flag');
    }
    public function compeleted_order()
    {
        return view('management.order_admin.complete');
    }


    public function revision()
    {
        return view('management/order_admin/revision');
    }

    public function others()
    {
        return view('management/order_admin/others');
    }

    public function bulk(Request $request)
    {
        $data = json_decode($request->multibulk);

        if ($data != null) {
            foreach ($data as $row) {
                $orderstat = CreateOrder::where('id', (int)$row)->get()->first();

                $orderstat->update([
                    'erp_status' => 1,
                ]);
            }
            return redirect()->back()->with('success','Order Has Been in processed');
        }
        return redirect()->back()->with('success','Order Has Been in processed');
    }

    public function  additionalInstruction(Request $request){


        $this->validate($request, [
            "erp_message" => "required",

        ]);

        $row = [
            'erp_users_id' => $request->erp_user_id,
            'erp_order_id' =>$request->erp_order_id,
            "erp_message" => $request->erp_message,
        ];


        $additional = instructionPivot::create($row);


        return redirect()->back()->with('success', 'Your Data Has Been Inserted');

    }

}
