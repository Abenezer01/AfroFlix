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

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to AfroFlix ENT.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                @auth
                {{-- <div class="login__register">
                    <h1>See what's next</h1>
                    <a href="{{route('movies')}}" class="btn btn-xl">WellCome {{ Auth::user()->name}} <i class="fas fa-chevron-right btn-icon"></i></a>
                </div> --}}
                <div class="login__social">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="login__social__links">
                            <span>WellCome {{Auth::user()->name}}</span>
                                <ul>
                                <li><a href="{{route('movies')}}" class="facebook" > Watch Movies</a></li>
                                <li><a href="{{route('movies')}}" class="google"> Watch TvShows</a></li>
                                <li><a href="{{route('profile')}}" class="twitter"> your Profile</a></li>
                                <li><a href="{{route('movies')}}" class="facebook" > Watch Live TV</a></li>
                                <li><a href="{{route('movies')}}" class="twitter"> Your Subscription</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @else

                    <div class="login__form">
                        <h3>Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input__item">
                                <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="icon_mail"></span>
                            </div>

                            <div class="input__item">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="icon_lock"></span>
                            </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        </form>
                        <a href="#" class="forget_pass">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                    <a href="{{ route('up')}}" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
        </div>
    </section>
    <!-- Login Section End -->

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
