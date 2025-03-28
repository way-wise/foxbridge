<!DOCTYPE html>
<html>

<head>
  <title>Foxbridge Golf-Scenic 18holes newly renovated Clubhouse & dining</title>
  <meta name="description"
    content="One of the finest Golf Course for all skill levels offering tranquility & natural beauty in Uxbridge ONT" />
  <meta name="google-site-verification" content="YLLr1MOoi_W9TwIzW1w8iFiZ-zGCI4RK6Y_UE4EUvzc" />
  <link rel="icon" href="images/fave_icon.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <!-- Bootstrap datepicker CSS -->
  <link rel="stylesheet" href="css/bootstrap-datepicker3.standalone.min.css" />
  <link rel="stylesheet" type="text/css" href="css/mutual-temp.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
    rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="owl/css/owl.carousel.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    @media (max-width: 768px) {
    .datepicker.dropdown-menu {
      position: fixed;
      top: auto !important;
      left: 10px !important;
      bottom: 10px !important;
      right: 10px !important;
      z-index: 9999999;
      width: calc(100% - 20px);
      height: 50%;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 10px;
      font-size: 14px;
      color: #333;
      font-family: Arial, sans-serif;
    }
  }
    .datepicker table {
      width: 100%;
      height: 100%;
    }
    .datepicker table tr {
      width: 100%;
      height: 100%;
    }
    .datepicker table tr td, .datepicker table tr th {
      height: 40px;
      font-size: 20px;
    }
    .datepicker {
      background-color: #f8f9fa;
      border: 1px solid #007bff;
      border-radius: 5px;
    }
    .datepicker table {
      width: 100%;
      color: #333;
    }
    .datepicker table tr td, .datepicker table tr th {
      height: 40px;
      text-align: center;
      margin: 2px;
    }
    .datepicker table tr td.disabled {
      background-color: #e9ecef;
      color: #6c757d;
      position: relative;
    }
    .datepicker table tr td.disabled:not(.active):after {
      content: '';
      position: absolute;
      top: 30%;
      left: 60%;
      width: 50%;
      height: 2px;
      background-color: #6c757d;
      transform: translate(-50%, -50%) rotate(45deg);
      transform-origin: left;
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-226072037-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-226072037-1');
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://www.foxbridge.ca",
      "logo": "https://www.foxbridge.ca/images/logo.png"
    }
    </script>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PC29HRSM');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC29HRSM" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="homeBookTeaTime">
    <?php echo implode('', file('include/header.php')); ?>
  </div>


  <!--START Mobile View Tea Time popup-->
  <div class="offcanvas offcanvas-bottom Teetimepopup d-md-none d-lg-none d-block " tabindex="-1" id="BookTeaTime">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title"></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
      <div class="container">
        <div class="popupTeaTime">
          <div class="text-center">
            <div class="price-toggle-wrap">
              <a href="javascript:void(0);" class="active">
                Tee Time
              </a>
              <a href="javascript:void(0);">
                Indoor Sim
              </a>
            </div>
          </div>



          <div class="pricing-tab-content-wrap">
            <!-- Golf  Start-->
            <div class="pricing-tab-toggle-content active">
              <div class="row">
                <div class="col-12 p-3">
                  <div class="selectLocation commondropdown">
                    <label for="floatingSelect"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="locationValue">Foxbridge Golf Club</div>
                      <div class="border-left courseimage" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Click to View the Courses">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#courses">
                          <img src="images/golf-course.png" width="30" height="30"></a>
                      </div>
                    </div>
                    <div style="clear:both"></div>

                  </div>
                </div>
                <div class="col-12 p-3">
                  <div class="form-floating">
                    <div class="input-group date form-control">
                      <input type="text" value="YYYY-MM-DD" id="tee-date" class="tee-date" placeholder="YYYY-MM-DD"
                        readonly><span class="input-group-addon"><i class="fa fa-calendar-o calenderstyle"></i></span>
                    </div>
                    <label for="Date"><i class="fa fa-calendar" aria-hidden="true"></i> Date</label>
                  </div>
                </div>

                <!-- <div class="col-12 p-3">
                  <div class="form-floating">
                    <select class="form-select tee-players" id="tee-players" aria-label="Players">
                      <option value="">Select Players</option>
                      <option value="1">1 Player</option>
                      <option value="2">2 Players</option>
                      <option value="3">3 Players</option>
                      <option value="4">4 Players</option>
                    </select>
                    <label for="Players"><i class="fa fa-user" aria-hidden="true"></i> Players</label>
                  </div>
                </div>

                <div class="col-12 border-bottom p-3">
                  <div class="form-floating">
                    <select class="form-select tee-holes" id="tee-holes" aria-label="Holes">
                      <option value="">Select Holes</option>
                      <option value="9">9 - holes</option>

                      <option value="18">18 - holes</option>
                    </select>
                    <label for="Holes"><i class="fa fa-flag" aria-hidden="true"></i> Holes</label>
                  </div>
                </div> -->

                <div class="col-12 p-3 d-flex align-items-center justify-content-center">
                  <a class="tee-search"> <span class="pe-2"><i class="fa fa-search" aria-hidden="true"></i></span>
                    Search </a>
                </div>

              </div>

            </div>
            <!-- Golf  End-->

            <!-- Pro  Start-->
            <div class="pricing-tab-toggle-content">
              <div class="row">
                <div class="col-12 p-3">
                  <div class="selectLocation commondropdown">
                    <label for="floatingSelect"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="locationValue pt-1 pb-2">Foxbridge Golf Club</div>

                    </div>
                    <div style="clear:both"></div>

                  </div>
                </div>
                <div class="col-12 p-3">
                  <div class="form-floating">
                    <div class="input-group date form-control">
                      <input type="text" value="YYYY-MM-DD" id="tee-date" class="tee-date" placeholder="YYYY-MM-DD"
                        readonly><span class="input-group-addon"><i class="fa fa-calendar-o calenderstyle"></i></span>
                    </div>
                    <label for="Date"><i class="fa fa-calendar" aria-hidden="true"></i> Date</label>
                  </div>
                </div>


                <div class="col-12 p-3 d-flex align-items-center justify-content-center">
                  <a class="tee-search"> <span class="pe-2"><i class="fa fa-search" aria-hidden="true"></i></span>
                    Search </a>
                </div>

              </div>
            </div>
            <!-- Pro  End-->

          </div>







        </div>


      </div>
    </div>
  </div>
  <!--END Mobile View  Tea Time popup-->



  <div class="preloader">
    <div>
      <div class="loader"></div>
      <h1>Loading<span class="dit1">.</span><span class="dit2">.</span><span class="dit3">.</span></h1>
      <p class="blinking blink">Blink, blink</p>
    </div>
  </div>

  <!--START Desktop View TEE TIME Search-->
  <!-- <div class="bookTeaTime" id="navbar">
    <div class="container-fluid">
      <div class="innerbookTeaTime">
        <div class="row row-cols-5">
          <div class="col border-right">
            <div class="selectLocation commondropdown">
              <label for="floatingSelect"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>
              <div class="d-flex justify-content-between align-items-center">
                <div class="locationValue">Foxbridge Golf Club</div>
                <div class="border-left courseimage" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="Click to View the Courses">
                  <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#courses">
                    <img src="images/golf-course.png" width="30" height="30"></a>
                </div>
              </div>
              <div style="clear:both"></div>

            </div>
          </div>
          <div class="col border-right">
            <div class="selectDate commondropdown">
              <label for="Date"><i class="fa fa-calendar" aria-hidden="true"></i> Date</label>
              <div class="input-group date">
                <input type="text" id="tee-date" class="form-control tee-date" readonly value="YYYY-MM-DD"
                  placeholder="YYYY-MM-DD"><span class="input-group-addon"><i
                    class="fa fa-calendar-o calenderstyle"></i></span>
              </div>

            </div>
          </div>

          <div class="col border-right">
            <div class="commondropdown">
              <label for="tee-players"><i class="fa fa-user" aria-hidden="true"></i> Players</label>
              <select class="form-select tee-players" id="tee-players" aria-label="tee-players">
                <option value="">Select Players</option>
                <option value="1">1 Player</option>
                <option value="2">2 Player</option>
                <option value="3">3 Player</option>
                <option value="4">4 Player</option>
              </select>
            </div>
          </div>

          <div class="col border-right">
            <div class="commondropdown">
              <label for="tee-holes"><i class="fa fa-flag" aria-hidden="true"></i> Holes</label>
              <select class="form-select tee-holes" id="tee-holes" aria-label="tee-holes">
                <option value="">Select Holes</option>
                <option value="9">9 - holes</option>

                <option value="18">18 - holes</option>
              </select>
            </div>
          </div>

          <div class="col d-flex align-items-center justify-content-center">
            <a class="tee-search" style="cursor: pointer;"> <span class="pe-2"><i class="fa fa-search"
                  aria-hidden="true"></i></span> Search </a>
          </div>

        </div>

      </div>
    </div>
  </div> -->
  <!--END Desktop View TEE TIME Search-->

  <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" class="d-block w-100">
        <div class="overlay-bg"></div>
        <div class="carousel-caption  d-md-block">
          <h5>Foxbridge Golf Club</h5>
          <p>Golf, Tournaments, Leagues, Restaurant & Bar</p>
        </div>

      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" class="d-block w-100">
        <div class="overlay-bg"></div>
        <div class="carousel-caption d-md-block">
          <h5 data-aos="fade-down">South Course</h5>
          <p>9 Hole | Experience a great golf getaway</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-block w-100">
        <div class="overlay-bg"></div>
        <div class="carousel-caption d-md-block">
          <h5>North Course</h5>
          <p>9 Hole | Quiet, unique and scenic</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/4.jpg" class="d-block w-100">
        <div class="overlay-bg"></div>
        <div class="carousel-caption d-md-block">
          <h5 data-aos="fade-down">Foxbridge</h5>
          <p>Club House</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->


  <div>
    <div class="video-background-holder relative">
      <div class="video-background-overlay"></div>
      <video playsinline="playsinline" poster="images/1.jpg" autoplay="autoplay" muted="muted" loop="loop">
        <source src="videos/intro.mp4" type="video/mp4">
      </video>
      <div class="video-background-content container h-100">
        <div class="flex h-100 text-center justify-center items-center">
          <div class="w-full">
            <div class="w-100 text-white pt-8">
              <span class="text-sm bg-white backdrop-blur px-4 py-2 rounded-full text-black inline-block !mb-3">Golf,
                Tournaments, Leagues, Restaurant & Bar</span>
              <h1 class="display-4 text-white">Welcome to <br> Foxbridge Golf Club</h1>
              <p class="lead mb-0">Experience Golf at its Finest</p>
            </div>
            <div class="innerbookTeaTime w-full max-w-[500px] !rounded-xl !mt-8 !p-5">
              <h2 class="text-black !text-2xl font-bold mb-2">Book Tee Time</h2>
              <div class="grid grid-cols-3">
                <!-- <div class="col border-right">
                  <div class="selectLocation commondropdown">
                    <label for="floatingSelect"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</label>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="locationValue">Foxbridge Golf Club</div>
                      <div class="border-left courseimage" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Click to View the Courses">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#courses">
                          <img src="images/golf-course.png" width="30" height="30"></a>
                      </div>
                    </div>
                    <div style="clear:both"></div>

                  </div>
                </div> -->
                <div class="col-span-2 border-right">
                  <div class="selectDate commondropdown !items-start">
                    <label for="Date" class="flex gap-2 items-center w-full"><i class="fa fa-calendar"
                        aria-hidden="true"></i> Date</label>
                    <div class="input-group date">
                      <input type="text" id="tee-date" class="form-control tee-date" readonly value="YYYY-MM-DD"
                        placeholder="YYYY-MM-DD"><span class="input-group-addon"><i
                          class="fa fa-calendar-o calenderstyle"></i></span>
                    </div>
                  </div>
                </div>

                <!-- <div class="col border-right">
                  <div class="commondropdown">
                    <label for="tee-players"><i class="fa fa-user" aria-hidden="true"></i> Players</label>
                    <select class="form-select tee-players" id="tee-players" aria-label="tee-players">
                      <option value="">Select Players</option>
                      <option value="1">1 Player</option>
                      <option value="2">2 Player</option>
                      <option value="3">3 Player</option>
                      <option value="4">4 Player</option>
                    </select>
                  </div>
                </div> -->

                <!-- <div class="col border-right">
                  <div class="commondropdown">
                    <label for="tee-holes"><i class="fa fa-flag" aria-hidden="true"></i> Holes</label>
                    <select class="form-select tee-holes" id="tee-holes" aria-label="tee-holes">
                      <option value="">Select Holes</option>
                      <option value="9">9 - holes</option>

                      <option value="18">18 - holes</option>
                    </select>
                  </div>
                </div> -->
                <div class="col d-flex align-items-center justify-content-end">
                  <a class="tee-search" style="cursor: pointer;"> <span class="pe-2"><i class="fa fa-search"
                        aria-hidden="true"></i></span> Search </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <img src="svgs/hero-bottom-shape.svg" alt=""
        class="hidden xl:block absolute z-50 -bottom-5 left-0 w-full h-full max-h-[162px]">
    </div>

    <style>
      .video-background-holder {
        position: relative;
        height: 100%;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
      }

      @media (max-width: 991px) {
        .video-background-holder {
          min-height: 50vh;
        }
      }

      .video-background-holder video {
        position: absolute;
        top: -100px;
        bottom: -100px;
        left: 0;
        min-width: 100%;
        min-height: calc(100vh + 200px);
        width: 100%;
        height: 100%;
        z-index: 0;
        object-fit: cover;
      }

      .video-background-content {
        position: relative;
        z-index: 2;
      }

      @media (pointer: coarse) and (hover: none) {
        .video-background-holder {
          background: url('images/1.jpg') black no-repeat center center scroll;
        }

        .video-background-holder video {
          display: none;
        }
      }

      .display-4 {
        font-weight: 700;
      }
    </style>
  </div>

  <section class="welcome text-center relative z-50 xl:pt-0 pt-12">
    <div class="container">
      <div
        class="grid lg:grid-cols-5 sm:grid-cols-3 grid-cols-2  gap-4 light mb-5 justify-content-center align-items-center">
        <div class="welcome_clm rounded-2xl overflow-hidden h-[180px] relative" data-aos="fade-up" data-aos-delay="300">
          <a href="tournament.php" class="size-full">
            <img src="images/s1.png" class="w-full h-full object-cover">
            <div
              class="absolute flex flex-col items-center justify-center top-0 left-0 w-full h-full !text-white bg-[#f27b0a]/50">
              <span class="-rotate-135">&#8595;</span>
              <h3 class="!text-white">Tournaments</h3>
            </div>
          </a>
        </div>
        <div class="welcome_clm rounded-2xl overflow-hidden h-[180px] relative" data-aos="fade-up" data-aos-delay="400">
          <a href="league.php" class="size-full">
            <img src="images/mixed-golf.jpeg" class="w-full h-full object-cover">
            <div
              class="absolute flex flex-col items-center justify-center top-0 left-0 w-full h-full !text-white bg-[#f27b0a]/50">
              <span class="-rotate-135">&#8595;</span>
              <h3 class="!text-white">Leagues</h3>
            </div>
          </a>
        </div>
        <div class="welcome_clm rounded-2xl overflow-hidden h-[180px] relative" data-aos="fade-up" data-aos-delay="500">
          <a href="membership.php" class="size-full">
            <img src="images/landing-gallery/1.jpg" class="w-full h-full object-cover object-center">
            <div
              class="absolute flex flex-col items-center justify-center top-0 left-0 w-full h-full !text-white bg-[#f27b0a]/50">
              <span class="-rotate-135">&#8595;</span>
              <h3 class="!text-white">Memberships</h3>
            </div>
          </a>
        </div>
        <div class="welcome_clm rounded-2xl overflow-hidden h-[180px] relative" data-aos="fade-up" data-aos-delay="500">
          <a href="camp.php" class="size-full">
            <img src="images/juniors.jpg" class="w-full h-full object-cover">
            <div
              class="absolute flex flex-col items-center justify-center top-0 left-0 w-full h-full !text-white bg-[#f27b0a]/50">
              <span class="-rotate-135">&#8595;</span>
              <h3 class="!text-white">Summer Camp</h3>
            </div>
          </a>
        </div>
        <div class="welcome_clm rounded-2xl overflow-hidden h-[180px] relative" data-aos="fade-up" data-aos-delay="600">
          <a href="simulators.html" class="size-full">
            <img src="images/s4.png" class="w-full h-full object-cover">
            <div
              class="absolute flex flex-col items-center justify-center top-0 left-0 w-full h-full !text-white bg-[#f27b0a]/50">
              <span class="-rotate-135">&#8595;</span>
              <h3 class="!text-white">Indoor Simulators</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="container content mb-5" data-aos="fade-up">
      <h2><span data-aos="fade-right" data-aos-delay="300">Welcome</span> <span data-aos="fade-right"
          data-aos-delay="500">To</span> <span data-aos="fade-right" data-aos-delay="700">Foxbridge</span> <span
          data-aos="fade-right" data-aos-delay="900">Golf</span> <span data-aos="fade-right"
          data-aos-delay="1200">Club</span></h2>
      <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
      <p class="max-w-[820px] mx-auto !text-gray-600 !mt-4 !mb-12">Foxbridge Golf Course is located on the edge of
        Uxbridge only an hour NE from downtown Toronto. It features
        rolling terrain, sandy soil, tight fairways, mature trees and well-manicured greens. Foxbridge has seen
        numerous improvements over the past decade, including several rebuilt holes and a gorgeous new clubhouse. The
        front and back nines are connected by a scenic cart path running from the clubhouse on the south course
        through the woods to the north. Check out our latest improvements on the north - a brand new par three hole
        with an island tee shooting to a brand new green with a mature forest backdrop. We also combined two of our
        other holes into a new par 5</p>
      <!--<a href="#" class="theme_btn">Learn More</a> -->
    </div>
    </div>
  </section>
  <!--<section class="club_history">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="content">
          <h2>Club History</h2>
          <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
          <div class="history_tabs">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1958</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-home" aria-selected="true">2021</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-home" aria-selected="true">2008</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-home" aria-selected="true">2016</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-home" aria-selected="true">2021</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                <p>1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sapien id orci pellentesque mattis vitae vel orci. Duis id semper nulla. Quisque blandit sem felis, sed laoreet turpis imperdiet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
              </div>
              <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-home-tab">
                <p>2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sapien id orci pellentesque mattis vitae vel orci. Duis id semper nulla. Quisque blandit sem felis, sed laoreet turpis imperdiet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
              </div>
              <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-home-tab">
                <p>3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sapien id orci pellentesque mattis vitae vel orci. Duis id semper nulla. Quisque blandit sem felis, sed laoreet turpis imperdiet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
              </div>
              <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-home-tab">
                <p>4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sapien id orci pellentesque mattis vitae vel orci. Duis id semper nulla. Quisque blandit sem felis, sed laoreet turpis imperdiet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
              </div>
              <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-home-tab">
                <p>5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae sapien id orci pellentesque mattis vitae vel orci. Duis id semper nulla. Quisque blandit sem felis, sed laoreet turpis imperdiet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
  <section class="take">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <!-- <div class="img_box rounded-2xl overflow-hidden">
            <img src="images/img1.jpg">
          </div> -->
          <div id="carouselExampleControls"
            class="carousel slide !mb-0 flex gap-3 items-center justify-center !bg-transparent" data-bs-ride="carousel">
            <div class="w-full relative">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/welcome-slider/club-house-1.jpeg" class="d-block w-100 rounded-md" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/welcome-slider/club-house-2.jpeg" class="d-block w-100 rounded-md" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/welcome-slider/slider-04.webp" class="d-block w-100 rounded-md" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/welcome-slider/slider-01.jpg" class="d-block w-100 rounded-md" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/welcome-slider/slider-02.jpg" class="d-block w-100 rounded-md" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/welcome-slider/slider-03.jpg" class="d-block w-100 rounded-md" alt="...">
                </div>
              </div>

              <!-- Keep the arrow controls -->
              <button
                class="carousel-control-prev !opacity-100 !inline-flex !top-1/2 !bottom-auto !-translate-y-1/2 !p-2 !rounded-full !border-2 !border-white !max-w-max !start-3"
                type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next !opacity-100 !inline-flex !top-1/2 !bottom-auto !-translate-y-1/2 !p-2 !rounded-full !border-2 !border-white !max-w-max !end-3"
                type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="content lg:ps-12">
            <h2 data-aos="fade-down">Foxbridge Lounge & Golf Simulator</h2>
            <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
            <p data-aos="fade-up">Foxbridge Club house with our newly renovated patios with beautiful views offers
              variety of Grab and go menu and is after completing the 9th hole or at time of check-ins </p>
            <!--<a data-aos="fade-up" href="#" class="theme_btn">See menu</a>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="hole_golf light yellowback">
    <div class="container">
      <div class="col-md-8 d-table theme_bg hole_clm">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-5">
            <div class="txt_icon  items-start" data-aos="zoom-in" data-aos-delay="200">
              <div
                class="img_iocn min-w-20 size-20 bg-white p-2 rounded-full overflow-hidden inline-flex items-center justify-center">
                <img src="images/i1.png">
              </div>
              <div class="txt_box">
                <h3>18- Hole Golf Course</h3>
                <p>Parking, restaurant, Pro-shop <br> and the check-in at the South Course</p>
                <a href="#">Learn More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 mb-5">
            <div class="txt_icon items-start" data-aos="zoom-in" data-aos-delay="400">
              <div
                class="img_iocn min-w-20 size-20 bg-white p-2 rounded-full overflow-hidden inline-flex items-center justify-center">
                <img src="images/i2.png">
              </div>
              <div class="txt_box">
                <h3>Across More Than 200 Acres</h3>
                <p>Well maintanted greens and turfs</p>
                <!--<a href="#">Learn More</a>-->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-lg-0 mb-md-5 mb-sm-5">
            <div class="txt_icon items-start" data-aos="zoom-in" data-aos-delay="500">
              <div
                class="img_iocn min-w-20 size-20 bg-white p-2 rounded-full overflow-hidden inline-flex items-center justify-center">
                <img src="images/9hole.png">
              </div>
              <div class="txt_box">
                <h3>Unique And Beautiful</h3>
                <p>9 holes on the South Course <br>and other 9 on the North Course, very quite and Scenic</p>
                <!--<a href="#">Learn More</a>-->
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 ">
            <div class="txt_icon items-start" data-aos="zoom-in" data-aos-delay="600">
              <div
                class="img_iocn min-w-20 size-20 bg-white p-2 rounded-full overflow-hidden inline-flex items-center justify-center">
                <img src="images/i4.png">
              </div>
              <div class="txt_box">
                <h3>Since 1961</h3>
                <p>Recently renovated Club house and well maintained greens and turfs. </p>
                <!--<a href="#">Learn More</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- gallery section -->
  <section class="services text-center py-20">
    <div class="container">
      <div class="sec_title mb-4">
        <h2>Gallery</h2>
        <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
      </div>
      <div class="slider_row">
        <div class="slider owl-carousel">
          <div class="item">
            <div class="content">
              <div class="grid grid-cols-3 gap-2.5 grid-rows-2 lg:h-[600px] h-[320px]">
                <img src="images/landing-gallery/1.jpg" alt="" class="w-full h-full object-cover row-span-2">
                <img src="images/landing-gallery/2.jpg" alt="" class="w-full h-full object-cover">
                <img src="images/landing-gallery/3.jpg" alt="" class="w-full h-full object-cover">
                <img src="images/landing-gallery/4.jpg" alt="" class="w-full h-full object-cover col-span-2">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="grid grid-cols-3 gap-2.5 grid-rows-2 lg:h-[600px] h-[320px]">
                <img src="images/landing-gallery/5.jpg" alt="" class="w-full h-full object-cover row-span-2">
                <img src="images/landing-gallery/6.jpg" alt="" class="w-full h-full object-cover">
                <img src="images/landing-gallery/7.jpg" alt="" class="w-full h-full object-cover">
                <img src="images/landing-gallery/8.jpg" alt="" class="w-full h-full object-cover col-span-2">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="grid grid-cols-3 gap-2.5 grid-rows-2 lg:h-[600px] h-[320px]">
                <img src="images/landing-gallery/9.jpg" alt="" class="w-full h-full object-cover row-span-2">
                <img src="images/landing-gallery/10.png" alt="" class="w-full h-full object-cover">
                <img src="images/landing-gallery/11.webp" alt="" class="w-full h-full object-cover">
                <img src="images/landing-gallery/12.webp" alt="" class="w-full h-full object-cover col-span-2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- gallery 2 section -->
  <section class="services text-center">
      <div class="slider_row">
        <div class="slider owl-carousel">
          <div class="item relative lg:min-h-[650px] min-h-[400px] bg-cover bg-no-repeat bg-center" style="background-image: url('images/welcome-slider/club-house-2.jpeg');">
            <div class="max-w-xl absolute top-1/2 left-12 -translate-y-1/2 flex items-center justify-center">
              <div class="!rounded-xl bg-white !text-left text-black p-10 h-full">
                  <h2 class="!text-3xl font-bold mb-3 !text-left">Scrambles Restaurant & Bar</h2>
                  <p>Experience the vibrant atmosphere of Scrambles Restaurant & Bar, where every bite and sip is a delight.</p>
                  <a href="dining-bar.php" class="theme_btn">Learn More</a>
              </div>
            </div>
          </div>
          <div class="item relative lg:min-h-[650px] min-h-[400px] bg-cover bg-no-repeat bg-center" style="background-image: url('images/gallery/13.jpg');">
          <div class="max-w-xl absolute top-1/2 left-12 -translate-y-1/2 flex items-center justify-center">
              <div class="!rounded-xl bg-white !text-left text-black p-10 h-full">
                  <h2 class="!text-3xl font-bold mb-3">Wedding & Events</h2>
                  <p>Make your special day unforgettable with our bespoke wedding and event services, tailored to your unique needs.</p>
                  <a href="venues.php" class="theme_btn">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- service section -->
  <section class="services text-center orange-bg pt-5 pb-5">
    <div class="container">
      <div class="sec_title mb-4">
        <h2>Our Services</h2>
        <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
      </div>
      <div class="slider_row">
        <div class="3_box_slider owl-carousel">
          <div class="item">
            <div class="content">
              <div class="img_box">
                <img src="images/sss1.png">
              </div>
              <div class="services_txt">
                <h3>Simulators</h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="img_box">
                <img src="images/ss2.png">
              </div>
              <div class="services_txt">
                <h3>Weddings & Events</h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="img_box">
                <img src="images/c1.png">
              </div>
              <div class="services_txt">
                <h3>Club rentals</h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">

              <a href="camps.html">
                <div class="img_box">
                  <img src="images/c2.png">
                </div>
                <div class="services_txt">
                  <h3>Training Camps <span class="small">all ages</span></h3>

                </div>
            </div>
            </a>
          </div>
          <div class="item">
            <div class="content">
              <div class="img_box">
                <img src="images/c3.png">
              </div>
              <div class="services_txt">
                <h3>Bar & Grill</h3>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="content">
              <div class="img_box">
                <img src="images/dine.jpg">
              </div>
              <div class="services_txt">
                <h3>Dining</h3>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--
