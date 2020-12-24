<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesigndetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designdetails', function (Blueprint $table) {
            $table->id();

            $table->string('dp1')->nullable();
             $table->string('dp2')->nullable();
              $table->string('dp3')->nullable();
               $table->string('dp4')->nullable();
                $table->string('logo')->nullable();
                $table->string('design_details');

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
        Schema::dropIfExists('designdetails');
    }
}
