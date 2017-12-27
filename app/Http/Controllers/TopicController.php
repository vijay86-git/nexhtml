<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic as Topics;
use DB;

class TopicController extends Controller
{
    //
    public function index($slug)
      {
      	  $id = 1;
      	  $topic = Topics::find($id);

      	  echo "in";

          return view('front.pages.subject',compact('topic'));
      }
 }