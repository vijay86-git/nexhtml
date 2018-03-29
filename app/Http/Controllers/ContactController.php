<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

	    public function get()
	      {
	          $subjects =  $this->_subjects;
	          return view('front.pages.contact.index', compact('subjects'));
	      }
	}
