@extends('layouts.admin')
@section('title')
    <title>Paschalinotech</title>
@endsection
@yield('assets_links')
@yield('nav_bar')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('error-notification')
            <div class="panel panel-success">
                <div class="panel-heading ">
                    Edit Product
                </div>
                {!! Form::model($product,['url' => 'admin/product/'.$product->id, 'method' => 'PUT', 'files'=>true]) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <?php
                $category_name = DB::table('categories')->where('id', $product->category_id)->value('name');
                ?>
                <div class="panel-body">

                    <div class="form-group text-center">
                        <label for="userfile" class="control-label">
                            <img src="{{ asset($product->file) }}"
                                                                          xmlns="http://www.w3.org/1999/html"
                                                                          height="150"/>

                            {!! Form::file('userfile',null,['class'=>'form-control']) !!}
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="category">Category Name: </label>
                        <select class="form-control" name="category">
                            <option selected value="">Select Category Name</option>
                            @foreach ($categories as $category)
                                @if($category->name == $category_name))
                                <option selected value="{{ $category->name }}">{{$category->name}}</option>
                                @else
                                    <option value="{{ $category->name }}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        {!!Form::label('caption','Caption:',['class'=>'control-label'])!!}
                        {!! Form::text('caption',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('description','Description:',['class'=>'control-label'])!!}
                        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('price','Price:',['class'=>'control-label'])!!}
                        {!! Form::text('price',null,['class'=>'form-control']) !!}
                    </div>

                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('admin/product') }}" class="btn btn-warning">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


