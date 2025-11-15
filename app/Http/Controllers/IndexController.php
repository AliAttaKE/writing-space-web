<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Email;
use App\Mail\EmailTemplate;
use Illuminate\Support\Str;
use App\Models\LoginSession;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;
use Stevebauman\Location\Facades\Location;
use Jenssegers\Agent\Facades\Agent;//device name
use App\Models\Subject;
use App\Models\Paper_Format;
use App\Models\Term_of_paper;
use App\Models\WordCount;
use App\Models\Pricing;
use App\Models\PricingWeb;
use App\Models\Addons;
use Illuminate\Support\Facades\Http;
use App\Models\Paper;



class IndexController extends Controller
{
    // public function frontend()
    // {
    //     return view('frontend.index');
    // }


    public function frontend_final()
    {
        $papers = Paper::latest()->get();
        $pricing = PricingWeb::orderBy('id', 'desc')->get();

        return view('frontend_final.index',compact('papers','pricing'));
    }

    public function about()
    {
        return view('frontend_final.Resources.aboutus');
    }
    // public function about()
    // {
    //     return view('frontend.about');
    // }
     public function subscriptions()
    {
        $subscription =Subscription::all();
        return view('frontend.subscriptions',compact('subscription'));
    }
    public function customOrdering()
    {
        return view('frontend.products');
    }
    // public function contact()
    // {
    //     return view('frontend.contact');
    // }
    public function contact()
    {
        return view('frontend_final.Resources.contactus');
    }
    public function samplepaper(Request $request)
    {

        $query = Paper::where('status', 'Enable');

        $subject = $request->get('subject');
        $termOption = $request->get('termOption');
        $wordCount = $request->get('wordCount');
        $citation = $request->get('citation');

        if (!empty($subject)) {
            $query->where('subject_topic', $subject);
        }
        if (!empty($termOption)) {
            $query->where('paper_type', $termOption);
        }
        if (!empty($wordCount)) {
            $query->where('word_count', $wordCount);
        }
        if (!empty($citation)) {
            $query->where('citation', $citation);
        }

        $libraries = $query->latest()->get();


        $titles = Paper::where('status', 'Enable')->get();
        $terms = Paper::where('status', 'Enable')->get();
        $papers = Paper::where('status', 'Enable')->get();






        return view('frontend_final.SamplePaper.samplepaper', compact('titles','terms','papers','libraries', 'subject', 'termOption', 'wordCount', 'citation'));
    }

    public function ajaxsamplepaper(Request $request)
    {
        $query = Paper::where('status', 'Enable');

        $subject = $request->get('subject');
        $termOption = $request->get('termOption');
        $wordCount = $request->get('wordCount');
        $citation = $request->get('citation');

        if (!empty($subject)) {
            $query->where('subject_topic', $subject);
        }

        if (!empty($termOption)) {
            $query->where('paper_type', $termOption);
        }
        if (!empty($wordCount)) {
            $query->where('word_count', $wordCount);
        }
        if (!empty($citation)) {
            $query->where('citation', $citation);
        }

        $libraries = $query->latest()->get();

        return response()->json(['libraries' => $libraries]);
    }
    public function ajaxsamplepaperpage(Request $request)
    {
        $libraries = Paper::where('id', $request->page)->get();


        return response()->json(['libraries' => $libraries]);
    }
    public function ajaxsamplepaperpageall(Request $request)
    {
        $libraries = Paper::get();


        return response()->json(['libraries' => $libraries]);
    }



    public function customerjourney()
    {
        return view('frontend_final.CustomerJourney.customer-journey');
    }
    public function services_us()
    {
        return view('frontend_final.Services.services');
    }
    public function packages()
    {
        $subscription =Subscription::all();

        return view('frontend_final.Pricing.packages',compact('subscription'));
    }
     public function showIntroduction()
    {
        return view('frontend_final.SubServices.new-only-the-introduction-chapter');
    }
    public function customorder()
    {
        $pricing = Pricing::orderBy('id', 'desc')->get();
        $Addons = Addons::orderBy('id', 'desc')->first();

        return view('frontend_final.Pricing.custom-order',compact('pricing','Addons'));
    }
    public function faqs()
    {
        return view('frontend_final.Resources.faqs');
    }
    public function privacyPolicy()
    {
        return view('frontend.privacy');
    }
    public function termsConditions()
    {
        return view('frontend.terms');
    }
      public function sitemap()
    {
        return view('frontend.sitemap');
    }
    public function cookiePolicy()
    {
        return view('frontend.cookiepolicy');
    }
    public function copyright()
    {
        return view('frontend.copyright');
    }

