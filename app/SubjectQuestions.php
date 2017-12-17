<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectQuestions extends Model
{
    //
    protected $table    = 'subject_questions';
    protected $fillable = ['label_id', 'question', 'slug', 'answer', 'status', 'page_title', 'meta_keywords', 'meta_description','unix_timestamp'];

    public function label()
      {
            return $this->belongsTo('App\InterviewLabel', 'label_id', 'id');
      }
    
}
 