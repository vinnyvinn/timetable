@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Teacher</div>

                    <div class="panel-body">
                        <form action="{{route('teachers.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                            </div>


                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                            </div>


                            <div class="form-group">
                                <label for="phone">Phone No</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No" required>
                            </div>
                            <button type="submit" value="submit" class="btn btn-primary">Save</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