   public function createSignup()
   {
        return view('frontend_final.signup');
   }
   public function checkEmailNotice()
   {
        return view('frontend_final.resend_email');
   }


   public function resendVerifyEmail(Request $request)
{
    if (!$request->user()) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    if ($request->user()->hasVerifiedEmail()) {
        return response()->json(['message' => 'Email already verified'], 400);
    }

    // RESEND EMAIL AGAIN
    $request->user()->sendEmailVerificationNotification();

    return response()->json(['message' => 'Verification email sent successfully']);
}
   public function emailverified()
   {
        return view('frontend_final.email_verified');
   }

public function directEmailUpdate()
{
    $oldEmail = 'shariqiqbal572@gmail.com';  // old
    $newEmail = 'shariqiqbal573332@gmail.com';       // new

    $user = \App\Models\User::where('email', $oldEmail)->first();

    if (!$user) {
        return "❌ User with email {$oldEmail} not found.";
    }

    if (\App\Models\User::where('email', $newEmail)->exists()) {
        return "❌ New email {$newEmail} is already taken.";
    }

    $user->email = $newEmail;
    $user->save();

    return "✅ Email successfully updated from {$oldEmail} to {$newEmail}";
}

public function resendVerificationEmail(Request $request)
{
    // Fetch session data (saved at registration time)
    $tempData = session('pending_verification_data');
    $pendingEmail = session('pending_email');

    

    if (!$tempData || !$pendingEmail) {
        return response()->json(['message' => 'No pending verification found.'], 404);
    }

    // Step 1: Generate link again
    $verificationLink = route('verify.email', ['token' => $tempData]);

   

    // Step 2: Email content
    $emailSubject = '✅ Verify your email to activate your Writing Space account';
    $emailBody = "
        <p>Hi,</p>

        <p>Here is your email verification link:</p>
        <p><a href='{$verificationLink}' target='_blank'>{$verificationLink}</a></p>

        <p>⚠️ Please check Spam/Junk if not found in Inbox.</p>

        <br>

        <p>Warm regards,<br>
        <strong>Team Writing Space</strong><br>
        support@writing-space.com<br>
        https://www.writing-space.com</p>
    ";



Mail::html($emailBody, function ($message) use ($pendingEmail, $emailSubject) {
    $message->to($pendingEmail)
            ->subject($emailSubject)
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
});

       Mail::raw('This is a test email from Laravel Titan setup.', function ($message) {
            $message->to('shariqiqbal572@gmail.com')
                    ->subject('Titan SMTP Test');
        });

    

    return response()->json(['message' => 'Verification email sent successfully!']);
}




    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'message'    => 'required|string',
             'g-recaptcha-response' => 'required',
        ]);

         $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret'   => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $data = $response->json();

    if (!($data['success'] ?? false)) {
        return back()->with('error', 'reCAPTCHA validation failed. Please try again.');
    }
        $admin = User::where('role', 'admin')->first();
        if (!$admin) {
            return back()->with('error', 'Admin not found.');
        }

        $emailSubject = 'New Contact Us Form Submission';

        $emailContent = "
            <p><strong>Contact Message from Website:</strong></p>
            <p><strong>Name:</strong> {$request->first_name} {$request->last_name}</p>
            <p><strong>Email:</strong> {$request->email}</p>
            <p><strong>Message:</strong><br>{$request->message}</p>
            <p>Sent on: " . now()->format('F j, Y g:i A') . "</p>
        ";

        Mail::html($emailContent, function ($message) use ($admin, $emailSubject) {
            $message->to($admin->email)->subject($emailSubject);
        });

        return back()->with('success', 'Your message has been sent. Our team will contact you soon.');
    }




   public function admissionessay()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.admission-essay',compact('papers','pricing','Addons'));
   }
   public function annotatedbibliography()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.annotated-bibliography',compact('papers','pricing','Addons'));
   }
   public function applicationessay()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.application-essay',compact('papers','pricing','Addons'));
   }
   public function articlereview()
   {

    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
    $papers = Paper::latest()->get();
    return view('frontend_final.SubServices.article-review',compact('papers','pricing','Addons'));
   }
   public function bookreport()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.book-report',compact('papers','pricing','Addons'));
   }
   public function businessplan()
   {
        $papers = Paper::latest()->get();
        $pricing = PricingWeb::orderBy('id', 'desc')->get();
        $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.business-plan',compact('papers','pricing','Addons'));
   }
   public function businessproposal()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.business-proposal',compact('papers','pricing','Addons'));
   }
   public function capstoneproject()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.capstone-project',compact('papers','pricing','Addons'));
   }
   public function casestudy()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.case-study',compact('papers','pricing','Addons'));
   }
   public function corporate()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.corporate',compact('papers','pricing','Addons'));
   }
   public function creativewriting()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.creative-writing',compact('papers','pricing','Addons'));
   }
   public function dissertationorthesiscomplete()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.dissertation-or-thesis-complete',compact('papers','pricing','Addons'));
   }
   public function journalprofessional()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.journal-professional',compact('papers','pricing','Addons'));
   }
   public function marketingplan()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.marketing-plan',compact('papers','pricing','Addons'));
   }
   public function multiplechapters()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.multiple-chapters',compact('papers','pricing','Addons'));
   }
   public function onlytheconclusionchapter()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.only-the-conclusion-chapter',compact('papers','pricing','Addons'));

   }
   public function onlythehypothesischapter()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.only-the-hypothesis-chapter',compact('papers','pricing','Addons'));
   }
   public function onlytheliteraturereviewchapter()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.only-the-literature-review-chapter',compact('papers','pricing','Addons'));
   }
   public function onlythemethodologychapter()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.only-the-methodology-chapter',compact('papers','pricing','Addons'));
   }
   public function peerreviewedjournal()
   {
    $papers = Paper::latest()->get();
    $pricing = PricingWeb::orderBy('id', 'desc')->get();
    $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.peer-reviewed-journal',compact('papers','pricing','Addons'));
   }
   public function poetryartanalysis()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.poetry-art-analysis',compact('papers','pricing','Addons'));
   }
   public function powerpointpresentation()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.powerpoint-presentation',compact('papers','pricing','Addons'));
   }
   public function researchpaper()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.research-paper',compact('papers','pricing','Addons'));
   }
   public function researchproposal()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.research-proposal',compact('papers','pricing','Addons'));
   }
   public function resumecrafting()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.resume-crafting',compact('papers','pricing','Addons'));
   }
   public function swotanalysis()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.swot-analysis',compact('papers','pricing','Addons'));
   }
   public function tailormadeessays()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.tailor-made-essays',compact('papers','pricing','Addons'));
   }
   public function termpaper()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.term-paper',compact('papers','pricing','Addons'));
   }
   public function websitecontent()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.website-content',compact('papers','pricing','Addons'));
   }
   public function whitepaper()
   {
     $papers = Paper::latest()->get();
     $pricing = PricingWeb::orderBy('id', 'desc')->get();
     $Addons = Addons::orderBy('id', 'desc')->first();
       return view('frontend_final.SubServices.white-paper',compact('papers','pricing','Addons'));
   }





