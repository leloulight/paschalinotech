@extends('layouts.admin')
@section('title')
    <title>Paschalinotech</title>
@endsection
@yield('assets_links')
@yield('nav_bar')
@section('content')
    @include('error-notification')
    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Category
        </div>
        {!! Form::model($categories,['url' => 'admin/categories/'.$categories->id, 'method' => 'PUT', 'files'=>true])!!}
        <div class="panel-body">
            <div class="form-group">
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('admin/categories') }}" class="btn btn-warning">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
