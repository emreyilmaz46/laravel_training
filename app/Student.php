<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class, 'student_id', 'id');
    }

}
