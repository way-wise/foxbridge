<?php include("include/session.php") ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Foxbridge Golf & Country Club | Outdoor Events venue</title>
  <meta name="description" content="Foxbridge Golf contact information, Get in touch to book yours Teetimes & Events" />
  <link rel="icon" href="images/fave_icon.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/mutual-temp.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/07aba6530d.js" crossorigin="anonymous"></script>
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

  <div class="contactbanner !bg-no-repeat !bg-cover !bg-center min-h-[350px] relative" style="background-image: url('images/contact-hero.jpg');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="container flex items-center justify-center absolute inset-0 size-full">
      <h2 class="text-white !text-5xl font-bold">Contact Us</h2>
    </div>
  </div>
  <div class="container px-4 mt-5 inner">
    <div class="row">
      <div class="col-lg-12 contactdescrp text-center">
        <h3>Get in touch</h3>
        <span class="fancy-border" data-aos="flip-left" data-aos-duration="3000"></span>
        <p class="w-full max-w-[720px] mx-auto">Foxbridge Golf Club Pro's are available in business hours to answer any questions you might have about club
          facilities, your Booking options, Venue, Our Simulators, Memberships and any other related queries. We can
          assist you in making the best choices that will cater your requirments.</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12" data-aos="fade-up">

        <div class="map">
          <div class="contactus !bg-[#f27b0a] !rounded-lg col-lg-6 col-md-6 col-sm-12 order-sm-first order-last">
            <div class="info-wrap  w-100 p-lg-5 p-4 !space-y-4">
              <!--<h4 class="mb-4 mt-md-4">4 Locations to choose from<span>3 outdoor, 1 indoor.</span></h4>-->
              <div class="dbox w-100 d-flex !items-center">
                <div class="!text-black d-flex align-items-center justify-content-center !size-8 p-2 !bg-white !rounded-full">
                  <span class="fa fa-map-marker"></span>
                </div>
                <div class="!text-black pl-3">
                  <p class="!text-black !mb-0"> &nbsp; Address: <span class="!text-black">350 Reach St, <br> &nbsp;&nbsp;Uxbridge, ON L9P 0N3</span></p>
                </div>
              </div>
              <div class="dbox w-100 d-flex !items-center">
                <div class="!text-black d-flex align-items-center justify-content-center !size-8 p-2 !bg-white !rounded-full">
                  <span class="fa fa-phone"> </span>
                </div>
                <div class="!text-black pl-3">
                  <p class="!text-black !mb-0"> &nbsp; Phone: <a href="tel://9058527962"><span class="!text-black">+ (905)852-7962</span></a></p>
                </div>
              </div>
              <div class="dbox w-100 d-flex !items-center">
                <div class="!text-black d-flex align-items-center justify-content-center !size-8 p-2 !bg-white !rounded-full">
                  <span class="fa fa-paper-plane"></span>
                </div>
                <div class="!text-black pl-3">
                  <p class="!text-black !mb-0"> &nbsp; Email: <a href="mailto:management@foxbridge.ca"><span class="!text-black">management@foxbridge.ca</span></a>
                  </p>
                </div>
              </div>

            </div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d197816.3598494816!2d-79.28427535862214!3d44.050667855357005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76ad21c1eb115ce7!2sFoxbridge%20Golf%20Course!5e0!3m2!1sen!2sin!4v1631052372626!5m2!1sen!2sin"
            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>



        </div>
      </div>


    </div>

    <div class="col-lg-12 col-sm-12" data-aos="fade-up">
      <div class="py-12">
        <h2 class="text-4xl !font-semibold text-gray-800 text-center !mb-12">Management</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          
          <!-- Nadeem Card -->
          <div class="bg-white rounded-lg shadow-sm !bg-orange-50 !border border-[#f27b0a] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 p-8 relative">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Nadeem Qureshi</h3>
            <div class="text-orange-500 font-semibold uppercase tracking-wider text-sm mb-6">CEO</div>
            
            <div class="flex items-center mb-3 group">
              <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-orange-500 transition-colors duration-300">
                <span class="fa fa-phone text-orange-500 group-hover:text-white transition-colors duration-300"></span>
              </div>
              <a href="tel:1-905-852 7962" class="text-gray-600 !font-semibold hover:text-orange-500 transition-colors duration-300">1-905-852 7962</a>
            </div>
            
            <div class="flex items-center group">
              <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-orange-500 transition-colors duration-300">
                <span class="fa fa-paper-plane text-orange-500 group-hover:text-white transition-colors duration-300"></span>
              </div>
              <a href="mailto:nadeem@foxbridge.ca" class="text-gray-600 !font-semibold hover:text-orange-500 transition-colors duration-300">nadeem@foxbridge.ca</a>
            </div>
          </div>
          
          <!-- Bremani Card -->
          <div class="bg-white rounded-lg shadow-sm !bg-orange-50 !border border-[#f27b0a] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 p-8 relative">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Bremani</h3>
            <div class="text-orange-500 font-semibold uppercase tracking-wider text-sm mb-6">Director of Operations</div>
            
            <div class="flex items-center mb-3 group">
              <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-orange-500 transition-colors duration-300">
                <span class="fa fa-phone text-orange-500 group-hover:text-white transition-colors duration-300"></span>
              </div>
              <a href="tel:416-509 7647" class="text-gray-600 !font-semibold hover:text-orange-500 transition-colors duration-300">416-509 7647</a>
            </div>
            
            <div class="flex items-center group">
              <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-orange-500 transition-colors duration-300">
                <span class="fa fa-paper-plane text-orange-500 group-hover:text-white transition-colors duration-300"></span>
              </div>
              <a href="mailto:bremani@foxbridge.ca" class="text-gray-600 !font-semibold hover:text-orange-500 transition-colors duration-300">bremani@foxbridge.ca</a>
            </div>
          </div>
          
          <!-- Jonathan Card -->
          <div class="bg-white rounded-lg shadow-sm !bg-orange-50 !border border-[#f27b0a] hover:shadow-xl transition-all duration-300 hover:-translate-y-1 p-8 relative">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Jonathan Fletcher</h3>
            <div class="text-orange-500 font-semibold uppercase tracking-wider text-sm mb-6">Proshop Administrator</div>
            
            <div class="flex items-center mb-3 group">
              <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-orange-500 transition-colors duration-300">
                <span class="fa fa-phone text-orange-500 group-hover:text-white transition-colors duration-300"></span>
              </div>
              <a href="tel:1-905-852 7962" class="text-gray-600 !font-semibold hover:text-orange-500 transition-colors duration-300">1-905-852 7962</a>
            </div>
            
            <div class="flex items-center group">
              <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-4 group-hover:bg-orange-500 transition-colors duration-300">
                <span class="fa fa-paper-plane text-orange-500 group-hover:text-white transition-colors duration-300"></span>
              </div>
              <a href="mailto:turfs@foxbridge.ca" class="text-gray-600 !font-semibold hover:text-orange-500 transition-colors duration-300">turfs@foxbridge.ca</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </div>

  <!-- contact form -->
  <div class="container px-4 mt-5 inner" id="contact-us">
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
      <h2 class="text-4xl !font-semibold text-gray-800 text-center !mb-8">Contact us</h2>
      <div class="col-lg-12 col-sm-12" data-aos="zoom-in" data-aos-delay="200">
        <div class="formsubmit !bg-gray-100 !rounded-lg">
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
              <input type="email" name="email" placeholder="Email address" class="form-control" id="validationCustom03"
                value="<?php echo $form->value('email') ?> " required>
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
                <input type="hidden" name="redirectTo" value="contacts.php" />
                <button class="theme_btn" type="submit">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  </div>
  <?php echo implode('', file('include/footer.php')); ?>

  <a href="#" ID="backToTop"></a>


  <script src="owl/js/owl.carousel.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


</body>

</html>
</html>