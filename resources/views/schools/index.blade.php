@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Schools
                        <a href="{{url('schools/create')}}" class="btn btn-success pull-right btn-sm"><span class="glyphicon glyphicon-plus"></span>Add new School</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered datatable" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schools as $school)
                                <tr>
                                    <td>{{$school->id}}</td>
                                    <td>{{$school->name}}</td>
                                     <td><a href="{{url('schools/'.$school->id.'/edit')}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="{{url('schools/delete/'.$school->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
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
