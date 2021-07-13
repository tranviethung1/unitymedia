@extends('web.layout.master')

@section('content')
    <main id="main">
        @include('web.layout.header')
        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <h2>About us</h2>
                        <div class="mb-4">
                            <a href="/about-us">
                                <button class="glow-on-hover mt-3" type="button">Follow me</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3>{{$generalSetting[10]->content}}</h3>
                        <p>{{$generalSetting[11]->content}}</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>{{$generalSetting[13]->content}}</h3>
                        <p>{{$generalSetting[12]->content}}</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Supporters Section ======= -->
        <section id="supporters" class="section-with-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Works</h2>
                </div>

                <div class="row no-gutters clearfix" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($works as $item)
                        <div class="col-lg-4 col-md-4 col-xs-6">
                            <div class="supporter-logo" style="background:#ffffff00; border: none; height: 250px">
                                <a href="/works">
                                    <img src="upload/work/{{$item->file}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="">
                                <p style="font-family: 'Raleway', sans-serif; font-weight: 600;">{{$item->title}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section><!-- End Sponsors Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <p>See what’s news</p>
                    <h2>LATEST SONGS</h2>
                </div>
            </div>
            <div class="container">
                <div class="gallery-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        @foreach($libraryMusic as $item)

                            <div class="swiper-slide" >
                                <div class="grid" style="width: 100%">
                                    <figure class="effect-apollo">
                                        <img src="upload/library-music/{{ $item? $item->file : ''}}" alt="img18"/>
                                        <figcaption>
                                            <a href="#">View more</a>
                                        </figcaption>
                                    </figure>

                                </div>
                                <div class="album-info">
                                    <h5>{{$item->name}}</h5>
                                    <label>{{$item->description}}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </section><!-- End Gallery Section -->

        <section id="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 col-lg-4" style="z-index: 2">
                        <img src="upload/library-music/{{isset($libraryActive) ? $libraryActive->file : ''}}" style="width: 100%">
                    </div>
                    <div class="col-lg-6 col-md-6 mobile-ct" style="position: relative">

                        <div class="section-heading" style="text-align: left">
                            <p style="margin-left: 105px">See what’s new</p>
                        </div>
                        <div id="app-cover">
                            <div id="bg-artwork"></div>
                            <div id="bg-layer"></div>
                            <div id="player">
                                <div id="player-track">
                                    <div id="album-name"></div>
                                    <div id="track-name"></div>
                                    <div id="track-time">
                                        <div id="current-time"></div>
                                        <div id="track-length"></div>
                                    </div>
                                    <div id="s-area">
                                        <div id="ins-time"></div>
                                        <div id="s-hover"></div>
                                        <div id="seek-bar"></div>
                                    </div>
                                </div>
                                <div id="player-content">
                                    <div id="album-art">
                                        @foreach($radio as $key => $item)
                                            <img src="upload/radio/{{ $item? $item->file : ''}}" class="active" id="_{{$item->id}}">
                                        @endforeach
                                        <div id="buffer-box">Buffering ...</div>
                                    </div>
                                    <div id="player-controls">
                                        <div class="control">
                                            <div class="button" id="play-previous">
                                                <i class="fa fa-backward" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="button" id="play-pause-button">
                                                <i class="fa fa-play"></i>
                                            </div>
                                        </div>
                                        <div class="control">
                                            <div class="button" id="play-next">
                                                <i class="fa fa-forward"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Subscribe Section -->
        <!-- ======= Speakers Section ======= -->
        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>OUR MUSIC LIBRARY</h2>
                    <p>Here are some of our speakers</p>
                </div>

                <div class="row">
                    @foreach($libraryMusic as $item)
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
                <div>
                    <a href="/library-song">
                        <button class="glow-on-hover mt-3" type="button">See move</button>
                    </a>
                </div>
            </div>

        </section><!-- End Speakers Section -->
        <!-- ======= Contact Section ======= -->
        @include('web.layout.contact')

    </main><!-- End #main -->
@endsection