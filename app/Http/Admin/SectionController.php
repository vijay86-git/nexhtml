<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Section as Section;
use DB;
use Illuminate\Support\Facades\Input;

class SectionController extends Controller
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
        $section = Section::where('subject_id', $subject_id)->latest()->paginate(1);
            else
        $section = Section::latest()->paginate(1);

        $subject = DB::table('subject')->select('id', 'name')->get();
        return view('admin.pages.section.index',compact('section', 'subject'))->with('i', (request()->input('page', 1) - 1) * 1);
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
        return view('admin.pages.section.create', compact('subject'));
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
        request()->validate(['subject_id' => 'required', 'section' => 'required']);

        $data = $request->all();
        $data['unix_timestamp'] = time();
        Section::create($data);
        return redirect()->route('section.index')->with('success','Section created successfully');
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
        $section = Section::find($id);
        $subject = DB::table('subject')->select('id', 'name')->get();
        return view('admin.pages.section.edit',compact('section', 'subject'));
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
        request()->validate(['subject_id' => 'required', 'section' => 'required']);
        Section::find($id)->update($request->all());
        return redirect()->route('section.index')->with('success','Section updated successfully');
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
        DB::table('section')->where('id', $id)->delete();
        return redirect()->route('section.index')->with('success','Section deleted successfully');
    }
}
