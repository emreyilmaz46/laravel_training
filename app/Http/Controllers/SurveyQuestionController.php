<?php

namespace App\Http\Controllers;

use App\SurveyQuestion;
use Illuminate\Http\Request;

class SurveyQuestionController extends Controller
{
    public function index(){
        $survey_questions = SurveyQuestion::get(); //SİLME.Bunu kapatarak paginate ile getiriyoruz ekrana.
        //$survey_questions = SurveyQuestion::orderBy('id','DESC')->paginate(3);

        //dd($survey_questions);

        return view('survey_questions.index')->with(compact('survey_questions'));
    }
}
