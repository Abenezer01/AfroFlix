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

            </ul>
				<div class="clearfix"></div>
		</nav>

		<main id="col-main">

			<div class="dashboard-container">

				<ul class="dashboard-sub-menu">
					<li class="current"><a href="dashboard-account.html">Account Settings</a></li>
					<li><a href="/payment">Payment Info</a></li>
				</ul><!-- close .dashboard-sub-menu -->

				<div class="container-fluid">
					<div class="row">

						<div class="col-12  col-lg-3">
							<div id="account-edit-photo">
								<div><img src="{{ asset('/storage/'.Auth::user()->avatar)}}" alt="Account Image"></div>
								<p><a href="#!" class="btn btn-green-pro">Change Profile Picture</a></p>
							</div>
						</div><!-- close .col -->
						<div class="col">

							<form class="account-settings-form">

							<h5>General Information</h5>
							<p class="small-paragraph-spacing">By letting us know your name, we can make our support experience much more personal.</p>


                            <form method="post" action="{!! route('userupdate') !!}">
                                @csrf

                                <div class="row">
							    	<div class="col-sm">
	   	  					    	    <div class="form-group">
	   						    		    <label for="first-name" class="col-form-label">First Name:</label>
	   	  					    		    <input name="first-name" type="text" class="form-control" id="first-name" value="{{Auth::user()->name}}">
	   	  					    	    </div>
							    	</div><!-- close .col -->
							    	{{-- <div class="col-sm">
    	  	  				    		 <div class="form-group">
    	  					    			 <label for="last-name" class="col-form-label">Last Name:</label>
    	  	  				    			 <input type="text" class="form-control" id="last-name" value="{{Auth::user()->last_name}}">
    	  	  				    		 </div>
							    	</div><!-- close .col -->

							    </div><!-- close .row -->
							    <hr>

							    <h5>Account Information</h5>
							    <p class="small-paragraph-spacing">You can change the email address you use here.</p>

							    <div class="row">
								    <div class="col-sm">
	   	  						        <div class="form-group">
	   								        <label for="e-mail" class="col-form-label">E-mail</label>
                                            <input type="text" class="form-control" id="email" value="{{Auth::user()->email}}">
	   	  						        </div>
								    </div><!-- close .col -->
							    </div><!-- close .row --> --}}


{{--
							    <hr>
							    <h5>Change Password</h5>
                                <p class="small-paragraph-spacing">You can change the password you use for your account here.</p>

							    <div class="row">
								    <div class="col-sm">
	   	  						        <div class="form-group">
	   								        <label for="password" class="col-form-label">Current Password:</label>
	   	  							        <input type="password" class="form-control" id="password" value="{{Auth::user()->password}}">
	   	  						        </div>
                                    </div><!-- close .col -->

								    <div class="col-sm">
	   	  						        <div class="form-group">
	   								         <label for="new-password" class="col-form-label">New Password:</label>
	   	  							         <input type="password" class="form-control" id="new-password" placeholder="Minimum of 8 characters">
	   	  						        </div>
								    </div><!-- close .col -->

                                    <div class="col-sm">
	   	  						        <div class="form-group">
                                           <div>
                                               <label for="confirm-password" class="col-form-label">&nbsp; &nbsp;</label>
                                           </div>
	   	  							            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm New Password">
	   	  						        </div>
								    </div><!-- close .col -->
							    </div><!-- close .row --> --}}

							    <hr>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
							                    {{-- <p><a href="userupdate/{{ Auth::user()->id }}" class="btn btn-green-pro">Save Changes</a></p> --}}
                            </form>
						</div><!-- close .col -->

					</div><!-- close .row -->
				</div><!-- close .container-fluid -->

			</div><!-- close .dashboard-container -->
		</main>


		</div><!-- close #sidebar-bg-->

		@include('front.dash.dashscript')
	</body>
</html>
