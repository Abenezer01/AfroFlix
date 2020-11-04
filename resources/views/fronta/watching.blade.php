<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('fronta.layout.css')
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        @include('fronta.layout.menu')
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    {{-- @include('fronta.modules.breadcrumb') --}}
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">

                        <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="1300"
                        height="700"
                        poster="{{ $movie->poster }}"
                        data-setup="{}"
                      >
                        <source src="{{ $movie->location }}" type="video/mp4" />
                        <source src="{{ $movie->location }}" type="video/webm" />
                        <p class="vjs-no-js">
                          To view this video please enable JavaScript, and consider upgrading to a
                          web browser that
                          <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                          >
                        </p>
                      </video>
                        {{-- <video id="player" playsinline controls data-poster="{{ $movie->poster }}">
                        <source src="{{ $movie->location }}" type="video/mp4" />
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video> --}}
                    </div>
                </div>
            </div>
            <div class="row">
            <h5>{{$movie->title}}</h5>

                {{-- @include('fronta.modules.popular') --}}
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        @include('fronta.layout.footer')
      </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      @include('fronta.modules.search')
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
    @include('fronta.layout.script')

</body>

</html>
