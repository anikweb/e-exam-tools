<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Models\Questionnaire_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.questionnaire.index',[
            'questionnaires' =>Questionnaire_Detail::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.questionnaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   echo 'hello';
        $questionnaire_details = new Questionnaire_Detail;
        $questionnaire_details->institute_name = $request->institute_name;
        $questionnaire_details->institute_address = $request->institute_address;
        $questionnaire_details->exam_name = $request->exam_name;
        $questionnaire_details->questionnaire_subject = $request->questionnaire_subject;
        $questionnaire_details->department = $request->department;
        $questionnaire_details->semester = $request->semester;
        $questionnaire_details->date = $request->date;
        $questionnaire_details->start_time = $request->start_time;
        $questionnaire_details->end_time = $request->end_time;
        $questionnaire_details->sms_guardian_report = $request->sms_guardian_report;
        $questionnaire_details->sms_guardian_report = $request->sms_guardian_report;
        $questionnaire_details->quote = $request->quote;
        $questionnaire_details->save();
        if($request->hasFile('institute_logo')){
            $logo = $request->file('institute_logo');
            $newName = Str::slug($request->institute_name).'-'.date('Y_m_d').'.'.$logo->getClientOriginalExtension();
            // Create Dynamic Folder Start
            $path = public_path('backend/image/questionnaire').'/'.$questionnaire_details->created_at->format('Y/m/d/').Str::slug($questionnaire_details->institute_name).'/'.$questionnaire_details->id.'/';
            File::makeDirectory($path, $mode = 0777, true, true);
            // Create Dynamic Folder End
            Image::make($logo)->save($path.$newName,80);
            $questionnaire_details->institute_logo = $newName;
            $questionnaire_details->save();
        }
        return redirect()->route('questionnaire.index')->with('session','New Question Created. Now, Insert MCQ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnaire $questionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnaire $questionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionnaire $questionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnaire $questionnaire)
    {
        //
    }
}
