<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCampRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'dob', 'gender', 'nationality', 'passport_number',
        'email', 'phone', 'emergency_contact', 'skill_level', 'personal_best',
        'training_goals', 'medical_history', 'current_medications', 'arrival_date',
        'departure_date', 'dietary_requirements', 'payment_method', 'medical_consent',
        'liability_waiver', 'photo_release'
    ];

    // Cast date fields to Carbon instances
    protected $dates = [
        'dob', 'arrival_date', 'departure_date',
    ];

    // You can add accessors or mutators here if needed. Example:
    // public function getDobAttribute($value)
    // {
    //     return Carbon::parse($value)->format('d-m-Y');
    // }

    // Add any additional methods related to this model as necessary
}