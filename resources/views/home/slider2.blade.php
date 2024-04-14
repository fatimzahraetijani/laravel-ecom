<section id="latest-collection">
  <div class="container">
    <div class="product-collection row">
      <div class="col-lg-7 col-md-12 left-content">
        <div class="collection-item">
              <div class="products-thumb">
                <img src="home/images/collection-item1.jpg" alt="collection item" class="large-image image-rounded">
              </div>
          <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
            <h3 class="item-title" style="color: white;">pyjamas</h3>
            <p style="color: white;">Découvrez le confort ultime avec notre collection de pyjamas haut de gamme. Conçus pour vous offrir des nuits de sommeil paisible et relaxant</p>
            <div class="btn-wrap">
                  <a href="{{ url('filter', ['catagory' => 'pyjamas']) }}" style="color: white;" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 right-content flex-wrap">
        <div class="collection-item top-item">
          <div class="products-thumb">
            <img src="home/images/collection-item2.jpg" alt="collection item" class="small-image image-rounded">
          </div>
          <div class="col-md-6 product-entry">
            <div class="categories"  style="color: white;">Lingerie Collection</div>
            <h3 class="item-title" style="color: white;">Lingerie</h3>
            <div class="btn-wrap">
                  <a href="{{ url('filter', ['category' => 'lingeries']) }}"  style="color: white;" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
          </div>
        </div>
        <div class="collection-item bottom-item">
          <div class="products-thumb">
            <img src="home/images/collection-item3.jpg" alt="collection item" class="small-image image-rounded">
          </div>
          <div class="col-md-6 product-entry">
            <div class="categories"  style="color: white;">sandals collection</div>
            <h3 class="item-title"  style="color: white;"> Sandals.</h3>
            <div class="btn-wrap">
                  <a href="{{ url('filter', ['catagory' => 'sandals']) }}" style="color: white;" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var maVideo = document.getElementById('maVideo');
    maVideo.addEventListener('ended', function() {
      this.currentTime = 0;
      this.play();
    }, false);
  });
</script>
