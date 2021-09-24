@extends('backend.master')
@section('content')
    <div class="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Questionnaire {{ $questionnaire_details }}</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" text-center questionaire-heading" >
                            <img src="image/rimt_logo.png" alt="rimt logo" width="60px">
                            <h2 class="d-inline-block questionaire-inst-name">{{ $questionnaire_details->institute_name }}</h2>
                            <h4 class="questionaire-inst-addr">{{ $questionnaire_details->institute_address }}</h4>
                            <h5>Class Test Exam</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-12 text-left">
                                <p class="questionaire-subject"><strong>Time: </strong><span>30 Min</span></p>
                            </div>
                            <div class="col-md-8 col-sm-12 text-center ">
                                <p class="questionaire-subject">
                                    <strong>Subject:</strong>
                                    <span>English</span>
                                    <strong>Code: </strong>
                                    <span>66654</span>
                                </p>
                            </div>
                            <div class="col-md-2  col-sm-12 text-right">
                                <p class="questionaire-subject"><strong>Total Mark: </strong> <span>30</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="font-weight-bold text-center">[Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, totam.]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
