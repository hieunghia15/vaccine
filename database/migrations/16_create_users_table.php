<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('phone')->unique();
            $table->string('fullname');
            $table->string('password')->nullable();
            $table->date('day_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('identification')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('ward_id')->unsigned()->nullable();
            $table->bigInteger('nationality_id')->unsigned()->nullable();
            $table->bigInteger('ethnic_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function ($table) {
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->foreign('ethnic_id')->references('id')->on('ethnics');
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
};
