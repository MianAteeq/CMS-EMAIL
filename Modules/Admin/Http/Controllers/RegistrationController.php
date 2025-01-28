<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Support\Renderable;

class RegistrationController extends Controller
{
    public function prospects() {


        return view('admin::admin.registration.prospects');

    }
    public function interests() {


        $users=User::whereIn('status',['NEW','ACCEPTED','DECLINE'])->get();

        return view('admin::admin.registration.interest',get_defined_vars());

    }
    public function register() {


        $users=User::whereIn('application_status',['ACCEPTED','INACTIVE'])->where('type',null)->get();

        return view('admin::admin.registration.register',get_defined_vars());

    }
    public function registerDetail($id) {


        $user=User::find($id);

        return view('admin::admin.registration.register_detail',get_defined_vars());

    }
    public function interestDetail($id) {


        $user=User::find($id);

        return view('admin::admin.registration.interest_detail',get_defined_vars());

    }
    public function interestBusinessDetail($id) {


        $user=User::find($id);

        return view('admin::admin.registration.interest_detail_business',get_defined_vars());

    }
    public function interestContactDetail($id) {


        $user=User::find($id);

        return view('admin::admin.registration.interest_detail_contact',get_defined_vars());

    }
    public function interestAccept($id) {


       User::find($id)->update([
            'status'=>'ACCEPTED'
        ]);
        $user=User::find($id);

        Mail::send('email.interest_accept', get_defined_vars(), function ($send) use ($user) {
            $send->to($user['email'])->subject("Interest Accepted Email");
        });

        return redirect()->back()->with('success', 'Interest Accept Successfully');

    }
    public function registerInActive($id) {


       User::find($id)->update([
            'application_status'=>'INACTIVE'
        ]);
        $user=User::find($id);

        // Mail::send('email.interest_accept', get_defined_vars(), function ($send) use ($user) {
        //     $send->to($user['email'])->subject("Interest Accepted Email");
        // });

        return redirect()->back()->with('success', 'Profile IN ACTIVE Successfully');

    }
    public function registerActive($id) {


       User::find($id)->update([
            'application_status'=>'ACCEPTED'
        ]);
        $user=User::find($id);

        // Mail::send('email.interest_accept', get_defined_vars(), function ($send) use ($user) {
        //     $send->to($user['email'])->subject("Interest Accepted Email");
        // });

        return redirect()->back()->with('success', 'Profile IN ACTIVE Successfully');

    }
    public function interestDecline($id) {



       User::find($id)->update([
            'status'=>'DECLINE'
        ]);


        return redirect()->back()->with('success', 'Interest Decline Successfully');

    }
}
