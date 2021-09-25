@extends('backend.master')
@section('content')
    <div class="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Questionnaire Details </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Questionnaire</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('questionnaire.update',$questionnaire_details->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="institute_name">Institute Name</label>
                                    <input type="text" name="institute_name" id="institute_name" class="form-control" placeholder="Enter institute name" value="{{ $questionnaire_details->institute_name }}">
                                </div>
                            </div>
                            <div class="col-md-1 col-6">
                                @if ($questionnaire_details->institute_logo != '')
                                    <img class="mt-1" width="100px" src="{{ asset('backend/image/questionnaire/'.$questionnaire_details->created_at->format('Y/m/d/').$questionnaire_details->id.'/'.$questionnaire_details->institute_logo) }}" alt="{{ $questionnaire_details->institute_name }}" id="logo_preview">
                                @else
                                    <img class="mt-1" width="100px" src="{{ asset('backend/image/questionnaire/placeholder_logo.png') }}" alt="{{ $questionnaire_details->institute_name }}" id="logo_preview">

                                @endif
                            </div>
                            <div class="col-md-3 col-6">
                                <label>Institute Logo </label>
                                <div class="form-group">
                                    <input id="institute_logo" name="institute_logo" type="file" class="d-none" onchange="document.getElementById('logo_preview').src = window.URL.createObjectURL(this.files[0])">
                                    <label for="institute_logo" class="btn btn-primary">Change</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="institute_address">Address</label>
                                <input type="text" name="institute_address" class="form-control" placeholder="Enter Address" id="institute_address" value="{{ $questionnaire_details->institute_address }}">
                            </div>
                            <div class="col-md-6">
                                <label for="exam_name">Exam Name</label>
                                <input type="text" name="exam_name" id="exam_name" class="form-control" placeholder="Enter Name of Exam" value="{{ $questionnaire_details->exam_name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="questionnaire_subject">Subject</label>
                                <input type="text" name="questionnaire_subject" id="questionnaire_subject" class="form-control" placeholder="Enter Subject" value="{{ $questionnaire_details->questionnaire_subject  }}">
                            </div>
                            <div class="col-md-6">
                                <label for="department">Department/Group</label>
                                <select name="department" id="department" class="form-control">
                                    <option value="">-Select-</option>
                                    <option value="computer">Computer</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="semester">Semester/Class</label>
                                <select name="semester" id="semester" class="form-control">
                                    <option value="">-Select-</option>
                                    <option value="1st">1st</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="date">Exam Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $questionnaire_details->date  }}">
                            </div>
                            <div class="col-md-6">
                                <label for="start_time">Starts on</label>
                                <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $questionnaire_details->start_time }}">
                            </div>
                            <div class="col-md-6">
                                <label for="end_time">Ends on</label>
                                <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $questionnaire_details->end_time }}">
                            </div>
                            <div class="col-md-12">
                                <label for="quote">Quote</label>
                                <textarea name="quote" id="quote" rows="3" class="form-control">{{$questionnaire_details->quote}}</textarea>
                            </div>
                            <div class="col-md-6 mt-2 mt-md-3 pt-md-2">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input @if($questionnaire_details->sms_student_report == 2) checked @endif type="checkbox" class="custom-control-input" id="sms_student_report" name="sms_student_report" value="2">
                                        <label class="custom-control-label" for="sms_student_report">Send exam results via sms to Students</label>
                                    </div>
                                    <div class="custom-control custom-switch">
                                        <input @if($questionnaire_details->sms_guardian_report == 2) checked @endif type="checkbox" class="custom-control-input" id="sms_guardian_report" name="sms_guardian_report" value="2">
                                        <label class="custom-control-label" for="sms_guardian_report">Send results via sms to Guardians</label>
                                    </div>
                                    <div class="text-info"><i class="fa fa-envelope"></i> Reports will be sent via email by default.</div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-2">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Update Questionaire</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
