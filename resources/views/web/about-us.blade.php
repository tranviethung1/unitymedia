@extends('web.layout.master')
@section('content')
    <div id="main">
        <!-- ======= About Section ======= -->
        <div class="demo work-header-ct">
            <div class="">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <div class="main-title">
                        <h1 class="thin">ABOUT US</h1>
                    </div>
                </div>
            </div>
        </div>

        <section id="supporters">
            <div class="container mt-2" data-aos="fade-up">
                <div class="row work-list-ct">
                    {!! $aboutUs->content !!}
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