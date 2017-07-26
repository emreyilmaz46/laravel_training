<?php

namespace App\Http\Controllers;

use App\SurveyQuestion;
use App\Http\Requests\SurveyQuestionCreateRequest;
use App\Http\Requests\SurveyQuestionCheckboxRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyQuestionController extends Controller
{
    public function index(){
        //$survey_questions = SurveyQuestion::get(); //SİLME.Bunu kapatarak paginate ile getiriyoruz ekrana.
        $survey_questions = SurveyQuestion::orderBy('question_id','ASC')->paginate(6);
        //dd($survey_questions);
        return view('survey_questions.index')->with(compact('survey_questions'));
    }

    public function index_R(){
        //$survey_questions = SurveyQuestion::get();
        $survey_questions = SurveyQuestion::orderBy('question_id','ASC')->paginate(6);
        //dd($survey_questions);
        return view('survey_questions.index_R')->with(compact('survey_questions'));
    }

    public function create(){

        return view ('survey_questions.create');
    }

    public function store(SurveyQuestionCreateRequest $request){
        $survey_questions = SurveyQuestion::create($request->all());
        //$survey_questions = SurveyQuestion::create(['question_id'=> Auth::id()] + $request->all());
        return back()->withSuccess('Question saved successfully!');
    }

    public function edit($id){
        $survey_questions = SurveyQuestion::findOrFail($id);
        return view('survey_questions.edit')->with(compact('survey_questions'));
    }

    public function update(SurveyQuestionCreateRequest $request, $id){
        //dd($id);
        $survey_questions = SurveyQuestion::findOrFail($id);
        $survey_questions->question_id = $request->input('question_id');
        $survey_questions->question = $request->input('question');
        $survey_questions->part = $request->input('part');
        $survey_questions->save();

        return back()->withSuccess('Question updated successfully!');
    }

    public function checkbox_control(SurveyQuestionCheckboxRequest $request){
        $surveyQuestions = $request->input('survey_questions');
    }
}
