<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function emailFormRequest()
    {
        return view('auth.input_email');
    }

   
  public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
    
        $email = $request->input('email');
        $token = $request->input('_token');
    
        $user = User::where('email', $email)->first();
    
        // Check if the user exists
        if (!$user) {
            // Flash an error message to the session and redirect back
            return redirect()->back()->with([
                'message' => 'The email you entered is not registered in our system.',
                'alert-type' => 'success'
            ]);
        }
    
        // Send the reset email
        Mail::send('emails.reset_password_link', [
            'email' => $email,
            'token' => $token,
        ], function ($message) use ($email) {
            $message->to($email)
                    ->subject('Password Reset Request');
        });
    
        // Flash success message and redirect back
        return redirect()->back()->with([
            'message' => 'Password reset email sent successfully.',
            'alert-type' => 'success'
        ]);
    }


}
