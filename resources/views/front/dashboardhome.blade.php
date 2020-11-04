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
                    <li class="current-menu-item">
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
                    <a href="/newarrivals">
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
                    <li class="normal-item-pro current-menu-item">
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

                    <main id="col-main">
                        <br>

			<div class="clearfix"></div>

			<div class="dashboard-container">

				<div class="row">

					<div class="row">
                        @foreach ($tvshow as $i)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="item-listing-container-skrn">
                            <a href="{{URL::to('playt/'.$i->id)}}"><img src="{{ $i->poster }}"></a>

                                <div class="item-listing-text-skrn">
                                <div class="item-listing-text-skrn-vertical-align"><h6><a href="{{URL::to('playt/'.$i->id)}}">{{$i->title}}</a></h6>
                                      <div
                                        class="circle-rating-pro"
                                        data-value={{ $i->vote / 100}}
                                        data-animation-start-value="0.86"
                                        data-size="32"
                                        data-thickness="3"
                                        data-fill="{
                                          &quot;color&quot;: &quot;#42b740&quot;
                                        }"
                                        data-empty-fill="#def6de"
                                        data-reverse="true"
                                      ><span style="color:#42b740;">{{$i->vote}}</span></div>
                                    </div><!-- close .item-listing-text-skrn-vertical-align -->
                                </div><!-- close .item-listing-text-skrn -->
                            </div><!-- close .item-listing-container-skrn -->
                        </div><!-- close .col -->
                        @endforeach
                    </div>


			</div><!-- close .dashboard-container -->
		</main>


		</div><!-- close #sidebar-bg-->

		@include('front.dash.dashscript')

	</body>
</html>
