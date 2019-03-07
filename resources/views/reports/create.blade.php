@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Generate Timetable</div>

                    <div class="panel-body">
                        <form action="{{route('reports.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="school_id">School</label>
                                <select name="school_id" id="school_id" class="form-control" required>

                                    @foreach($schools as $school)
                                    <option value="{{$school->id}}">{{$school->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <select name="teacher_id" id="teacher_id" class="form-control" required>

                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->first_name .' '.$teacher->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" value="generate" name="submit" class="btn btn-primary">Generate</button>
                            <button type="submit" value="generate-all" name="submit" class="btn btn-success">Generate All</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
