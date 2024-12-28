<?php
include('header.php');
?>

<!-- carousel-start -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/chaha-hero.png" class="d-block w-100" alt="...">
                <div class="carousel-caption  ">
                    <h5 class="fs-1 fw-bold text-uppercase lh-base text-yellow">We Have Something <br>Special Tea</h5>
                    <p class="text-white">Some representative placeholder content for the first slide.Some <br>
                        representative placeholder
                        content for the first slide.</p>
                    <button type="button" class="btn btn-light px-4 ">Order Now</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/chaha-hero2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption  ">
                    <h5 class="fs-1 fw-bold text-uppercase lh-base text-white me-5">We Have Something <br>Special Tea
                    </h5>
                    <p class="text-white">Some representative placeholder content for the first slide.Some <br>
                        representative placeholder
                        content for the first slide.</p>
                    <button type="button" class="btn btn-light text-dark px-4">Order Now</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/chaha-hero4.png" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <h5 class="fs-1 fw-bold text-uppercase lh-base text-yellow">We Have Something <br>Special Tea</h5>
                    <p class="text-white">Some representative placeholder content for the first slide.Some<br>
                        representative placeholder
                        content for the first slide.</p>
                    <button type="button" class="btn btn-light px-4">Order Now</button>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel-end -->

    <!-- about-start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- <div class="col-lg-6"> -->
                <div class="aboutbanner banner col-lg-6">
                    <div class="about-image image1"><a href="#"><img src="img/cat-img (5).png" alt="cms-banner"
                                width="380" height="520"></a></div>
                    <div class="about-image image2"><a href="#"><img src="img/new-img (4).jpeg" alt="cms-banner"
                                width="380" height="520"></a></div>
                </div>
                <!-- <img src="img/tea1.jpg" class="img-fluid" alt=""> -->
                <!-- </div> -->
                <div class="col-lg-6 about-margin">
                    <h6 class="section-title bg-white  title-color px-2 ms-5 mt-3">About</h6>
                    <h1 class="mb-4">Welcome To <i class="bi bi-cup-hot text-warning me-2"></i>Tea House</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-warning px-3">
                                <h1 class="flex-shrink-0 display-5 text-warning mb-0 fw-bold" data-toggle="counter-up">
                                    15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0 text-dark fw-bold">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-warning px-3">
                                <h1 class="flex-shrink-0 display-5 text-warning mb-0 fw-bold" data-toggle="counter-up">
                                    50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0 text-dark fw-bold">Master Chefs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-warning py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- about-end -->
    <!-- Categories-start -->
    <div class="text-center mt-5">
        <h6 class="section-title bg-white text-center title-color px-3">Categories</h6>
        <h1 class="mb-5 fs-4">Categories Of Our Tea Products</h1>
    </div>
    <section class="tea-img mt-5 p-5">
        <div class="container">


            <div class="row mt-4">
                <div class="col-lg-3 ">
                    <img src="img/cat-img (5).png" class="img-fluid w-100 p-2 " alt="">
                    <h2 class="text-center fs-4 mt-2 ">Green Tea</h2>
                </div>
                <div class="col-lg-3">
                    <img src="img/cat-img (3).png" class="img-fluid w-100 p-2" alt="">
                    <h2 class="text-center fs-4 mt-2">Nilgiri Tea</h2>
                </div>
                <div class="col-lg-3">
                    <img src="img/cat-img1 (2).png" class="img-fluid w-100 p-2" alt="">
                    <h2 class="text-center fs-4 mt-2">Assam Tea</h2>
                </div>
                <div class="col-lg-3">
                    <img src="img/cat-img1 (3).png" class="img-fluid w-100 p-2" alt="">
                    <h2 class="text-center fs-4 mt-2">Black Tea</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories-end -->

    <!-- menu-start -->
    <section class="menu mt-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center title-color px-3">Menu</h6>
                <h1 class="mb-5 fs-4">Menu Of Our Tea Products</h1>
            </div>
            <div class="row g-3">
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch fadeInUp ftco-animated">
                        <div class="menu-img img">
                            <img src="img/coffee1 (1).jpg" class="img-fluid" alt="">
                        </div>
                        <div class="text d-flex align-items-center">
                            <div>
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3 class="fs-5">Jaggery Masala Tea</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price fw-bold">$29</span>
                                    </div>
                                </div>
                                <p><span>green tea</span>, <span>Nilgiri Tea</span></p>
                                <p class="mt-3"><button type="button" class="btn btn-warning">Order now</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch fadeInUp ftco-animated">
                        <div class="menu-img img">
                            <img src="img/coffee1 (1).jpg" class="img-fluid" alt="">
                        </div>
                        <div class="text d-flex align-items-center">
                            <div>
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3 class="fs-5">Sugar Masala Tea</h3>
                                    </div>
                                    <div class="one-forth">
                                        <span class="price fw-bold">$29</span>
                                    </div>
                                </div>
                                <p><span>green tea</span>, <span>Nilgiri Tea</span></p>
                                <p class="mt-3"><button type="button" class="btn btn-warning">Order now</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- menu-end  -->

    <!-- video-section-start -->
    <section class="video-section mt-5 ">
        <div class="container">
            <div class="text-center mt-5">
                <h6 class="section-title bg-white text-center title-color px-3">Video</h6>
                <h1 class="mb-5 fs-4">Video Of Our Tea Products</h1>
            </div>
            <div class="row g-2">
                <div class="col-lg-6">
                    <div class="video-img">
                        <div class="video-relative"> <img src="img/about-new-img.png" class="w-100 img-fluid" alt="">
                            <!-- <div class="video-absolute"> <a href="img/gallery-video.mp4"> <i
                                        class="bi bi-play-circle-fill position-absolute "></i></a>
                            </div> -->
                            <!-- <a id="play-video" class="video-play-button" href="img/gallery-video.mp4" data-toggle="modal"
                            data-target="#savoybeachhotel">
                            <span></span>
                        </a> -->
                        <div class="wrapper">
                            <div class="video-main">
                              <div class="promo-video">
                                <div class="waves-block">
                                  <div class="waves wave-1"></div>
                                  <div class="waves wave-2"></div>
                                  <div class="waves wave-3"></div>
                                </div>
                              </div>
                              <a href="img/gallery-video.mp4" class="video video-popup mfp-iframe" data-lity><i class="bi bi-play-circle-fill"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-text">
                        <h1 class="fs-2 text-center text-warning pt-5">Opening Hours & Reservations</h1>
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="time text-light ms-5 mt-5">
                                    <h6 class="mt-5 fs-5 text-warning">Time:</h6>
                                    <p>Monday – Friday // 09:00 - 22:00</p>
                                    <p>Saturday // 10:00 – 22:00</p>
                                    <p>Sunday // 11.00 - 23.00</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="time text-light mt-5 ms-5">
                                    <h6 class="mt-5 fs-5 text-warning">Booking numbers:</h6>
                                    <p>+9606504855 </p>
                                    <p>9008018983</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video-section-end -->


   
    <!-- <div id="videoContainer">
        <iframe width="200" height="283" src="img/gallery-video.mp4" frameborder="0" allowfullscreen wmode="Opaque"></iframe>
      </div> -->
    <!-- 
      <a href="img/gallery-video.mp4">
              <img src=
      "img/about-new-img.png" 
                  width="100"
                  height="100" />
          </a> -->

    <!-- testimonial-start -->
    <div class="testimonial-section mt-5">
        <div class="container py-4 text-center">
            <div class="text-center">
                <h6 class="section-title bg-white text-center title-color px-3">Testimonial</h6>
                <h1 class="mb-5 fs-4">What Our Clients Say About Our Digital Services</h1>
            </div>


            <div class="swiper mySwiper mt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="test-card w-100">
                            <div class="test-header d-flex gap-4 border-bottom pb-4">
                                <div class="client-img">
                                    <img src="img/user1 (1).jpg" alt="" class="img-fluid">

                                </div>
                                <div class="swiper-content">
                                    <h5 class="main-primary fw-bold text-start">Client Name</h5>
                                    <p class="text-secondary para-content text-start">PROFESSION</p>

                                </div>
                            </div>
                            <div class="para pt-4 text-start">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. Clita erat ipsum et lorem et sit, </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="test-card w-100">
                            <div class="test-header d-flex gap-4 border-bottom pb-4">
                                <div class="client-img">
                                    <img src="img/user1 (2).jpg" alt="" class="img-fluid">

                                </div>
                                <div class="swiper-content">
                                    <h4 class="main-primary fw-bold">Client Name</h4>
                                    <p class="text-secondary para-content text-start">PROFESSION</p>

                                </div>
                            </div>
                            <div class="para pt-4 text-start">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. Clita erat ipsum et lorem et sit, </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="test-card w-100">
                            <div class="test-header d-flex gap-4 border-bottom pb-4">
                                <div class="client-img">
                                    <img src="img/user1 (3).jpg" alt="" class="img-fluid">

                                </div>
                                <div class="swiper-content">
                                    <h4 class="main-primary fw-bold">Client Name</h4>
                                    <p class="text-secondary para-content text-start">PROFESSION</p>

                                </div>
                            </div>
                            <div class="para pt-4 text-start">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. Clita erat ipsum et lorem et sit, </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="test-card w-100">
                            <div class="test-header d-flex gap-4 border-bottom pb-4">
                                <div class="client-img">
                                    <img src="img/user1 (1).jpg" alt="" class="img-fluid">

                                </div>
                                <div class="swiper-content">
                                    <h4 class="main-primary fw-bold">Client Name</h4>
                                    <p class="text-secondary para-content text-start">PROFESSION</p>

                                </div>
                            </div>
                            <div class="para pt-4 text-start">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. Clita erat ipsum et lorem et sit, </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="test-card w-100">
                            <div class="test-header d-flex gap-4 border-bottom pb-4">
                                <div class="client-img">
                                    <img src="img/user1 (2).jpg" alt="" class="img-fluid">

                                </div>
                                <div class="swiper-content">
                                    <h4 class="main-primary fw-bold">Client Name</h4>
                                    <p class="text-secondary para-content text-start">PROFESSION</p>

                                </div>
                            </div>
                            <div class="para pt-4 text-start">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. Clita erat ipsum et lorem et sit, </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="test-card w-100">
                            <div class="test-header d-flex gap-4 border-bottom pb-4">
                                <div class="client-img">
                                    <img src="img/user1 (3).jpg" alt="" class="img-fluid">

                                </div>
                                <div class="swiper-content">
                                    <h4 class="main-primary fw-bold">Client Name</h4>
                                    <p class="text-secondary para-content text-start">PROFESSION</p>

                                </div>
                            </div>
                            <div class="para pt-4 text-start">
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                    amet diam et eos labore. Clita erat ipsum et lorem et sit, </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- testimonial-end -->

<?php
include('footer.php');
?>    