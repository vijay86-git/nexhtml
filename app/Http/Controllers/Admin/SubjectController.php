<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Subject as Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subject = Subject::latest()->paginate(10);
        return view('admin.pages.subject.index',compact('subject'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate(['name' => 'required', 'slug' => 'required', 'page_title' => 'required']);

        $data = $request->all();

        if ($request->hasFile('image'))
          {  
            \Cloudder::upload($request->file('image'));
            $result  = \Cloudder::getResult();             
            if($result)
              {
                    $data['image']  = $result['secure_url'];
              }
            else
                {
                    return redirect()->route('subject.index')->with('error', 'An error occured during image upload. try again');
                }
          }

          if ($request->hasFile('logo'))
              {  
                \Cloudder::upload($request->file('logo'));
                $result  = \Cloudder::getResult();             
                if($result)
                  {
                        $data['logo']  = $result['secure_url'];
                  }
                else
                    {
                        return redirect()->route('subject.index')->with('error', 'An error occured during logo upload. try again');
                    }
              }

            Subject::create($data);
            return redirect()->route('subject.index')->with('success','Subject created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $subject = Subject::find($id);
        return view('admin.pages.subject.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate(['name' => 'required', 'slug' => 'required', 'page_title' => 'required',]);
        
        $data = $request->all();
        if ($request->hasFile('logo'))
          {  
            \Cloudder::upload($request->file('logo'));
            $result  = \Cloudder::getResult();             
            if($result)
              {
                    $data['logo']  = $result['secure_url'];
              }
            else
                {
                    return redirect()->back()->with('error', 'An error occured during logo upload. try again');
                }
          }

        if ($request->hasFile('image'))
          {  
            \Cloudder::upload($request->file('image'));
            $result  = \Cloudder::getResult();             
            if($result)
              {
                    $data['image']  = $result['secure_url'];
              }
            else
                {
                    return redirect()->back()->with('error', 'An error occured during image upload. try again');
                }
          }

        Subject::find($id)->update($data);
        return redirect()->route('subject.index')->with('success','Subject updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('subject')->where('id', $id)->delete();
        return redirect()->route('subject.index')->with('success','Subject deleted successfully');
    }
}
