<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_camp_registrations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('camp_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('nationality');
            $table->string('passport_number')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('emergency_contact');
            $table->string('skill_level');
            $table->string('personal_best')->nullable();
            $table->text('training_goals')->nullable();
            $table->text('medical_history')->nullable();
            $table->text('current_medications')->nullable();
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->text('dietary_requirements')->nullable();
            $table->string('payment_method');
            $table->timestamps(); // Automatically adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('camp_registrations');
    }
}