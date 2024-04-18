<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.templatesjungle.com/micas/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 09:47:56 GMT -->
<head>
    <title>Micas Bookstore Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol xmlns="http://www.w3.org/2000/svg" id="angle-right" viewBox="0 0 32 32">
        <path fill="currentColor" d="M12.969 4.281L11.53 5.72L21.812 16l-10.28 10.281l1.437 1.438l11-11l.687-.719l-.687-.719z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="angle-left" viewBox="0 0 32 32">
        <path fill="currentColor" d="m19.031 4.281l-11 11l-.687.719l.687.719l11 11l1.438-1.438L10.187 16L20.47 5.719z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="chevron-down" viewBox="0 0 24 24">
        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 32 32">
        <path fill="currentColor" d="M18.719 6.781L17.28 8.22L24.063 15H4v2h20.063l-6.782 6.781l1.438 1.438l8.5-8.5l.687-.719l-.687-.719z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 32 32">
        <path fill="currentColor" d="m13.281 6.781l-8.5 8.5l-.687.719l.687.719l8.5 8.5l1.438-1.438L7.938 17H28v-2H7.937l6.782-6.781z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
        <path fill="currentColor" d="M8 5.14v14l11-7l-11-7Z"/>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
        <path fill="currentColor" d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
        <path fill="currentColor" d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
        <path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
        <path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart-outline" viewBox="0 0 16 16">
        <path fill="currentColor" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="quality" viewBox="0 0 16 16">
        <path fill="currentColor" d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
        <path fill="currentColor" d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="price-tag" viewBox="0 0 16 16">
        <path fill="currentColor" d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
        <path fill="currentColor" d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shield-plus" viewBox="0 0 16 16">
        <path fill="currentColor" d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
        <path fill="currentColor" d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z" />
      </symbol>
    </svg>

    <header id="header" class="site-header bg-white">
      <nav id="header-nav" class="navbar navbar-expand-lg px-3">
        <div class="container">
          <a class="navbar-brand d-lg-none" href="{{route('home')}}">
            <img src="images/main-logo.png" class="logo">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="{{route('home')}}">
                <img src="images/main-logo.png" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav w-100 d-flex justify-content-between align-items-center">
                
                <a class="navbar-brand d-none d-lg-block me-0" href="{{route('home')}}">
                  <img src="images/main-logo.png" class="logo">
                </a>

                <ul class="list-unstyled d-lg-flex justify-content-between align-items-center">
                  <li class="nav-item search-item">
                    <div id="search-bar" class="border-right d-none d-lg-block">
                      <form action="#" autocomplete="on">
                        <input id="search" class="text-dark" name="search" type="text" placeholder="Search Here...">
                        <a type="submit" class="nav-link text-uppercase me-0" href="#">Search</a>
                      </form>
                    </div>
                  </li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <section id="billboard" class="bg-gray padding-large">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container">
              <div class="row">
                <div class="offset-md-1 col-md-5">
                  <img src="images/book1.png" alt="product-img" class="img-fluid mb-3">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div class="banner-content">
                    <h2>Once upon a time</h2>
                    <p class="fs-3">This book is specially designed by concept of traditional designs.</p>
                    <a href="single-product.html" class="btn">Shop now →</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row">
                <div class="offset-md-1 col-md-5">
                  <img src="images/book2.png" alt="product-img" class="img-fluid mb-3">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div class="banner-content">
                    <h2>Felt from outside</h2>
                    <p class="fs-3">This book is specially designed by concept of traditional designs.</p>
                    <a href="single-product.html" class="btn">Shop now →</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row">
                <div class="offset-md-1 col-md-5">
                  <img src="images/book3.png" alt="product-img" class="img-fluid mb-3">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div class="banner-content">
                    <h2>Musical by Karim</h2>
                    <p class="fs-3">This book is specially designed by concept of traditional designs.</p>
                    <a href="single-product.html" class="btn">Shop now →</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-slider-pagination text-center mt-3"></div>
    </section>
    <section id="products" class="product-store position-relative padding-xlarge pb-0">
      <div class="container display-header d-flex flex-wrap justify-content-between pb-4">
        <h3 class="mt-3">Best selling Items</h3>
        <div class="btn-right d-flex flex-wrap align-items-center">
          <a href="shop.html" class="btn me-5">View all items →</a>
          <div class="swiper-buttons">
            <button class="swiper-prev product-carousel-prev me-2">
              <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
            </button>
            <button class="swiper-next product-carousel-next">
              <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
            </button>
          </div>
        </div>
      </div>
      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item1.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="{{route('details')}}">Whispersong</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item2.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="{{route('details')}}">Starlight Secrets</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="{{route('details')}}">Shadow Dance</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item5.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="{{route('details')}}">Enchanted Sands</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item2.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="{{route('details')}}">Misty Meadows</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="{{route('details')}}">Twilight Tales</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials" class="position-relative padding-xlarge">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8">
            <h3 class="text-center mb-5">What our customers says</h3>
            <div class="review-content position-relative">
              <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide text-center d-flex justify-content-center">
                    <div class="review-item">
                      <blockquote class="fs-1 fw-light">“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</blockquote>
                      <div class="author-detail">
                        <div class="name fw-bold text-uppercase pt-2">Anna garcia</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide text-center d-flex justify-content-center">
                    <div class="review-item">
                      <blockquote class="fs-1 fw-light">“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</blockquote>
                      <div class="author-detail">
                        <div class="name fw-bold text-uppercase pt-2">Anna garcia</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide text-center d-flex justify-content-center">
                    <div class="review-item">
                      <blockquote class="fs-1 fw-light">“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</blockquote>
                      <div class="author-detail">
                        <div class="name fw-bold text-uppercase pt-2">Anna garcia</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-buttons text-center mt-5">
              <button class="swiper-prev testimonial-arrow-prev me-2">
                <svg width="41" height="41"><use xlink:href="#arrow-left"></use></svg>
              </button>
              <span>|</span>
              <button class="swiper-next testimonial-arrow-next ms-2">
                <svg width="41" height="41"><use xlink:href="#arrow-right"></use></svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="products" class="product-store padding-xlarge pt-0 position-relative">
      <div class="container display-header d-flex flex-wrap justify-content-between pb-4">
        <h3 class="mt-3">Recommended</h3>
        <div class="btn-right d-flex flex-wrap align-items-center">
          <a href="shop.html" class="btn me-5">View all items →</a>
          <div class="swiper-buttons">
            <button class="swiper-prev product-carousel-prev2 me-2">
              <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
            </button>
            <button class="swiper-next product-carousel-next2">
              <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
            </button>
          </div>
        </div>
      </div>
      <div class="swiper product-swiper2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item6.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Aetherial Alchemy</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item7.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">The Lost Labyrinth</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item8.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Crystal Caverns</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item9.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Scarlet Secrets</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item10.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Starry Horizons</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item2.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Dance of Fireflies</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item4.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Siren's Song</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-card">
              <div class="image-holder">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid">
              </div>
              <div class="card-detail text-center pt-3 pb-2">
                <h5 class="card-title fs-4 text-uppercase m-0">
                  <a href="single-product.html">Misty Mirage</a>
                </h5>
                <span class="item-price text-primary fs-4">$870</span>
                <div class="cart-button mt-1">
                  <a href="#" class="btn">Add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer" class="overflow-hidden padding-xlarge pb-0">
      <div class="container">
        <div class="row">
          <div class="footer-top-area pb-5">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <img src="images/main-logo.png" alt="logo" class="mb-2">
                  <p>Nunc tristique facilisis consectetur vivamus ut porta porta aliquam vitae vehicula leo nullam urna lectus.</p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu">
                  <h4 class="widget-title pb-2">Quick Links</h4>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item text-uppercase pb-2">
                      <a href="about.html">About</a>
                    </li>
                    <li class="menu-item text-uppercase pb-2">
                      <a href="shop.html">Shop</a>
                    </li>
                    <li class="menu-item text-uppercase pb-2">
                      <a href="contact.html">Contact</a>
                    </li>
                    <li class="menu-item text-uppercase pb-2">
                      <a href="login.html">Account</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h4 class="widget-title pb-2">Contact info</h4>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item pb-2">
                      <a href="#">Tea Berry, Marinette, USA</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">+55 111 222 333 44</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="mailto:">yourinfo@gmail.com</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <h4 class="widget-title pb-2">Social info</h4>
                  <p>You can follow us on our social platforms to get updates.</p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <a href="#">
                          <svg class="facebook">
                            <use xlink:href="#facebook">
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="instagram">
                            <use xlink:href="#instagram">
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="twitter">
                            <use xlink:href="#twitter">
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="linkedin">
                            <use xlink:href="#linkedin">
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="youtube">
                            <use xlink:href="#youtube">
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </footer>
    <div id="footer-bottom">
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <div class="col-12">
            <div class="copyright">
              <p>© Copyright 2023 Micas. HTML Template by <a href="https://templatesjungle.com/" target="_blank"><b>TemplatesJungle</b></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Video Popup -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

          <div class="modal-content">
            
              <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg class="bi" width="40" height="40"><use xlink:href="#close-sharp"></use></svg></button>
                  <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="#" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
              </div>

          </div>

      </div>
    </div>
<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('js/plugins.js') }}"></script>

<script src="{{ asset('js/script.js') }}"></script>

  </body>

<!-- Mirrored from demo.templatesjungle.com/micas/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 09:48:06 GMT -->
</html>