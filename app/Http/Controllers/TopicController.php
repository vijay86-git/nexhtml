<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject as Subject;
use App\Topic as Topics;
use App\Section as Section;
use DB;
use Cache;

class TopicController extends Controller
{
    //
    private $_subjects;
  
    public function __construct()
      {
         $this->_subjects  =  Cache::remember('get_all_subjects', env('CACHE_TIME', 60), function () {
                                 return DB::table('subject')->select('id', 'name', 'slug')->orderBy('sort', 'asc')->get();
                              });
      }

    public function index()
      {
          $subjects =  $this->_subjects;
          $slug     =  '';
          
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects', 'slug'));
      }


    public function index2($slug)
      {
          $subjects =  $this->_subjects;

          $info = Cache::remember('exist_subject_slug', env('CACHE_TIME', 60), function () use($slug) {
                    return Subject::select('id','page_title','meta_keywords','meta_description', 'about as detail')->where('slug', $slug)->firstOrFail();
          });



          $section = DB::table('section')->select('id', 'section')->where('subject_id', $info->id)->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects', 'slug', 'info'));
      }


    public function index3($subject = null, $slug = null)
      {

          $subjects =  $this->_subjects;

          $subject_data = Subject::select('id')->where('slug', $subject)->firstOrFail();

          Topics::where(['subject_id' => $subject_data->id, 'slug' => $slug])->firstOrFail();

      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();

          $info = DB::table('topics')->where('slug', $slug)->first();

          $slug = $subject;

          return view('front.pages.subject.index',compact('topics', 'info', 'section', 'subjects', 'slug'));
      }


    public function about()
      {
          echo 'test';
      }


 }