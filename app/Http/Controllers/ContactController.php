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
   			  $info->meta_description  = 'Contact us - you can contact us by filling the contact us form, we\'ll respond you as soon as possible.';
   			  $info->meta_keywords     = '';
	          return view('front.pages.contact.index', compact('subjects', 'info'));
	      }


	    public function submit()
	      {
	      		request()->validate(['message' => 'required', 'name' => 'required', 'email' => 'required|email']);
	      		return redirect()->route('contactus')->with('msg', 'Thanks for contacting us. We\'ll contact you soon');
	      }
	}
