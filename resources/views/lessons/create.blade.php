@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Schedule New Lesson</div>

                    <div class="panel-body">
                        <form action="{{route('lessons.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <select name="teacher_id" id="teacher_id" class="form-control" required>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}"> {{$teacher->first_name .' '.$teacher->last_name}}</option>
                                        @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="school_id">School</label>
                                <select name="school_id" id="school_id" class="form-control" required>
                                    @foreach($schools as $school)
                                        <option value="{{$school->id}}"> {{$school->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="myclass_id">Class</label>
                                <select name="myclass_id" id="myclass_id" class="form-control" required>
                                    @foreach($classes as $class)
                                        <option value="{{$class->id}}"> {{$class->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="subject_id">Subject</label>
                                <select name="subject_id" id="subject_id" class="form-control" required>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}"> {{$subject->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" name="date" class="form-control date" id="date" required>

                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" name="time" class="form-control time" id="time" required>

                            </div>


                            <button type="submit" value="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
