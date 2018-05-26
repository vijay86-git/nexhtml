<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use DB;
use Cache;
use Helper;

class DashboardController extends Controller
{
    //
    private $_subjects;
  
    public function __construct()
      {
           $this->_subjects  =  Helper::getNavSubjectFromCache();
      }
      
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

    public function sitemap()
       {
            $subjects =  $this->_subjects;
            $info     = (object) array();
            $info->page_title        = 'Sitemap - neladder';
            $info->meta_description  = 'Sitemap';
            $info->meta_keywords     = 'Sitemap';
            return view('front.pages.cms.sitemap', compact('subjects', 'info'));
       }

    public function usersJson()
      {
           $users = [["name" => "Dennis Ritchie"],["name" => "James Gosling"],["name" => "Bjarne Stroustrup"],["name" => "Brian Kernighan"],["name" => "Linus Torvalds"]];
           return response()->json($users);
      }

    public function codeMirror($topic = '', $file = '')
      {
               $file = public_path().'/codemirror/code/'.$topic.'/'.$file.'.html';
               if (file_exists($file)) { 
                    $fileinfo = pathinfo($file);
                    echo $text = str_replace("-", " ", $fileinfo['filename']);
                    return view('front.pages.codemirror.code', compact('file', 'text'));
               }
               else
                    abort(404);
      }

}
