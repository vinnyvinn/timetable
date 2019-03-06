@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Teacher</div>

                    <div class="panel-body">
                        <form action="{{route('teachers.update',['id' => $teacher->id])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" value="{{$teacher->first_name}}" required>
                            </div>


                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" value="{{$teacher->last_name}}" required>
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{$teacher->email}}" required>
                            </div>


                            <div class="form-group">
                                <label for="phone">Phone No</label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{$teacher->phone}}" required>
                            </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
