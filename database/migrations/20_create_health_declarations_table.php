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
        Schema::create('health_declarations', function (Blueprint $table) {
            $table->id();
            $table->string('current_address');
            $table->longText('travled');
            $table->longText('signs');
            $table->string('suspected_covid');
            $table->string('people_countries_covid');
            $table->string('manifestation');
            $table->string('user_id');
            $table->string('ward_id');
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
        Schema::dropIfExists('health_declarations');
    }
};
