<?php

namespace App\Http\Controllers;

use App\Student;
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
                'student_id' => '4',
                'answer' => $key
            ]);
        }

        return back()->withSuccess('Answers saved successfully!');
    }

    public function showOne(Request $request){
        //dd($request);
        $stu = $request->get('student_id');
        Student::findOrFail($stu);
        $R = DB::table('survey_answers')->whereBetween('question_id', [1, 10])->where('student_id',$stu)->where('answer','1')->count();
        $I = DB::table('survey_answers')->whereBetween('question_id', [11, 20])->where('student_id',$stu)->where('answer','1')->count();
        $A = DB::table('survey_answers')->whereBetween('question_id', [21, 30])->where('student_id',$stu)->where('answer','1')->count();
        $S = DB::table('survey_answers')->whereBetween('question_id', [31, 40])->where('student_id',$stu)->where('answer','1')->count();
        $E = DB::table('survey_answers')->whereBetween('question_id', [41, 50])->where('student_id',$stu)->where('answer','1')->count();
        $C = DB::table('survey_answers')->whereBetween('question_id', [51, 60])->where('student_id',$stu)->where('answer','1')->count();
        $sum = $R + $I + $A + $S + $E + $C;
        //$survey_answers = SurveyAnswer::get()->where('question_id','=','1');
        $stu = DB::table('survey_answers')->where('question_id', '1')->value('student_id');
        //dd($survey_answers);
        //dd($stu);
        //return view::make('survey_questions.showOne')->with('stu',$stu);
        return view('survey_questions.showOne')->with('R',$R)->with('I',$I)->with('A',$A)->with('S',$S)->with('E',$E)->with('C',$C)->with('sum',$sum);
    }

    public function showAll(Request $request){

        $students = Student::with('answers')->get();
        //dd($students);
/*      $survey_answers = DB::table('survey_answers')->whereBetween('question_id', [1, 6])->where('answer','1')->get()->groupBy('student_id');
        //$survey_answers = DB::table('survey_answers')->whereBetween('question_id', [1, 6])->where('answer','1')->get();
        //dd($survey_answers);*/
        return view('survey_questions.showAll', ['students' => $students]);
    }

    public function showAnswerTable(Request $request){

        $survey_answers = SurveyAnswer::get();
        //dd($survey_answers);
        return view('survey_questions.showAnswerTable', ['survey_answers' => $survey_answers]);
    }
}
