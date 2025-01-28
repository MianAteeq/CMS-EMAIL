<?php

namespace Modules\Vender\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Vender\Entities\VendorProfile;
use Illuminate\Contracts\Support\Renderable;

class MainContactController extends Controller
{
    public function mainContact()  {


        $user=auth()->user();

        $users=collect($user['accounts'])->where('type','!=','App');



        return view('vender::business.main_account.index',get_defined_vars());

    }
    public function mainContactView($id)  {


        $user=User::find($id);

        return view('vender::business.main_account.view',get_defined_vars());

    }
    public function mainContactEdit($id)  {


        $user=User::find($id);

        return view('vender::business.main_account.edit',get_defined_vars());

    }
    public function addMainContact()  {


        $user=auth()->user();

        return view('vender::business.main_account.add',get_defined_vars());

    }
    public function storeMainContact(Request $request)  {

        $user=auth()->user();
        $request->validate([
            'email' => ['required',Rule::unique('users')],
        ]);

        $filePath=$user['profile']['proof_of_main_contact'];
        $fileName=$user['profile']['proof_of_main_contact_name'];;
        if ($request->hasFile('proof_of_main_contact')) {
            $file = $request->file('proof_of_main_contact');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof_of_main_contact')->move('uploads', $fileNames);

        }


     $user=User::create([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'vender_id'=>$user['id'],
        'type'=>'Manager',
        'password'=>Hash::make('12345678'),
         'application_status'=>'ACCEPTED',
         'status'=>'ACTIVE'
       ]);

      $profile=VendorProfile::where('vender_id',$user['id'])->first();
       if(isset($profile)){
        VendorProfile::find($profile['id'])->update([
            'vender_id'=>$user['id'],
            'phone_no'=>$request['phone_no'],
            'landline'=>$request['landline'],
            'job_title'=>$request['job_title'],
            'person_authorised'=>$request['person_authorised'],
            'proof_of_main_contact'=>$filePath,
            'proof_of_main_contact_name'=>$fileName,


           ]);
       }else{
        VendorProfile::create([
            'vender_id'=>$user['id'],
            'phone_no'=>$request['phone_no'],
            'landline'=>$request['landline'],
            'job_title'=>$request['job_title'],
            'person_authorised'=>$request['person_authorised'],
            'proof_of_main_contact'=>$filePath,
            'proof_of_main_contact_name'=>$fileName,


           ]);
       }








        return  redirect()->route('vender.main.contact');

    }
    public function updateMainContact(Request $request)  {

        $user=User::find($request['id']);
        $request->validate([
            'email' => ['required',Rule::unique('users')->ignore($user->id)],
        ]);

        $filePath=$user['profile']['proof_of_main_contact']??null;
        $fileName=$user['profile']['proof_of_main_contact_name']??'';;
        if ($request->hasFile('proof_of_main_contact')) {
            $file = $request->file('proof_of_main_contact');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof_of_main_contact')->move('uploads', $fileNames);

        }


     User::find($user['id'])->update([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
         'type'=>'Manager',
         'status'=>'ACTIVE'
       ]);


       $profile=VendorProfile::where('vender_id',$user['id'])->first();
       if(isset($profile)){
        VendorProfile::find($profile['id'])->update([
            'vender_id'=>$user['id'],
            'phone_no'=>$request['phone_no'],
            'landline'=>$request['landline'],
            'job_title'=>$request['job_title'],
            'person_authorised'=>$request['person_authorised'],
            'proof_of_main_contact'=>$filePath,
            'proof_of_main_contact_name'=>$fileName,


           ]);
       }else{
        VendorProfile::create([
            'vender_id'=>$user['id'],
            'phone_no'=>$request['phone_no'],
            'landline'=>$request['landline'],
            'job_title'=>$request['job_title'],
            'person_authorised'=>$request['person_authorised'],
            'proof_of_main_contact'=>$filePath,
            'proof_of_main_contact_name'=>$fileName,


           ]);
       }




        return  redirect()->route('vender.main.contact');

    }
}
