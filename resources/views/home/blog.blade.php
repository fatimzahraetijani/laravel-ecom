<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La Regina</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="home/images/mode.png">

    <link rel="stylesheet" type="text/css" href="home/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="home/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="home/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="home/js/modernizr.js"></script>
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
            <h1 class="page-title" style="color: white;">Blog page</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.html">Home /</a>
              </span>
              <span class="item">Blog</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
          <section id="featured-products" class="product-store padding-large">
                <div class="container">
                  <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                    <h2 class="section-title"> the best-selling items of the month</h2>                      
                  </div>
                  <div  class="swiper product-swiper overflow-hidden">
                    <div class="swiper-wrapper">
                    @foreach($product_sold as $products)
                      <div style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;" class="swiper-slide">

                        <div class="product-item">
                          <div class="image-holder">
                            <img src="product/{{$products->image}}" alt="Books" class="product-image">
                          </div>
                          <div class="cart-concern">
                            <div class="cart-button d-flex justify-content-between align-items-center">
                              <a href="{{url('/product_sold_details' , $products->id)}}"><button type="button" class="btn-wrap cart-link d-flex align-items-center">product Details <i class="icon icon-arrow-io"></i>
                              </button></a>
                              <button type="button" class="wishlist-btn">
                                      <img src="home/images/detail.png" width="40px" height="40px" alt="">
                              </button>
                            </div>

                            <br><div class="cart-button d-flex justify-content-between align-items-center">
                            <a href="https://wa.me/+212706470259/?text=Bonjour!%20Je%20suis%20intéressé%20par%20le%20produit%20{{$products->title}},%20qui%20est%20au%20prix%20de%20{{$products->price}}">
                              <button type="button" class="btn-wrap cart-link d-flex align-items-center">order on whatsapp 
                              </button>
                              </a>
                              <a href="https://wa.me/+212706470259/?text=Bonjour!%20Je%20suis%20intéressé%20par%20le%20produit%20{{$products->title}},%20qui%20est%20au%20prix%20de%20{{$products->price}}">

                              <button type="button" class="wishlist-btn">
                              <img src="home/images/whatsapp.png" width="30px" height="30px" alt="">
                              </button>
                              </a>
                            </div>
                          </div>
                          <div class="product-detail">
                          <center> <h3 class="product-title">
                                    <a href="single-product.html">{{$products->title}}</a>
                                    </h3>

                                @if($products->discount_price!=null)
                                  <span class="item-price text-primary"   >
                                    {{$products->discount_price}}MAD
                                  </span>
                                  <span  class="item-price " style="text-decoration: line-through; color:brown">
                                    
                                    {{$products->price}}MAD
                                  </span>
                                  @else
                                  <span class="item-price text-primary" style="color: blue;">
                                  
                                    {{$products->price}}MAD
                                  </span>
                                  @endif
                                  <h5 >
                                  <span>Quantity of  Article sold :</span> <a href="single-product.html">{{$products->quantity_sold}}</a>
                                  </h5>

                                  </center>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="swiper-pagination">
                  {!!$product_sold->withQueryString()->links('pagination::bootstrap-5')!!}
                  

                  </div>
                </div>
              </section>

              


   @include('home.slider8')

   @include('home.slider9')

  @include('home.slider10')

    @include('home.footer')

    

    <script src="home/js/jquery-1.11.0.min.js"></script>
    <script src="home/js/plugins.js"></script>
    <script src="home/js/script.js"></script>
  </body>
</html>