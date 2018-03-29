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

	    public function index()
	      {
	          $subjects =  $this->_subjects;
	          $info     = (object) array();
   			  $info->page_title        = 'Contact Us - neladder';
   			  $info->meta_description  = 'Contact Us';
   			  $info->meta_keywords     = 'Contact Us';
	          return view('front.pages.contact.index', compact('subjects', 'info'));
	      }
	}
