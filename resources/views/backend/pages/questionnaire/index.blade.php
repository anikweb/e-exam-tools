@extends('backend.master')
@section('content')
    <div class="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Questionnaires</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Questionnaires</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Institute Name</th>
                                        <th>Institute Address</th>
                                        <th>Name of Exam</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Semester</th>
                                        <th>Exam Date</th>
                                        <th>Starts on</th>
                                        <th>Ends on</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($questionnaires as $questionnaire)
                                        <tr>
                                            <td>{{ $questionnaires->firstItem() +$loop->index  }}</td>
                                            <td>{{ $questionnaire->institute_name }}</td>
                                            <td>{{ $questionnaire->institute_address }}</td>
                                            <td>{{ $questionnaire->exam_name }}</td>
                                            <td>{{ $questionnaire->questionnaire_subject }}</td>
                                            <td>{{ $questionnaire->department }}</td>
                                            <td>{{ $questionnaire->semester }}</td>
                                            <td>{{ $questionnaire->date }}</td>
                                            <td>{{ $questionnaire->start_time }}</td>
                                            <td>{{ $questionnaire->end_time }}</td>
                                            <td><span class="badge badge-info">Not Done</span></td>
                                            <td>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                            </td>

                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="12" class="text-center text-muted"><i class="fa fa-exclamation-circle"></i> No Data to Show!</td>
                                    </tr>
                                    @endforelse
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                            <div>
                                {{ $questionnaires->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
