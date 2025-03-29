<?php

namespace App\Helpers;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\TeamOrder\TeamOrder;
use Auth;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Notifications\OrderNotifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
class Qs{

//    public static function getTeamAdmin()
//    {
//        return ['admin', 'super_admin', ];
//    }
//    public static function userIsAdmin()
//    {
//        return in_array(Auth::user()->user_type, self::getTeamAdmin());
//    }

    public static function getOwner()
    {
        return ['admin'];
    }
    public static function userIsAdmin()
    {
        return in_array(Auth::user()->user_type, self::getOwner());
    }
    public static function getWorker()
    {
        return ['worker'];
    }
    public static function userIsWorker()
    {
        return in_array(Auth::user()->user_type, self::getWorker());
    }
    public static function getManager()
    {
        return ['manager'];
    }
    public static function userIsManager()
    {
        return in_array(Auth::user()->user_type, self::getManager());
    }
    public static function getClient()
    {
        return ['client'];
    }

    //    For Matching Request Purpose
    public static function RequestIsManager($user_type)
    {
        return in_array($user_type, self::getManager());
    }
    public static function RequestIsOwner($user_type)
    {
        return in_array($user_type, self::getOwner());
    }
    public static function RequestIsEmploy($user_type)
    {
        return in_array($user_type, self::getEmployee());
    }
    //    For Matching Request Purpose

    //Email Function
    public static function getSendMail($email,$template ,$subject,$data=Null)
    {
        $details['subject']=$subject;
        $details['template']=$template;
        $details['data']=$data;
        \Mail::to($email)->send(new \App\Mail\customeMail($details));

    }
    public static function notifycounts()
    {
        $notifications = DB::table('notifications')->where('notifiable_id',Auth::user()->id)->where('read_at',null)->limit(15)->get();
        return count($notifications);
    }
    public static function notifications()
    {
       $notifications = DB::table('notifications')->where('notifiable_id',Auth::user()->id)->limit(15)->orderBy('created_at', 'DESC')->get();
       return $notifications;
    }

    public static function neworders($status,$id = null)
    {
      if ($id == null){
        $neworders = CreateOrder::where('erp_status',$status)->get()->all();
        $total = count($neworders);
      }
      else{
          $neworders = CreateOrder::where('erp_status',$status)->get()->all();
          $total = count($neworders);
      }
        return $total;
    }
    public static function workerorders($id,$stat = null, $com = null)
    {
                  if($com == null) {
                      $neworders = TeamOrder::where(['erp_user_id' => $id, 'pick_status' => $stat,'complete_status' => 0])->get()->all();
                      $allorder = count($neworders);
                  }
                  else{
                      $neworders = TeamOrder::where(['erp_user_id' => $id, 'complete_status' => $com])->get()->all();
                      $allorder = count($neworders);
                  }
                  return $allorder;
    }


}

