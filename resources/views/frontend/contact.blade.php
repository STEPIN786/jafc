


@extends('frontend.layouts.layout')

@section('css')

@endsection

@section('content')

  <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-color">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <span class="sb-suptitle sb-mb-30">Contact</span>
                  <h1 class="sb-mb-30">Get in Touch with Starbelly</h1>
                  
                  <ul class="sb-breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><a href="contact">Contact</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
            <div class="col-lg-5">
              <div class="sb-contact-form-frame">
                <div class="sb-illustration-9">
                  
                  <div class="sb-cirkle-1"></div>
                  <div class="sb-cirkle-2"></div>
                  <div class="sb-cirkle-3"></div>
                </div>
                <div class="sb-form-content">
                  <div class="sb-main-content">
                    <h3 class="sb-mb-30">Send Message</h3>
                    <form id="form">
                      <div class="sb-group-input">
                        <input type="text" name="name" required>
                        <span class="sb-bar"></span>
                        <label>Name</label>
                      </div>
                      <div class="sb-group-input">
                        <input type="email" name="email" required>
                        <span class="sb-bar"></span>
                        <label>Email</label>
                      </div>
                      <div class="sb-group-input">
                        <textarea name="text" required></textarea>
                        <span class="sb-bar"></span>
                        <label>Message</label>
                      </div>
                      <p class="sb-text sb-text-xs sb-mb-30">*We promise not to disclose your <br>personal information to third parties.</p>
                      <!-- button -->
                      <button class="sb-btn sb-cf-submit sb-show-success">
                        <span class="sb-icon">
                          <img src="img/ui/icons/arrow.svg" alt="icon">
                        </span>
                        <span>Send</span>
                      </button>
                      <!-- button end -->
                    </form>
                  </div>
                  <div class="sb-success-result">
                    <img src="img/ui/success.jpg" alt="success" class="sb-mb-15">
                    <div class="sb-success-title sb-mb-15">Success!</div>
                    <p class="sb-text sb-mb-15">Your message has been sent <br>successfully</p>
                    <!-- button -->
                    <a href="/" class="sb-btn sb-btn-2">
                      <span class="sb-icon">
                        <img src="img/ui/icons/arrow-2.svg" alt="icon">
                      </span>
                      <span>Back to home</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- contact info -->
      <section class="sb-p-90-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">01</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Address</h3>
                  <p class="sb-text"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
 Dastur Meher road
Opp.JJ Garden,Camp
Pune, Maharashtra 411001</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">
Call</h3>
                  <p class="sb-text"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;

099225 25656
</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Email</h3>
                  <p class="sb-text">starbelly@mail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact info end -->

      <!-- map -->
      <div class="sb-map-frame">
      
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15133.006104453594!2d73.8776461!3d18.5175324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9825a9fac8623109!2sJalis%20American%20Fried%20Chicken%20%5B%20AFC%5D!5e0!3m2!1sen!2sin!4v1665120846906!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            
    
      </div>
      <!-- map end -->

     
            
  @endsection

@section('js')

@endsection
