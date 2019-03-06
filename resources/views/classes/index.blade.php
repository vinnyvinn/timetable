@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Classes
                        <a href="{{url('classes/create')}}" class="btn btn-success pull-right btn-sm"><span class="glyphicon glyphicon-plus"></span>Add new Class</a>
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
                            @foreach($classes as $class)
                                <tr>
                                    <td>{{$class->id}}</td>
                                    <td>{{$class->name}}</td>
                                    <td><a href="{{url('classes/'.$class->id.'/edit')}}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span> </a>
                                        <a href="{{url('classes/delete/'.$class->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> </a>
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
