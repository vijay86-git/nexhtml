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
      	echo "ddd"; die;
      	  $topics = DB::table('topics')->select('id', 'topic')->get();
          return view('front.pages.subject.index',compact('topics'));
      }


    public function index2($slug)
      {
      	  $id = 1;
      	  $topic = Topics::find($id);
          return view('front.pages.subject.index',compact('topic'));
      }
 }