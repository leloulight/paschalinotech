@extends('layouts.admin')
@section('title')
    <title>Paschalinotech</title>
@endsection
@yield('assets_links')
@yield('nav_bar')
@section('content')
    <form class="form-horizontal">
        <div class="panel panel-success">
            <div class="panel-heading">
                Product Details
            </div>
            <div class="panel-body">
                <img src="{{ asset($product->file) }}" height="200"/>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Caption</label>

                    <div class="col-sm-10">
                        <p class="form-control-static">{{ $product->caption }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-5">
                        <p class="form-control-static">{{ $product->description }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Price</label>

                    <div class="col-sm-5">
                        <p class="form-control-static"> &#8358; {{$product->price }}</p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-warning">Edit</a>
                <a href="{{ url('admin/products') }}" class="btn btn-warning">&lt;Back</a>
            </div>
        </div>
    </form>
@endsection

