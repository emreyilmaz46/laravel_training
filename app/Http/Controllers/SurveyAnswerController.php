<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SurveyAnswer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class SurveyAnswerController extends Controller
{

    public function create(){

        return view ('survey_questions.index');

    }

    public function store(Request $request){
        //dd($request);
        foreach ($request->except('_token') as $id => $key){
            SurveyAnswer::create([
                'question_id' => $id,
                'student_id' => '987654',
                'answer' => $key
            ]);
        }

        return back()->withSuccess('Answers saved successfully!');
    }

    public function showOne(Request $request){

        //$survey_answers = SurveyAnswer::get()->where('question_id','=','1');
        $stu = DB::table('survey_answers')->where('question_id', '1')->value('student_id');
        //dd($survey_answers);
        //dd($stu);
        //return view('survey_questions.result');
        return view::make('survey_questions.showOne')->with('stu',$stu);
    }

    public function showAll(Request $request){

        $survey_answers = DB::table('survey_answers')->whereBetween('question_id', [1, 6])->where('answer','1')->get()->groupBy('student_id');
        //$survey_answers = DB::table('survey_answers')->whereBetween('question_id', [1, 6])->where('answer','1')->count();
        dd($survey_answers);
        return view('survey_questions.showAll', ['survey_answers' => $survey_answers]);
    }

    public function showAnswerTable(Request $request){

        $survey_answers = SurveyAnswer::get();
        //dd($survey_answers);
        return view('survey_questions.showAnswerTable', ['survey_answers' => $survey_answers]);
    }
}
