
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
    <section class="site-banner jarallax min-height300 padding-large" style="background: url(home/images/hero-image1.jpg) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title"style="color: white;">Product Details</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.html">Home</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="wrapper">
    <div class="product-img">
      <img src="product/{{$product->image}}" alt="Product Image">
    </div>
    <div class="product-info">
      <center>
      <div class="product-text">
        <h1>{{$product->title}}</h1>
        <h2>La Regina</h2>
        <p> {{$product->description}} </p>
      </div>
      </center>
      <div class="product-price-btn">
        @if($product->discount_price!=null)
        <p><span>
             {{$product->discount_price}}MAD
        </span></p>
        <p><span  style="text-decoration: line-through; color:brown">                     
        {{$product->price}}MAD
        </span></p>
         @else
          <p>
          <span>           
           {{$product->price}}MAD
           </span>
            </p>
             @endif
        <button type="button">buy now</button>
      </div>
    </div>
    </div>
    <style>
      .wrapper {
      width: 100%;
      max-width: 800px; /* ajustez la largeur maximale selon vos besoins */
      margin: 50px auto;
      border-radius: 7px;
      box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
      display: flex;
      overflow: hidden;
    }

    .product-img {
      flex: 1;
    }

    .product-img img {
      width: 100%;
      height: auto;
      border-radius: 7px 0 0 7px;
    }

    .product-info {
      flex: 1;
      background-color: #ffffff;
      border-radius: 0 7px 7px 0;
      padding: 20px;
      margin-top: 50px;
      max-width: 100%; /* Définissez la largeur maximale du paragraphe */
      word-wrap: break-word; /* Activez la césure automatique pour les mots longs */
    }

    .product-text h1 {
      margin: 0;
      font-size: 24px;
      color: #474747;
    }

    .product-text h2 {
      margin: 5px 0 20px 0;
      font-size: 14px;
      font-weight: 400;
      text-transform: uppercase;
      color: #d2d2d2;
      letter-spacing: 0.1em;
    }

    .product-text p {
      margin: 0;
      font-size: 14px;
      line-height: 1.5;
      color: #8d8d8d;

    }

    .product-price-btn {
      margin-top: 20px;
      text-align: center;
    }

    .product-price-btn p {
      font-size: 24px;
      font-weight: lighter;
      color: #474747;
    }

    span {
      font-size: 28px;
      font-family: 'Suranna', serif;
    }

    .product-price-btn button {
      height: 50px;
      width: 60%;
      max-width: 200px;
      margin-top: 10px;
      border: transparent;
      border-radius: 60px;
      font-size: 14px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: #ffffff;
      background-color: #9cebd5;
      cursor: pointer;
      outline: none;
    }

    @media screen and (max-width: 768px) {
      .wrapper {
        flex-direction: column;
        border-radius: 0;
      }

      .product-img img {
        border-radius: 7px 7px 0 0;
        height: 600px;
      }

      .product-info {
        border-radius: 0 0 7px 7px;
      }
    }
    </style>
   

    <footer id="footer">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">La Regina</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="about.html">About us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Conditions </a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.html">Our Journals</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Careers</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Affiliate Programme</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">la regina Press</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="faqs.html">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.html">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@ultras.com</a>
                </p>
                <p>Do you need assistance? Give us a call. <br>
                  <strong>+57 444 11 00 35</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Forever 2018</h5>
                <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube-play"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance-square"></i>
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
    </footer>

    <div id="footer-bottom">
      <div class="container">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
          <div class="copyright">
            <p>Freebies by <a href="https://templatesjungle.com/">Templates Jungle</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
            </p>
          </div>
          <div class="payment-method">
            <p>Payment options :</p>
            <div class="card-wrap">
              <img src="home/images/visa-icon.jpg" alt="visa">
              <img src="home/images/mastercard.png" alt="mastercard">
              <img src="home/images/american-express.jpg" alt="american-express">
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="home/js/jquery-1.11.0.min.js"></script>
    <script src="home/js/plugins.js"></script>
    <script src="home/js/script.js"></script>
  </body>
</html>