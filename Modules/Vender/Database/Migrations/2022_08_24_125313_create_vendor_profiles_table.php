<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_profiles', function (Blueprint $table) {
                $table->id();
                $table->integer('vender_id')->nullable();
                $table->integer('step')->nullable();
                $table->string('operation_type')->nullable();
                $table->string('trading_name')->nullable();
                $table->string('phone_no')->nullable();
                $table->string('organization_status')->nullable();
                $table->longText('address_line_1')->nullable();
                $table->longText('address_line_2')->nullable();
                $table->longText('address_line_3')->nullable();
                $table->longText('address_line_4')->nullable();
                $table->longText('city')->nullable();
                $table->longText('postcode')->nullable();
                $table->string('vat_register')->default('NO');
                $table->string('company_name')->nullable();
                $table->string('registration_no')->nullable();
                $table->string('document_proof')->nullable();
                $table->string('document_proof_name')->nullable();
                $table->string('uk_vat_no')->nullable();
                $table->string('job_title')->nullable();
                $table->string('business_proof')->nullable();
                $table->string('business_proof_name')->nullable();
                $table->string('is_trading_name')->default('NO');
                $table->string('person_authorised')->default('NO');
                $table->longText('proof_of_main_contact')->nullable();
                $table->longText('proof_of_main_contact_name')->nullable();
                $table->integer('business_status')->default(0);
                $table->integer('vat_status')->default(0);
                $table->integer('business_activities_status')->default(0);
                $table->integer('trade_unit_status')->default(0);
                $table->integer('main_account_status')->default(0);
                $table->integer('subscription_status')->default(0);
                $table->float('weekly_income')->nullable();
                $table->string('area')->nullable();
                $table->string('country')->nullable()->default('United KingDom');
                $table->string('website')->nullable();
                $table->time('opening_hour')->nullable();
                $table->time('closing_hour')->nullable();
                $table->string('facebook')->nullable();
                $table->string('instagram')->nullable();
                $table->string('trust_plot_link')->nullable();
                $table->string('address_proff')->nullable();
                $table->string('mechanic_docs')->nullable();
                $table->string('owner_middle_name')->nullable();
                $table->string('customer_id')->nullable();
                $table->string('product_name')->nullable();
                $table->integer('package_id')->nullable();
                $table->integer('trading_name_status')->nullable();
                $table->integer('is_term')->nullable();
                $table->integer('edit_step')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_profiles');
    }
};
