<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use URL;
use Cache;
use DB;

use App\Subject as Subject;
use App\Topic as Topics;
use App\Section as Section;

class Helper
{
    public static function loadAssetsFiles($src = null)
	    {
	         if ( ! empty(env('CDN_ENABLE', '')))
	         	return env('CDN_URL') . $src;
	         else
	         	return URL::asset($src);
	    }

	public static function createDataBaseTableCache()
		  {
				  $subjects_table_cache   =  env('SUBJECT_TBL_CACHE', '');

		          if ( ! Cache::has($subjects_table_cache))
		              {
		                     Cache::put($subjects_table_cache, Subject::all(), env('CACHE_TIME', 60));
		              } 

		          $topic_table_cache      =  env('TOPIC_TBL_CACHE', '');

		          if ( ! Cache::has($topic_table_cache))
		              {
		                     Cache::put($topic_table_cache, Topics::all(), env('CACHE_TIME', 60));
		              } 
		  }

	public function getTableFromCache($table_cache_name=null)
	  {
	  	      Cache::remember($table_cache_name, env('CACHE_TIME', 60), function () {
                       return DB::table('subject')->select('id', 'name', 'slug')->orderBy('sort', 'asc')->get();
               });
	  }
    
}