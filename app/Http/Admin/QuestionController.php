<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\SubjectQuestions as SubjectQuestions;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = SubjectQuestions::latest()->paginate(1);

        return view('admin.pages.question.index',compact('response'))->with('i', (request()->input('page', 1) - 1) * 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $labels = DB::table('interview_label')->select('id', 'interview_label')->get();
        return view('admin.pages.question.create',compact('labels'));
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
        request()->validate(['label_id' => 'required', 'question' => 'required', 'slug' => 'required', 'answer' => 'required', 'page_title' => 'required', 'status' => 'required',]);

        $data = $request->all();
        $data['unix_timestamp'] = time();
        SubjectQuestions::create($data);
        return redirect()->route('question.index')->with('success','Question created successfully');
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
        $labels   =  DB::table('interview_label')->select('id', 'interview_label')->get();
        $data     =  SubjectQuestions::find($id);
        return view('admin.pages.question.edit',compact('data', 'labels'));
        
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
        request()->validate(['label_id' => 'required', 'question' => 'required', 'slug' => 'required', 'answer' => 'required', 'page_title' => 'required', 'status' => 'required',]);

        $data = $request->all();
        $data['unix_timestamp'] = time();
        SubjectQuestions::find($id)->update($data);
        return redirect()->route('question.index')->with('success','Question updated successfully');
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
        DB::table('subject_questions')->where('id', $id)->delete();
        return redirect()->route('question.index')->with('success','Question deleted successfully');
    }
}
