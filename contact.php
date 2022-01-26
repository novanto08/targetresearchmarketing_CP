<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <style type="text/css">
         
         .card {
         background: #f9ead1;
         border-radius: 10px;
         display: inline-block;
         height: 675px;
         margin: 1rem;
         position: relative;
         width: 442px;
         font-size: 14px;
         margin-bottom: 10px;
         font-family: arial;
         }
         .card-1 {
         box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
         transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
         }
         .card-1:hover {
         box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
         }
         .card-2 {
         box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
         }
         .card-3 {
         box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
         }
         .card-4 {
         box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
         }
         .card-5 {
         box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
         }
         .tm-f24eu-ipo-main-why {
          background: url('../img/backgrounds/f24_ipo_02.jpg') no-repeat top center;
         }
      </style>
  </head>
  <body>
    <div class="ie-panel"></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <?php 
        include 'inc_navbar.php';
        ?>
      </header>
      <section class="section section-intro context-dark">
        <div class="intro-bg" style="background: url(images/contact.jpg) no-repeat;background-size:cover;background-position: top center;"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
              <h2 class="font-weight-bold wow fadeInLeft">DEDICATED TO HELPING THE INDIVIDUAL INVESTOR BEAT THE MARKET</h2>
              <p class="intro-description wow fadeInRight">Tips, Tricks And Tools Of The Trade</p>
            </div>
          </div>
        </div>
      </section>
      <!-- About page about section-->
      <section class="section section-md" style="background-color:#f9f9f9;">
        <div class="container">
          <div class="row row-40 justify-content-center">
            <div class="col-lg-6 col-12">
              <div class="offset-top-45 offset-lg-right-45">
                
                <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Send Us <span class="text-primary"> A Message</span></h3>
                <!-- <p class="font-weight-bold text-gray-dark wow fadeInUp" data-wow-delay=".4s"></p> -->
                <p class="wow fadeInUp" data-wow-delay=".4s">If you have any questions, please do not hesitate to send us a message. We aim to reply within 24 business hours !</p>
                <!-- <p class="wow fadeInUp" data-wow-delay=".4s">Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Nullam non nisi est sit amet facilisis magna etiam. Nec feugiat in fermentum posuere urna nec.</p> -->
              </div>
              <br>
              <br>
              <div class="rd-navbar-brand">
                    <!--Brand--><img class="brand-logo-dark" src="images/target.png" alt="" width="100" height="17" style="
    height: 89px;
    width: 62%;
    
"/>
<br><br>
<div class="col-lg-6" style="padding-top: 6%;">

                          <h4 class="g-font-size-18--xs g-color--white"><i class="fa fa-envelope" style="font-size:24px"></i> Got Any Question</h4>
                            <p class="g-margin-b-0--xs g-color--white">info@targetresearchmarketing.com</p>
                          </div>
                  </div> 
            </div>
            
            
            <div class="col-lg-6 col-sm-10 col-12">
            
            <div class="card card-1" style="border-radius:10px; height: 492px;">
            <br>
           <center> <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Send a<span class="text-primary"> message</span></h3></center><br>
            <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <label class="form-label" for="contact-name">Name<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-phone">Phone<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                </div>
                <div class="form-wrap">
                  <label class="form-label label-textarea" for="contact-message">Message<span class="req-symbol">*</span></label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <!--Google captcha-->
                <br>
                <div class="form-button group-sm text-center text-lg-center">
                 <button class="button button-primary" type="submit">Send</button>
                </div>
              </form>
                     </div>
                  </div>
              </div>
            </div>
          </div>
         

          </div>
        </div>
        <div class="decor-text decor-text-2 wow fadeInUp" data-wow-delay=".3s">Research</div>
      </section>
      
      <!-- Our team-->
      <!-- <section class="section section-md">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md col-12 text-center">
              <div class="section-name wow fadeInRight" data-wow-delay=".2s">People Behind Our Success</div>
              <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Meet Our<span class="text-primary"> Team</span></h3>
              <p class="block-675">Mi proin sed libero enim sed faucibus. Metus dictum at tempor commodo. Viverra justo nec ultrices dui sapien eget mi. Eget felis eget nunc lobortis.</p>
            </div>
          </div>
          <div class="row row-50 justify-content-center">
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/team-classic-1-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">William Johnson</h4><span class="d-block">CEO, Founder</span>
                  <p>Placerat duis ultricies lacus sed turpis tincidunt id aliquet. Et pharetra pharetra massa massa ultricies.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/team-classic-2-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Jane McMillan</h4><span class="d-block">Business Advisor</span>
                  <p>Ut morbi tincidunt augue interdum velit. Sed euismod nisi porta lorem nisl rhoncus mattis rhoncus urna sed.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInRight" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/team-classic-3-370x397.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Robert Smith</h4><span class="d-block">Marketing Manager</span>
                  <p>Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. Euismod lacinia at quis risus sed vulputate.</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section class="section section-lg bg-default pt-2" style="
    padding: 39px;
">
        <div class="container">
          <div class="row row-35">
          <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=182%20Cecil%20St%2C%2017th%20floor%2C%20Singapore%20069547&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" aria-label="182 Cecil St, 17th floor, Singapore 069547"  style="
    width: 161%;
    position: relative;
    height: 334px;
"></iframe>
          </div>
        </div>
      </section>

      <!--Brands-->
      <!-- <section class="section section-md bg-gray-lighten">
        <div class="container">
          <div class="row"> -->
            <!-- Owl Carousel-->
            <!-- <div class="owl-carousel text-center owl-brand" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="5" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false" data-autoplay="true">
              <div class="item"><img src="images/brand-1-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="images/brand-2-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="images/brand-3-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="images/brand-4-200x48.png" alt="" width="200" height="24"/>
              </div>
              <div class="item"><img src="images/brand-5-200x48.png" alt="" width="200" height="24"/>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!--Cta section-->
      <!-- <section class="section section-md" style="background:url(images/bg-image-4-1700x394.jpg) no-repeat; background-size: cover;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-12 text-center"><span class="text-white d-block cta-big-text font-weight-medium">Still Have Some Questions Left?</span>
              <h2 class="text-white"><span class="d-block">Get in Touch with Us:<a class="underline-link" href="tel:#"> 855-456-7634</a></span></h2>
              <p class="text-white">Feel free to contact our team to learn more about the services provided by us and multiple offers for Your business!</p><a class="button-circle button-default-outline button button-lg button-width-210" href="contacts.html">contact us</a>
            </div>
          </div>
        </div>
      </section> -->
      <?php
      include 'inc_footer.php';
      ?>
    </div>
    <!-- <div class="snackbars" id="form-output-global"></div> -->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>