<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    //
    protected $table    = 'topics';
    protected $fillable = ['subject_id', 'section_id', 'topic', 'slug', 'detail', 'sort', 'page_title', 'meta_keywords', 'meta_description', 'status', 'unix_timestamp', 'display'];

    public function subject()
      {
            return $this->belongsTo('App\Subject', 'subject_id', 'id');
      }
}
