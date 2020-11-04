<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('fronta.layout.css')

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        @include('fronta.layout.menu')

    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    @include('fronta.modules.breadcrumb')
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="{{ asset('storage/'.Auth::user()->avatar) }}">
                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                            <h3>{{Auth::user()->name}}</h3>
                            <span>{{Auth::user()->email}}</span>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <div class="anime__details__btn">
                                        <a href="{{ route('logout') }}" class="watch-btn"><span>LogOut</span> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                {{-- <span>አናመሰግናለን</span> --}}
                            </div>
                            </div>
                            <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                                their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                                never to be seen again. But her mother’s last words send Hina on a quest to find a
                            legendary hero from the Waste War - the fabled Ace!</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            {{-- @if({{Auth::user()->role_id}}==1) --}}
                                            <li><span>User Type:</span> Administrator</li>
                                            {{-- @else --}}
                                        <li><span>User Type:</span>{{Auth::user()->role_id}}</li>
                                            <li><span>Wallet:</span> 250 bir</li>
                                            <li><span>Date Registerd:</span> Oct 02, 2019 </li>
                                            <li><span>Status:</span> Aproved</li>
                                            <li><span>Genre:</span> Action, Adventure, Fantasy, Magic</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span> 7.31 / 1,515</li>
                                            <li><span>watched:</span> 250 min</li>
                                            <li><span>Duration:</span> 24 min/ep</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> 131,541</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                 <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Update Profile</a>
                                 <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> action</a>
                                 <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Buy Credit</a>
                                 <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Dellet User</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
  @include('fronta.layout.footer')
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  @include('fronta.modules.search')

<!-- Search model end -->

<!-- Js Plugins -->
  @include('fronta.layout.script')

</body>

</html>