<section class="Course text-center py-5">
  <div class="container">
    <div class="sec_title mb-3">
      <h2>Course Facilities</h2>
      <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
    </div>
    <div class="row">

      <div class="col-lg-4 col-md-12 mb-lg-0 mb-md-4">
              <div class="content" data-aos="zoom-in" data-aos-delay="200">
            <div class="img_box">
               <img src="images/dining.jpeg">
            </div>
            <div class="services_txt">
              <h3>Dining</h3>
              
            </div>
          </div>              
      </div>


      
      
    </div>
    <div class="btn_box mt-5">
      <a href="#" class="theme_btn">Show All</a>
    </div>
  </div>
</section>-->

  <section class="contact light">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 contact_clm">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <h3>Address</h3>
          </div>
          <div class="col-lg-6 col-md-12">
            <p>350 Reach St, Uxbridge, ON L9P 1R4</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <h3>Phone</h3>
          </div>
          <div class="col-lg-6 col-md-12">
            <p><a href="tel:123456789">(905)852-7962</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d197816.3598494816!2d-79.28427535862214!3d44.050667855357005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76ad21c1eb115ce7!2sFoxbridge%20Golf%20Course!5e0!3m2!1sen!2sin!4v1631052372626!5m2!1sen!2sin"
          width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>

      </div>
    </div>
  </section>


  <?php echo implode('', file('include/footer.php')); ?>


  <!-- Modal -->
  <div class="modal fade" id="courses" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Foxbridge Golf UX</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body termspopup foxcoursespopup">

          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <strong>South Course</strong>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div id="carouselExampleDark" class="carousel carousel-dark slide coursesslider"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/courses/fox1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 1</h5>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/courses/fox2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 2</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 3</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 4</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 5</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox6.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 6</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox7.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 7</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox8.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 8</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox9.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 9</h5>
                        </div>
                      </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                      data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                      data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <strong> North Course</strong>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div id="carouselExampleDark2" class="carousel carousel-dark slide coursesslider"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="0" class="active"
                        aria-current="true"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="3"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="4"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="5"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="6"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="7"></button>
                      <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="8"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/courses/fox10.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 10</h5>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/courses/fox11.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 11</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox12.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 12</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox13.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 13</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox14.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 14</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox15.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 15</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox16.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 16</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox17.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 17</h5>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/courses/fox18.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                          <h5>Hole - 18</h5>
                        </div>
                      </div>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2"
                      data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2"
                      data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>

      </div>
    </div>
  </div>
  <!-- Modal -->

  <a href="#" ID="backToTop">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
    </svg>
  </a>

  <script src="js/jquery.js"></script>

  <script src="owl/js/owl.carousel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


  <!-- Bootstrap datepicker JS-->
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript">


    var dObj = new Date();

    var today = `${dObj.getFullYear()}-${(dObj.getMonth() + 1)}-${dObj.getDate()} `;



    $(document).ready(function () {
      $('.tee-date').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        startDate: today,
        beforeShowDay: function(date) {
          return date >= new Date();
        }
      });

    });


  </script>
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "99px";
        $(".sticky_menu .logo img").css("width", "auto");
      } else {
        document.getElementById("navbar").style.top = "-150px";
        $(".sticky_menu .logo img").css("width", "50%");
      }
      prevScrollpos = currentScrollPos;
    }

  </script>
</body>

</html>