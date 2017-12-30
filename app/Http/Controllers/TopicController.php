<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject as Subject;
use App\Topic as Topics;
use App\Section as Section;
use DB;

class TopicController extends Controller
{
    //
    //
    private $_subjects;
  
    public function __construct()
      {
          $this->_subjects = DB::table('subject')->select('id', 'name', 'slug')->orderBy('sort', 'asc')->get();
      }


    public function index()
      {
          $subjects =  $this->_subjects;
          
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects'));
      }


    public function index2($subject)
      {
          $subjects =  $this->_subjects;

          Subject::where('slug', $subject)->firstOrFail();

          $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects'));
      }


    public function index3($subject = null, $slug = null)
      {

          $subjects =  $this->_subjects;
          
          $subject_data = Subject::select('id')->where('slug', $subject)->firstOrFail();

          Topics::select('id')->where(['subject_id' => $subject_data->id, 'slug' => $slug])->firstOrFail();

      	  $info = DB::table('topics')->where('slug', $slug)->first();

      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'info', 'section', 'subjects'));
      }


    public function about()
      {
          echo 'test';
      }


 }