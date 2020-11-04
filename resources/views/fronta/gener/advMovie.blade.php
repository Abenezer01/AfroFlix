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
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Adventure</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="product__page__filter">
                                        <p>Gener:</p>
                                        <select>
                                            <option value="">Action</option>
                                            <option value="">Drama</option>
                                            <option value="">Romance</option>
                                            <option value="">Horror</option>
                                            <option value="">Fantacy</option>
                                            <option value="">Documentries</option>
                                            <option value="">አማረኛ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($data as $i)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$i->poster}}" >
                                        <div class="ep">{{$i->votes}} / 100</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                            <li>{{$i->year}}</li>
                                        </ul>
                                        <h5><a href="{{URL::to('play/' .$i->id)}}">{{$i->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        {{$data->links()}}
                    </div>
                </div>

    @include('fronta.modules.topshow')
    @include('fronta.modules.topmovies')
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
