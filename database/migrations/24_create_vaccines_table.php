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
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('applicable_age');
            $table->string('effection');
            $table->string('injection_dose');
            $table->string('injection_time');
            $table->bigInteger('manufacture_id')->unsigned();
            $table->bigInteger('vaccine_type_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('vaccines', function ($table) {
            $table->foreign('manufacture_id')->references('id')->on('manufactures');
            $table->foreign('vaccine_type_id')->references('id')->on('vaccine_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccines');
    }
};
