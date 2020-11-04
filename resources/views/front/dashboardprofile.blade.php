<!doctype html>
<html lang="en">
	<head>
		@include('front.dash.headcss')
	</head>
	<body>
		<div id="sidebar-bg">

        @include('front.dash.dashmain')

			<div class="clearfix"></div>

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
	              <a href="d/coomingsoon">
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

            </ul>
				<div class="clearfix"></div>
		</nav>


		<div id="content-sidebar-pro">

			<div id="content-sidebar-info">
				<img src="{{ asset('/storage/'.Auth::user()->avatar)}}" alt="{{ Auth::user()->name}}">
				<div id="profile-sidebar-name">
                <h5>{{ Auth::user()->name}}</h5>
					<h6>{{ Auth::user()->location}}</h6>
				</div>
				<div id="profile-sidebar-gradient"></div>
				<a href="dashboard-account.html" class="edit-profile-sidebar"><i class="fas fa-pencil-alt"></i></a>
			</div>

			<div class="content-sidebar-section">
				<h3 class="content-sidebar-sub-header">Watched</h3>
				<ul id="profile-watched-stats">
					<li><span>11</span> Movies</li>
					<li><span>2</span> Series</li>
					<li><span>1</span> Docs</li>
				</ul>
			</div><!-- close .content-sidebar-section -->



		</div><!-- close #content-sidebar-pro -->

		<main id="col-main-with-sidebar">

			<div class="dashboard-container">

				<ul class="dashboard-sub-menu">
					<li class="current"><a href="/profile">Recommended</a></li>
					<li><a href="/favorites">Watched</a></li>
					<li><a href="#!">aaaaaaa</a></li>
					<li><a href="#!">aaaaaaa</a></li>
					<li><a href="#!">aaaaaaa</a></li>
				</ul><!-- close .dashboard-sub-menu -->


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


				<ul class="page-numbers">
					<li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
					<li><span class="page-numbers current">1</span></li>
					<li><a class="page-numbers" href="#!">2</a></li>
					<li><a class="page-numbers" href="#!">3</a></li>
					<li><a class="page-numbers" href="#!">4</a></li>
					<li><a class="next page-numbers" href="#!"><i class="fas fa-chevron-right"></i></a></li>
				</ul>



			</div><!-- close .dashboard-container -->
		</main>


		</div><!-- close #sidebar-bg-->

		<!-- Required Framework JavaScript -->
		@include('front.dash.dashscript')

	</body>
</html>
