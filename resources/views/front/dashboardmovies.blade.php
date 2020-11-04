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
	            <li class="current-menu-item">
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
              <li class="normal-item-pro current-menu-item">
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

            </ul>
				<div class="clearfix"></div>
		</nav>

		<main id="col-main">
{{--
			<div class="flexslider progression-studios-dashboard-slider progression-studios-full-height-slider">
		      <ul class="slides">
					<li class="progression_studios_animate_left">

						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url(http://yegnashare.com/han/img/lion.jpg);">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">

									<div class="container">

										<a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i></a>

							         <video id="VideoLightbox-1" data-youtube-id="3X24urlexuo" width="960" height="540"></video>

								      <div
								        class="circle-rating-pro"
								        data-value="0.86"
								        data-animation-start-value="0.86"
								        data-size="70"
								        data-thickness="6"
								        data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
								        data-empty-fill="#def6de"
								        data-reverse="true"
								      ><span style="color:#42b740;">8.6</span></div>

										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h6>Movies</h6>
												<ul class="progression-studios-slider-rating">
													<li>Haile Gerima</li><li>HD</li>
												</ul>
												<h2><a href="dashboard-movie-profile.html">Teza</a></h2>
												<ul class="progression-studios-slider-meta">
													<li>15 August, 2016</li>
													<li>163 min.</li>
													<li>Movie</li>
												</ul>
												<p class="text-primary">Teza is a 2008 Ethiopian drama film about the Derg period in Ethiopia.
                                                    Teza won the top award at the 2009 Panafrican Film and Television Festival of Ouagadougou. The film was directed and written by Haile Gerima.</p>

												<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i> Watch Trailer</a>


												<div class="progression-studios-slider-more-options">
													<i class="fas fa-ellipsis-h"></i>
													<ul>
														<li><a href="#!">Add to Favorites</a></li>
														<li><a href="#!">Add to Playlist</a></li>
														<li><a href="#!">Share...</a></li>

													</ul>
												</div>
												<div class="clearfix"></div>

											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->

									</div><!-- close .container -->

								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->

							<div class="progression-studios-slider-mobile-background-cover"></div>
						</div><!-- close .progression-studios-slider-image-background -->
                    </li>

					<li class="progression_studios_animate_in">
						<div class="progression-studios-slider-dashboard-image-background" style="background-image:url(http://yegnashare.com/han/img/africa.jpg);">
							<div class="progression-studios-slider-display-table">
								<div class="progression-studios-slider-vertical-align">

									<div class="container">

										<a class="progression-studios-slider-play-btn afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i></a>

							         <video id="VideoLightbox-2" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg?v1" width="960" height="540">
							             <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
							             <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
							         </video>

								      <div
								        class="circle-rating-pro"
								        data-value="0.82"
								        data-animation-start-value="0.82"
								        data-size="70"
								        data-thickness="6"
								        data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
								        data-empty-fill="#203521"
								        data-reverse="true"
								      ><span style="color:#42b740;">8.2</span></div>

										<div class="progression-studios-slider-dashboard-caption-width">
											<div class="progression-studios-slider-caption-align">
												<h6 class="light-fonts-pro">Movies</h6>
												<ul class="progression-studios-slider-rating">
													<li>PG-13</li><li>HD</li>
												</ul>
												<h2 class="light-fonts-pro"><a href="dashboard-movie-profile.html">Made In America</a></h2>
												<ul class="progression-studios-slider-meta">
													<li>15 August, 2016 (UK)</li>
													<li>163 min.</li>
													<li>Documentary</li>
												</ul>
												<p class="progression-studios-slider-description light-fonts-pro">A sex columnist, Carrie Bradshaw, and her three friends Samantha, Charlotte
and Miranda explore  Manhattan's dating scene, chronicling the mating habits of
single New Yorkers.</p>

												<a class="btn btn-green-pro btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play"></i> Watch Trailer</a>
												<div class="progression-studios-slider-more-options">
													<i class="fas fa-ellipsis-h"></i>
													<ul>
														<li><a href="#!">Add to Favorites</a></li>
														<li><a href="#!">Add to Watchlist</a></li>
														<li><a href="#!">Add to Playlist</a></li>
														<li><a href="#!">Share...</a></li>
														<li><a href="#!">Write A Review</a></li>
													</ul>
												</div>
												<div class="clearfix"></div>

												<h5 class="light-fonts-pro">Starring</h5>
												<ul class="progression-studios-staring-slider">
													<li><a href="#!"><img src="images/demo/user-1.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-2.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-3.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-4.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-5.jpg" alt="Starring"></a></li>
													<li><a href="#!"><img src="images/demo/user-6.jpg" alt="Starring"></a></li>
												</ul>

											</div><!-- close .progression-studios-slider-caption-align -->
										</div><!-- close .progression-studios-slider-caption-width -->

									</div><!-- close .container -->

								</div><!-- close .progression-studios-slider-vertical-align -->
							</div><!-- close .progression-studios-slider-display-table -->

							<div class="progression-studios-slider-mobile-background-cover-dark"></div>
						</div><!-- close .progression-studios-slider-image-background -->
					</li>
				</ul>
			</div><!-- close .progression-studios-slider - See /js/script.js file for options --> --}}

			<ul class="dashboard-genres-pro">
				<li>
					<a href = "{{URL::to('dramamov')}}"><img src="images/genres/drama.png" alt="Drama"></a>
					<h6>Drama</h6>
				</li>
				<li>
					<a href="{{URL::to('comedymov')}}"><img src="images/genres/comedy.png" alt="Comedy"></a>
					<h6>Comedy</h6>
				</li>
				<li>
					<a href="{{URL::to('actionmov')}}"><img src="images/genres/action.png" alt="Action"></a>
					<h6>Action</h6>
				</li>
				<li>
					<a href="{{URL::to('romancemov')}}"><img src="images/genres/romance.png" alt="Romance"></a>
					<h6>Romance</h6>
				</li>
				<li>
					<a href="{{URL::to('horrormov')}}"><img src="images/genres/horror.png" alt="Horror"></a>
					<h6>Horror</h6>
				</li>
				<li>
					<a href="{{URL::to('fantasymov')}}"><img src="images/genres/fantasy.png" alt="Fantasy"></a>
					<h6>Fantasy</h6>
				</li>
				<li>
					<a href="{{URL::to('scifimov')}}"><img src="images/genres/sci-fi.png" alt="Sci-Fi"></a>
					<h6>Sci-Fi</h6>
				</li>
				<li>
					<a href="{{URL::to('thrillermov')}}"><img src="images/genres/thriller.png" alt="Thriller"></a>
					<h6>Thriller</h6>
				</li>
				<li>
					<a href="{{URL::to('westernmov')}}"><img src="images/genres/western.png" alt="Western"></a>
					<h6>Western</h6>
				</li>
				<li>
					<a href="{{URL::to('advmov')}}"><img src="images/genres/adventure.png" alt="Adventure"></a>
					<h6>Adventure</h6>
				</li>
				<li>
					<a href="{{URL::to('animmov')}}"><img src="images/genres/animation.png" alt="Animation"></a>
					<h6>Animation</h6>
				</li>
				<li>
					<a href="{{URL::to('docmov')}}"><img src="images/genres/documentary.png" alt="Documentary"></a>
					<h6>Documentary</h6>
				</li>
			</ul>

			<div class="clearfix"></div>

			<div class="dashboard-container">
				<div class="row">
                    <div class="row">
                    @foreach ($data as $i)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
                        <a href="{{URL::to('play/' .$i->id)}}"><img src="{{$i->poster}}"></a>

							<div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align"><h6>{{$i->title}}</a></h6>
                                <div
                                class="circle-rating-pro"
                                data-value={{ $i->votes / 100}}
                                data-animation-start-value="0"
                                data-size="32"
                                data-thickness="4"
                                data-fill="{
                                  &quot;color&quot;: &quot;#42b740&quot;
                                }"
                                data-empty-fill="#def6de"
                                data-reverse="true"
                              ><span style="color:#42b740;">{{$i->votes}}</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
                    @endforeach
                </div><!-- close .row -->
                <div>
                    {{$data->links()}}
                </div>

			</div><!-- close .dashboard-container -->
		</main>


		</div><!-- close #sidebar-bg-->

		@include('front.dash.dashscript')

	</body>
</html>
