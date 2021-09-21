<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'Question','correctAns','answers','exam_id','questionType'
    ];

    protected $casts = [
        'answers'=>'array'
    ];

    public function answers()
    {
       $answers = collect($this->answers);
        return $answers->shuffle();
    }

    public function getLevel()
    {
        $exam = Exam::find($this->exam_id);
        $level = $exam->level;
        return $level;
    }

    public function getSubject()
    {
        $exam = Exam::find($this->exam_id);
        $subjectName = $exam->subjectName;
        return $subjectName;
    }
}
