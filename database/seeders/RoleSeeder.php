<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $roles=["Manager", "Technician"];


        // // Role::truncate();



        // foreach ($roles as $key => $role) {

        //     $role = Role::create(['name' => $role]);
        // }
        // Permission::truncate();

        // $permission_bookings=['Access Booking','Create Booking','Edit Booking','View Booking','Delete Booking'];
        // $permission_quotes=['Access Quotes','Create Quote','Edit Quote','View Quote','Delete Quote'];
        // $permission_jobs=['Access Jobs','Create Job','Edit Job','View Job','Delete Job'];


        // foreach ($permission_bookings as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Bookings','guard_name'=>'web']);
        // }
        // foreach ($permission_quotes as $key => $q_permission) {

        //     $role = Permission::create(['name' => $q_permission,'type'=>'Quotes','guard_name'=>'web']);
        // }
        // foreach ($permission_jobs as $key => $j_permission) {

        //     $role = Permission::create(['name' => $j_permission,'type'=>'Jobs','guard_name'=>'web']);
        // }


        // $permissions=['Access Details','Manage Details','Access Main Contacts','Manage Main Contacts','Access Trading Name','Manage Trading Names','Access Sites','Manage Sites'];

        // foreach ($permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Business Permissions','group_type'=>'BUSINESS','guard_name'=>'web']);
        // }

        // $business_registration_permissions=['Prospects','Interests','Applications','Registered'];
        // foreach ($business_registration_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Business Registrations Permissions','group_type'=>'ADMIN','guard_name'=>'admin']);
        // }

        // $business_billing_permissions=['Subscriptions','Invoices','Payments'];
        // foreach ($business_billing_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Business Billing Permissions','group_type'=>'ADMIN','guard_name'=>'admin']);
        // }

        // $business_product_setting_permissions=['Plans','Products','Reference Data'];
        // foreach ($business_product_setting_permissions as $key => $permission) {

        //     $role = Permission::create(['name' => $permission,'type'=>'Product settings','group_type'=>'ADMIN','guard_name'=>'admin']);
        // }


    }
}
