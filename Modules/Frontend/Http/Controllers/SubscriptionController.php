<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Modules\Admin\Entities\Packages;
use Modules\Vender\Entities\Transaction;
use Modules\Vender\Entities\VendorProfile;
use Stripe\Stripe as StripeStripe;
use Illuminate\Support\Facades\Mail;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Modules\Admin\Entities\Services;
use Modules\Vender\Entities\VenderService;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        StripeStripe::setApiKey(env('Secret_key'));
    }

    public function create($random_key)
    {
        if ($random_key != null) {
            $package = Packages::where('random_key', $random_key)->first();

            session(['requestValue' => json_encode($package)]);



            return view('frontend::sign-up', get_defined_vars());
        } else {
            return redirect()->route('website.pricing');
        }
    }

    function validate(Request $request)
    {

        $rules = array(
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        );
        $validator = Validator::make($request->toArray(), $rules);


        if ($validator->fails()) {
            return Response::json(array(
                'success' => false,
                'field' => 'email',
                'errors' => $validator->errors()->first()

            )); // 400 being the HTTP code for an invalid request.
        }

        return true;
    }

    public function store(Request $request)
    {




        $user = User::create([
            'name' => $request->name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make(12345678),
            // 'lat'=>0,
            // 'long'=>0,
            'status' => 'NEW'
        ]);


        // $setting = $request->except('_token', 'name', 'email', 'last_name', 'password', 'message', 'address_proff', 'mechanic_docs', 'service_id');
        // if ($request->address_proff) {
        //     $filename = time() . '.' . $request->address_proff->extension();
        //     $path = public_path('profile/image/');
        //     $upload_image = $path . $filename;
        //     if (!File::exists($path)) {
        //         File::makeDirectory($path, $mode = 0777, true, true);
        //     }
        //     $img = Image::make($request->address_proff)->resize(200, 200);
        //     $img->save($upload_image);

        //     $address_proff = 'profile/image/' . $filename;
        // } else {
        //     $address_proff = "";
        // }
        // if ($request->mechanic_docs) {
        //     $filename = time() . '.' . $request->mechanic_docs->extension();
        //     $path = public_path('profile/image/');
        //     $upload_image = $path . $filename;
        //     if (!File::exists($path)) {
        //         File::makeDirectory($path, $mode = 0777, true, true);
        //     }
        //     $img = Image::make($request->mechanic_docs)->resize(200, 200);
        //     $img->save($upload_image);

        //     $mechanic_docs = 'profile/image/' . $filename;
        // } else {
        //     $mechanic_docs = "";
        // }

        VendorProfile::create([
            "vender_id" => $user->id,
            'phone_no' => $request->phone_no,
            'job_title' => $request->job_title,
            'trading_name' => $request->trading_name,
            'operation_type' => $request->operation_type,
            'address_line_1' => $request->address_line_1,
            'address_line_2' => $request->address_line_2,
            'address_line_3' => $request->address_line_3,
            'address_line_4' => $request->address_line_4,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'organization_status' => $request->organization_status,
            'vat_register' => $request->vat_register,

        ]);
        if (isset($request['service_id'])) {
            if (count($request['service_id']) > 0) {
                foreach ($request['service_id'] as $key => $service_id) {

                    VenderService::create([
                        'service_id' => $service_id,
                        'vender_id' => $user->id

                    ]);
                }
            }
        }
        // Mail::send('email.registration', get_defined_vars(), function ($send) use ($request) {
        //     $send->to($request['email'])->subject("Register Email");
        // });







        return redirect()->route('website.vendor.thank.you');
    }

    public function loginForm()
    {

        return view('frontend::sign-in');
    }
    public function register()
    {
        $total_services = Services::where('parent_id',0)->get();

        return view('frontend::sign-up', get_defined_vars());
    }

    public function login(Request $request)
    {

        $user=User::where('email',$request['email'])->first();


        if(isset($user)){

            if($user['status']=='NEW'){

                $errors = 'Your are not active yet!';
                return redirect('/sign-in')->withErrors($errors);
            }
        }
        if(isset($user)){

            if($user['status']!='ACTIVE' && $user['status']!='ACCEPTED'){

                $errors = 'Your are not active yet!';
                return redirect('/sign-in')->withErrors($errors);
            }
        }

        if($user->vender_id!=0){

            // return $user['business_app']['status'];
            if(!isset($user['business_app'])){
                $errors = 'You does not have Business Manager Access';
                return redirect('/sign-in')->withErrors($errors);
            }
            if($user['business_app']['status']==0){
                $errors = 'You does not have Business Manager Access';
                return redirect('/sign-in')->withErrors($errors);
            }
        }

        $user_auth = FacadesAuth::guard('web')
            ->attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password,
                ],
                $request->remember
            );
        if ($user_auth) {


            return redirect()->route('vender.profiles');
        } else {
            $errors = 'Please Enter Valid Email ID or Password.';
            return redirect('/sign-in')->withErrors($errors);
        }
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
    }

    public function logout(Request $request)
    {
        // return 1;

        auth()->guard('web')->logout();
        return redirect('login');
    }

    public function thankYou()
    {

        return view('frontend::thank_you.thank_you');
    }
}
