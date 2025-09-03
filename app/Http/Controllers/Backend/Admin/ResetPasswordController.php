<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function showResetForm($token, $email)
    {
        return view('auth.reset_password', ['token' => $token, 'email' => $email]);
    }

    // public function reset(Request $request)
    // {
        
    
    //     $request->validate([
    //         'token' => 'required',
    //         'password' => 'required|confirmed|min:5',
    //     ]);

    //     $updatePassword = DB::table('users')
    //                           ->where([
    //                             'email' => $request->email, 
    //                           ])
    //                           ->first();
                              
                            
    //       if(!$updatePassword){
    //           return back()->withInput()->with('error', 'Invalid token!');
    //       }
    //       $email =  $request->email;

    //       Mail::send('emails.Password_reset_confirmation', [
    //         'email' =>$email,
           
    //     ], function ($message) use ($email) {
    //         $message->to($email, 'Password Reset Confirmation.')
    //             ->subject('Password Reset Confirmation.');
    //     });
  
    //       $user = User::where('email', $request->email)
    //                   ->update(['password' => Hash::make($request->password)]);
    //     //   DB::table('password_resets')->where(['email'=> $request->email])->delete();
    //       return redirect('/login')->with('message', 'Your password has been changed!');
    // }

    
public function reset(Request $request)
{
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:5',
    ]);

    // Token check
    $resetRecord = DB::table('password_resets')
        ->where('email', $request->email)
        ->where('token', $request->token)
        ->first();

    if (!$resetRecord) {
        return back()->with('error', 'Invalid or expired reset link!');
    }

    // Expiry check (1 hour)
    if (now()->diffInMinutes($resetRecord->created_at) > 60) {
        return back()->with('error', 'This password reset link has expired!');
    }

    // Update password
    User::where('email', $request->email)->update([
        'password' => Hash::make($request->password),
    ]);

    // Delete token after use
    DB::table('password_resets')->where('email', $request->email)->delete();

    // Confirmation email
    Mail::send('emails.Password_reset_confirmation', [
        'email' => $request->email,
    ], function ($message) use ($request) {
        $message->to($request->email)
                ->subject('Password Reset Confirmation');
    });

    return redirect('/login')->with('message', 'Your password has been changed!');
}


}
