<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">

    <title>La Regina</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="home/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="home/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="home/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/png" href="home/images/mode.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-VosyG5KsgE3FsMOqvcwDOeZPOy32OWFQ3DYBfpSAbPjr1vpu6R4e6l4ecPKBtZI3zo6EeDvIm7PJRveIzD0RGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
          <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
          <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>
        
        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="shop.html" title="Men Jackets">Men Jackets</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Fashion">Fashion</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Casual Wears">Casual Wears</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Kids">Kids</a>
          </li>
        </ul>
      </div>
    </div>
    @include('home.header')

    <section class="site-banner jarallax min-height300 padding-large" style="background: url(home/images/hero-image.jpg) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title" style="color: white;">Shop page</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="{{url('')}}">Home /</a>
              </span>
              <span class="item">Shop</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="shopify-grid padding-large">
      <div class="container">
        <div class="row">

          <section id="selling-products" class="col-md-9 product-store">
            <div class="container">
            
              <div class="tab-content">
                <div id="all" data-tab-content class="active">
                  <div class="row d-flex flex-wrap">
                    
                    @foreach($product as $products)
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="product/{{$products->image}}"  alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                      <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="{{url('/product_details' , $products->id)}}">
                      <button type="button" class="btn-wrap cart-link d-flex align-items-center">
                      product Details <i class="icon icon-arrow-io"></i>
                    </button>
                      </a>
                      <button type="button" class="wishlist-btn">
                            <img src="home/images/detail.png" width="40px" height="40px" alt="">
                          </button>
                      </div><br>

                        <div class="cart-button d-flex justify-content-between align-items-center">
                        <a href="https://wa.me/+212706470259/?text=Bonjour!%20Je%20suis%20intéressé%20par%20le%20produit%20{{$products->title}},%20qui%20est%20au%20prix%20de%20{{$products->price}}">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">order on whatsapp 
                          </button>
                        </a>
                        <a href="https://wa.me/+212706470259/?text=Bonjour!%20Je%20suis%20intéressé%20par%20l'%20article%20{{$products->title}},%20qui%20est%20au%20prix%20de%20{{$products->price}},%20et%20qui%20est%20au%20prix%20reduit%20de%20{{$products->price}}">
                          <button type="button" class="wishlist-btn">
                            <img src="home/images/whatsapp.png" width="40px" height="40px" alt="">
                          </button>
                        </a>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="single-product.html">{{$products->title}}</a>
                        </h3>
                        @if($products->discount_price!=null)
                        <span class="item-price text-primary" style="color: red;">
                           {{$products->discount_price}}MAD
                        </span>
                        <span class="item-price " style="text-decoration: line-through; color:brown">
                           
                           {{$products->price}}MAD
                        </span>
                        @else
                        <span class="item-price text-primary" style="color: blue;">
                        
                           {{$products->price}}MAD
                        </span>
                        @endif
                      </div>
                    </div>
                @endforeach

                  </div>
                </div>
              </div>
          <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
            <div class="pagination loop-pagination d-flex justify-content-center">
              @if ($product->previousPageUrl())
                <a href="{{ $product->previousPageUrl() }}" class="pagination-arrow d-flex align-items-center">
                  <i class="icon icon-arrow-left"></i>
                </a>
              @endif
              @foreach ($product as $page => $url)
                <span class="page-numbers {{ ($page == $product->currentPage()) ? 'current' : '' }}">
                  <a>{{ $page }}</a>
                </span>
              @endforeach
              @if ($product->nextPageUrl())
                <a href="{{ $product->nextPageUrl() }}" class="pagination-arrow d-flex align-items-center">
                  <i class="icon icon-arrow-right"></i>
                </a>
              @endif
            </div>
          </nav>

            </div>
          </section>

          <aside class="col-md-3">
            <div class="sidebar">
              <div class="widgets widget-menu">
                <div class="widget-search-bar">
                  <form role="search" action="{{url('search_product')}}" method="get" class="d-flex">
                    @csrf
                    <input class="search-field" name="search" placeholder="Search" type="search">
                    <button type="submit" class="btn btn-dark"><i class="icon icon-search"></i></button>
                  </form>
                </div> 
              </div>
              <div class="widgets widget-product-tags">
                <h5 class="widget-title">Tags</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    White
                  </li>
                  <li class="tags-item">
                    Cheap
                  </li>
                  <li class="tags-item">
                    Branded
                  </li>
                  <li class="tags-item">
                    Modern
                  </li>
                  <li class="tags-item">
                   Simple
                  </li>
                </ul>
              </div>
              <div class="widgets widget-product-brands">
                <h5 class="widget-title">Brands</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    Nike
                  </li>
                  <li class="tags-item">
                    Adidas
                  </li>
                  <li class="tags-item">
                    Puma
                  </li>
                  <li class="tags-item">
                    Spike
                  </li>
                </ul>
              </div>
              <div class="widgets widget-price-filter">
                <h5 class="widget-title">Filter By Price</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                   Less than $10
                  </li>
                  <li class="tags-item">
                    $10- $20
                  </li>
                  <li class="tags-item">
                    $20- $30
                  </li>
                  <li class="tags-item">
                    $30- $40
                  </li>
                  <li class="tags-item">
                    $40- $50
                  </li>
                </ul>
              </div>
            </div>
          </aside>
          
        </div>        
      </div>      
    </div>

    <hr>

    @include('home.slider8')
    @include('home.slider9')
    @include('home.slider10')
    @include('home.footer')





    <script src="home/js/jquery-1.11.0.min.js"></script>
    <script src="home/js/plugins.js"></script>
    <script src="home/js/script.js"></script>
  </body>
</html>