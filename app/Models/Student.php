<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'age', 'group', 'course', 'speciality'];
    public function worksa(){
        return $this->hasMany(Work::class, 'student_id', 'id');
    }
}
