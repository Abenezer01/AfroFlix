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
					<li><a href="dashboard-account.html">Account Settings</a></li>
					<li class="current"><a href="dashboard-account-payment.html">Payment Info</a></li>
				</ul><!-- close .dashboard-sub-menu -->

				<h5>Current Plan</h5>

				<div class="current-plan-account">

					<div class="row">
						<div class="col-md">
							<h4>STARTER</h4>
							<h2><sup>$</sup>10<span> / month</span></h2>
						</div><!-- close .col-sm -->
						<div class="col-md">
							<h5>Plan Features:</h5>
							<ul>
								<li>HD Available</li>
								<li>Watch on any Device</li>
								<li>70 movies and shows</li>
							</ul>
						</div><!-- close .col-sm -->
						<div class="col-md">
							<p class="small-paragraph-spacing"><a href="#!" class="btn btn-green-pro">Upgrade Plan</a></p>
							<p><a href="#!" class="btn">Billing Details</a></p>
						</div><!-- close .col-sm -->
						<div class="col-md">

						</div><!-- close .col-sm -->
					</div><!-- close .row -->

					<div class="current-plan-billing">Your next annual renewal date will be February 26, 2018</div>
					<div class="clearfix"></div>
				</div><!-- close .current-plan-account -->

				<hr>
				<h5>Payment Method</h5>
				<div class="row payment-method-container">
					<div class="col-md">
						<div class="right-border-payment">
						<p class="small-paragraph-spacing"><img src="images/demo/credit-card.jpg" alt="Credit Card"></p>
						<p class="small-paragraph-spacing"><a href="#!" class="btn">Edit this card</a></p>
						<p><a href="#!" class="btn"><i class="fas fa-plus"></i> Add new payment method</a></p>
						</div>
					</div><!-- close .col -->
					<div class="col-md">
						<h6>Refer a Friend and SAVE</h6>
						<p>Receive <strong>1 MONTH FREE</strong> for each of your friends that purchase an account.</p>
						<p><a href="#!" class="btn btn-green-pro">Refer a Friend</a></p>
					</div><!-- close .col -->
				</div><!-- close .row -->

				<hr>

				<p><a href="#!" class="btn">Cancel My Membership</a></p>
				<br>

			</div><!-- close .dashboard-container -->
		</main>


		</div><!-- close #sidebar-bg-->

		@include('front.dash.dashscript')

	</body>
</html>
