<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;


class DashboardController extends Controller
{
    //
    public function index()
       {
    	    return view('admin.pages.dashboard.home');
       }

    public function database()
      {
        echo "sdf";
      }
      
    public function logout(Request $request)
       {
        $request->session()->flush();
    	    Session::flush(); die;

          return redirect('/');
       }
}

