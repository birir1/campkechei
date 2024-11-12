<?php

// app/Models/CampRegistration.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampRegistration extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'camp_registrations';

    // Define the fields that are mass assignable
    protected $fillable = [
        'full_name', 'dob', 'gender', 'nationality', 'passport_number',
        'email', 'phone', 'emergency_contact', 'skill_level', 'personal_best',
        'training_goals', 'medical_history', 'current_medications', 
        'arrival_date', 'departure_date', 'dietary_requirements', 'payment_method'
    ];
}