//    public function createSignup()
//    {
//         return view('frontend.signup');
//    }

//    public function customCustomerRegistrationProcess(Request $request)
//     {


//        $validated = $request->validate([
//         'email' => 'required|email|unique:users,email',
//         'g-recaptcha-response' => 'required',
//         'name' => [
//             'required',
//             'regex:/^(?:\S+(?:\s+|$)){1,20}$/'
//         ],
//         'password' => 'required',
//         'password_confirmation' => 'required_with:password|same:password',
//     ], [
//         'email.required' => 'Email is required.',
//         'email.email' => 'Please enter a valid email address.',
//         'email.unique' => 'This email is already registered.',
//         'password.required' => 'Password is required.',
//         'password_confirmation.required' => 'Password confirmation is required.',
//         'password_confirmation.same' => 'Password confirmation does not match.',
//     ]);

//     // Verify reCAPTCHA
//     $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
//         'secret'   => env('RECAPTCHA_SECRET_KEY'),
//         'response' => $request->input('g-recaptcha-response'),
//         'remoteip' => $request->ip(),
//     ]);

//     $data = $response->json();

//     if (!($data['success'] ?? false)) {
//         return back()->with('error', 'reCAPTCHA validation failed. Please try again.');
//     }
//         $account_id = 'ID-' . rand(1000, 99999999);

//         $input = [
//             'name' => 'Customer-'.time(),
//             'email' => $request->email,
//              'name' => $request->name,
//             'password' => Hash::make($request->password),
//             'account_id' => $account_id,
//         ];


//         $user = User::create($input);

//         if ($user) {
//             session()->flash('success', 'Account created successfully!');
//             // $email=Email::where('type','=','Sign Up')->first();
//             // if($email){
//             //     Mail::to($user->email)->send(new EmailTemplate($user,$email));
//             // }

//              //send verify code;
//              $verify_code = Str::random(24);
//              $verify_code = substr($verify_code, 0, 18);

//              $user->verify_code = $verify_code;
//              $user->status = 0;
//              $user->save();




