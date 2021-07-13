<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @section('title', 'Page Title')
    <title>{{$generalSetting[0]->content}}</title>
    <meta name="description" content="{{$generalSetting[1]->content}}" />
    <meta property="og:title" content="{{$generalSetting[2]->content}}" />
    <meta property="og:type" content="{{$generalSetting[3]->content}}" />
    <meta property="og:url" content="{{$generalSetting[4]->content}}" />
    <meta property="og:image" content="{{$generalSetting[5]->content}}" />
    <meta property="og:description" content="{{$generalSetting[6]->content}}" />

    <!-- Favicons -->
    <link rel="icon" href="{{asset('upload/favicon/'.$generalSetting[7]->content)}}" type="image/x-icon">

    <link href="page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="page/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="page/assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="page/assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="page/assets/css/set2.css" />
    <link rel="stylesheet" type="text/css" href="page/assets/css/set1.css" />
    <link rel="stylesheet" type="text/css" href="page/assets/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <!-- Template Main CSS File -->
    <link href="page/assets/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="/" class="scrollto"><img src="{{asset('upload/logo/'.$generalSetting[8]->content)}}" alt="" title=""></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="{{asset('/#about')}}">About Us</a></li>
                <li><a class="nav-link scrollto" href="{{asset('/#supporters')}}">Works</a></li>
{{--                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#subscribe">Subscribe</a></li>--}}
                <li><a class="nav-link scrollto" href="{{asset('/#speakers')}}">Library Songs</a></li>
                <li><a class="nav-link scrollto" href="{{asset('/#contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="{{asset('upload/logo/'.$generalSetting[8]->content)}}" alt="TheEvenet">
{{--                    <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>--}}
                </div>

                <div class="col-lg-3 col-md-6 footer-links">

                </div>

                <div class="col-lg-3 col-md-6 footer-links">

                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        {{$generalSetting[10]->content}}<br>
                        <strong>Phone:</strong> {{$generalSetting[11]->content}}<br>
                        <strong>Email:</strong> {{$generalSetting[12]->content}}<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>UnityMedia</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="">UnityMedia</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="page/assets/vendor/aos/aos.js"></script>
<script src="page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="page/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="page/assets/vendor/php-email-form/validate.js"></script>
<script src="page/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="page/assets/js/main.js"></script>
</body>
<script>

    let arrData = <?php echo (isset($radio) ? $radio : '[]') ?>;
    let albumsTmp = [];
    let trackNamesTmp = [];
    let albumArtworksTmp = [];
    let trackUrlTmp = [];
    arrData.map(function (item){
        albumsTmp.push(item.album);
        trackNamesTmp.push(item.name);
        albumArtworksTmp.push('_' + item.id);
        trackUrlTmp.push(window.location.origin + '/upload/radio/' + item.radio);
    })
    $(function () {
        var playerTrack = $("#player-track"), bgArtwork = $('#bg-artwork'), bgArtworkUrl, albumName = $('#album-name'),
            trackName = $('#track-name'), albumArt = $('#album-art'), sArea = $('#s-area'), seekBar = $('#seek-bar'),
            trackTime = $('#track-time'), insTime = $('#ins-time'), sHover = $('#s-hover'),
            playPauseButton = $("#play-pause-button"), i = playPauseButton.find('i'), tProgress = $('#current-time'),
            tTime = $('#track-length'), seekT, seekLoc, seekBarPos, cM, ctMinutes, ctSeconds, curMinutes, curSeconds,
            durMinutes, durSeconds, playProgress, bTime, nTime = 0, buffInterval = null, tFlag = false,
            albums = albumsTmp,
            trackNames = trackNamesTmp,
            albumArtworks = albumArtworksTmp,
            trackUrl = trackUrlTmp,
            playPreviousTrackButton = $('#play-previous'), playNextTrackButton = $('#play-next'), currIndex = -1;

        function playPause() {
            setTimeout(function () {
                if (audio.paused) {
                    playerTrack.addClass('active');
                    albumArt.addClass('active');
                    checkBuffering();
                    i.attr('class', 'fa fa-pause');
                    audio.play();
                } else {
                    playerTrack.removeClass('active');
                    albumArt.removeClass('active');
                    clearInterval(buffInterval);
                    albumArt.removeClass('buffering');
                    i.attr('class', 'fa fa-play');
                    audio.pause();
                }
            }, 300);
        }


        function showHover(event) {
            seekBarPos = sArea.offset();
            seekT = event.clientX - seekBarPos.left;
            seekLoc = audio.duration * (seekT / sArea.outerWidth());

            sHover.width(seekT);

            cM = seekLoc / 60;

            ctMinutes = Math.floor(cM);
            ctSeconds = Math.floor(seekLoc - ctMinutes * 60);

            if ((ctMinutes < 0) || (ctSeconds < 0))
                return;

            if ((ctMinutes < 0) || (ctSeconds < 0))
                return;

            if (ctMinutes < 10)
                ctMinutes = '0' + ctMinutes;
            if (ctSeconds < 10)
                ctSeconds = '0' + ctSeconds;

            if (isNaN(ctMinutes) || isNaN(ctSeconds))
                insTime.text('--:--');
            else
                insTime.text(ctMinutes + ':' + ctSeconds);

            insTime.css({'left': seekT, 'margin-left': '-21px'}).fadeIn(0);

        }

        function hideHover() {
            sHover.width(0);
            insTime.text('00:00').css({'left': '0px', 'margin-left': '0px'}).fadeOut(0);
        }

        function playFromClickedPos() {
            audio.currentTime = seekLoc;
            seekBar.width(seekT);
            hideHover();
        }

        function updateCurrTime() {
            nTime = new Date();
            nTime = nTime.getTime();

            if (!tFlag) {
                tFlag = true;
                trackTime.addClass('active');
            }

            curMinutes = Math.floor(audio.currentTime / 60);
            curSeconds = Math.floor(audio.currentTime - curMinutes * 60);

            durMinutes = Math.floor(audio.duration / 60);
            durSeconds = Math.floor(audio.duration - durMinutes * 60);

            playProgress = (audio.currentTime / audio.duration) * 100;

            if (curMinutes < 10)
                curMinutes = '0' + curMinutes;
            if (curSeconds < 10)
                curSeconds = '0' + curSeconds;

            if (durMinutes < 10)
                durMinutes = '0' + durMinutes;
            if (durSeconds < 10)
                durSeconds = '0' + durSeconds;

            if (isNaN(curMinutes) || isNaN(curSeconds))
                tProgress.text('00:00');
            else
                tProgress.text(curMinutes + ':' + curSeconds);

            if (isNaN(durMinutes) || isNaN(durSeconds))
                tTime.text('00:00');
            else
                tTime.text(durMinutes + ':' + durSeconds);

            if (isNaN(curMinutes) || isNaN(curSeconds) || isNaN(durMinutes) || isNaN(durSeconds))
                trackTime.removeClass('active');
            else
                trackTime.addClass('active');


            seekBar.width(playProgress + '%');

            if (playProgress == 100) {
                i.attr('class', 'fa fa-play');
                seekBar.width(0);
                tProgress.text('00:00');
                albumArt.removeClass('buffering').removeClass('active');
                clearInterval(buffInterval);
            }
        }

        function checkBuffering() {
            clearInterval(buffInterval);
            buffInterval = setInterval(function () {
                if ((nTime == 0) || (bTime - nTime) > 1000)
                    albumArt.addClass('buffering');
                else
                    albumArt.removeClass('buffering');

                bTime = new Date();
                bTime = bTime.getTime();

            }, 100);
        }

        function selectTrack(flag) {
            if (flag == 0 || flag == 1)
                ++currIndex;
            else
                --currIndex;

            if ((currIndex > -1) && (currIndex < albumArtworks.length)) {
                if (flag == 0)
                    i.attr('class', 'fa fa-play');
                else {
                    albumArt.removeClass('buffering');
                    i.attr('class', 'fa fa-pause');
                }

                seekBar.width(0);
                trackTime.removeClass('active');
                tProgress.text('00:00');
                tTime.text('00:00');

                currAlbum = albums[currIndex];
                currTrackName = trackNames[currIndex];
                currArtwork = albumArtworks[currIndex];

                audio.src = trackUrl[currIndex];

                nTime = 0;
                bTime = new Date();
                bTime = bTime.getTime();

                if (flag != 0) {
                    audio.play();
                    playerTrack.addClass('active');
                    albumArt.addClass('active');

                    clearInterval(buffInterval);
                    checkBuffering();
                }

                albumName.text(currAlbum);
                trackName.text(currTrackName);
                albumArt.find('img.active').removeClass('active');
                $('#' + currArtwork).addClass('active');

                bgArtworkUrl = $('#' + currArtwork).attr('src');

                bgArtwork.css({'background-image': 'url(' + bgArtworkUrl + ')'});
            } else {
                if (flag == 0 || flag == 1)
                    --currIndex;
                else
                    ++currIndex;
            }
        }

        function initPlayer() {
            audio = new Audio();

            selectTrack(0);

            audio.loop = false;

            playPauseButton.on('click', playPause);

            sArea.mousemove(function (event) {
                showHover(event);
            });

            sArea.mouseout(hideHover);

            sArea.on('click', playFromClickedPos);

            $(audio).on('timeupdate', updateCurrTime);

            playPreviousTrackButton.on('click', function () {
                selectTrack(-1);
            });
            playNextTrackButton.on('click', function () {
                selectTrack(1);
            });
        }

        initPlayer();
    });
</script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js'></script>
</html>