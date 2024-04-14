<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La regina</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="home/images/mode.png">
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
    <section class="site-banner jarallax padding-large" style="background: url(home/images/hero-image.jpg) no-repeat; background-position: top;">
      <div class="container" style="color: #79582E;">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title" style="color: white;" >Contact us</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.html">Home /</a>
              </span>
              <span class="item">Contact us</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('sweetalert::alert')

    <section class="contact-information padding-large">
      <div class="container" >
        <div class="row">
          <div class="col-md-6">
            <div class="section-header">
              <h2 class="section-title" style="color: #79582E;">Get in touch</h2>
            </div>
            <div class="contact-detail">
              <div class="detail-list">
                <p style="color: #79582E;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="list-unstyled list-icon">
                  <li>
                    <a href="#"><i class="icon icon-phone" style="color: #79582E;"></i>+1650-243-0000</a>
                  </li>
                  <li>
                    <a href="mailto:info@yourcompany.com" style="color: #79582E;"><i class="icon icon-mail"></i>la_regina@gmail.com</a>
                  </li>

                </ul>
                <br>
              </div>
              <div class="social-links">
                <h3 style="color: #79582E;" >Social Links</h3>
                <ul class="d-flex list-unstyled">
                  <li><a href="#" class="icon icon-facebook"></a></li>
                  <li><a href="https://www.instagram.com/la_regina_shop_11?igsh=aXZ1emdjZGYyaWhn" class="icon icon-instagram"></a></li>
                  <li><a href=""><img src="home/images/tic-tac.png" width="20px" height="20px" alt=""></a></li>
                  <li><a href="https://wa.me/+212688967390/?text=Bonjour!" class="icon icon-phone">
                  </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-information">
              <div class="section-header">
                <h2 class="section-title" style="color: #79582E;">Send us a message</h2>
              </div>
              <form  name="contactform" action="{{url('/add_message')}}" method="post" class="contact-form">
                @csrf
                <div class="form-item">
                  <textarea class="u-full-width bg-light" name="message" placeholder="Message" style="height: 180px;" required></textarea>
                </div>
                <label>
                  <input type="checkbox" required>
                  <span class="label-body" style="color: #79582E;">I agree all the <a href="#">terms and conditions</a>
                  </span>
                </label>
                <button type="submit" style="background-color: #79582E;" name="submit" class="btn  btn-full btn-medium">Submit</button>
              </form>
            </div>
          </div>
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