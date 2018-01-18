<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject as Subject;
use App\Topic as Topics;
use App\Section as Section;
use DB;
use Cache;
use Helper;

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

          return view('front.pages.home.index', compact('subjects'));

          die;



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
                    $info =  Subject::select('id', 'topic', 'page_title','meta_keywords','meta_description', 'about as detail')->where('slug', $slug)->firstOrFail();
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

          $nextlink   =  null;
          $prevlink   =  null;


          return view('front.pages.subject.index',compact('topics', 'section', 'subjects', 'slug', 'info', 'nextlink', 'prevlink'));
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
                  $subject_data =  Subject::select('id')->where('slug', $subject)->firstOrFail(); // check 404 and get sub id
                  Cache::put($sub_slug_cache, $subject_data, env('CACHE_TIME', 60));
              } 
          /* end */
          
          /* check topic corrosponding to subject */

          $sub_topic_slug_cache = $subject  . '_' . $slug . '_slug_cache';

          if ( ! Cache::has($sub_topic_slug_cache))
              {
                    Topics::where(['subject_id' => $subject_data->id, 'slug' => $slug])->firstOrFail(); // check 404
                    Cache::put($sub_topic_slug_cache, 'TRUE', env('CACHE_TIME', 60));
              } 

          /* end here */

          /* get sections by subject */

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

          /* get topic details from slug */

          $topic_detail_cache = $slug . '_detail_cache';

          if (Cache::has($topic_detail_cache))
              {
                    $info =  Cache::get($topic_detail_cache);
              } 
          else  {
                    $info =  Topics::select('id','subject_id','sort', 'topic', 'page_title','meta_keywords','meta_description', 'detail')->where('slug', $slug)->firstOrFail();
                    Cache::put($topic_detail_cache, $info, env('CACHE_TIME', 60));
                }

          /* end here */


          /* get next previous topic from slug */

              $subject_id =  $info->subject_id;
              $topic_sort =  $info->sort;

              $nextlink   =  null;
              $nexttopic  =  null;
              $prevlink   =  null;
              $prevtopic  =  null;

              $next = DB::table('topics')->select('slug', 'topic')->where([['sort', '>', $topic_sort],['subject_id', '=', $subject_id]])->orderBy('sort', 'asc')->limit(1)->get();

              if ($next->count() > 0):
                $nextlink = route('topics', ['subject' => $subject, 'slug' => $next[0]->slug]);
                $nexttopic = $next[0]->topic;
              endif;

              $prev = DB::table('topics')->select('slug', 'topic')->where([['sort', '<', $topic_sort],['subject_id', '=', $subject_id]])->orderBy('sort', 'desc')->limit(1)->get();

              if ($prev->count() > 0):
                 $prevlink  = route('topics', ['subject' => $subject, 'slug' => $prev[0]->slug]);
                 $prevtopic = $prev[0]->topic;
               endif;

              $nextprevarr = ['nextlink' => $nextlink, 'nexttopic' => $nexttopic, 'prevlink' => $prevlink, 'prevtopic' => $prevtopic];
            
          /* end here */


          $slug = $subject;

          return view('front.pages.subject.index',compact('topics', 'info', 'section', 'subjects', 'slug', 'nextprevarr'));
      }


    public function about()
      {
          echo 'test';
      }

 }