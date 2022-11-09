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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->datetime('vaccination_time');
            $table->string('lot_number')->nullable();
            $table->bigInteger('vaccine_id')->unsigned();
            $table->bigInteger('vaccination_site_id')->unsigned()->nullable();
            $table->bigInteger('vaccination_number_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('certificates', function ($table) {
            $table->foreign('vaccine_id')->references('id')->on('vaccines');
            $table->foreign('vaccination_site_id')->references('id')->on('vaccination_sites');
            $table->foreign('vaccination_number_id')->references('id')->on('vaccination_numbers');
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
        Schema::dropIfExists('certificates');
    }
};
