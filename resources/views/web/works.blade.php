@extends('web.layout.master')
@section('content')
    <div id="main">
        <!-- ======= About Section ======= -->
        <div class="demo work-header-ct">
            <div class="">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <div class="main-title">
                        <h1 class="thin">WHAT WE DO ?</h1>
                        <span style="color:red">Our principle:</span>
                        <span class="thin"> Let the experts do their work with full dedication</span>
                    </div>
                </div>
            </div>
        </div>

        <section id="supporters">
            <div class="container mt-2" data-aos="fade-up">
                <div class="row">
                    @foreach($works as $key => $item)

                        @if($key % 2 == 0)
                        <div class="col-lg-6 mb-5 col-xs-12">
                            <img src="upload/work/{{$item->file}}" style="width: 100%"/>
                            <div>
                                <a href="/contact">
                                    <button class="glow-on-hover mt-3" type="button">Join us</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5 col-xs-12" style="text-align: left;">
                            <h3>{{$item->title}}</h3>
                            <div  class="work-list-ct">{!! $item->content !!}  </div>
                        </div>
                        @else
                            <div class="col-lg-6 mb-5 col-xs-12" style="text-align: left;">
                                <h3>{{$item->title}}</h3>
                                <div class="work-list-ct">{!! $item->content !!}  </div>
                            </div>
                            <div class="col-lg-6 mb-5 col-xs-12">
                                <img src="upload/work/{{$item->file}}" style="width: 100%"/>
                                <div>
                                    <a href="/contact">
                                        <button class="glow-on-hover mt-3" type="button">Join us</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </section><!-- End About Section -->


    </div><!-- End #main -->
    <style>
        .work-list-ct h5, h3,p,span {
            text-align: left!important;
        }
    </style>
@endsection