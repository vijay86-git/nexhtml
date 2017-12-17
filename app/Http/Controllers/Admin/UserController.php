<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User as User;

class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
      {
          $users = User::latest()->paginate(2);
          return view('admin.pages.users.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 2);
      }

}
