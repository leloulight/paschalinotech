@extends('layouts.store')
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Contact</li>
            </div>
        </div>
    </div>


    <div id="contact">
        <div class="container">
            <div class="text-center">
                <h3>Contact Us</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2>Contact us any time</h2>

                    <p>Our Customer service are always there for you</p>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                    <h2>Contact Info</h2>
                    <ul>
                        <li><i class="fa fa-home fa-2x"></i></li>
                        <hr>
                        <li><i class="fa fa-phone fa-2x"></i> +234(0)17624284 or +2348022587524</li>
                        <hr>
                        <li><i class="fa fa-envelope fa-2x"></i> info@eaglerescueng.com</li>
                    </ul>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    @include('error-notification')
                    <form action="{{url('/customer/request')}}" method="POST" role="form">
                        {!! csrf_field()!!}
                        <div class="form-group">
                            {!!Form::text('sender_name',null,['class'=>'form-control','placeholder'=>'Enter name','required'=>'required','id'=>'sender_name'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::email('sender_email',null,['class'=>'form-control','placeholder'=>'Enter E-mail','required'=>'required','id'=>'sender_email'])!!}
                        </div>

                        <div class="form-group">
                            {!!Form::text('subject',null,['class'=>'form-control','placeholder'=>'Enter Subject','required'=>'required','id'=>'subject'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::textarea('content',null,['class'=>'form-control','rows'=>'5','cols'=>'50','required'=>'required','id'=>'content'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::submit('Submit Message',['class'=>'btn btn-primary btn-lg','required'=>'required'])!!}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection