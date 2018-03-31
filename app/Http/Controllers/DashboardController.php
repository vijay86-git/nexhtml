<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class DashboardController extends Controller
{
    //
    public function cplogout(Request $request)
       {
          $request->session()->flush();
    	  Session::flush(); 
          return redirect('/');
       }

    public function about()
	      {
	          $subjects =  $this->_subjects;
	          $info     = (object) array();
   			  $info->page_title        = 'About Us - neladder';
   			  $info->meta_description  = 'About Us';
   			  $info->meta_keywords     = 'About Us';
	          return view('front.pages.cms.about', compact('subjects', 'info'));
	      }

	public function disclaimer()
	      {
	          $subjects =  $this->_subjects;
	          $info     = (object) array();
   			  $info->page_title        = 'Disclaimer - neladder';
   			  $info->meta_description  = 'Disclaimer';
   			  $info->meta_keywords     = 'Disclaimer';
	          return view('front.pages.cms.disclaimer', compact('subjects', 'info'));
	      }
}
