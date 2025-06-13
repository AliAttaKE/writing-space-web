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


    public function submit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'message'    => 'required|string',
        ]);

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

   public function customCustomerRegistrationProcess(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
             'name' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password'
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'password_confirmation.required' => 'Password confirmation is required.',
            'password_confirmation.confirmed' => 'Password confirmation does not match.',
            // 'password_confirmation.min' => 'Password confirmation must be at least :min characters.',
        ]);

        $account_id = 'ID-' . rand(1000, 99999999);

        $input = [
            'name' => 'Customer-'.time(),
            'email' => $request->email,
             'name' => $request->name,
            'password' => Hash::make($request->password),
            'account_id' => $account_id,
        ];

        $user = User::create($input);

        if ($user) {
            session()->flash('success', 'Account created successfully!');
            // $email=Email::where('type','=','Sign Up')->first();
            // if($email){
            //     Mail::to($user->email)->send(new EmailTemplate($user,$email));
            // }

             //send verify code;
             $verify_code = Str::random(24);
             $verify_code = substr($verify_code, 0, 18);

             $user->verify_code = $verify_code;
             $user->status = 0;
             $user->save();

             $emailContent = "
    <p>Dear {$user->name},</p>
    <p>Welcome to <strong>Writing Space</strong> – Start Your Journey to Academic Mastery!</p>
    <p>We are thrilled to have you on board. Our platform is dedicated to helping you excel in your academic endeavors.</p>
    <p>If you have any questions or need further assistance, please don't hesitate to reach out to us.</p>
    <p>Best regards,<br>" . config('app.name') . " Team</p>
";

// Send the email using the inline HTML content
Mail::html($emailContent, function ($message) use ($user) {
    $message->to($user->email)
            ->subject('Welcome to Writing Space – Start Your Journey to Academic Mastery!');
});



            //  Mail::send('emails.verify_code', [
            //     'email' => $user->email,
            //     'verify_code' => $verify_code,
            //     'name' => $user->name,
            // ], function ($message) use ($user) { // Change $email to $user
            //     $message->to($user->email, 'Welcome to Writing Space – Start Your Journey to Academic Mastery!') // Change $email to $user->email
            //         ->subject('Welcome to Writing Space – Start Your Journey to Academic Mastery!');
            // });

            return redirect()->route('login')->with('success', 'Account created successfully!');
        } else {
            return redirect()->route('front.signup')->with('error', 'Something went wrong!');
        }
    }

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
