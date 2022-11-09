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
        Schema::create('vaccinated_person_informations', function (Blueprint $table) {
            $table->id();
            $table->string('health_insurance_number')->nullable();
            $table->date('date_injection');
            $table->string('job');
            $table->date('preferred_date');
            $table->string('session');
            $table->string('address');
            $table->string('guardian')->nullable();
            $table->string('guardian_phone_number')->nullable();
            $table->bigInteger('ward_id')->unsigned();
            $table->bigInteger('priority_group_id')->unsigned();
            $table->bigInteger('relation_id')->unsigned()->nullable();
            $table->bigInteger('certificate_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('vaccinated_person_informations', function ($table) {
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('priority_group_id')->references('id')->on('priority_groups');
            $table->foreign('relation_id')->references('id')->on('relations');
            $table->foreign('certificate_id')->references('id')->on('certificates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccinated_person_informations');
    }
};
