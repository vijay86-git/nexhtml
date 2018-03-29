<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject as Subject;
use App\Topic as Topics;
use App\Section as Section;
use DB;
use Cache;
use Helper;

class ContactController extends Controller
	{
	    //
	    private $_subjects;
  
	    public function __construct()
	      {
	           $this->_subjects  =  Helper::getNavSubjectFromCache();
	      }

	    public function index()
	      {
	      	die('sdf');
	          $subjects =  $this->_subjects;
	          return view('front.pages.contact.index', compact('subjects'));
	      }
	}
