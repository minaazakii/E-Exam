<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function addExam(Request $request)
    {
        Exam::create([
            'subjectName'=>$request->name,
            'level'=>$request->level,
            'questionCount'=>$request->questionCount,
            'doctorName'=>$request->doctorName,
            'totalMark'=>$request->totalMark,
            'duration'=>$request->duration,
            'dr_id'=>auth()->id()
        ]);

        return redirect()->route('addExamIndex')->with('success','Exam Added Successfully');
    }

    public function showExam()
    {
        if(auth()->user()->role_id == 2)
        {
            $exams = Exam::where('dr_id',auth()->id())->get();
        }
        else
        {
            $exams = Exam::all();
        }
        return view('xtreme-html.ltr.exams',[
            'exams' => $exams
        ]);
    }


    public function index($id)
    {
        $questions = Question::where('exam_id',$id)->get();
        return view('exam',[
            'questions'=>$questions
        ]);
    }

    public function checkAnswer(Request $request)
    {
        $score = 0 ;
        foreach($request->answer as $answer)
        {
            $question = Question::find(array_search($answer , $request->answer));
            if($answer == $question->correctAns)
            {
                $score++;
            }
        }
        return view('score',[
            'score'=>$score
        ]);

    }
}
