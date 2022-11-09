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
        Schema::create('vaccine_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('vaccination');
            $table->bigInteger('vaccinated_person_information_id')->unsigned();
            $table->bigInteger('medical_history_id')->unsigned();
            $table->bigInteger('vaccination_consent_form_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('vaccine_registrations', function ($table) {
            $table->foreign('vaccinated_person_information_id')->references('id')->on('vaccinated_person_informations');
            $table->foreign('medical_history_id')->references('id')->on('medical_histories');
            $table->foreign('vaccination_consent_form_id')->references('id')->on('vaccination_consent_forms');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine_registrations');
    }
};
