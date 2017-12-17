<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewLabelSubject extends Model
{
    //
    protected $table    = 'interview_label_subject';
    protected $fillable = ['interview_label_id', 'subject_id'];
    
}
