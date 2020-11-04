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
	            <li class="current-menu-item">
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
              <li class="normal-item-pro current-menu-item">
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



			<div class="dashboard-container">

			    	<ul class="dashboard-sub-menu">
			    		<li><a href="{{URL::to('/playlists')}}">Most Popular</a></li>
			    		<li><a href="{{URL::to('/playlistsrec')}}">Recommended</a></li>
			    		<li><a href="{{URL::to('/playlistsreca')}}">Recently Added</a></li>
			    		<li class="current"><a href="{{URL::to('/playlists10m')}}">Top 100 Movies</a></li>
                        <li><a href="{{URL::to('/playlists10s')}}">Top 100 Shows</a></li>
                    </ul><!-- close .dashboard-sub-menu -->
                <div class="row">
                    @foreach ($data as $i)
			    		<div class="col-12 col-md-6 col-lg-4 col-xl-3">
			    			<div class="item-playlist-container-skrn">
                            <a href="{{URL::to('play/' .$i->id)}}"><img src="{{$i->poster }}" alt="{{$i->title}}"></a>
			    				{{-- <div class="item-playlist-text-skrn">
			    					<img src="images/demo/user-6.jpg" alt="User Profile">
			    					<h5><a href="#!">By: Yetesfa</a></h5>
			    					<h6>8 Movies</h6>
			    				</div><!-- close .item-listing-text-skrn --> --}}
			    			</div><!-- close .item-playlist-container-skrn -->
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
