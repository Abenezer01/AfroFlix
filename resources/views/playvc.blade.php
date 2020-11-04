<!DOCTYPE html>
<html>
    <head>
        @include('front.dash.headcss')
        <link rel="stylesheet" href="{{ URL::asset('/css/lpstyle.css') }}">
	</head>
  <body>
    <div id="embedBox" style="max-width:100%;max-height:100%"></div>
    <script>
      (function(v,i,d,e,o){
        v[o] = v[o] || { add: function V(a){(v[o].d=v[o].d||[]).push(a)}};
        if(!v[o].l) { v[o].l=1*new Date(); a=i.createElement(d); m=i.getElementsByTagName(d)[0];
        a.async=1; a.src=e; m.parentNode.insertBefore(a,m); }
    })(window,document,"script","https://cdn-gce.vdocipher.com/playerAssets/1.6.10/vdo.js","vdo");
    vdo.add({
      otp: "20160313versASE313c63a68c96144b8d770464f6bac27531b38825875e952ca",
      //otp:"zJBebe4NV1hi0C8zJ8waLjCi0WHkl9OLpHYhtrYuT14JKccBSoHCfVjZfl8jyokR",
      playbackInfo: btoa(JSON.stringify({
        videoId: '{{$movie->location}}'
      })),
      theme: "3d115cb024bf422586bf4c17dbd831d5",
      container: document.querySelector( "#embedBox" ),
    });
    </script>

    <script>
      function onVdoCipherAPIReady() {
        var v = vdo.getObjects()[0];
        v.addEventListener('load', () => {
          console.log(v.availableCaptions);
          v.setCaptionsLanguage('en');
        });
      }
    // </script>
<br><br>
            <div class="container d-flex align-items-center flex-column" style="background-color:#000012">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">{{$movie->title}}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">{{$movie->story_line}}</p>
            </div>
<br>

        <div class="dashboard-container">

            <h4 class="heading-extra-margin-bottom">AfroFlix Recommendations</h4>

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

    </div>


        <footer class="footer">
			<p>Questions? Call +251933389902</p>
			<div class="footer-cols">
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="#">Ways To Watch</a></li>
					<li><a href="#">Corporate Information</a></li>
					<li><a href="#">AfroFlix Originals</a></li>
				</ul>
				<ul>
					<li><a href="#">Help Center</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Terms Of Use</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<ul>
					<li><a href="#">Account</a></li>
					<li><a href="#">Redeem Gift Cards</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="https://fast.com/" target="_blank">Speed Test</a></li>
				</ul>
				<ul>
					<li><a href="#">Media Center</a></li>
					<li><a href="#">Buy Gift Cards</a></li>
					<li><a href="#">Cookie Preferences</a></li>
					<li><a href="#">Legal Notices</a></li>
				</ul>
			</div>

		</footer>

  </body>
</html>


{{-- <!DOCTYPE html>
<html>
  <body>
    <strong>Total played (seconds)</strong>
    <input id="tp" disabled>
    <strong>Total covered (seconds)</strong>
    <input id="tc" disabled>
    <hr />
    <div id="embedBox" style="height: 360px;width:640px;max-width:100%;"></div>
    <script>
      (function(v,i,d,e,o){
        v[o] = v[o] || { add: function V(a){(v[o].d=v[o].d||[]).push(a)}};
        if(!v[o].l) { v[o].l=1*new Date(); a=i.createElement(d); m=i.getElementsByTagName(d)[0];
        a.async=1; a.src=e; m.parentNode.insertBefore(a,m); }
    })(window,document,"script","https://cdn-gce.vdocipher.com/playerAssets/1.6.10/vdo.js","vdo");
    vdo.add({
      otp: "20160313versASE313d04b76b86981e66cb6651682f1a2f63a40917ea7e194e9",
      playbackInfo: btoa(JSON.stringify({
        videoId: '{{$movie->location}}'
      })),
      theme: "9ae8bbe8dd964ddc9bdb932cca1cb59a",
      container: document.querySelector( "#embedBox" ),
    });
    </script>

    <script>
function onVdoCipherAPIReady() {
  // api is ready to use

  // get reference to player
  var v = vdo.getObjects()[0];

  setInterval(function() {
    document.querySelector('#tp').value = v.totalPlayed;
    document.querySelector('#tc').value = v.totalCovered;
  }, 1000);
}
    </script>
  </body>
</html>
 --}}

{{-- wL1qeV5AVO7wk5yie0X12Y6nArA81QNISO9XYEcB9BDeseStONc3sswhkBT1r8Op --}}
