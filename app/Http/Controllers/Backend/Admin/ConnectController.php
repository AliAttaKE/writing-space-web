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
use Illuminate\Support\Facades\Log;
use DB;
use App\Models\GlobalOrdersAssign;



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
        <li><strong>Check Out Packages:</strong> If you’re looking for the best value, our packages are the way to go. With options like page rollovers and access to premium services at no additional cost, they’re designed to save you money while providing top-notch support.</li>
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
                        ->subject('Welcome to Writing-Space – Start Your Journey to Academic Mastery!');
            });



       $global = GlobalOrdersAssign::latest()->first();
$assigned_orders = $global ? (int)$global->no_of_orders : 0;

$postDeliveryLimit = $assigned_orders ?? '' ;


            $postDeliveryEmailContent = "
    <p>Hi {$user->name},</p>

    <p>Welcome to Writing Space, where your trust always comes first.</p>

    <p>You can now enjoy complete peace of mind with our <strong>Post-Delivery Payment</strong> option — simply place your order, receive your completed work, and pay only after delivery.</p>

    <p><strong>Here’s how it works:</strong></p>

    <ol>
        <li>From your dashboard, click the <strong>“Order Now, Pay After Delivery”</strong> button at the top.</li>
        <li>Fill in your order details on the form.</li>
        <li>Click <strong>“Order Now”</strong> to confirm — no upfront payment required.</li>
    </ol>

    <p>You can place up to <strong>{$postDeliveryLimit}</strong> post-delivery payment orders under your account.
    Once your order is delivered, you’ll have time to review it before making payment.</p>

    <p>At Writing Space, you have zero risk — experience quality first, pay later, and see why thousands of students trust us every day.</p>

    <p><a href='https://www.writing-space.com' 
    style='display:inline-block; background-color:#007bff; color:#fff; padding:10px 20px; 
    text-decoration:none; border-radius:5px;'>Order Now, Pay After Delivery</a></p>

    <p>Warm regards,<br>
    <strong>Team Writing Space</strong><br>
    <a href='mailto:support@writing-space.com'>support@writing-space.com</a><br>
    🌐 <a href='https://www.writing-space.com'>www.writing-space.com</a></p>
";

