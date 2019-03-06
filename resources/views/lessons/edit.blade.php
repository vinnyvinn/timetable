@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modify Lesson</div>

                    <div class="panel-body">
                        <form action="{{route('lessons.update',['id' => $lesson->id])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <input type="text" name="teacher_id" class="form-control" value="{{$lesson->teacher->first_name.' '.$lesson->teacher->last_name}}" disabled="disabled" required>

                            </div>
                            <div class="form-group">
                                <label for="school_id">School</label>
                                <input type="text" name="school_id" value="{{$lesson->school->name}}" disabled="disabled" class="form-control">


                            </div>

                            <div class="form-group">
                                <label for="myclass_id">Class</label>
                                <input type="text" name="myclass_id" value="{{$lesson->myclass->name}}" disabled="disabled" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="subject_id">Subject</label>
                                <input type="text" name="subject_id" value="{{$lesson->subject->name}}" disabled="disabled" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" name="date" class="form-control date" id="date" value="{{$lesson->date}}" required>

                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" name="time" class="form-control time" id="time" value="{{$lesson->time}}" required>

                            </div>

                            <button type="submit" value="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
