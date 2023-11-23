  <!--footer section start-->
  <div class="footer-curve position-relative overflow-hidden">
      <span class="position-absolute section-curve-wrapper top-0 h-100"
          data-background="assets/img/shapes/section-curve.png"></span>
  </div>
  <footer class="gshop-footer position-relative pt-8 bg-dark z-1 overflow-hidden">
      <img src="assets/img/shapes/tomato.svg" alt="tomato" class="position-absolute z--1 tomato vector-shape">
      <img src="assets/img/shapes/pata-lg.svg" alt="pata" class="position-absolute z--1 pata-lg vector-shape">
      <img src="assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute z--1 pata-xs vector-shape">
      <img src="assets/img/shapes/frame-circle.svg" alt="frame"
          class="position-absolute z--1 frame-circle vector-shape">
      <img src="assets/img/shapes/leaf.svg" alt="leaf" class="position-absolute z--1 leaf vector-shape">
      <!--shape right -->
      <img src="assets/img/shapes/leaf.svg" alt="pata" class="position-absolute leaf-2 z--1 vector-shape">
      <img src="assets/img/shapes/pata-xs.svg" alt="pata" class="position-absolute pata-xs-2 z--1 vector-shape">
      <img src="assets/img/shapes/tomato-slice.svg" alt="tomato slice"
          class="position-absolute tomato-slice vector-shape z--1">
      <img src="assets/img/shapes/tomato-half.svg" alt="tomato"
          class="position-absolute tomato-half z--1 vector-shape">
      <div class="container">
          {{-- <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="gshop_subscribe_form text-center">
                    <h4 class="text-white gshop-title">Subscribe to the G-Shop <mark class="p-0 position-relative text-secondary bg-transparent">New Arrivals <img src="assets/img/shapes/border-line.svg" alt="border line" class="position-absolute border-line"></mark><br class="d-none d-sm-block">& Other Information.</h4>
                    <form class="mt-5 d-flex align-items-center bg-white rounded subscribe_form">
                        <input type="email" class="form-control" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-primary flex-shrink-0">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div> --}}
          <span class="gradient-spacer my-8 d-block"></span>
          <div class="row g-5">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-widget">
                      <h5 class="text-white mb-4">Vist US </h5>
                      <ul class="footer-nav">
                          <li><a href="#">Trivandrum</a></li>
                          <li><a href="#">Kerala</a></li>
                          <li><a href="#">7673867</a></li>
                          <li><a href="#">India</a></li>

                      </ul>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-widget">
                      <h5 class="text-white mb-4">Call US</h5>
                      <ul class="footer-nav">
                          <li><a href="#">Tel</a></li>
                          <li><a href="#">0471 2803335</a></li>
                          <li><a href="#">Mobile</a></li>
                          <li><a href="#">9855550100</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-widget">
                      <h5 class="text-white mb-4">Follow US</h5>
                      <ul class="footer-nav">
                          <li><a href="https://www.facebook.com/profile.php?id=100094101612222" target="_blank"><i
                                      class="fa-brands fa-facebook-f"></i><span
                                      style="margin-left: 5px;">Facebook</span> </a></li>
                          <li><a href="https://www.instagram.com/vismaya.hypermarket" target="_blank"><i
                                      class="fa-brands fa-instagram"></i><span style="margin-left: 5px;">
                                      Instagram</span></a></li>
                          {{-- <li><a href="#"><i class="fas fa-envelope"></i> Gmail</a></li> --}}
                          <li><a href="https://www.linkedin.com/in/vismaya-groups-76527a281" target="_blank"><i
                                      class="fa-brands fa-linkedin"></i><span
                                      style="margin-left: 5px;">Linkedin</span></a></li>
                          <li><a href="https://twitter.com/vismaya948" target="_blank"><i
                                      class="fa-brands fa-twitter"></i><span
                                      style="margin-left: 5px;">Twitter</span></a></li>
                      </ul>

                      </ul>
                  </div>
              </div>

          </div>
      </div>
      <div class="footer-copyright pt-120 pb-3">
          <span class="gradient-spacer d-block mb-3"></span>
          <div class="container">
              <div class="row align-items-center g-3">
                  <div class="col-lg-4">
                      <div class="copyright-text">
                          <p class="mb-0 text-white">&copy; All rights reserved Made by <a href="#"
                                  class="text-secondary">MiscArchive</a></p>
                      </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                      @if (filled($settings))
                          <div class="logo-wrapper text-center">
                              <a href="#" class="logo"><img src="{{ asset('uploads/' . $settings->logo) }}"
                                      alt="logo" class="img-fluid" width="20%"></a>
                          </div>
                      @endif

                  </div>

              </div>
          </div>
      </div>
  </footer>

  <div class="mobile-toolbar d-block d-md-none d-lg-none">
      <div class="d-table table-layout-fixed w-100">
          <a class="d-table-cell mobile-toolbar-item mobile-menu-toggle" href="#">
              <span class="mobile-toolbar-icon"><i class="fas fa-bars"></i></span><span
                  class="mobile-toolbar-label">Menu
              </span>
          </a>

      </div>
  </div>
  <div class="offcanvas-left-menu position-fixed">
      <div class="mobile-menu">
          <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
          @if (filled($settings))
              <a href="#" class="d-inline-block mb-5">
                  <img src="{{ asset('uploads/' . $settings->logo) }}" alt="logo" style="width: 150px;">
              </a>
          @endif

          <nav class="mobile-menu-wrapper scrollbar">
              <ul>
                  <li>
                      <a href="#home" class="d-flex align-items-center">
                          <div class="me-2 avatar-icon">
                          </div>
                          <span>Home</span>
                      </a>
                  </li>
                  <li>
                      <a href="#about-us" class="d-flex align-items-center">
                          <div class="me-2 avatar-icon">
                          </div>
                          <span>About</span>
                      </a>
                  </li>
                  <li>
                      <a href="#branches" class="d-flex align-items-center">
                          <div class="me-2 avatar-icon">
                          </div>
                          <span>Branches</span>
                      </a>
                  </li>
                  <li>
                      <a href="#testimonials" class="d-flex align-items-center">
                          <div class="me-2 avatar-icon">
                          </div>
                          <span>Testimonials</span>
                      </a>
                  </li>
                  <li>
                      <a href="#contact-us" class="d-flex align-items-center">
                          <div class="me-2 avatar-icon">
                          </div>
                          <span>Contact Us</span>
                      </a>
                  </li>

              </ul>
          </nav>
      </div>
  </div> <!--footer section end-->

  <!--modal box-->

  <div class="modal fade" id="quickview_modal">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                      aria-label="Close"></button>
                  <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                      <div class="row align-items-center g-4">
                          <div class="col-xl-6 align-self-end">
                              <div class="quickview-double-slider">
                                  <div class="quickview-product-slider swiper">
                                      <div class="swiper-wrapper">
                                          <div class="swiper-slide text-center">
                                              <img src="assets/img/products/p-lg-1.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                          <div class="swiper-slide text-center">
                                              <img src="assets/img/products/p-lg-2.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                          <div class="swiper-slide text-center">
                                              <img src="assets/img/products/p-lg-3.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                          <div class="swiper-slide text-center">
                                              <img src="assets/img/products/p-lg-4.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="product-thumbnail-slider swiper mt-80">
                                      <div class="swiper-wrapper">
                                          <div
                                              class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                              <img src="assets/img/products/thumb-sm-1.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                          <div
                                              class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                              <img src="assets/img/products/thumb-sm-2.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                          <div
                                              class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                              <img src="assets/img/products/thumb-sm-3.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                          <div
                                              class="swiper-slide product-thumb-single rounded-2 d-flex align-items-center justify-content-center">
                                              <img src="assets/img/products/thumb-sm-4.png" alt="jam"
                                                  class="img-fluid">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="product-info">
                                  <h4 class="mt-1 mb-3">Three Carrot Vegetables <br> Peruvian Cuisine</h4>
                                  <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                      <ul class="d-flex align-items-center me-2">
                                          <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                          <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                          <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                          <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                          <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                      </ul>
                                      <span class="flex-shrink-0">(5.2k Reviews)</span>
                                  </div>
                                  <div class="pricing mt-2">
                                      <span class="fw-bold fs-xs text-danger">$140.00</span>
                                      <span class="fw-bold fs-xs deleted ms-1">$240.00</span>
                                  </div>
                                  <div class="widget-title d-flex mt-4">
                                      <h6 class="mb-1 flex-shrink-0">Description</h6>
                                      <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                  </div>
                                  <p class="mb-3">Clicks-and-mortar "outside the bethinking. Interactively
                                      disseminate innovative intellectual relationships. </p>
                                  <ul class="d-flex flex-column gap-2">
                                      <li><span class="me-2 text-primary"><i
                                                  class="fa-solid fa-circle-check"></i></span>Natural ingredients</li>
                                      <li><span class="me-2 text-primary"><i
                                                  class="fa-solid fa-circle-check"></i></span>Tastes better with milk
                                      </li>
                                      <li><span class="me-2 text-primary"><i
                                                  class="fa-solid fa-circle-check"></i></span>Vitamins B2, B3, B5 and
                                          B6</li>
                                      <li><span class="me-2 text-primary"><i
                                                  class="fa-solid fa-circle-check"></i></span>Refrigerate for freshness
                                      </li>
                                  </ul>
                                  <h6 class="fs-md mb-2 mt-3">Weight:</h6>
                                  <ul class="product-radio-btn mb-4 d-flex align-items-center gap-2">
                                      <li>
                                          <input type="radio" name="weight" value="250g" checked>
                                          <label>150g</label>
                                      </li>
                                      <li>
                                          <input type="radio" name="weight" value="250g">
                                          <label>500g</label>
                                      </li>
                                      <li>
                                          <input type="radio" name="weight" value="250g">
                                          <label>1kg</label>
                                      </li>
                                  </ul>
                                  <div class="d-flex align-items-center gap-4 flex-wrap">
                                      <div class="product-qty d-flex align-items-center">
                                          <button class="decrese">-</button>
                                          <input type="text" value="01">
                                          <button class="increase">+</button>
                                      </div>
                                      <a href="#" class="btn btn-secondary btn-md"><span class="me-2"><i
                                                  class="fa-solid fa-cart-plus"></i></span>Add to Cart</a>
                                  </div>
                                  <div class="categories mt-4">
                                      <a href="#" class="btn btn-outline btn-sm">Vegetable</a>
                                      <a href="#" class="btn btn-outline btn-sm">Healthy</a>
                                      <a href="#" class="btn btn-outline btn-sm">Organic</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> <!--modal box end-->




  </div>



  <!--scroll bottom to top button start-->
  <button class="scroll-top-btn">
      <i class="fa-regular fa-hand-pointer"></i>
  </button>
  <!--scroll bottom to top button end-->
  <!--build:js-->
  <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendors/jquery-ui.min.js"></script>
  <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendors/swiper-bundle.min.js"></script>
  <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/vendors/simplebar.min.js"></script>
  <script src="assets/js/vendors/parallax-scroll.js"></script>
  <script src="assets/js/vendors/isotop.pkgd.min.js"></script>
  <script src="assets/js/vendors/countdown.min.js"></script>
  <script src="assets/js/vendors/range-slider.js"></script>
  <script src="assets/js/vendors/waypoints.js"></script>
  <script src="assets/js/vendors/counterup.min.js"></script>
  <script src="assets/js/vendors/typer.js"></script>
  <script src="assets/js/app.js"></script>
  <script></script>
  <script>
      $(document).ready(function() {
          $('.item_establishment').click();
      });
  </script>
  <!--endbuild-->
  </body>

  <!-- Mirrored from grostore-html.themetags.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 06:59:37 GMT -->

  </html>
