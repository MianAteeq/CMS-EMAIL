<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Admin\Entities\EngineSize;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engine_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('eng_size')->nullable();

            $table->timestamps();
        });

        for ($i = 500; $i <= 2000; $i) {

            $i=$i+100;

            

            EngineSize::create([
                "eng_size" => $i."CC",
        ]);
            
        }

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engine_sizes');
    }
};
