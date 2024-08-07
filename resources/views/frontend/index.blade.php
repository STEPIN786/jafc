

@extends('frontend.layouts.layout')

@section('css')

@endsection

@section('content')


  <!-- app wrapper -->
  <div class="sb-app">
    <!-- click effect -->
    <div class="sb-click-effect"></div>
    <!-- loader -->
    <div class="sb-load"></div>


    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">



<section>
      <div class="container-fluid">
          <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        
      <img src="img/banner1.jpg" class="d-block w-100" alt="...">
      
     
    </div>
    <div class="carousel-item">
      <img src="img/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>
</section>

  <!-- video -->
      <section class="sb-video pt-5">
        <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 align-self-center">
              <div class="sb-illustration-7 sb-mb-90">
                <div class="sb-interior-frame">
                  <img src="img/illustrations/interior-2.jpg" alt="interior" class="sb-interior">
                  <a data-fancybox="" data-no-swup href="https://www.youtube.com/watch?v=F3zw1Gvn4Mk" class="sb-video-play"><i class="fas fa-play"></i></a>
                </div>
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
              </div>
            </div>
            <div class="col-lg-6 pl-5">
              <div class="sb-mb-90">
                <span class="sb-suptitle sb-mb-15">Promo video</span>
                <h2 class="sb-mb-30">Restaurant is like a theater. <br>Our task is to amaze you!</h2>
                <p class="sb-text sb-mb-30">Repellat, dolorem a. Qui ipsam quos, obcaecati mollitia consectetur ad vero minus neque sit architecto totam distineserunt pariatur adipisci rem aspernatur illum ex!</p>
                <!-- button -->
                <a data-fancybox="" data-no-swup href="https://www.youtube.com/watch?v=F3zw1Gvn4Mk" class="sb-btn">
                  <span class="sb-icon">
                    <img src="img/ui/icons/play.svg" alt="icon">
                  </span>
                  <span>Promo video</span>
                </a>
                <!-- button end -->
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- video end -->


      <!-- short menu -->
      <section class="sb-short-menu sb-p-20-20">
        <div class="sb-bg-2">
          <div></div>
        </div>
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-mb-30">Most popular dishes</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- slider navigation -->
              <div class="sb-slider-nav">
                <div class="sb-prev-btn sb-short-menu-prev"><i class="fas fa-arrow-left"></i></div>
                <div class="sb-next-btn sb-short-menu-next"><i class="fas fa-arrow-right"></i></div>
              </div>
              <!-- slider navigation end -->
              <!-- button -->
              <a href="menu" class="sb-btn">
                <span class="sb-icon">
                  <img src="img/ui/icons/menu.svg" alt="icon">
                </span>
                <span>Full menu</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="swiper-container sb-short-menu-slider-4i">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/3.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/3.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Bucket Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Bucket Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 599</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/1.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Bucket Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Family Special Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 999</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/2.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/2.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Bucket Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Mini Jumbo Family</h4>
                    <div class="sb-price"><sub>₹</sub> 1199</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/9.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/9.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Bucket Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Small Family Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 799</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/5.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Bucket Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Jumbo Family Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 1399</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Chicken Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 149</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Chicken Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 149</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Chicken Double Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 209</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Chilly Chicken Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 149</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Chicken Momos Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 179</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Zinger Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 149</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Veg Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 139</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Burger</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Veg Double Burger</h4>
                    <div class="sb-price"><sub>₹</sub> 399</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Dinner Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 179</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Dinner Special Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 599</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Speacial Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 229</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Couple Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 219</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Combo Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 249</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Chicken Strip Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 269</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Favour Meal</h4>
                    <div class="sb-price"><sub>₹</sub> 269</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item">
                  <div class="sb-cover-frame">
                    <img src="img/menu/4.jpg" alt="product">
                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Dinner Meal</div>
                  </div>
                  <div class="sb-card-tp">
                    <h4 class="sb-card-title">Excellent Chicken Fillet</h4>
                    <div class="sb-price"><sub>₹</sub> 269</div>
                  </div>
                  <div class="sb-description">
                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- short menu end -->
 <!-- promo -->
      <section class="sb-p-0-60">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="sb-promo-frame sb-mb-30">
                <div class="sb-promo-content">
                  <div class="sb-text-frame">
                    <h3 class="sb-mb-10"><sup>-</sup> <b class="sb-h2">50</b> <sup>%</sup></h3>
                    <h3 class="sb-mb-15">Discount for all* burgers!</h3>
                    <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                    <!-- button -->
                    <a href="product.html" class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                      <span>Get it now</span>
                    </a>
                    <!-- button end -->
                  </div>
                  <div class="sb-image-frame">
                    <div class="sb-illustration-4">
                      <img src="img/illustrations/burger.png" alt="burger" class="sb-burger">
                      <div class="sb-cirkle-1"></div>
                      <div class="sb-cirkle-2"></div>
                      <div class="sb-cirkle-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sb-promo-frame sb-mb-30">
                <div class="sb-promo-content">
                  <div class="sb-text-frame">
                    <h3 class="sb-mb-15">Visit Starbelly and get your coffee*</h3>
                    <h3 class="sb-mb-10"><b class="sb-h2">For free!</b></h3>
                    <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                    <!-- button -->
                    <a href="product.html" class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow.svg" alt="icon">
                      </span>
                      <span>Get it now</span>
                    </a>
                    <!-- button end -->
                  </div>
                  <div class="sb-image-frame">
                    <div class="sb-illustration-5">
                      <img src="img/illustrations/cup.png" alt="cup" class="sb-cup">
                      <div class="sb-cirkle-1"></div>
                      <div class="sb-cirkle-2"></div>
                      <div class="sb-cirkle-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- promo end -->

     
      <!-- revievs -->
      <section class="sb-reviews sb-p-0-90">
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-cate-title sb-mb-30">Reviews <span>about</span> us</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- slider navigation -->
              <div class="sb-slider-nav">
                <div class="sb-prev-btn sb-reviews-prev"><i class="fas fa-arrow-left"></i></div>
                <div class="sb-next-btn sb-reviews-next"><i class="fas fa-arrow-right"></i></div>
              </div>
              <!-- slider navigation end -->
              <!-- button -->
              <a href="/" class="sb-btn">
                <span class="sb-icon">
                  <img src="img/ui/icons/dialog.svg" alt="icon">
                </span>
                <span>All reviews</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="swiper-container sb-reviews-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">Very tasty</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/1.jpg" alt="Guest">
                    </div>
                    <h4>Emma Newman</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">I have lunch here every day</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/2.jpg" alt="Guest">
                    </div>
                    <h4>Paul Trueman</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">Great service</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li class="sb-empty"><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/3.jpg" alt="Guest">
                    </div>
                    <h4>Viktoria Freeman</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sb-review-card">
                  <div class="sb-review-header sb-mb-15">
                    <h4 class="sb-mb-15">Starbelly is amazing!</h4>
                    <ul class="sb-stars">
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                  </div>
                  <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                  <div class="sb-author-frame">
                    <div class="sb-avatar-frame">
                      <img src="img/faces/4.jpg" alt="Guest">
                    </div>
                    <h4>Audrey Oldman</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- revievs end -->


    </div>
    <!-- dynamic content end -->

   

  </div>
  <!-- app wrapper end -->



  @endsection

@section('js')

@endsection
  