<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Cache;
use Helper;
use Mail;

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
   			  $info->page_title        = 'Contact Us - nexladder';
   			  $info->meta_description  = 'Contact us - you can contact us by filling the contact us form, we will respond you as soon as possible.';
   			  $info->meta_keywords     = '';
	          return view('front.pages.contact.index', compact('subjects', 'info'));
	      }

	    public function submit(Request $request)
	      {
	      	    $params = $request->all();
	      	   
	      		request()->validate(['message' => 'required', 'name' => 'required', 'email' => 'required|email', 'g-recaptcha-response' => 'required|captcha']);

	      		$data   = $params['name'] . ' - ' .$params['email'] . ' - ' .substr($params['message'], 0, 225);

	      		Mail::raw($data, function ($message){
           					 $message->to('vjmail17@gmail.com');
           					 $message->subject('nexladder query');
 				});

	      		return redirect()->route('contactus')->with('msg', 'Thanks for contacting us. We\'ll contact you soon');
	      }
	}
