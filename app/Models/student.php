<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use Illuminate\Database\Eloquent\Relation\HasMany;
use Illuminate\Database\Eloquent\Relation\HasOne;


class student extends Model
{
    use HasFactory;
    protected $fillable = [

        'student_id',
        'first_name',
        'middle_name',
        'surname',
        'gender',
        'year_of_study',   
        'academic_year',
        'student_address',
        'intake',
        'registration_status',
        'medical_condition',
        'student_phone_no',
       'programme',
       'student_nrc',
       'password',
       'student_email',    

    ];  
    
    public function assigned_room()
    {
        return $this->hasMany(Assigned_room::class);
    }

    public function queries()
    {
        return $this->hasMany(Queries::class);
    }

    public function inventorie()
    {
        return $this->hasOne(Inventory::class);
    }

    public function application()
    {
        return $this->hasMany(Application::class);
    }



};

