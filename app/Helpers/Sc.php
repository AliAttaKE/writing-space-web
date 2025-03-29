<?php

namespace App\Helpers;
use App\Helpers\Qs;
//use App\Models\OwnerProfile;
use App\Models\User;
use Auth;
use App\Models\Company;
use Mail;
class Sc{


//    public static function getCompanybyOwner()
//    {
//
//       if( Qs::userIsOwner()){
//           $company = Company::where('userID',Auth()->user()->id)->get()->first();
//       }else{
//           $company = Company::where('userID',Auth()->user()->ownerID)->get()->first();
//       }
//        return $company;
//    }
    public static function getUserProfile()
    {
        $profile = User::where('id',Auth()->user()->id)->get()->first();
        return $profile;
    }
}

