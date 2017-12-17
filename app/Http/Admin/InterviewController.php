<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\InterviewLabel as InterviewLabel;
use DB;
use App\InterviewLabelSubject as InterviewLabelSubject;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = InterviewLabel::latest()->paginate(1);
        return view('admin.pages.interview_label.index',compact('response'))->with('i', (request()->input('page', 1) - 1) * 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subject  = DB::table('subject')->select('id', 'name')->get();
        return view('admin.pages.interview_label.create', compact('subject'));
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
        request()->validate(['subject_id' => 'required', 'interview_label' => 'required', 'slug' => 'required', 'page_title' => 'required']);

        $params                     =    $request->all();
        $params['unix_timestamp']   =    time();

        $resp                       =    InterviewLabel::create($params);

        $interview_label_id         =    $resp->id;

        $subject_id                 =    $params['subject_id'];

        foreach ($subject_id as $subj_id):
             $arr['interview_label_id']  =     $interview_label_id;
             $arr['subject_id']          =     $subj_id;
             InterviewLabelSubject::create($arr);
        endforeach;

        return redirect()->route('interview.index')->with('success','Label created successfully');
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
        $data     = InterviewLabel::find($id);
        $subject  = DB::table('subject')->select('id', 'name')->get();

        $label_subjects  = DB::table('interview_label_subject')->select('subject_id')->where('interview_label_id', $id)->get();
        foreach ($label_subjects as $label_subject):
            $label_sub[] = $label_subject->subject_id;
        endforeach;

        return view('admin.pages.interview_label.edit',compact('data', 'subject', 'label_sub'));
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
        request()->validate(['subject_id' => 'required', 'interview_label' => 'required', 'slug' => 'required', 'page_title' => 'required']);

        $params                     =    $request->all();

        InterviewLabel::find($id)->update($params);

        DB::table('interview_label_subject')->where('interview_label_id', $id)->delete();

        $subject_id                 =    $params['subject_id'];

        foreach ($subject_id as $subj_id):
             $arr['interview_label_id']  =     $id;
             $arr['subject_id']          =     $subj_id;
             InterviewLabelSubject::create($arr);
        endforeach;

        return redirect()->route('interview.index')->with('success','Label updated successfully');
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
        DB::table('interview_label')->where('id', $id)->delete();
        return redirect()->route('interview.index')->with('success','Label deleted successfully');
    }
}
