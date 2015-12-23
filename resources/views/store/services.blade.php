@extends('layouts.store')
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>services</li>
            </div>
        </div>
    </div>

    <div id="feature">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3>Services</h3>
                    <p>We provide the following Services</p>
                </div>
                <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect">
                            {!! Html::image('assets/img/electrical.jpg', 'Generic placeholder image',
                            ['class'=>'img-circle pulse','style'=>'width: 140px; height: 140px;']) !!}
                            <h2>Electrical Sale</h2>

                            <p>Looking for Buy Electrical Components? Then Paschalinotech is the right place.</br>Buy at
                                affordable price</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect">
                            {!! Html::image('assets/img/elelctronics.jpg', 'Generic placeholder image',
                            ['class'=>'img-circle pulse','style'=>'width: 140px; height: 140px;']) !!}
                            <h2>Electronics Sale</h2>

                            <p>We sell high quality electronics with long term guarantee </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <div class="hi-icon-wrap hi-icon-effect">
                            {!! Html::image('assets/img/installation_and_maintenence.jpg', 'Generic placeholder image',
                            ['class'=>'img-circle pulse','style'=>'width: 140px; height: 140px;']) !!}

                            <h2>Installation and Maintenance</h2>

                            <p>We have highly skilled and experienced Engineers who are always there to install and
                                maintain our clients products </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        {!! Html::image('assets/img/GOtv_and_startime.jpg', 'Generic placeholder image',
                        ['class'=>'img-circle pulse','style'=>'width: 140px; height: 140px;']) !!}

                        <h2>startimes and Gotv Authorized Dealer</h2>

                        <p>Do you need a Startimes or Gotv decoder? Then you are st the right place.</br>we are
                            authorized Startimes and GOtv dealers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection