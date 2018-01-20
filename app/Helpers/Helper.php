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
	              	     $result = DB::table('subject')->orderBy('sort', 'asc')->get();
	                     Cache::put($subjects_table_cache, $result, env('CACHE_TIME', 60));
	              } 
		  }

	public static function getTableDataFromCache($table_cache_name=null,$table_name=null)
	  {
	  	      Cache::remember($table_cache_name, env('CACHE_TIME', 60), function () {
                       return DB::table($table_name)->select('id', 'name', 'slug')->orderBy('sort', 'asc')->get();
               });
	  }

	public static function getNavSubjectFromCache()
	 {
         return Cache::remember('all_subjects_cache', env('CACHE_TIME', 60), function () {
             return DB::table('subject')->select('id', 'name', 'slug')->orderBy('sort', 'asc')->limit(1)->get();
         });
	 }
    
}