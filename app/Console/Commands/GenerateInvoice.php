<?php

namespace App\Console\Commands;

use App\Models\User;
use Stripe\StripeClient;
use Illuminate\Console\Command;
use Modules\Admin\Entities\Packages;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\VenderInvoice;
use Modules\Vender\Entities\PackageSubscription;

class GenerateInvoice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:invoice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $package=Packages::where('price',0)->first();
        $users=User::whereHas('profile', function($q) use($package){
            $q->where('package_id',$package['id']);
        })->get();

        foreach ($users as $key => $user) {

            $invoices=Invoice::where('is_verified',0)->where('vender_id',$user['id'])->get();

            $commission=0;

            foreach($invoices as $invoice){
                $commission+=($invoice['total']*5)/100;
            }

            if($commission>0){
            $stripe = new StripeClient(env('STRIPE_SECRET'));


          $invoice=$stripe->invoices->create([
                'customer' => $user['profile']['customer_id'],
                'collection_method'=>'send_invoice',
                'days_until_due'=>2,

            ]);
             $stripe->invoiceItems->create([
                'customer' => $user['profile']['customer_id'],
                'amount' => round($commission*100),
                'currency' => 'gbp',
                'description'=> 'Service Provider Commission',
                'invoice'=>$invoice['id']

            ]);
            $stripe->invoices->finalizeInvoice($invoice['id'], []);


           $subs=PackageSubscription::where('vender_id',$user['id'])->first();

           $invoice_latest=$stripe->invoices->retrieve($invoice['id'], []);

            VenderInvoice::create([
                'vender_id' => $user['id'],
                'subscription_id' => $subs['id']??0,
                'invoice_id' => $invoice_latest['id'],
                'number' => $invoice_latest['number'],
                'amount_due' => $invoice_latest['total'],
                'amount_paid' => $invoice_latest['amount_paid'],
                'customer' => $invoice_latest['customer'],
                'status' => $invoice_latest['status'],
                'pdf' => $invoice_latest['invoice_pdf'],
                'plan' => $user['profile']['package_id'],
            ]);
            $invoices=Invoice::where('is_verified',0)->where('vender_id',$user['id'])->update(['is_verified'=>1]);
        }
        }



        $this->info('Hourly Update has been send successfully');
    }
}
