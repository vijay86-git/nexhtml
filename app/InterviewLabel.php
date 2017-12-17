<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewLabel extends Model
{
    //
    protected $table    = 'interview_label';
    protected $fillable = ['interview_label', 'slug', 'page_title', 'meta_keywords', 'meta_description', 'status', 'unix_timestamp'];
}
