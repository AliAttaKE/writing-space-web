<?php

namespace App\Http\Controllers\Backend\Customer;



use App\Models\User;
use App\Models\Coupon;
use Illuminate\Support\Str;
use App\Models\TempraryData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BrandAmbassadorController extends Controller
{
    public function index()
    {
        $users = User::whereIs_brand_amb(1)
                        ->where('brand_amb_created_by', auth()->user()->id)->paginate(5);
        $discounts = Coupon::where('discount_value', 'Percentage')->where('Active',1)->select('code','discount','min_pages')->get();    
        //dd($discounts);        
        return view('backend.customer.brandAmbassador.index', compact('users','discounts'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'message' => 'required|string',
            'email' => 'required|unique:users,email',
        ], [
            'email.unique' => 'The email you entered is already associated with an existing account. Please invite a new user or contact support at support@writing-space.com if you need assistance.'
        ]);
        

       

        // if(Auth::check() && Auth::user()->tier !== 'tier_4')
        // {
        //     return response()->json([
        //         'status' => true,
        //         'message' => 'You are not allowed to invite this brand ambassador.'
        //     ], 200);
        // }
        

        $token = Str::random(45);
        $user = TempraryData::create([
            'email' => $request->email,
            'temprary_token' => $token,
            'auth_user_id' => Auth::user()->id,
        ]);

        $signupUrl = route('customer.brand.ambassadors.signup', ['token' => $token]);
               
        $data = [
            'signupUrl' => $signupUrl,
            'name'      => $request->name,
            'message'   => $request->message,
        ];
   
        try {
            
            Mail::send('emails.brand_ambassador_sign_up', ['data' => $data], function($message) use ($request) {
                $message->to($request->email)->subject('Sign Up for Our Website');
            });
            return response()->json(['status' => true, 'message' => 'Signup link sent to your email.'],200);
        } catch (\Exception $e) {
            return $e->getMessage().''.$e->getLine();
        }
       
    }

    public function signUp(Request $request)
    {
        $check = TempraryData::where('temprary_token', $request->token)->first();
        if (!$check) {
            abort(404);
        }

        $email = $check->email;
        $temprary_token = $check->temprary_token;
        $auth_user_id = $check->auth_user_id;
        return view('backend.customer.brandAmbassador.signup', compact('temprary_token', 'email','auth_user_id'));
    }
    public function signUpProcess(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $data['account_id'] = $account_id = 'ID-' . rand(1000, 99999999);
        $data['name'] = 'Brand Ambassador - '. time();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['password_confirmation'] = $request->password_confirmation;
        $data['tier'] = 'tier_4';
        $data['is_brand_amb'] = 1;
        $data['brand_amb_created_by'] = $request->auth_user_id;

        $user = User::create($data);
        if(!$user)
        {
            abort(404);
        }
        $temprary_token = $request->temprary_token;
        $check = TempraryData::where('temprary_token', $temprary_token)->first();
        if ($check) {
            //update user tier which invite this embassador;
            $auth_user_id = $check->auth_user_id;
            $updateAuthUser = User::find($auth_user_id);

            if ($updateAuthUser) {
                $updateAuthUser->tier = 'tier_5';
                $updateAuthUser->save();
            }
            $check->delete();
        }
        return redirect()->route('login');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('customer.brand.ambassadors')->with('success', 'Brand Ambassador deleted successfully');
    }

}
