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
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
            $table->string('anaphylaxis');
            $table->string('covid_19');
            $table->string('other_vaccination');
            $table->string('immunosuppression');
            $table->string('immunosuppressant');
            $table->string('acute_illness');
            $table->string('chronic');
            $table->string('chronic_illness');
            $table->string('pregnant');
            $table->string('over_age');
            $table->string('coagulation');
            $table->string('allergy');
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
        Schema::dropIfExists('medical_histories');
    }
};
