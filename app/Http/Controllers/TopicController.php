<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject as Subject;
use App\Topic as Topics;
use App\Section as Section;
use DB;
use Cache;

class TopicController extends Controller
{
    //
    private $_subjects;
  
    public function __construct()
      {
         $this->_subjects  =  Cache::remember('all_subjects_cache', env('CACHE_TIME', 60), function () {
                                 return DB::table('subject')->select('id', 'name', 'slug')->orderBy('sort', 'asc')->get();
                              });
      }

    public function index()
      {
          $subjects =  $this->_subjects;
          $slug     =  '';
          
      	  $topics = DB::table('topics')->select('id', 'topic', 'slug')->orderBy('sort', 'asc')->get();

          $section = DB::table('section')->select('id', 'section')->orderBy('sort', 'asc')->get();

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects', 'slug'));
      }


    public function index2($slug)
      {
          $subjects =  $this->_subjects;
          
          $key      =  $slug.'_cache';

          /* get data from subject slug */

          if (Cache::has($key))
              {
                    $info =  Cache::get($key);
              } 
          else  {
                    $info =  Subject::select('id','page_title','meta_keywords','meta_description', 'about as detail')->where('slug', $slug)->firstOrFail();
                    Cache::put($key, $info, env('CACHE_TIME', 60));
                }

          $subject_id = $info->id;

          /* end */

          /* get subject's section */

          $sub_sec_cache = $slug . '_section_cache';

          $section  =  Cache::remember($sub_sec_cache, env('CACHE_TIME', 60), function () use($subject_id) {
                                 return DB::table('section')->select('id', 'section')->where('subject_id', $subject_id)->orderBy('sort', 'asc')->get();
                              });
          /* close */

          return view('front.pages.subject.index',compact('topics', 'section', 'subjects', 'slug', 'info'));
      }


    public function index3($subject = null, $slug = null)
      {

          $subjects     =  $this->_subjects;

          //$subject_data =  Subject::select('id')->where('slug', $subject)->firstOrFail();
          
          /* get subject slug */

          $sub_slug_cache = $subject.'_slug_cache';

          if (Cache::has($sub_slug_cache))
              {
                    $subject_data =  Cache::get($sub_slug_cache);
              }
          else
              {
                    $subject_data =  Subject::select('id')->where('slug', $subject)->firstOrFail();
                    Cache::put($sub_slug_cache, $subject_data, env('CACHE_TIME', 60));
              } 
          /* end */

          //Topics::where(['subject_id' => $subject_data->id, 'slug' => $slug])->firstOrFail();
          
          /* check topic corrosponding to subject */

          $sub_topic_slug_cache = $subject  . '_' . $slug . '_slug_cache';

          if ( ! Cache::has($sub_topic_slug_cache))
              {
                    Topics::where(['subject_id' => $subject_data->id, 'slug' => $slug])->firstOrFail();
                    Cache::put($sub_topic_slug_cache, 'TRUE', env('CACHE_TIME', 60));
              } 

          /* end here */


      	  //$topics = DB::table('topics')->select('id', 'topic', 'slug')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();
          

          /* get section by subject */

          $sub_section_cache = $subject.'_section_cache';

          if (Cache::has($sub_section_cache))
              {
                    $section =  Cache::get($sub_section_cache);
              }
          else
              {
                    $section =  DB::table('section')->select('id', 'section')->where('subject_id', $subject_data->id)->orderBy('sort', 'asc')->get();
                    Cache::put($sub_section_cache, $section, env('CACHE_TIME', 60));
              } 
          /* end */


          $info = DB::table('topics')->where('slug', $slug)->first();

          /* get topic details from slug */

          $topic_detail_cache = $slug . '_detail_cache';

          if (Cache::has($topic_detail_cache))
              {
                    $info =  Cache::get($topic_detail_cache);
              } 
          else  {
                    $info =  Topics::select('id','page_title','meta_keywords','meta_description', 'detail')->where('slug', $slug)->firstOrFail();
                    Cache::put($topic_detail_cache, $info, env('CACHE_TIME', 60));
                }

          $slug = $subject;

          return view('front.pages.subject.index',compact('topics', 'info', 'section', 'subjects', 'slug'));
      }


    public function about()
      {
          echo 'test';
      }

 }