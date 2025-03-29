<?php

namespace App\Repositories;
use ValidateRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;


use App\Models\CRUD;

class UserRepository
{

    public function __construct()
    {
        //
    }
    public function testing($request) /* yehan data request se nh ab data se arha hai */ {


//     if(!empty($data)){
//            $this->validate($data,[
//             'name' => 'required',
//             'email' => 'required | email',
//             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//
//            ]);
           if(!empty($request->image)){
               $imageName = rand(11111, 99999) . '.' . $request->file('image')->getClientOriginalExtension();
               $destinationPath = public_path('profile');
               $upload_success = $request->image->move($destinationPath, $imageName);
           }else{
           $imageName = '';
           }
           $datas =[
                    'image'=>$imageName,
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
           ];
            CRUD::create($datas);

            return true;
//         }else{
//                 return redirect()->route('crud.index')
//                     ->with('errors','Product deleted successfully.');
//             }
    }
}

