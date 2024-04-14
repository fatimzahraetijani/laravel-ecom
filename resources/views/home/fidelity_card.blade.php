





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
    <link rel="stylesheet" type="text/css" href="home/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="home/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="home/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="home/images/mode.png">

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
    @if(auth()->user()->numcarte !== null)
    <section class="site-banner jarallax min-height10 padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">fidelity card</h1>
            <div class="breadcrumbs">
              <span class="item">To discover your point press the card below</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="container1">
        <div class="card">
            <div class="card-inner">
                <div class="front">
                    <img src="home/images/1_card.jpeg" class="map-img">
                    <div class="row1 card-no1">
                    @auth
                    <p>FIDELITY CARD  <br>
                    {{ auth()->user()->numcarte }}</p>

                    @endauth
                    </div>
                   
                </div>
                <div class="back">
                    <img src="home/images/2_card.jpeg" class="map-img">
                    <div class="points">
                    <h1 id="H1"  > Your Points :</h1>
                        <b>
                        @auth
                        <h1  >{{ auth()->user()->points }}pts</h1>

                        @endauth

                     </b>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    @else
    <section class="site-banner jarallax min-height10 padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style="color:brown;" class="page-title">There is no card available!!</h1>
            <div class="breadcrumbs">
              <span class="item">If you purchase our products, you will receive a fidelity card</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif




    @include('home.footer')

    <script src="home/js/jquery-1.11.0.min.js"></script>
    <script src="home/js/plugins.js"></script>
    <script src="home/js/script.js"></script>
  </body>
</html>





<style>




@import url('https://fonts.googleapis.com/css2?family=josefin+Sans:wght@400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@595&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@595&family=Pacifico&family=Shadows+Into+Light&display=swap');


.container1 {
  height: 500px;
  margin-top: -300px;
    width: 100%;
    background:#fff;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:#F3FAFF;
}
.points{
  font-size: 50px; /* Taille de la police */
    color:black;
    margin-top: 55px;
  text-shadow: 4px 4px 4px violet;
}
.points h1{
  font-family : "Shadows Into Light", cursive ; font-weight: 400;
  font-style: normal;;
}

.card {
    width: 500px;
    height: 300px;
    color: #fff;
    cursor: pointer;
    perspective: 1000px;
}

.card-inner {
    width: 100%;
    height: 100%;
    position: relative;
    transition: transform 1s;
    transform-style: preserve-3d;
    text-align: center;

}

.front, .back {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px 30px;
    border-radius: 15px;
    overflow: hidden;
    backface-visibility: hidden;
    background-color: #000;
    z-index: 2;
}

.row1{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.map-img {
    width: 100%;
    position: absolute;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
}

.card-no1 p {
  font-size: 34px; /* Taille de la police */
    color:black;
    margin-top: 55px;
  text-shadow: 4px 4px 4px violet;
  font-family : "Shadows Into Light", cursive ; font-weight: 400;
  font-style: normal;;
}



.name {
    font-size: 22px;
    margin-top: 20px;
    color: #000;

}

.back {
    transform: rotateY(180deg);
}

.card:hover .card-inner {
    transform: rotateY(-180deg);
}
</style>