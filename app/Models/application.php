<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use App\Models\student;

class application extends Model
{
    use HasFactory;
    protected $fillable = [
        // List all the fillable fields here
        'student_id', 'first_name', 'middle_name', 'surname', 'gender', 'age',
        'date_of_birth', 'year_of_study', 'academic_year', 'student_address', 
        'intake', 'registration_status', 'medical_condition', 'marital_status', 'student_phone_no', 
        'programme', 'student_nrc', 'student_email', 'guardian_name', 'guardian_relation',
        'guardian_nrc', 'guardian_occupation', 'guardian_phone_no', 'guardian_email'
    ];

}
