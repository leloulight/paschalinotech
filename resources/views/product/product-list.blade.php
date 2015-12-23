@extends('layouts.admin')
@section('title')
    <title>Paschalinotech</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                @include('error-notification')
                        <!-- Advanced Tables -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        All Products
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered  table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr class="odd">
                                        <td style="text-align: center;"><img height="20%"
                                                                             src="{{asset($product->file)}}"/>
                                        </td>
                                        <td>
                                            {{$product->caption}}
                                        </td>
                                        <td>
                                            &#8358; {{$product->price }}
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/products/'.$product->id.'/edit') }}"
                                               class="btn btn-primary btn-block btn-sm pull-left">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/products/'.$product->id) }}"
                                               class="btn btn-warning btn-block btn-sm pull-left">View</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['url'=>'admin/products/'.$product->id, 'class'=>'pull-left'])
                                            !!}
                                            {!!csrf_field()!!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-sm
                                            pull-left', 'onclick'=>'return
                                            confirm(\'Are you sure?\')']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!--<div align="center">{!! $products->render() !!}</div>-->
                        </div>
                    </div>
                </div>


                <div class="panel panel-success ">
                    <div class="panel-heading ">
                        Upload New Product
                    </div>

                    {!! Form::open(['url'=>'admin/products', 'method'=>'POST', 'files'=>'true', 'role'=> 'form']) !!}
                    {!!csrf_field()!!}
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="category">Category Name:</label>
                            <select class="form-control " name="category">
                                <option selected value="">Select Category Name</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{$category->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label class="control-label" for="userfile">Product image:</label>
                            <input type="file" class="form-control" name="userfile">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="caption">Caption:</label>
                            <input type="text" placeholder="Enter Caption" class="form-control" name="caption" value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="description">Description:</label>
                        <textarea class="form-control" placeholder="Enter brief description"
                                  name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="price">Price:</label>
                            {!! Form::text('price',null,['class'=>'form-control','placeholder'=>'Enter Price']) !!}
                        </div>


                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <a href="{{ url('admin/products') }}" class="btn btn-warning">Cancel</a>
                        </div>
                        {!! Form::close() !!}
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

