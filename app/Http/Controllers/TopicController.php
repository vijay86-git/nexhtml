<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic as Topics;
use App\Section as Section;
use DB;

class TopicController extends Controller
{
    //
    //
    public function index($any)
      {
        echo $any;
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->get();

          $section = DB::table('section')->select('id', 'section')->get();

          return view('front.pages.subject.index',compact('topics', 'section'));
      }


    public function index3($any)
      {
        echo $any;
          $topics = DB::table('topics')->select('id', 'topic', 'slug')->get();

          $section = DB::table('section')->select('id', 'section')->get();

          return view('front.pages.subject.index',compact('topics', 'section'));
      }




    public function index2($any, $slug)
      {
          echo $any;
          echo $slug;

      	  $info = DB::table('topics')->where('slug', $slug)->first();
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->get();
          $section = DB::table('section')->select('id', 'section')->get();
          return view('front.pages.subject.index',compact('topics', 'info', 'section'));
      }
 }