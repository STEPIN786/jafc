

@extends('frontend.layouts.layout')

@section('css')

@endsection

@section('content')
  <!-- app wrapper -->

    <!-- preloader -->
  
    <!-- top bar end -->

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-xs sb-banner-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <h1 class="sb-h2">Our Menu</h1>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="#.">Menu</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- menu section 1 -->
      <section class="sb-menu-section sb-p-90-60">
        <div class="sb-bg-1">
          <div></div>
        </div>
        <div class="container">
          <!-- filter -->
          <div class="sb-filter mb-30">
            <a href="#." data-filter="*" class="sb-filter-link sb-active">All dishes</a>
            <a href="#." data-filter=".bucket-meal" class="sb-filter-link">Bucket Meal</a>
            <a href="#." data-filter=".burger" class="sb-filter-link">Burger</a>
            <a href="#." data-filter=".dinner-meal" class="sb-filter-link">Dinner Meal</a>
            <a href="#." data-filter=".wrap-meal" class="sb-filter-link">Wrap Meal</a>
            <a href="#." data-filter=".pizza" class="sb-filter-link">Pizza</a>
          </div>
          <!-- filter end -->
          <div class="sb-masonry-grid">
            <div class="sb-grid-sizer"></div>
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/products/Chicken-Burger1.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/Chicken-Burger1.jpg" alt="product">
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
                    <li><span>(4 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/products/double-chicken.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/double-chicken.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Chicken Double Burger</h4>
                  <div class="sb-price"><sub>₹</sub> 209</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars sb-unrated">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>Unrated</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/products/Chicken-Burger.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/Chicken-Burger.jpg" alt="product">
                  
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
                    <li class="sb-empty"><i class="fas fa-star"></i></li>
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/4.jpg" alt="product">
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
                    <li><span>(2 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/Chicken-Wrap-Meal.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/Chicken-Wrap-Meal.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Chicken Wrap Meal</h4>
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
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/veg-wrap.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/veg-wrap.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Veg Wrap Meal</h4>
                  <div class="sb-price"><sub>₹</sub> 110</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/pop-burger.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/pop-burger.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">  Pop Burger</h4>
                  <div class="sb-price"><sub>₹</sub> 84</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/pop-chik.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/pop-chik.jpg" alt="product">
                 
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Pop Chick</h4>
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
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/french-fries.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/french-fries.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">French Fries</h4>
                  <div class="sb-price"><sub>₹</sub> 69</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/prawns.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/prawns.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Prwans</h4>
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
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/zinger-spice.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/zinger-spice.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Zinger Spicy</h4>
                  <div class="sb-price"><sub>₹</sub> 189</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/Chicken-nugets.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/Chicken-nugets.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Chicken Nuggets</h4>
                  <div class="sb-price"><sub>₹</sub> 189</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/products/bbq-chicken.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/bbq-chicken.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">BBQ Chicken</h4>
                  <div class="sb-price"><sub>₹</sub> 330</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/products/crispy-chicken.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/crispy-chicken.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Chrispy Chicken</h4>
                  <div class="sb-price"><sub>₹</sub> 300</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/products/tandoori-chicken.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/tandoori-chicken.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Tandoori Chicken</h4>
                  <div class="sb-price"><sub>₹</sub> 320</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/5.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Neapolitan</h4>
                  <div class="sb-price"><sub>₹</sub> 350</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/products/fram-frsh.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/fram-frsh.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Fram Frsh</h4>
                  <div class="sb-price"><sub>₹</sub> 330</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/products/tandoori-veg.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/tandoori-veg.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Tandoori Veg</h4>
                  <div class="sb-price"><sub>₹</sub> 330</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 pizza">
              <a data-fancybox="menu" data-no-swup href="img/products/margherita.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/margherita.jpg" alt="product">
                  
                </div>
                <div class="sb-card-tp">
                  <h4 class="sb-card-title">Margherita</h4>
                  <div class="sb-price"><sub>₹</sub> 330</div>
                </div>
                <div class="sb-description">
                  <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                  <ul class="sb-stars">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><span>(6 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/special-thali.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/special-thali.jpg" alt="product">
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
                    <li><span>(14 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/products/zinger-burger.jpg
" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/zinger-burger.jpg
" alt="product">
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
                    <li class="sb-empty"><i class="fas fa-star"></i></li>
                    <li class="sb-empty"><i class="fas fa-star"></i></li>
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
          
            <div class="sb-grid-item sb-item-25 bucket-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/bucket-meal.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/bucket-meal.jpg" alt="product">
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 bucket-meal">
              <a data-fancybox="menu" data-no-swup href="img/products/special-family-meal.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/special-family-meal.jpg" alt="product">
                  
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
                    <li><span>(8 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 bucket-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/11.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/11.jpg" alt="product">
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
                    <li class="sb-empty"><i class="fas fa-star"></i></li>
                    <li><span>(9 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 bucket-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/12.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/12.jpg" alt="product">
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
                    <li><span>(5 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 bucket-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/1.jpg" alt="product">
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
                    <li><span>(7 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/products/veg-burger.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/veg-burger.jpg" alt="product">
                  
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
                    <li><span>(4 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            
            <div class="sb-grid-item sb-item-25 burger">
              <a data-fancybox="menu" data-no-swup href="img/products/double-veg-burger.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/products/double-veg-burger.jpg" alt="product">
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
                    <li><span>(2 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/15.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/15.jpg" alt="product">
                  
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
                    <li><span>(12 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            
           
            
            
            
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/15.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/15.jpg" alt="product">
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/15.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/15.jpg" alt="product">
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/15.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/15.jpg" alt="product">
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 wrap-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/5.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/5.jpg" alt="product">
                 
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/14.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/14.jpg" alt="product">
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
                    <li><span>(2 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
           
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/8.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/8.jpg" alt="product">
                  
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
            <div class="sb-grid-item sb-item-25 dinner-meal">
              <a data-fancybox="menu" data-no-swup href="img/menu/8.jpg" class="sb-menu-item sb-mb-30">
                <div class="sb-cover-frame">
                  <img src="img/menu/8.jpg" alt="product">
                  
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
                    <li><span>(1 ratings)</span></li>
                  </ul>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- menu end -->

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

    

    

























        
  @endsection

@section('js')

@endsection
  