<?php include("include/session.php") ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Host Social Events or Corporate at Foxbridge Golf Club</title>
  <meta name="description"
    content="Club house at Foxbridge is the ideal place for a Corporate or any Social event, open all year round" />
  <link rel="icon" href="images/fave_icon.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/mutual-temp.css">
  <script src="https://kit.fontawesome.com/07aba6530d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="owl/css/owl.carousel.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-226072037-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-226072037-1');
  </script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <?php echo implode('', file('include/header.php')); ?>
  <div class="contactbanner !bg-no-repeat !bg-cover !bg-center min-h-[350px] relative"
    style="background-image: url('images/gallery/15.jpg');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container flex items-center justify-center absolute inset-0 size-full">
      <h2 class="text-white !text-5xl font-bold flex flex-col gap-4 items-center">Corporate & Social Events <br>
        <span class="w-32 inline-block mx-auto h-0.5 !bg-orange-500"></span> Outdoor & Indoor weddings
      </h2>
    </div>
  </div>

  <div class="container mt-5 inner">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div class="lg:col-span-1">
        <div id="carouselExampleControls" class="carousel slide !mb-0 flex gap-3 items-center justify-center !bg-transparent" data-bs-ride="carousel">
          <!-- Thumbnail navigation -->
          <div class="carousel-thumbnails">
            <div class="flex flex-col gap-2 justify-center items-center">
              <div class="thumb" data-bs-target="#carouselExampleControls" data-bs-slide-to="0">
                <img src="images/wedding/wedding-01.jpeg" class="img-fluid" alt="thumbnail 1">
              </div>
              <div class="thumb" data-bs-target="#carouselExampleControls" data-bs-slide-to="1">
                <img src="images/wedding/wedding-02.jpeg" class="img-fluid" alt="thumbnail 2">
              </div>
              <div class="thumb" data-bs-target="#carouselExampleControls" data-bs-slide-to="2">
                <img src="images/wedding/wedding-03.jpeg" class="img-fluid" alt="thumbnail 3">
              </div>
              <div class="thumb" data-bs-target="#carouselExampleControls" data-bs-slide-to="3">
                <img src="images/wedding/wedding-04.jpeg" class="img-fluid" alt="thumbnail 4">
              </div>
              <div class="thumb" data-bs-target="#carouselExampleControls" data-bs-slide-to="3">
                <img src="images/wedding/wedding-05.jpeg" class="img-fluid" alt="thumbnail 5">
              </div>
            </div>
          </div>
          <div class="w-full relative">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/wedding/wedding-01.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/wedding/wedding-02.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/wedding/wedding-03.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/wedding/wedding-04.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/wedding/wedding-05.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>

            <!-- Keep the arrow controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
        </div>
      </div>
      <div class="lg:col-span-1 p-8 bg-gray-50 shadow-lg rounded-lg">
        <h3 class="pb-3 px-2">Outdoor event venues & Indoor up to 160 capactiy</h3>
        <div class="eventlist">
          <ul>
            <li><a href="corporateevent/Western_Menu_packages.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-2x"
                  aria-hidden="true"></i> Western Menu packages</a></li>
            <li><a href="corporateevent/south_asian_wedding_packages.pdf" target="_blank"><i
                  class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i> South Asian Wedding Packages</a></li>
            <li><a href="corporateevent/Corporate-menu.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-2x"
                  aria-hidden="true"></i> Corporate Menu</a></li>
            <li><a href="corporateevent/CEREMONIES_location_packages_updated .pdf" target="_blank"><i
                  class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>Ceremonies Location Packages</a></li>
            <li><a href="corporateevent/BAR_PACKAGES.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-2x"
                  aria-hidden="true"></i> BAR Packages</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-5 inner" id="contact-us">
      <div class="row">
        <?php


        if (isset($_SESSION['contactForm'])) {
          ?>


          <div
            class="<?php echo (($_SESSION['contactForm']['status'] == true) ? 'payment-success' : 'payment-error') ?> mb-4">

            <div class="row">
              <div class="col-auto">
                <span class="pt-2 d-block"><i
                    class="fal  fa-2x  <?php echo (($_SESSION['contactForm']['status'] == true) ? 'fa-check-circle' : 'fa-exclamation-circle') ?>"></i></span>
              </div>
              <div class="col">

                <h5 class="pt-2"><?php echo $_SESSION['contactForm']['remarks'];
                unset($_SESSION['contactForm']); ?> </h5>

              </div>

            </div>

          </div>

          <?php

        } else {



        }


        ?>
        <h2 class="text-2xl !font-semibold !my-6 text-center">Contact us</h2>
        <div class="col-lg-12 col-sm-12" data-aos="zoom-in" data-aos-delay="200">
          <div class="formsubmit max-w-2xl mx-auto !bg-white !p-14 !rounded-xl shadow-lg">
            <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="process.php">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First Name <span class="text-danger">* </span>
                </label>
                <input type="text" name="first_name" class="form-control" id="validationCustom01"
                  value="<?php echo $form->value('first_name') ?> " required>
                <div class="invalid-feedback">
                  Please Provide First Name
                </div>
                <div class="valid-feedback">
                  Looks Good
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last Name <span class="text-danger">* </span></label>
                <input type="text" name="last_name" class="form-control" id="validationCustom02"
                  value="<?php echo $form->value('last_name') ?> " required>
                <div class="invalid-feedback">
                  Please Provide Last Name
                </div>
                <div class="valid-feedback">
                  Looks Good
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Email <span class="text-danger">* </span></label>
                <input type="email" name="email" placeholder="Email address" class="form-control"
                  id="validationCustom03" value="<?php echo $form->value('email') ?> " required>
                <div class="invalid-feedback">
                  Please provide your email address
                </div>
                <div class="valid-feedback">
                  Looks Good
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Phone number</label>
                <input type="tel" name="phone" placeholder="Mobile number" class="form-control" id="validationCustom04"
                  value="<?php echo $form->value('phone') ?> ">
                <div class="invalid-feedback">
                  Please provide a valid phone number
                </div>
                <div class="valid-feedback">
                  Looks Good
                </div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom05" class="form-label">Subject <span class="text-danger">* </span></label>
                <input type="text" name="subject" placeholder="What is it about?" class="form-control"
                  id="validationCustom05" value="<?php echo $form->value('subject') ?> " required>
                <div class="invalid-feedback">
                  Please enter your subject
                </div>
                <div class="valid-feedback">
                  Looks Good
                </div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom06" class="form-label">Message <span class="text-danger">* </span></label>
                <textarea name="message" class="form-control" id="validationCustom06" required
                  placeholder="Type your message here..."
                  style="min-height:calc(1.5em + 0.75rem + calc(var(--bs-border-width) * 2))"><?php echo $form->value('message') ?></textarea>
                <div class="invalid-feedback">
                  Please enter your message
                </div>
                <div class="valid-feedback">
                  Looks Good
                </div>
              </div>


              <div class="col-md-12">
                <div class="g-recaptcha" data-sitekey="<?php echo $session->captchaSiteKey ?>"></div>


                <div class="invalid-feedback">

                  <?php echo $form->error('captcha'); ?>
                </div>

                <div class="col-12 mt-3">
                  <input type="hidden" name="contactForm" value="true" />
                  <input type="hidden" name="redirectTo" value="events.php" />
                  <button class="theme_btn" type="submit">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <?php echo implode('', file('include/footer.php')); ?>

  <a href="#" ID="backToTop">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
    </svg>
  </a>



  <script src="owl/js/owl.carousel.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  <style>
    .carousel-thumbnails .thumb {
      width: 80px;
      cursor: pointer;
      opacity: 0.6;
      transition: opacity 0.3s;
      border: 1px solid transparent;
      padding: 4px;
    }

    .carousel-thumbnails .thumb:hover {
      opacity: 1;
    }

    .carousel-thumbnails .thumb.active {
      opacity: 1;
      border: 1px solid #f97316; /* Orange border for active thumbnail */
      border-radius: 4px;
      background-color:rgba(249, 116, 22, 0.2);
    }

    .carousel-thumbnails img {
      object-fit: cover;
      height: 60px;
      width: 100%;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 40px;
      height: 40px;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
      margin: 0 10px;
    }

    .carousel-control-prev {
      left: 0;
    }

    .carousel-control-next {
      right: 0;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      width: 20px;
      height: 20px;
    }
  </style>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('carouselExampleControls');
    const thumbs = document.querySelectorAll('.carousel-thumbnails .thumb');
    
    // Set initial active state
    thumbs[0].classList.add('active');
    
    // Update active thumbnail when carousel slides
    carousel.addEventListener('slide.bs.carousel', function(e) {
      // Remove active class from all thumbnails
      thumbs.forEach(thumb => thumb.classList.remove('active'));
      // Add active class to current thumbnail
      thumbs[e.to].classList.add('active');
    });
  });
  </script>

</body>

</html>