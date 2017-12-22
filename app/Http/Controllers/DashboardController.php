<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class DashboardController extends Controller
{
    //
    //
    //
    public function cplogout(Request $request)
       {
          $request->session()->flush();
    	  Session::flush(); 

          echo 'dd'.$request->session()->get('admin');

          die;

          return redirect('/');
       }
}
