<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\TradingName;
use Modules\Vender\Entities\VenderAddress;
use Modules\Vender\Entities\VendorProfile;
use Illuminate\Contracts\Support\Renderable;

class ApplicationController extends Controller
{
   public function application() {


    $users=User::whereIn('application_status',['IN_REVIEW','ACCEPTED'])->where('type',null)->get();

    return view('admin::admin.registration.application.index',get_defined_vars());

   }

    public function applicationDetail($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.application_detail',get_defined_vars());

    }
    public function applicationInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.application_info',get_defined_vars());

    }

    // Business Info

    public function businessInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.business_info',get_defined_vars());

    }
    public function businessInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.business_info_verify',get_defined_vars());

    }
    public function businessVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'business_status'=>1
       ]);

        return redirect()->back()->with('success', 'business information Accept Successfully');

    }
    public function businessDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'business_status'=>3
       ]);

        return redirect()->back()->with('success', 'business information Decline Successfully');

    }


     // VAT Info

     public function vatInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.vat',get_defined_vars());

    }
    public function vatInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.vat_verify',get_defined_vars());

    }
    public function vatVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'vat_status'=>1
       ]);

        return redirect()->back()->with('success', 'Vat Accept Successfully');

    }
    public function vatDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'vat_status'=>3
       ]);

        return redirect()->back()->with('success', 'Vat Decline Successfully');

    }
     // Trading Name Info

     public function tradingInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.trading_name',get_defined_vars());

    }
    public function tradingInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.trading_name_verify',get_defined_vars());

    }
    public function tradingVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'trading_name_status'=>1
       ]);

        return redirect()->back()->with('success', 'Trading Name Accept Successfully');

    }
    public function tradingDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'trading_name_status'=>3
       ]);

        return redirect()->back()->with('success', 'Trading Name Decline Successfully');

    }

    // businessActivity Info

     public function businessActivityInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.business_activity',get_defined_vars());

    }
    public function businessActivityInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.business_activities_verify',get_defined_vars());

    }
    public function businessActivityVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'business_activities_status'=>1
       ]);

        return redirect()->back()->with('success', 'business Activity Accept Successfully');

    }
    public function businessActivityDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'business_activities_status'=>3
       ]);

        return redirect()->back()->with('success', 'business Activity Decline Successfully');

    }

    // TradeUnit Info

     public function TradeUnitInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.trade_unit',get_defined_vars());

    }
    public function TradeUnitInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.trade_unit_verify',get_defined_vars());

    }
    public function TradeUnitVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'trade_unit_status'=>1
       ]);

        return redirect()->back()->with('success', 'Trading Unit Accept Successfully');

    }
    public function TradeUnitDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'trade_unit_status'=>3
       ]);

        return redirect()->back()->with('success', 'Trading Unit Decline Successfully');

    }

    // MainAccount Info

     public function MainAccountInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.main_account',get_defined_vars());

    }
    public function MainAccountInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.main_account_verify',get_defined_vars());

    }
    public function MainAccountVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'main_account_status'=>1
       ]);

        return redirect()->back()->with('success', 'Main Account Accept Successfully');

    }
    public function MainAccountDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'main_account_status'=>3
       ]);

        return redirect()->back()->with('success', 'Main Account Decline Successfully');

    }
    // MainAccount Info

     public function SubscriptionInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.subscription',get_defined_vars());

    }
    public function SubscriptionInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.subscription_verify',get_defined_vars());

    }
    public function SubscriptionVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'subscription_status'=>1
       ]);



        return redirect()->back()->with('success', 'Subscription Accept Successfully');

    }
    public function SubscriptionDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'subscription_status'=>3
       ]);

        return redirect()->back()->with('success', 'Subscription Decline Successfully');

    }

    public function applicationAccept($id) {


        User::find($id)->update([
             'application_status'=>'ACCEPTED'
         ]);


         $user=User::with('profile')->find($id);





        vendorProfile::where('vender_id',$id)->update([
            'step'=>11,
            'business_status'=>1,
            'trading_name_status'=>1,
            'vat_status'=>1,
            'business_activities_status'=>1,
            'main_account_status'=>1,
            'subscription_status'=>1,
            'trade_unit_status'=>1,
            'bank_status'=>1,
        ]);
         $user=User::find($id);

         return redirect()->back()->with('success', 'Application Accept Successfully');

     }
     public function applicationDecline($id) {


        User::find($id)->update([
             'application_status'=>'DECLINE'
         ]);


         return redirect()->back()->with('success', 'Application Decline Successfully');

     }


      // MainAccount Info

      public function bankInfo($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.bank',get_defined_vars());

    }
    public function bankInfoVerify($id) {


        $user=User::find($id);

        return view('admin::admin.registration.application.bank_verify',get_defined_vars());

    }
    public function bankVerify($id) {


       VendorProfile::where('vender_id',$id)->update([
        'bank_status_verify'=>1
       ]);



        return redirect()->back()->with('success', 'Bank Accept Successfully');

    }
    public function bankDecline($id) {


       VendorProfile::where('vender_id',$id)->update([
        'bank_status_verify'=>3
       ]);

        return redirect()->back()->with('success', 'Bank Decline Successfully');

    }

}
