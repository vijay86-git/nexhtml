<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $table    = 'section';
    protected $fillable = ['subject_id', 'section', 'sort', 'status', 'unix_timestamp'];

    public function subject()
      {
            return $this->belongsTo('App\Subject', 'subject_id', 'id');
      }

    public function topics()
      {
            return $this->hasMany('App\Topic', 'section_id', 'id');
      }

}
