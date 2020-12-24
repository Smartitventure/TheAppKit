<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('role_id');
            $table->string('business_name')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('number')->unique();
            $table->string('email')->unique();
            $table->string('country');
            $table->string('password');
            $table->string('user_type')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('expiry_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
