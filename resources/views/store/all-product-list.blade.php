@extends('layouts.store')
@section('content')

    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>products</li>
            </div>
        </div>
    </div>

    <section id="portfolio">
        <div class="container">
            <br class="center">
            </br>
        </div>

        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="/store" data-filter="*">All </a></li>
            @foreach($categories as $category)
                @if(DB::table('products')->where('category_id','=', $category->id)->count()!=0)
                <li><a class="btn btn-default" href="{{url('/store/'.$category->id) }}"
                       data-filter=".bootstrap">{{ $category->name }}</a></li>
                @endif
            @endforeach
        </ul>
        <!--/#portfolio-filter-->
        </div>
        <div class="container">
            <div class="">
                <div class="portfolio-items">
                    @foreach($products as $product)
                        <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="{{asset($product->file)}}" alt="{{$product->file}}">

                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h2>{{$product->caption}}</h2>

                                        <p>Price: &#8358; {{$product->price }}</p>
                                        <a class="preview" href="{{url('product/'.$product->id) }}"
                                           rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.portfolio-item-->
                    @endforeach
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
<div align="center">{!! $products->render() !!}</div>
@endsection