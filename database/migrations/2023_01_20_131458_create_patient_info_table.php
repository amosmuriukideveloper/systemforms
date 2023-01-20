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
        Schema::create('patient_info', function (Blueprint $table) {
            $table->increments('id');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('age');
        $table->date('date_of_birth');
        $table->string('sex');
        $table->string('race');
        $table->string('ethnicity');
        $table->boolean('born_in_us');
        $table->string('country_of_birth');
        $table->date('year_emigrated_to_us');
        $table->string('place_of_residence')-> nullable();
        $table->string('phone_1')->nullable();
        $table->string('phone_2')->nullable();
        $table->boolean('institutional_setting')->nullable();
        $table->string('facility_name')->nullable();
        $table->string('room_number')->nullable();
        $table->string('facility_type')->nullable();
        $table->date('date_of_illness_onset')->nullable();
        $table->boolean('evaluated_by_physician')->nullable();
        $table->boolean('evaluated_at_emergency_room')->nullable();
        $table->boolean('hospitalized')->nullable();
        $table->date('date_first_hospitalized')->nullable();
        $table->date('date_discharged')->nullable();
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
        Schema::dropIfExists('patient_info');
    }
};
