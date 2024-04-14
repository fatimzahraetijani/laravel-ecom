
      <header id="header">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <p>Let's talk! <strong>+57 444 11 00 35</strong>
                </p>
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p>Free shipping on a purchase value of $200</p>
              </div>
              
            </div>
          </div>
        </nav>
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.html">
                    <img src="home/images/main-logo.png" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                    <li><a href="{{url('')}}" class="item-anchor" data-effect="About">Home</a></li>


                      <li><a href="{{url('about')}}" class="item-anchor" data-effect="About">About</a></li>

                      <li><a href="{{url('all_product')}}" class="item-anchor" data-effect="About">Shop</a></li>


                      <li><a href="{{url('blog')}}" class="item-anchor" data-effect="About">Blog</a></li>


                      <li><a href="{{url('contact')}}" class="item-anchor" data-effect="Contact">Contact</a></li>  
                        @if(auth()->check())
                        <li><a href="{{url('fidelity_card')}}" class="item-anchor" data-effect="About"> fidelity Card</a></li>
                        @endif
                        @if (Route::has('login'))
                        
                        @auth
                        <li>
                        <x-app-layout>
                            
                        </x-app-layout>
                        </li>
                        @else
                        <li class="menu-item has-sub">
                           <a class="btn " style="background-color: rosybrown;" id="logincss" href="{{ route('login')}}">login</a>
                        </li>
                        <li  class="menu-item has-sub">
                           <a   class="btn " style="color: white; "  href="{{ route('register')}}">Register</a>
                        </li>
                        @endauth
                        @endif
                        

                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>