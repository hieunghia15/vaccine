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
        Schema::create('reaction_statuses', function (Blueprint $table) {
            $table->id();
            $table->datetime('reaction_time');
            $table->string('dose');
            $table->string('pain');
            $table->string('nausea');
            $table->string('diarrhea');
            $table->string('fever');
            $table->string('sore_throat');
            $table->string('chills');
            $table->string('headache');
            $table->string('rash');
            $table->string('other')->nullable();
            $table->string('therapy');
            $table->text('place')->nullable();
            $table->text('current_status')->nullable();
            $table->bigInteger('certificate_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('reaction_statuses', function ($table) {
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
        Schema::dropIfExists('reaction_statuses');
    }
};
