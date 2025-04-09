<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Permission::truncate();
        $quote_permissions=['dashboard','view_category','add_category','all_category','edit_category',
                            'view_contact','add_contact','all_contact','patient_contact','delete_contact','edit_contact',
                            'aesthetics_contact','doctor_mbbs_contact','doctor_bds_contact','nursing_contact',
                            'generic_contact','send_message_contact',
                            'view_email','add_email','all_email','patient_email','delete_email','edit_email',
                            'aesthetics_email','doctor_mbbs_email','doctor_bds_email','nursing_email',
                            'generic_email','send_message_email','logs','view_users','add_users','all_users','edit_users',
                            ];


         foreach ($quote_permissions as $key => $permission) {

            $role = Permission::create(['name' => $permission,'type'=>'APP','group_type'=>'APP','guard_name'=>'web']);
        }

        // $booking_permissions=['view bookings','add new booking','delete booking','change status of booking','add job request to the booking',
        //  'add job item to the booking','edit job request of booking','delete job request of booking','view job request of booking','edit job item of booking','delete job item of booking',
        //  'view job item of booking','view log of jobs in booking','view contact detail from booking','view vehicle detail from booking'];

        //  foreach ($booking_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Booking','group_type'=>'APP','guard_name'=>'web']);
        // }

        // $queue_permissions=['view jobs in queue','change status of job in queue','view log of job in queue','view vehicle from queue','view contact from queue',
        // 'add job request from queue','delete job request from queue','view job request from queue','view job item from queue','add job item from queue','delete job item from queue',
        // 'add invoice from queue','view invoice from queue','add payment from queue','view payment from queue','download invoice from queue','email invoice from queue'];

        // foreach ($queue_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Queue','group_type'=>'APP','guard_name'=>'web']);
        // }

        // $inprogress_permissions=['view jobs in progress','change status of job in progress','view log of jobs in progress','view vehicle from job in progress','view contact from job in progress',
        // 'view job item of job in progress','view job request of job in progress','view invoice from job in progress','add payment to job in progress','download invoice from job in progress','view job detail of job in progress',
        // 'view booking detail of job in progress','email invoice of job in progress','view payment of job in progress','add payment of job in progress','view payment receipt of job in progress','download payment receipt of job in progress'];

        // foreach ($inprogress_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'InProgress','group_type'=>'APP','guard_name'=>'web']);
        // }

        // $complete_booking_permissions=['view completed jobs','change status of completed jobs','view log of completed jobs','view vehicle detail of completed jobs','view contact detail of completed jobs',
        // 'view job request of completed jobs','view job item of completed jobs','view invoice of completed jobs','add payment to completed jobs','download invoice of completed jobs','view job detail of completed jobs',
        // 'view booking detail of completed jobs'];

        // foreach ($complete_booking_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Complete Booking','group_type'=>'APP','guard_name'=>'web']);
        // }

        // $past_booking_permissions=['view past jobs','change status of past jobs','view log of past jobs','view job request of past jobs','view job item of past jobs',
        // 'view invoice of past jobs','add payment of past jobs','view invoice item of past jobs','view payment of past jobs','download invoice of past jobs','view job detail of past jobs',
        // 'view booking detail','email invoice of past jobs'];


        // foreach ($past_booking_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Past Booking','group_type'=>'APP','guard_name'=>'web']);
        // }

        // $invoice_permissions=['view invoice','change status of invoice','view invoice item','view payment of invoice','add payment to invoice',
        // 'download invoice','email invoice','view job detail','view booking detail invoice','view log of invoice'];

        // foreach ($invoice_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Invoice','group_type'=>'APP','guard_name'=>'web']);
        // }


        // $contact_permissions=['view contact','add contact','edit contact','delete contact','link vehicle',
        // 'view linked vehicle','unlink vehicle','add quote to contacts','add booking to contacts','view booking from contact','view quote from contacts',

        // 'change status of contacts','delete quote of contacts','view job from contacts'];

        // foreach ($contact_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Contact','group_type'=>'APP','guard_name'=>'web']);
        // }

        // $vehicle_permissions=['view vehicle','add vehicle','edit vehicle','delete vehicle','link contact',
        // 'view linked contact in vehicles','unlink contact in vehicles','add quote to vehicle','add booking to vehicle','view booking from vehicle','view quote from vehicle',

        // 'change status of vehicles','delete quote from vehicle','view job from vehicle'];

        // foreach ($vehicle_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Vehicle','group_type'=>'APP','guard_name'=>'web']);
        // }


        // $invoice_permissions=['view vat summary'];

        // foreach ($invoice_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Invoice','group_type'=>'APP','guard_name'=>'web']);
        // }




    }
}
