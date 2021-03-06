<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    protected $table = 'survey_questions';
    protected $guarded = [];

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class, 'question_id', 'id');
    }
}
