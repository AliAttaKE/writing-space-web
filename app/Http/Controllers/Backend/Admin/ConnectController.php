<?php

namespace App\Http\Controllers\Backend\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupWelcomeMail;
use DB;

class ConnectController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
  public function googleHandle()
{
    try {
        $user = Socialite::driver('google')->user();
        // dd($user);
        $findUser = User::where('email', $user->email)->first();

        if (!$findUser) {
            $account_id = 'ID-' . rand(1000, 99999999);
            $findUser = new User();
            $findUser->name = $user->name;
            $findUser->email = $user->email;
            $findUser->password = "12345678";
            $findUser->account_id = $account_id;
            $findUser->authenticated_at = now();

            $findUser->save();
        }

        // Check if the 'social_login_already' column is 0
        if ($findUser->social_login_already == 0) {

            $emailContent = "


            <p>Hello {$user->name},</p>

            <p>Welcome aboard! We’re thrilled to have you join us at Writing Space, where we empower your academic journey with cutting-edge tools and ethical AI solutions. It’s great to have you with us, and we can’t wait to see what you achieve with the right resources at your fingertips.</p>

            <p>Here’s a quick guide to get you started on your path to success:</p>
            <ol>
                <li><strong>Explore Your Dashboard:</strong> Your personal dashboard is your new best friend. Here, you can manage orders, track progress, and access a wealth of resources. Take a moment to familiarize yourself with its features—it’s designed to make your life easier!</li>
                <li><strong>Dive into the Library:</strong> Our extensive library is stocked with sample papers and resources across a wide range of subjects. It’s perfect for sparking ideas or understanding how to structure your papers.</li>
                <li><strong>Post a Custom Order:</strong> Got a specific project in mind? Post a custom order and let our tailored solutions meet your exact needs. Whether it's a tight deadline or a complex topic, we’re here to help.</li>
                <li><strong>Check Out Subscription Packages:</strong> If you’re looking for the best value, our packages are the way to go. With options like page rollovers and access to premium services at no additional cost, they’re designed to save you money while providing top-notch support.</li>
            </ol>

            <p>We're excited to see how Writing Space will enhance your academic work. If you have any questions or need guidance, don’t hesitate to reach out. Our support team is available 24/7 and ready to assist you.</p>

            <p>Again, welcome to Writing Space! Let’s make this academic journey a remarkable one.</p>

            <p>Best Regards,<br>
            Customer Success Team<br>
            Writing Space</p>
            ";

            // Send the welcome email
            Mail::html($emailContent, function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Welcome to Writing Space – Start Your Journey to Academic Mastery!');
            });



            // Update 'social_login_already' to 1 after sending the email
            $findUser->social_login_already = 1;
            $findUser->save();
        }

        Auth::login($findUser);
        session()->put('id', $findUser->id);
        return redirect('/customer/dashboard');
    } catch (Exception $e) {
        return redirect()
            ->route('login');
    }
}


    public function microsoftLogin()
    {

        $state = Session::getId();

        $params = [
            'client_id' => 'aca2e56a-258c-4038-bf76-a10338bdd831',
            'redirect_uri' => config('app.url').'/auth/microsoft/callback/',
            'response_type' => 'token',
            'scope' => 'https://graph.microsoft.com/User.Read',
            'state' => $state,
        ];
        $loginUrl = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize';
        $redirectUrl = $loginUrl . '?' . http_build_query($params);

        dd($redirectUrl);
        return response()->json(['redirect_url' => $redirectUrl]);
    }

    public function microsoftHandle(Request $request)
    {
        if ($request->access_token) {

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $request->access_token,
                'Content-type' => 'application/json',
            ])->get('https://graph.microsoft.com/v1.0/me/');

            $userData = $response->json();

            if (isset($userData['error'])) {
                return view('auth.login');
            }

            Session::put('msatg', 1); // Authenticated and verified
            Session::put('uname', $userData['displayName']);
            Session::put('id', $userData['id']);

            return redirect('/customer/dashboard');
        }

        return view('auth.login');
    }
    public function microsoftHandleajax(Request $request)
    {


        if ($request->access_token) {

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $request->access_token,
                'Content-type' => 'application/json',
            ])->get('https://graph.microsoft.com/v1.0/me/');

            $userData = $response->json();

            if (isset($userData['error'])) {
            }

            $findUser = User::where('email', $userData['mail'])->first();

            if (!$findUser) {

                $findUser = new User();
                $account_id = 'ID-' . rand(1000, 99999999);
                $findUser->account_id = $account_id;
                $findUser->authenticated_at = now();
                $findUser->name = $userData['displayName'];
                $findUser->email = $userData['mail'];
                $findUser->password = "1234";
                $findUser->role = "customer";
                $findUser->save();
            }
            Auth::login($findUser);
            session()->put('id', $findUser->id);
            Session::put('msatg', 1); // Authenticated and verified
           // return redirect('/customer/dashboard');
            return response()->json(['userData' => $userData]);
        }

        return view('auth.login');
    }
}
