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
          $slug     =  '';
          
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects', 'slug'));
      }


    public function index2($slug)
      {
          $subjects =  $this->_subjects;

          $data     = Subject::select('id', 'name', 'page_title', 'meta_keywords', 'meta_description', 'about')->where('slug', $slug)->firstOrFail();

          $section = DB::table('section')->select('id', 'section')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('section', 'subjects', 'slug', 'data'));
      }


    public function index3($subject = null, $slug = null)
      {

          $subjects =  $this->_subjects;

          $subject_data = Subject::select('id')->where('slug', $subject)->firstOrFail();

          Topics::select('id')->where(['subject_id' => $subject_data->id, 'slug' => $slug])->firstOrFail();

      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();

          $data = DB::table('topics')->where('slug', $slug)->first();

          $slug = $subject;

          return view('front.pages.subject.index',compact('topics', 'data', 'section', 'subjects', 'slug'));
      }


    public function about()
      {
          echo 'test';
      }


 }