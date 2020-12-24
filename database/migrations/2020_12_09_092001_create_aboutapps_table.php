<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutapps', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('wireframes')->nullable();
            $table->string('app_idea');
            $table->string('idea');
            $table->string('lookfor');
            $table->string('website');
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
        Schema::dropIfExists('aboutapps');
    }
}
