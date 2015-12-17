
@extends('layouts.admin')
@section('title')
    <title>Paschalinotech</title>
@endsection
@yield('assets_links')
@yield('nav_bar')
@section('content')
    @include('error-notification')
    {!! Form::open(['url'=>'admin/product', 'method'=>'POST', 'files'=>'true']) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-12 text-center">
        <label for="category">Category Name:
            <select name="category">
                <option selected value="">Select Category Name</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">{{$category->name}}</option>
                @endforeach
            </select>
        </label>
        <hr/>
    </div>
    <div class="form-group">
        <label for="userfile">Product File</label>
        <input type="file" class="form-control" name="userfile">

    </div>

    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" class="form-control" name="caption" value="">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        {!! Form::text('price',null,['class'=>'form-control']) !!}
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
    <a href="{{ url('admin/product') }}" class="btn btn-warning">Cancel</a>

    {!! Form::close() !!}
@endsection


