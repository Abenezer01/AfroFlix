<div class="container">
    <div class="row">
         <div class="col-lg-2">
            <div class="header__logo">
                <a href="/afro">
                    {{-- <img src="img/logo.png" alt=""> --}}
                </a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="header__nav">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="http://localhost:8000/afro">Home</a></li>
                        <li><a href="./categories.html">Gener <span class="arrow_carrot-down"></span></a>
                            <ul class="dropdown">
                                <li><a href="{{__('action')}}">Action</a></li>
                                <li><a href="{{__('drama')}}">Drama</a></li>
                                <li><a href="{{__('romance')}}">Romance</a></li>
                                <li><a href="{{__('horror')}}">Horror</a></li>
                                <li><a href="{{__('doc')}}">Documentries</a></li>
                                <li><a href="{{__('fantasy')}}">Fantasy</a></li>
                                <li><a href="{{__('scifi')}}">Scifi</a></li>
                                <li><a href="{{__('thriller')}}">thriller</a></li>
                                <li><a href="{{__('adv')}}">Adventure</a></li>
                                <li><a href="{{__('anim')}}">Animation</a></li>
                                <li><a href="{{__('western')}}">Amharic</a></li>
                            </ul>
                        </li>
                        <li><a href="http://localhost:8000/movies">Movie</a></li>
                        <li><a href="#">Tv Show</a></li>
                        <li><a href="#">Live</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="header__right">
                <a href="#" class="search-switch"><span class="icon_search"></span></a>
                <a href="http://localhost:8000/profile"><span class="icon_profile"></span></a>
            </div>
        </div>
    </div>
    <div id="mobile-menu-wrap"></div>
</div>
