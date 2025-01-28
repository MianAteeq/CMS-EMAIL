<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Admin\Entities\FAQ;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_a_qs', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('description');

            $table->timestamps();
        });

        $array=[
            [
                'name'=> "Name an engineering skill have you learned recently?",
                'description'=> "Good engineers are interested in learning new skills, computer programs, and ways to solve problems. Listen carefully to what the interviewee says to see if they have a love of learning new things and are adaptable to various situations."
            ],
            [
                'name' => "Tell me about your most successful engineering project",
                'description' => "This gives the mechanical engineer the chance to talk about their most successful engineering projects. Explain why they succeeded, what contributions they made to it, any technical skills that are used, and what they learned from the process."
            ]
            ];
            FAQ::insert($array);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f_a_qs');
    }
};
