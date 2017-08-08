<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    protected $table = 'survey_answers';
    protected $guarded = [];
    //protected $fillable = array('question_id','student_id','answer');
    //protected $fillable = array('*')

    public function question()
    {
        return $this->belongsTo(SurveyQuestion::class, 'id', 'question_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'id', 'student_id');
    }
}
