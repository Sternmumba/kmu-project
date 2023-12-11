<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;



class queries extends Model
{
    use HasFactory;
    protected $table = 'queries';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'room_id', 'room_issue','other_issue','query_status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }


}
