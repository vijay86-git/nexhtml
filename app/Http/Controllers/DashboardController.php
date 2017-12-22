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
}
