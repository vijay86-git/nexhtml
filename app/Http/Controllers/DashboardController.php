<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use DB;
use Cache;
use Helper;

use App\Subject as Subject;
use App\Topic as Topics;

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
   			    $info->page_title        = 'About Us - nexladder';
   			    $info->meta_description  = 'About Us';
   			    $info->meta_keywords     = 'About Us';
	          return view('front.pages.cms.about', compact('subjects', 'info'));
	      }

	  public function disclaimer()
	      {
	          $subjects =  $this->_subjects;
	          $info     = (object) array();
   			    $info->page_title        = 'Disclaimer - nexladder';
   			    $info->meta_description  = 'Disclaimer';
   			    $info->meta_keywords     = 'Disclaimer';
	          return view('front.pages.cms.disclaimer', compact('subjects', 'info'));
	      }

    public function sitemap()
       {
            $subjects =  $this->_subjects;
            $info     = (object) array();
            $info->page_title        = 'Sitemap - nexladder';
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
                    $text     = str_replace("-", " ", $fileinfo['filename']);
                    return view('front.pages.codemirror.code', compact('file', 'text'));
               }
               else
                    abort(404);
      }

      /* Api */


    public function getSubjects()
      {
         $subjects = DB::table('subject')->select('id', 'name', 'image')->where('show_nav', 1)->orderBy('sort', 'asc')->get();
         return response()->json(['response' => $subjects]);
      } 

    public function subjectTopics($id = '')
     {
         $results = Topics::select('id', 'topic', 'slug')->where(['subject_id' => $id])->get();
         return response()->json(['response' => $results]);
     }

    public function topicDetail($id = '')
     {
         $info = Topics::select('detail', 'topic')->where(['id' => $id])->first();
         return view('front.pages.subject.webview',compact('info'));
     }

    public function blogDetail($id = '')
     {
         $info = DB::connection('blog')->table('tbl_posts')->select('ID', 'post_content', 'post_title')->where(['ID' => $id])->first();
         $paragraphs = '';
        foreach (explode("\n", $info->post_content) as $line) {
            if (trim($line)) {
                $paragraphs .= '<p>' . $line . '</p>';
            }
        }

         return view('front.pages.subject.webviewblog', compact('paragraphs'));
     }

    public function getBlogs()
     {
         $blogs  = DB::connection('blog')->table('tbl_posts')->select('ID', 'post_title')->where(['post_type' => 'post', 'post_status' => 'publish'])->orderBy('ID', 'desc')->get()->toArray();
         if (count($blogs)):
          foreach ($blogs as $blog):
            $arr[] = ['id' => $blog->ID, 'title' => mb_convert_encoding($blog->post_title, 'UTF-8', 'UTF-8')];
          endforeach;
         endif;
         return response()->json(['response' => $arr]);
     }

}