//    $emailContent = "
//     <p>Hello {$user->name},</p>

//     <p>Welcome aboard! We’re thrilled to have you join us at Writing Space, where we empower your academic journey with cutting-edge tools and ethical AI solutions. It’s great to have you with us, and we can’t wait to see what you achieve with the right resources at your fingertips.</p>

//     <p>Here’s a quick guide to get you started on your path to success:</p>

//     <ol>
//         <li><strong>Explore Your Dashboard:</strong> Your personal dashboard is your new best friend. Here, you can manage orders, track progress, and access a wealth of resources. Take a moment to familiarize yourself with its features—it’s designed to make your life easier!</li>
//         <li><strong>Dive into the Library:</strong> Our extensive library is stocked with sample papers and resources across a wide range of subjects. It’s perfect for sparking ideas or understanding how to structure your papers.</li>
//         <li><strong>Post a Custom Order:</strong> Got a specific project in mind? Post a custom order and let our tailored solutions meet your exact needs. Whether it's a tight deadline or a complex topic, we’re here to help.</li>
//         <li><strong>Check Out Packages:</strong> If you’re looking for the best value, our packages are the way to go. With options like page rollovers and access to premium services at no additional cost, they’re designed to save you money while providing top-notch support.</li>
//     </ol>

//     <p>We're excited to see how Writing Space will enhance your academic work. If you have any questions or need guidance, don’t hesitate to reach out. Our support team is available 24/7 and ready to assist you.</p>

//     <p>Again, welcome to Writing Space! Let’s make this academic journey a remarkable one.</p>

//     <p>Best Regards,<br>
//     Customer Success Team<br>
//     Writing Space</p>
//         ";

//         // Send the email using the inline HTML content
//         Mail::html($emailContent, function ($message) use ($user) {
//             $message->to($user->email)
//                     ->subject('Welcome to Writing Space – Start Your Journey to Academic Mastery!');
//         });


// // --- Admin Email for New Signup ---
// $adminSubject = "New signup: {$user->name} ({$user->email})";
// $adminContent = "
//     <p>Hi team,</p>
//     <p>A new user just signed up.</p>
//     <ul>
//         <li><strong>Name:</strong> {$user->name}</li>
//         <li><strong>Email:</strong> {$user->email}</li>
//         <li><strong>Sign-up time:</strong> " . now()->format('Y-m-d H:i:s') . "</li>
//     </ul>
//     <p>Regards,<br>System Notification</p>
// ";

// // get all admin emails as array
// $admins = User::where('role', 'admin')->pluck('email')->toArray();

// if (!empty($admins)) {
//     Mail::html($adminContent, function ($message) use ($adminSubject, $admins) {
//         $message->to($admins)->subject($adminSubject);
//     });
// }



//             //  Mail::send('emails.verify_code', [
//             //     'email' => $user->email,
//             //     'verify_code' => $verify_code,
//             //     'name' => $user->name,
//             // ], function ($message) use ($user) { // Change $email to $user
//             //     $message->to($user->email, 'Welcome to Writing Space – Start Your Journey to Academic Mastery!') // Change $email to $user->email
//             //         ->subject('Welcome to Writing Space – Start Your Journey to Academic Mastery!');
//             // });

//             return redirect()->route('login')->with('success', 'Account created successfully!');
//         } else {
//             return redirect()->route('front.signup')->with('error', 'Something went wrong!');
//         }
//     }

public function customCustomerRegistrationProcess(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);
  session()->forget(['pending_verification_data', 'pending_email']);

// Ab naya save karo
    $tempData = encrypt(json_encode([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
    ]));

  
