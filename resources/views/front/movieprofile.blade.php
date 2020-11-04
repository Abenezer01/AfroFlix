<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @include('front.dash.headcss')
	</head>
	<body>
		     <div id="sidebar-bg">

             @include('front.dash.dashmain')

			 <nav id="mobile-navigation-pro">

				<ul id="mobile-menu-pro">
	            <li>
	              <a href="/dashboard">
						<span class="icon-Old-TV"></span>
	                TV Series
	              </a>
	            <li>
	            <li>
	              <a href="/movies">
						<span class="icon-Reel"></span>
	                Movies
	              </a>
	            </li>
	            <li>
	              <a href="/playlists">
						<span class="icon-Movie"></span>
	                Playlists
	              </a>
	            </li>
	            <li>
	              <a href="/newarrival">
						<span class="icon-Movie-Ticket"></span>
	                New Arrivals
	              </a>
	            </li>
	            <li>
	              <a href="/comingsoon">
						<span class="icon-Clock"></span>
	                Coming Soon
	              </a>
	            </li>
	            <li>
	              <a href="#!">
						<i class="far fa-bell"></i>
						<span class="user-notification-count">3</span>
	                Notifications
	              </a>
	            </li>
				</ul>
				<div class="clearfix"></div>

				<div id="search-mobile-nav-pro">
					<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				</div>

			 </nav>

             </header>



             <nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
             <ul id="vertical-sidebar-nav" class="sf-menu">
              <li class="normal-item-pro">
                <a href="/dashboard">
						<span class="icon-Old-TV"></span>
                  TV Series
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="/movies">
						<span class="icon-Reel"></span>
                  Movies
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="/playlists">
						<span class="icon-Movie"></span>
                  Playlists
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="/newarrival">
						<span class="icon-Movie-Ticket"></span>
                  New Arrivals
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="/comingsoon">
						<span class="icon-Clock"></span>
                  Coming Soon
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="/comingsoon">
						<span class="icon-camera"></span>
                  Live
                </a>
              </li>

             </ul>
				<div class="clearfix"></div>
		     </nav>


		      <div id="content-sidebar-pro">

			 <div id="content-sidebar-image">
				<img src="{{ $movie->poster }}" alt="Movie Poster">
			 </div>

			 <div class="content-sidebar-section">
             <h2 class="content-sidebar-sub-header">{{$movie->title}}</h2>
				<ul class="progression-studios-slider-rating">
					<li style="color:#FF0000";>Votes</li><li style="color:#109556";>{{$movie->votes}}</li><li style="color:#ff00ff">HD</li>
				</ul>
			 </div><!-- close .content-sidebar-section -->

             <div class="content-sidebar-section">
                <h4 class="content-sidebar-sub-header">Gener</h4>
                @if($movie->gener_id === 1)
                    <div class="content-sidebar-short-description">Drama</div>
                @endif
                @if($movie->gener_id === 2)
                    <div class="content-sidebar-short-description">Comedy</div>
                @endif
                @if($movie->gener_id === 3)
                    <div class="content-sidebar-short-description">Action</div>
                @endif
                @if($movie->gener_id === 4)
                    <div class="content-sidebar-short-description">Romance</div>
                @endif
                @if($movie->gener_id === 5)
                    <div class="content-sidebar-short-description">Horror</div>
                @endif
                @if($movie->gener_id === 6)
                    <div class="content-sidebar-short-description">Fantacy</div>
                @endif
                @if($movie->gener_id === 7)
                    <div class="content-sidebar-short-description">Sci-Fi</div>
                @endif
                @if($movie->gener_id === 8)
                    <div class="content-sidebar-short-description">thriller</div>
                @endif
                @if($movie->gener_id === 9)
                    <div class="content-sidebar-short-description">western</div>
                @endif
                @if($movie->gener_id === 10)
                    <div class="content-sidebar-short-description">Adventure</div>
                @endif
                @if($movie->gener_id === 11)
                    <div class="content-sidebar-short-description">Animation</div>
                @endif
                @if($movie->gener_id === 12)
                    <div class="content-sidebar-short-description">Documentory</div>
                @endif
			 </div><!-- close .content-sidebar-section -->

			 <div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Release Date</h4>
				<div class="content-sidebar-short-description">{{$movie->release_date}}</div>
			 </div><!-- close .content-sidebar-section -->

			 <div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Length</h4>
				<div class="content-sidebar-short-description">{{$movie->run_time}} min</div>
			 </div><!-- close .content-sidebar-section -->

			 <div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Studio</h4>
				<div class="content-sidebar-short-description">AfroFlix</div>
			 </div><!-- close .content-sidebar-section -->




		     </div><!-- close #content-sidebar-pro -->


		     <main id="col-main-with-sidebar">

             <div id="movie-detail-header-pro" style="background-image:url('{{$movie->poster}}')">

				<div class="progression-studios-slider-more-options">
					<i class="fas fa-ellipsis-h"></i>
					<ul>
						<li><a href="#!">Add to Favorites</a></li>
						<li><a href="#!">Add to Playlist</a></li>
						<li><a href="#!">Share...</a></li>

					</ul>
				</div>
				{{-- <a class="movie-detail-header-play-btn afterglow" href="{{URL::to('player/' .$movie->id)}}"><i class="fas fa-play"></i></a> --}}
                <a class="movie-detail-header-play-btn afterglow" href="{{URL::to('playerv/' .$movie->id)}}"><i class="fas fa-play"></i></a>
				<div id="movie-detail-header-media">
					<div class="dashboard-container">
						<h5>Media</h5>
						<div class="row">
							<div class="col-6 col-md-4 col-lg-4">
								<a class="movie-detail-media-link afterglow" target="_blank" href="{{$movie->trailer}}">
									<div class="movie-detail-media-image">
                                        <img src="{{ $movie->thumbnail }}">
										<span><i class="fas fa-play"></i></span>
										<h6>Trailer</h6>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-4 col-lg-4">
								<a class="movie-detail-media-link afterglow" target="_blank" href="{{$movie->interview}}">
									<div class="movie-detail-media-image">
										<img src="{{$movie->thumbnail}}">
										<span><i class="fas fa-play"></i></span>
										<h6>Interview</h6>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-4 col-lg-4">
                            <a class="movie-detail-media-link" href="#">
									<div class="movie-detail-media-image">
                                        <img src="{{ $movie->thumbnail }}">
                                        {{-- <video width="500" height="300" controls preload>
                                            <source src"{{$movie->movie_stills}}" type="video/mp4">
                                        </video> --}}
										<span><i class="fas fa-play"></i></span>
										<h6>Movie Stills</h6>
									</div>
								</a>
							</div>
						</div><!-- close .row -->
					</div><!-- close .dashboard-container -->
				</div><!-- close #movie-detail-header-media -->

				<div id="movie-detail-gradient-pro"></div>
             </div><!-- close #movie-detail-header-pro -->

             <br>
             <div class="dashboard-container">
				<div class="movie-details-section">
					<h2 style="color:#FF0000";>{{$movie->title}}</h2>
                    <p></p>
				</div>

			 <div class="dashboard-container">
				<div class="movie-details-section">
					<h2>Storyline</h2>
                    <p>{{$movie->story_line}}</p>
				</div><!-- close .movie-details-section -->

                <div class="dashboard-container">

                    <h4 class="heading-extra-margin-bottom">Similar Movies</h4>

                    <div class="row">
                        @foreach ($simillar as $i)
                        @if($i->id==$movie->id)
                        @else
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="item-listing-container-skrn">
                                <a href="{{URL::to('play/' .$i->id)}}"><img src="{{ $i->poster }}"></a>
                                <div class="item-listing-text-skrn">
                                <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">{{$i->title}}</a></h6></div><!-- close .item-listing-text-skrn-vertical-align -->
                                </div><!-- close .item-listing-text-skrn -->
                            </div><!-- close .item-listing-container-skrn -->
                        </div><!-- close .col -->
                        @endif
                        @endforeach
                    </div><!-- close .row -->

                </div><!-- close .dashboard-container -->

			</div><!-- close .dashboard-container -->
		</main>
		</div><!-- close #sidebar-bg-->
        @include('front.dash.dashscript')
	</body>
</html>
