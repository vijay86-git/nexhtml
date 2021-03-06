<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use DB;
use Cache;
use Helper;

use App\Subject as Subject;
use App\Topic as Topics;
use Mail;

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
   			    $info->meta_description  = 'nexladder.com is a learning online platform that helps anyone can learn Web Technologies. nexladder provides all web tutorials like Php, Mysqli, Vuejs, Html, Jquery etc in simple and easy steps starting from basic to advanced concepts with examples. nexladder helps students, developers and project manager where they can learn topics in easy and simple language with examples. To make our website better for you, we bring updates to the website regularly.';
   			    $info->meta_keywords     = '';
	          return view('front.pages.cms.about', compact('subjects', 'info'));
	      }

    public function javascript_online()
     {
        $subjects =  $this->_subjects;
        $info     = (object) array();
        $info->page_title        = 'Online Javascript Editor - Run Javascript Online - Online Javascript Compiler - Execute Javascript Online - Online Javascript IDE - Javascript Coding Online - Practice Javascript Online - Compile Javascript Online - nexladder';
        $info->meta_description  = 'Online JavaScript Editor - write and run your javascript code inside this page.';
        $info->meta_keywords     = 'online javascript editor, javascript editor online, run javascript online, run online javascript, online javascript compiler, execute javascript online, compile javascript online, javascript online, javascript tester online, run javascript code onine, practice javascript online, javascript compiler';
        return view('front.pages.javascript_run_online.run', compact('subjects', 'info'));
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

         $pre_open   = '<pre class="brush: php; title: ; notranslate" title="">';
         $pre_close  = '</pre>';
         $content    = str_replace(array('[php]', '[/php]'), array($pre_open, $pre_close), $info->post_content);
         $heading    = $info->post_title;
         return view('front.pages.subject.webviewblog', compact('content', 'heading'));
     }

    public function getBlogs()
     {
         $blogs  = DB::connection('blog')->table('tbl_posts')->select('ID', 'post_title')->where(['post_type' => 'post', 'post_status' => 'publish'])->orderBy('ID', 'desc')->get()->toArray();
         if (count($blogs)):
          foreach ($blogs as $blog):
            $arr[] = ['id' => $blog->ID, 'title' => ucfirst(mb_convert_encoding($blog->post_title, 'UTF-8', 'UTF-8'))];
          endforeach;
         endif;
         return response()->json(['response' => $arr]);
     }

    public function blogCategories()
     {
         $query   = "SELECT t.term_id AS id, t.name FROM tbl_terms t LEFT JOIN tbl_term_taxonomy tt ON t.term_id = tt.term_id WHERE tt.taxonomy = 'category' and t.name != 'Uncategorized' ORDER BY name";
         $results = DB::connection('blog')->select($query);
         return response()->json(['response' => $results]);
     }

    public function categoryBlogs($id = '')
     {
         if (!empty($id))
         $query   = "SELECT tbl_posts.ID AS id, tbl_posts.post_title AS name FROM tbl_posts LEFT JOIN tbl_term_relationships ON (tbl_posts.ID = tbl_term_relationships.object_id) LEFT JOIN tbl_term_taxonomy ON (tbl_term_relationships.term_taxonomy_id = tbl_term_taxonomy.term_taxonomy_id) WHERE tbl_term_taxonomy.term_id IN ($id) AND tbl_posts.post_status='publish' ORDER BY tbl_posts.ID DESC";
         else
          $query   = "SELECT tbl_posts.ID AS id, tbl_posts.post_title AS name FROM tbl_posts LEFT JOIN tbl_term_relationships ON (tbl_posts.ID = tbl_term_relationships.object_id) LEFT JOIN tbl_term_taxonomy ON (tbl_term_relationships.term_taxonomy_id = tbl_term_taxonomy.term_taxonomy_id) WHERE tbl_posts.post_status='publish' ORDER BY tbl_posts.ID DESC";

         $results  = DB::connection('blog')->select($query);
         return response()->json(['response' => $results]);
     }

    public function feedback(Request $request)
     {
            $params = json_decode(file_get_contents('php://input'), true);

            $data   = $params['name'] . ' - ' .$params['email'] . ' - ' .substr($params['msg'], 0, 1024);

            Mail::raw($data, function ($message) {
                     $message->to('vjmail17@gmail.com');
                     $message->subject('nexladder query from app');
            });

            return response()->json(['response' => 'success']);
     }

    public function kids_play_privacy_policy()
     {
          return view('front.pages.contact.kids_play_privacy');
     }
    

}
