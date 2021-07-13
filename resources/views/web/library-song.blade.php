@extends('web.layout.master')
@section('content')
    <div id="main">
        <!-- ======= About Section ======= -->
        <div class="demo work-header-ct">
            <div class="">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <div class="main-title">
                        <h1 class="thin">LIBRARY SONGS</h1>
                    </div>
                </div>
            </div>
        </div>

        <section id="speakers">
            <div class="container mt-2" data-aos="fade-up">
                <div class="row">
                    @foreach($librarySong as $item)
                        <div class="col-lg-3 col-md-6" style="margin-bottom: 25px">
                            <div class="grid">
                                <figure class="effect-hera">
                                    <img src="upload/library-music/{{ $item? $item->file : ''}}"/>
                                    <figcaption>
                                        <p>
                                            <a href="{{$item->url}}" class="glightbox play-btn mb-4"><i style="font-size: 50px" class="fa fa-play-circle" aria-hidden="true"></i></a>
                                        </p>
                                    </figcaption>
                                </figure>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section><!-- End About Section -->
    </div><!-- End #main -->
@endsection