<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCampRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_camp_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('dob');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('nationality');
            $table->string('passport_number')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('emergency_contact');
            $table->enum('skill_level', ['beginner', 'intermediate', 'advanced']);
            $table->string('personal_best')->nullable();
            $table->text('training_goals')->nullable();
            $table->text('medical_history')->nullable();
            $table->text('current_medications')->nullable();
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->text('dietary_requirements')->nullable();
            $table->enum('payment_method', ['credit_card', 'bank_transfer', 'paypal']);
            $table->boolean('medical_consent')->default(false);
            $table->boolean('liability_waiver')->default(false);
            $table->boolean('photo_release')->default(false);
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
        Schema::dropIfExists('training_camp_registrations');
    }
}