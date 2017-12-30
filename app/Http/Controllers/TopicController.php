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
    public function index()
      {
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section'));
      }


    public function index2($subject)
      {
          Subject::where('slug', $subject)->firstOrFail();

          $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section'));
      }


    public function index3($subject = null, $slug = null)
      {

          $ff = Subject::where('slug', $subject)->firstOrFail();

          print_r($ff->id); die;
          
      	  $info = DB::table('topics')->where('slug', $slug)->first();

      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'info', 'section'));
      }

    public function about()
      {
          echo 'test';
      }


 }