session([
    'pending_verification_data' => $tempData,
    'pending_email'             => $request->email
]);

    // Step 2: Create verification link
    $verificationLink = route('verify.email', ['token' => $tempData]);

    // Step 3: Email content
    $emailSubject = '✅ Verify your email to activate your Writing Space account';
    $emailBody = "
        <p>Hi {$request->name},</p>

        <p>Thank you for signing up with <strong>Writing Space</strong>!<br>
        Before we can activate your account, we need to verify your email address.</p>

        <p><strong>Please copy and paste the following link into your browser:</strong><br>
        <a href='{$verificationLink}' target='_blank'>{$verificationLink}</a></p>

        <p><strong>⚠️ Important:</strong></p>
        <ul>
            <li>Check your Inbox and Spam/Junk folders if you don’t see our emails.</li>
            <li>Add <strong>support@writing-space.com</strong> to your safe sender or whitelist — this ensures you don’t miss important updates, order notifications, or payment alerts.</li>
        </ul>

        <p>If you didn’t sign up for Writing Space, you can safely ignore this email.</p>

        <br>

        <p>Warm regards,<br>
        <strong>Team Writing Space</strong><br>
        support@writing-space.com<br>
        https://www.writing-space.com</p>
    ";

    // Step 4: Send Email (NO FROM ADDED → Titan SMTP will use default sender)
    Mail::html($emailBody, function ($message) use ($request, $emailSubject) {
        $message->to($request->email)->subject($emailSubject);
    });


    $emailContent = "
    <p>Hello {$request->name},</p>

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
           Mail::html($emailContent, function ($message) use ($request) {
    $message->to($request->email)
            ->subject('Welcome to Writing-Space – Start Your Journey to Academic Mastery!');
});


    
    return redirect()->route('verify.notice');
}
public function verifyEmail(Request $request)
{
    try {
        // Step 1: Decrypt token
        $data = json_decode(decrypt($request->token), true);

        // Step 2: Already verified?
        if (User::where('email', $data['email'])->exists()) {
            return redirect()->route('verification.confirm')
                ->with('message', 'Your email is already verified.');
        }

        // Step 3: Create account
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => $data['password'],
        ]);

        // ✅ Step 4: Success Email Body
        $emailSubject = "🎉 Your Writing Space account is now Active";
        $emailBody = "
            <p>Hi {$user->name},</p>
            <p>🎉 Congratulations! Your email has been successfully verified and your Writing Space account is now active.</p>
            <p>You can now log in and start using all features.</p>
            <p>
                <a href='" . route('login') . "' target='_blank'>
                    Click here to Login
                </a>
            </p>
            <br>
            <p>If you need help, feel free to contact us at <b>support@writing-space.com</b>.</p>
            <p>Warm regards,<br>Team Writing Space<br>https://www.writing-space.com</p>
        ";

        // ✅ Step 5: Send Email (simple)
        Mail::html($emailBody, function ($message) use ($user, $emailSubject) {
            $message->to($user->email)
                    ->subject($emailSubject);
        });

        // ✅ Step 6: Redirect to confirmation page
        return redirect()->route('verification.confirm')
            ->with('success', 'Your email has been verified successfully!');
    } 
    catch (\Exception $e) {
        return redirect()->route('register')
            ->with('error', 'Invalid or expired verification link.');
    }
}


// public function customCustomerRegistrationProcess(Request $request)
// {
//     // ✅ pehle user create karna hoga
//     $request->validate([
//         'name'     => 'required|string|max:255',
//         'email'    => 'required|email|unique:users,email',
//         'password' => 'required|min:8|confirmed',
//     ]);

//     // $user = User::create([
//     //     'name' => $request->name,
//     //     'email' => $request->email,
//     //     'password' => Hash::make($request->password),
//     // ]);

//     // ✅ Verification link generate
//     $verificationLink = url('/verify-email/' . encrypt($user->email));

//     // ✅ Email subject
//     $emailSubject = '✅ Verify your email to activate your Writing Space account';

//     // ✅ Direct HTML email body
//     $emailBody = "
//         <p>Hi {$user->name},</p>
//         <p>Thank you for signing up with <strong>Writing Space</strong>!<br>
//         Before we can activate your account, we need to verify your email address.</p>

//         <p><strong>Please copy and paste the following link into your browser:</strong><br>
//         <a href='{$verificationLink}' target='_blank'>{$verificationLink}</a></p>

//         <p>⚠️ <strong>Important:</strong></p>
//         <ul>
//             <li>Check your Inbox and Spam/Junk folders if you don’t see our emails.</li>
//             <li>Add <strong>support@writing-space.com</strong> to your safe sender list.</li>
//         </ul>

//         <p>If you didn’t sign up for Writing Space, you can safely ignore this email.</p>

//         <p>Warm regards,<br>
//         <strong>Team Writing Space</strong><br>
//         support@writing-space.com<br>
//         https://www.writing-space.com
//         </p>
//     ";

//     // ✅ Send email
//     Mail::html($emailBody, function($message) use($user, $emailSubject) {
//         $message->to($user->email)
//                 ->subject($emailSubject);
//     });

//     return redirect()->route('verify.notice');
// }

    public function accountVerify(Request $request, $verify_code)
    {
        $code = User::where('email', $request->input('email'))
                    ->where('verify_code', $verify_code)->first();
        if(!$code)
        {
            return back()->with('error', 'Verification failed!');
        }

        if($code->verify_code == $verify_code)
        {
            $code->status = 1;
            $code->verify_code = null;
            $code->verified = 1;
            $code->save();
            return redirect()->route('login')->with('success', 'Account verified successfully!');
        }
    }


}
