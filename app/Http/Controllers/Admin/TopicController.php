<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Topic as Topics;
use App\Subject as Subject;
use App\Subject as Section;
use DB;
use Illuminate\Support\Facades\Input;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subject_id  = Input::get('subject_id');
        $subject = DB::table('subject')->select('id', 'name')->get();

        if ( ! empty($subject_id))
        $topics = Topics::where('subject_id', $subject_id)->latest()->paginate(1);
            else
        $topics = Topics::latest()->paginate(1);

        return view('admin.pages.topic.index',compact('topics', 'subject'))->with('i', (request()->input('page', 1) - 1) * 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subject = DB::table('subject')->select('id', 'name')->get();
        $section = DB::table('section')->select('id', 'section')->get();
        return view('admin.pages.topic.create', compact('subject', 'section'));
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
            request()->validate(['subject' => 'required', 'section' => 'required', 'name' => 'required', 'slug' => 'required', 'description' => 'required', 'page_title' => 'required', 'sort' => 'required']);

            $params                     =    $request->all();

            $fields['subject_id']       =    $params['subject'];
            $fields['section_id']       =    $params['section'];
            $fields['topic']            =    $params['name'];
            $fields['slug']             =    $params['slug'];
            $fields['detail']           =    $params['description'];
            $fields['sort']             =    $params['sort'];
            $fields['page_title']       =    $params['page_title'];
            $fields['meta_keywords']    =    $params['meta_keywords'];
            $fields['meta_description'] =    $params['meta_description'];
            $fields['display']          =    $params['display'];
            $fields['status']           =    $params['status'];
            $fields['unix_timestamp']   =    time();

            Topics::create($fields);

            return redirect()->route('topic.index')->with('success','Topic created successfully');
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
        $topic = Topics::find($id);
        $subject = DB::table('subject')->select('id', 'name')->get();
        $section = DB::table('section')->select('id', 'section')->get();
        return view('admin.pages.topic.edit',compact('topic', 'subject', 'section'));
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
        request()->validate(['subject' => 'required', 'section' => 'required', 'name' => 'required', 'slug' => 'required', 'description' => 'required', 'page_title' => 'required', 'sort']);


        $params                     =    $request->all();
        $fields['subject_id']       =    $params['subject'];
        $fields['section_id']       =    $params['section'];
        $fields['topic']            =    $params['name'];
        $fields['slug']             =    $params['slug'];
        $fields['detail']           =    $params['description'];
        $fields['sort']             =    $params['sort'];
        $fields['page_title']       =    $params['page_title'];
        $fields['meta_keywords']    =    $params['meta_keywords'];
        $fields['meta_description'] =    $params['meta_description'];
        $fields['display']          =    $params['display'];
        $fields['status']           =    $params['status'];

        Topics::find($id)->update($fields);

        return redirect()->route('topic.index')->with('success','Topic updated successfully');
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
        DB::table('topics')->where('id', $id)->delete();
        return redirect()->route('topic.index')->with('success','Topic deleted successfully');
    }
}
