@extends('layouts.store')
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="/">Home</a></li>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
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
                            <p> &#8358; {{$product->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection