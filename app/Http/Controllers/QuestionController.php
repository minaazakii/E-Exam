<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($id)
    {
        return view('index',[
            'id'=>$id
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Question'=>'required',
        ]);
            if($request->answer[0] == null)
        {
            return redirect()->route('addQuestion')->with('error','Answers cant be Empty');
        }

        if($request->questionType == 'tf')
        {
            Question::create([
                'Question'=>$request->Question,
                'correctAns'=>$request->answer,
                'answers'=>['true','false'],
                'questionType'=>$request->questionType,
                'exam_id'=>$request->exam_id

            ]);
            $exam_id = $request->exam_id;
            return redirect()->route('questionType',$exam_id)->with('success','Question has been Added Successfully');
        }

        Question::create([
            'Question'=>$request->Question,
            'correctAns'=>$request->answer[0],
            'answers'=>$request->answer,
            'questionType'=>$request->questionType,
            'exam_id'=>$request->exam_id
        ]);
        $exam_id = $request->exam_id;
        return redirect()->route('questionType',$exam_id)->with('success','Question has been Added Successfully');
    }

    public function mcqIndex($id)
    {
        return view('indexMcq',[
            'id'=>$id
        ]);

    }

    public function questionType($id)
    {
        return view('auth.questionType',[
            'id'=>$id
        ]);

    }

    public function questionBank()
    {
        $mcqs = Question::where('questionType','mcq')->get();
        $tfs = Question::where('questionType','tf')->get();
        return view('xtreme-html.ltr.questionBank',[
            'mcqs'=>$mcqs,
            'tfs'=>$tfs
        ]);
    }

}
