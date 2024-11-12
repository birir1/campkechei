<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        'full_name',
        'gender',
        'medical_history',
        'dietary_requirements',
        'medical_consent',
        'payment_method',
    ];
}