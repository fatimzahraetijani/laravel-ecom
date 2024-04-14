
      <section id="featured-products" class="product-store padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title"> Articles</h2>            
          <div class="btn-wrap">
            <a href="{{url('/all_product')}}" class="d-flex align-items-center">View all Articles <i class="icon icon icon-arrow-io"></i></a>
          </div>            
        </div>
        <div class="swiper product-swiper overflow-hidden">
          <div class="swiper-wrapper">
          @foreach($product as $products)
            <div class="swiper-slide">

              <div class="product-item">
                <div class="image-holder">
                  <img src="product/{{$products->image}}" alt="Books" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <a href="{{url('/product_details' , $products->id)}}"><button type="button" class="btn-wrap cart-link d-flex align-items-center">product Details <i class="icon icon-arrow-io"></i>
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
                  <h3 class="product-title">
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
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="swiper-pagination">
        {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
        </div>
      </div>
    </section>

    
