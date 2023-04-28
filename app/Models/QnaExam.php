<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QnaExam extends Model
{
    use HasFactory;
    public $table = "qna_exams";
    protected $fillable = [
        'exam_id',
        'question_id'
    ];

    public function question()
    {
      return $this->hasMany(Question::class,'id','question_id');
    }

    public function answers()
    {
      return $this->hasMany(Answer::class,'id','question_id');
    }
}
