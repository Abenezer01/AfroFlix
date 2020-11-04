<!doctype html>
<html lang="en">
	<head>
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
	              <a href="/playlist">
						<span class="icon-Movie"></span>
	                Playlists
	              </a>
	            </li>
	            <li class="current-menu-item">
	              <a href="newarrival">
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
              <li class="normal-item-pro current-menu-item">
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



			<ul class="dashboard-genres-pro">
				<li>
					<img src="images/genres/drama.png" alt="Drama">
					<h6>Drama</h6>
				</li>
				<li>
					<img src="images/genres/comedy.png" alt="Comedy">
					<h6>Comedy</h6>
				</li>
				<li  class="active">
					<img src="images/genres/action.png" alt="Action">
					<h6>Action</h6>
				</li>
				<li>
					<img src="images/genres/romance.png" alt="Romance">
					<h6>Romance</h6>
				</li>
				<li>
					<img src="images/genres/horror.png" alt="Horror">
					<h6>Horror</h6>
				</li>
				<li>
					<img src="images/genres/fantasy.png" alt="Fantasy">
					<h6>Fantasy</h6>
				</li>
				<li>
					<img src="images/genres/sci-fi.png" alt="Sci-Fi">
					<h6>Sci-Fi</h6>
				</li>
				<li>
					<img src="images/genres/thriller.png" alt="Thriller">
					<h6>Thriller</h6>
				</li>
				<li>
					<img src="images/genres/western.png" alt="Western">
					<h6>Western</h6>
				</li>
				<li>
					<img src="images/genres/adventure.png" alt="Adventure">
					<h6>Adventure</h6>
				</li>
				<li>
					<img src="images/genres/animation.png" alt="Animation">
					<h6>Animation</h6>
				</li>
				<li>
					<img src="images/genres/documentary.png" alt="Documentary">
					<h6>Documentary</h6>
				</li>
			</ul>

			<div class="clearfix"></div>

			<div class="dashboard-container">

                <h4 class="heading-extra-margin-bottom">Action</h4>

				<div class="row">
                    @foreach ($data as $i)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
                        <a href="{{URL::to('play/' .$i->id)}}"><img src="{{$i->poster }}"></a>

							<div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align"><h6><a href="{{URL::to('play/' .$i->id)}}">{{$i->title}}</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value={{ $i->votes / 100}}
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
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

			</div><!-- close .dashboard-container -->
		</main>


		</div><!-- close #sidebar-bg-->

		@include('front.dash.dashscript')
	</body>
</html>
