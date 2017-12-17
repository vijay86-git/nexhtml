<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subject';
    protected $fillable = ['name', 'slug', 'logo', 'sort', 'page_title', 'meta_keywords', 'meta_description', 'about', 'status'];

}
