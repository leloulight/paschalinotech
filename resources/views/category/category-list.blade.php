@extends('layouts.admin')
@section('title')
    <title>Paschalinotech</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Upload new Category
                    </div>
                    {!! Form::open(['url'=>'admin/categories', 'method'=>'POST', 'files'=>'true']) !!}
                    {!!csrf_field()!!}
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value=""
                                   placeholder="Category Name">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('admin/categories') }}" class="btn btn-warning">Cancel</a>
                    </div>
                    {!! Form::close() !!}
                </div>
                @include('error-notification')
                <!-- Advanced Tables -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        All Categories
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr class="odd gradeX">
                                        <td>{{$category->name}}</td>
                                        <td><a href="{{ url('admin/categories/'.$category->id.'/edit') }}"
                                               class="btn btn-primary btn-block btn-sm pull-left">Edit</a>
                                        </td>
                                        <td>{!! Form::open(['url'=>'admin/categories/'.$category->id,
                                            'class'=>'pull-left']) !!}
                                            {!!csrf_field()!!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block
                                            btn-sm',
                                            'onclick'=>'return
                                            confirm(\'Are you sure?\')']) !!}
                                            {!! Form::close() !!}
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
@section('jquery_for_table')
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@endsection


