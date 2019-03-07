@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lessons
                        <a href="{{url('reports/to-excel/'.$teacher_id.'/'.$school_id)}}" class="btn btn-success pull-right btn-sm"><span class="glyphicon glyphicon-download-alt"></span>Download</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered datatable" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Teacher</th>
                                <th>School</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Time</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $lesson)
                                <tr>
                                    <td>{{$lesson->id}}</td>
                                    <td>{{$lesson->teacher->first_name .' '.$lesson->teacher->last_name}}</td>
                                    <th>{{$lesson->school->name}}</th>
                                    <th>{{$lesson->myclass->name}}</th>
                                    <th>{{$lesson->subject->name}}</th>
                                    <th>{{$lesson->date}}</th>
                                    <th>{{$lesson->time}}</th>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
