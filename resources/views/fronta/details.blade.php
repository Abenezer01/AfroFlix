<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AfroFlix</title>

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

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
             @include('fronta.modules.moviedetails')
             @include('fronta.modules.simillar')
        </div>
    </section>
        <!-- Anime Section End -->

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
