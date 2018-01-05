<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function loadAssetsFiles($src = null)
	    {
	         if ( ! empty(env('CDN_ENABLE', '')))
	         	return env('CDN_URL') . $src;
	         else
	         	return URL::asset($src);
	    }
}