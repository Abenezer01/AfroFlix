<header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="/dashboard"><img src="http://yegnashare.com/han/logo.png" alt="Logo"></a></div>

            <div id="video-search-header">
						<form action="{{ route('get:search:result') }}">
                            <div class="col-sm-12" style="margin-top:20px;">
                                <div class="row" style="float:right;">
                                    <div class="col-sm-8">
                                        <div class="search-wrapper">
                                            <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-4">
                                        <button type="submit" class="btn btn-sm">Search</button>
                                    </div> --}}
                                </div>
                            </div>
                        </form>
			</div><!-- close .video-search-header -->

			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>


			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
                {{-- <img src="{{ asset('storage/'.Auth::user()->avatar) }}" alt="{{ Auth::user()->name}}"> --}}
					<div id="header-username"></div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
						<li><a href="/profile"><span class="icon-User"></span>My Profile</a></li>
						<li><a href="/favorites"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
						<li><a href="/account"><span class="icon-Gears"></span>Account Details</a></li>
						<li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li>
						<li><a href="{{ route('logout') }}"><span class="icon-Power-3"></span>Log Out</a></li>
					</ul>
				</div><!-- close #header-user-profile-menu -->
			</div><!-- close #header-user-profile -->

			<div id="header-user-notification">
				<div id="header-user-notification-click" class="noselect">
					<i class="far fa-bell"></i>
					<span class="user-notification-count">3</span>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-notification-menu">
					<h3>Notifications</h3>
					<div id="header-notification-menu-padding">
							<ul id="header-user-notification-list">
								<li><a href="#!"><img src="images/demo/user-profile-2.jpg" alt="Profile">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. <div class="header-user-notify-time">21 hours ago</div></a></li>
								<li><a href="#!"><img src="images/demo/user-profile-3.jpg" alt="Profile">Donec vitae lacus id arcu molestie mollis. <div class="header-user-notify-time">3 days ago</div></a></li>
								<li><a href="#!"><img src="images/demo/user-profile-4.jpg" alt="Profile">Aenean vitae lectus non purus facilisis imperdiet. <div class="header-user-notify-time">5 days ago</div></a></li>
							</ul>
							<div class="clearfix"></div>
						</div><!-- close #header-user-profile-menu -->
					</div>
			</div><!-- close #header-user-notification -->
			<div class="clearfix"></div>