if ($postDeliveryLimit > 0) {
Mail::html($postDeliveryEmailContent, function ($message) use ($user) {
    $message->to($user->email)
            ->subject('Enjoy Post-Delivery Payment – Experience Quality First, Pay Later');
});

}

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
        $state = Session::getId(); // Optional: store it to validate later

        $params = [
            'client_id' => env('MICROSOFT_CLIENT_ID'),
            'redirect_uri' => env('MICROSOFT_REDIRECT_URI'),
            'response_type' => 'code',
            'response_mode' => 'query',
            'scope' => 'https://graph.microsoft.com/User.Read',
            'state' => $state,
        ];

        $loginUrl = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize';
        $redirectUrl = $loginUrl . '?' . http_build_query($params);

        return response()->json(['redirect_url' => $redirectUrl]);
    }


    /*public function microsoftLogin()
    {

        $state = Session::getId();

        $params = [
            'client_id' => 'aca2e56a-258c-4038-bf76-a10338bdd831',
            'redirect_uri' => config('app.url').'/auth/microsoft/callback/',
            'response_type' => 'token',
            'response_mode' => 'query',
            'scope' => 'https://graph.microsoft.com/User.Read',
            'state' => $state,
        ];
        $loginUrl = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize';
        $redirectUrl = $loginUrl . '?' . http_build_query($params);

        return response()->json(['redirect_url' => $redirectUrl]);
    }*/

   public function microsoftHandle(Request $request)
    {
        $code = $request->query('code');
        //dd($code);
        if (!$code) {
            return redirect('/login')->with('error', 'Authorization code not found.');
        }

        // Step 1: Exchange code for access token
        $tokenResponse = Http::asForm()->post('https://login.microsoftonline.com/common/oauth2/v2.0/token', [
            'client_id' => env('MICROSOFT_CLIENT_ID'),
            'client_secret' => env('MICROSOFT_CLIENT_SECRET'),
            'code' => $code,
            'redirect_uri' => env('MICROSOFT_REDIRECT_URI'),
            'grant_type' => 'authorization_code',
        ]);

        $tokenData = $tokenResponse->json();

        if (!isset($tokenData['access_token'])) {
            Log::error('Microsoft token error', $tokenData);
            return redirect('/login')->with('error', 'Failed to authenticate with Microsoft.');
        }

        $accessToken = $tokenData['access_token'];

        // Step 2: Fetch user profile from Microsoft Graph
        $userResponse = Http::withToken($accessToken)->get('https://graph.microsoft.com/v1.0/me');
        $userData = $userResponse->json();

        if (!isset($userData['mail']) && !isset($userData['userPrincipalName'])) {
            return redirect('/login')->with('error', 'Failed to retrieve Microsoft email.');
        }

        $email = $userData['mail'] ?? $userData['userPrincipalName'];
        $name = $userData['displayName'] ?? 'MS User';

        // Step 3: Find or create user
        $findUser = User::firstOrNew(['email' => $email]);

        if (!$findUser->exists) {
            $findUser->account_id = 'ID-' . rand(1000, 99999999);
            $findUser->authenticated_at = now();
            $findUser->name = $name;
            $findUser->password = bcrypt('1234'); // placeholder, never logged with password
            $findUser->role = 'customer';
            $findUser->social_login_already = 0;
            $findUser->save();
        }

        // Step 4: Send welcome email (if first time)
        if ($findUser->social_login_already == 0) {
            $emailContent = "
                <p>Hello {$findUser->name},</p>
                <p>Welcome aboard! We're thrilled to have you join us at Writing Space...</p>
                <p>Best Regards,<br>Customer Success Team<br>Writing Space</p>";

            try {
                Mail::html($emailContent, function ($message) use ($findUser) {
                    $message->to($findUser->email)
                            ->subject('Welcome to Writing-Space – Start Your Journey to Academic Mastery!');
                });


              $global = GlobalOrdersAssign::latest()->first();
$assigned_orders = $global ? (int)$global->no_of_orders : 0;

$postDeliveryLimit = $assigned_orders ?? '' ;


        $postDeliveryEmailContent = "
            <p>Hi {$findUser->name},</p>

            <p>Welcome to Writing Space, where your trust always comes first.</p>

            <p>You can now enjoy complete peace of mind with our <strong>Post-Delivery Payment</strong> option — simply place your order, receive your completed work, and pay only after delivery.</p>

            <p><strong>Here’s how it works:</strong></p>

            <ol>
                <li>From your dashboard, click the <strong>“Order Now, Pay After Delivery”</strong> button at the top.</li>
                <li>Fill in your order details on the form.</li>
                <li>Click <strong>“Order Now”</strong> to confirm — no upfront payment required.</li>
            </ol>

            <p>You can place up to <strong>{$postDeliveryLimit}</strong> post-delivery payment orders under your account.
            Once your order is delivered, you’ll have time to review it before making payment.</p>

            <p>At Writing Space, you have zero risk — experience quality first, pay later, and see why thousands of students trust us every day.</p>

            <p><a href='https://www.writing-space.com' 
            style='display:inline-block; background-color:#007bff; color:#fff; padding:10px 20px; 
            text-decoration:none; border-radius:5px;'>Order Now, Pay After Delivery</a></p>

            <p>Warm regards,<br>
            <strong>Team Writing Space</strong><br>
            <a href='mailto:support@writing-space.com'>support@writing-space.com</a><br>
            🌐 <a href='https://www.writing-space.com'>www.writing-space.com</a></p>
        ";

        if ($postDeliveryLimit > 0) {

        Mail::html($postDeliveryEmailContent, function ($message) use ($findUser) {
            $message->to($findUser->email)
                    ->subject('Enjoy Post-Delivery Payment – Experience Quality First, Pay Later');
        });

    }


                
                Log::info("Email sent to: " . $findUser->email);
            } catch (\Exception $e) {
                Log::error("Email sending failed: " . $e->getMessage());
            }

            $findUser->social_login_already = 1;
            $findUser->save();
        }

        // Step 5: Login and redirect
        Auth::login($findUser);
        Session::put('msatg', 1);
        Session::put('uname', $findUser->name);
        Session::put('id', $userData['id'] ?? null);

        return redirect('/customer/dashboard');
    }



    public function microsoftHandleajax(Request $request)
    {

        //dd($request);
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

        // Check if the 'social_login_already' column is 0
        if ($findUser->social_login_already == 0) {

                  $emailContent = "
<p>Hello {$findUser->name},</p>

<p>Welcome aboard! We're thrilled to have you join us at Writing Space, where we empower your academic journey with cutting-edge tools and ethical AI solutions. It's great to have you with us, and we can't wait to see what you achieve with the right resources at your fingertips.</p>

<p>Here's a quick guide to get you started on your path to success:</p>

<ol>
    <li><strong>Explore Your Dashboard:</strong> Your personal dashboard is your new best friend. Here, you can manage orders, track progress, and access a wealth of resources. Take a moment to familiarize yourself with its features—it's designed to make your life easier!</li>
    <li><strong>Dive into the Library:</strong> Our extensive library is stocked with sample papers and resources across a wide range of subjects. It's perfect for sparking ideas or understanding how to structure your papers.</li>
    <li><strong>Post a Custom Order:</strong> Got a specific project in mind? Post a custom order and let our tailored solutions meet your exact needs. Whether it's a tight deadline or a complex topic, we're here to help.</li>
    <li><strong>Check Out Packages:</strong> If you're looking for the best value, our packages are the way to go. With options like page rollovers and access to premium services at no additional cost, they're designed to save you money while providing top-notch support.</li>
</ol>

<p>We're excited to see how Writing Space will enhance your academic work. If you have any questions or need guidance, don't hesitate to reach out. Our support team is available 24/7 and ready to assist you.</p>

<p>Again, welcome to Writing Space! Let's make this academic journey a remarkable one.</p>

<p>Best Regards,<br>
Customer Success Team<br>
Writing Space</p>
";




      $global = GlobalOrdersAssign::latest()->first();
$assigned_orders = $global ? (int)$global->no_of_orders : 0;

$postDeliveryLimit = $assigned_orders ?? '' ;


            $postDeliveryEmailContent = "
    <p>Hi {$findUser->name},</p>

    <p>Welcome to Writing Space, where your trust always comes first.</p>

    <p>You can now enjoy complete peace of mind with our <strong>Post-Delivery Payment</strong> option — simply place your order, receive your completed work, and pay only after delivery.</p>

    <p><strong>Here’s how it works:</strong></p>

    <ol>
        <li>From your dashboard, click the <strong>“Order Now, Pay After Delivery”</strong> button at the top.</li>
        <li>Fill in your order details on the form.</li>
        <li>Click <strong>“Order Now”</strong> to confirm — no upfront payment required.</li>
    </ol>

    <p>You can place up to <strong>{$postDeliveryLimit}</strong> post-delivery payment orders under your account.
    Once your order is delivered, you’ll have time to review it before making payment.</p>

    <p>At Writing Space, you have zero risk — experience quality first, pay later, and see why thousands of students trust us every day.</p>

    <p><a href='https://www.writing-space.com' 
    style='display:inline-block; background-color:#007bff; color:#fff; padding:10px 20px; 
    text-decoration:none; border-radius:5px;'>Order Now, Pay After Delivery</a></p>

    <p>Warm regards,<br>
    <strong>Team Writing Space</strong><br>
    <a href='mailto:support@writing-space.com'>support@writing-space.com</a><br>
    🌐 <a href='https://www.writing-space.com'>www.writing-space.com</a></p>
";


           try {


    if ($postDeliveryLimit > 0) {
Mail::html($postDeliveryEmailContent, function ($message) use ($findUser) {
    $message->to($findUser->email)
            ->subject('Enjoy Post-Delivery Payment – Experience Quality First, Pay Later');
});

}




 Mail::html($postDeliveryEmailContent, function ($message) use ($findUser) {
            $message->to($findUser->email)
                    ->subject('Enjoy Post-Delivery Payment – Experience Quality First, Pay Later');
        });

    Log::info("Email sent to: " . $findUser->email);
} catch (\Exception $e) {
    Log::error("Email sending failed: " . $e->getMessage());
}



              // Update 'social_login_already' to 1 after sending the email
            $findUser->social_login_already = 1;
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
