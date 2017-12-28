<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic as Topics;
use DB;

class TopicController extends Controller
{
    //
    //
    public function index()
      {
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->get();
          return view('front.pages.subject.index',compact('topics'));
      }


    public function index2($slug)
      {
      	  $info = DB::table('topics')->where('slug', $slug)->first();


      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->get();
          return view('front.pages.subject.index',compact('topics', 'info'));
      }
 }