<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/03.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div><a class="section section-banner d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank" style="background-image: url(images/background-02-1920x60.jpg); background-image: -webkit-image-set( url(images/background-02-1920x60.jpg) 1x)" alt="" width="1600" height="310"></a>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <?php 
        include 'inc_navbar.php';
        ?>
      </header>
      <!--Main section-->
      <section class="section main-section parallax-scene-js" style="background:url('images/sharetip.jpg') no-repeat center center; background-size:cover;" id="#signup">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-12">
              <div class="main-decorated-box text-center text-xl-left">
                <h1 class="text-white text-xl-center wow slideInRight" data-wow-delay=".3s"><span class="align-top offset-top-30 d-inline-block font-weight-light prefix-text" style="font-size:70px;">Contact Us</span><span class="big font-weight-bold d-inline-flex offset-right-170" style="font-size:94px;"></span><span class="biggest d-block d-xl-flex font-weight-bold" style="font-size:133px;"></span></h1>
                <div class="decorated-subtitle text-italic text-white wow slideInLeft">Click Bellow</div>
              </div>
            </div>
            <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><a class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center" href="#contact" data-custom-scroll-to="about"><span class="fa-chevron-down"></span></a></div>
          </div>
        </div>
      
      </section> 


      <!--Mailform-->
      <section class="section section-md" id="signup" style="background-color: #efd9b4;">
        <div class="container" id="contact">
          <!--RD Mailform-->
          <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-12">
            <div class="section-name wow fadeInRight text-center" data-wow-delay=".2s">CONTACT US</div>
              <h3 class="wow fadeInLeft text-capitalize text-center" data-wow-delay=".3s">SUBSCRIBE <span class="text-primary"> NOW </span></h3>
              <br>
              <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="ProcessSignUp.php">
                <div class="form-wrap" >
                  <label class="form-label" for="firstname">Firstname<span class="req-symbol">*</span></label>
                  <input class="form-input" id="firstname" type="text" name="firstname" data-constraints="@Required">
                </div>
                <div class="form-wrap" >
                  <label class="form-label" for="lastname">Lastname<span class="req-symbol">*</span></label>
                  <input class="form-input" id="lastname" type="text" name="lastname" data-constraints="@Required ">
                </div>
                <div class="form-wrap"  >
                  <label class="form-label" for="email">E-Mail<span class="req-symbol">*</span></label>
                  <input class="form-input" id="email" type="email" name="email" data-constraints="@Required @Email">
                </div>
                <div class="form-wrap" >
                  <label class="form-label" for="country">Country<span class="req-symbol">*</span></label>
                  <input class="form-input" id="country" type="text" name="country" data-constraints="@Required ">
                </div>
                <div class="form-wrap" >
                  <label class="form-label" for="phonenumber">Phone Number<span class="req-symbol">*</span></label>
                  <input class="form-input" id="phonenumber" type="number" name="phonenumber" data-constraints="@Required @PhoneNumber">
                </div>
                <div class="form-wrap" >
                <select style="background-color: #efd9b4;" name="invest" id="invest" type="text" class="form-control s-form-v2__input g-radius--50" >
                  <option>* Please Select I mainly invest for</option>
                  <option value="Growth">Growth</option>
                  <option value="Income">Income</option>
                  <option value="Capital Gains">Capital Gains</option>
                  <option value="I'm unsure">I'm unsure</option>
                </select>
              </div>
              <div class="form-wrap" >
                <select style="background-color: #efd9b4;" name="experience" id="experience" type="text" class="form-control s-form-v2__input g-radius--50" >
                  <option>* Please Select if you have experience with</option>
                  <option value="Stock">Stock</option>
                  <option value="Bonds">Bonds</option>
                  <option value="Crypto">Crypto</option>
                  <option value="Futures/Option">Futures/Option</option>
                  <option value="CFD's">CFD's</option>
                  <option value="Property">Property</option>
                  <option value="No Experience">No Experience</option>
                </select>
              </div>
                <!--Google captcha-->
                <div class="form-button group-sm text-center text-lg-left">
                  <button class="button button-primary" type="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
          

        </div>
      </section>
      <!--Google Map-->


      <div class="container">
        <div class="row">
          <div class="col-lg-12 pt-5">
            <h3 class="section-name wow fadeInRight text-center" data-wow-delay=".2s">Why Are Thousands Of UK Investors Taking Advice From You?</h3>
            <p class="text-center">You’ve probably heard a bit of buzz around us recently ,and rightly so! After all, its stock recommendations have been helping thousands of investors clock up market beating gains1 since launching in 1993. But because there’s more to our service than just the numbers, we’d like to take a moment to answer some of the most common questions we’re often asked. So you can decide for yourself whether our humble service is worth your hard-earned money.</p>
          </div>
          <div class="col-lg-12 pt-5">
            <h3 class="section-name wow fadeInLeft text-center" data-wow-delay=".2s">What Do I Actually GET As A Member?</h3>
            <p class="text-center">First and foremost, you get access to our team of top investors and all their best investment thinking. You get two new recommendations each month emailed straight to your inbox. Each pick walks you through the buying case for a stock, spelling out exactly why a company might be a good addition to your portfolio, as well as the potential risks.<br>You also get access to:</p>
          </div>
          <div class="col-lg-6 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>BEST BUY NOW</b></p>
          <p class="text-center">Best ideas chosen from all the picks since the service started.</p>
          </div>
          <div class="col-lg-6 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>STARTER STOCKS</b></p>
          <p class="text-center">A handful of stocks that we think can make a great foundation for any portfolio.</p>
          </div>
          <div class="col-lg-6 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>COMMUNITY</b></p>
          <p class="text-center">A place to get help and to share your thoughts with like-minded investors.</p>
          </div>
          <div class="col-lg-6 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>KNOWLEDGE BASE</b></p>
          <p class="text-center">Our educational materials are designed to help you work towards becoming an expert investor.</p>
          </div>
          <div class="col-lg-12 pt-5">
            <h3 class="section-name wow fadeInRight text-center" data-wow-delay=".2s">How Are Our Recommendations Performing?</h3>
            <p class="text-center">Of course, the most important aspect of a share recommendation service is how well its tips perform! So with that in mind, let’s take a look at how we are stacking up. Here’s a taste of just a few of the successes that have already led current members to some incredible gains.</p>
          </div>
          <div class="col-lg-4 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>MICRO FOCUS</b></p>
          <p class="text-center">UP MORE THAN 281%</p>
          </div>
          <div class="col-lg-4 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>HOMESERVE</b></p>
          <p class="text-center">UP MORE THAN 392%</p>
          </div>
          <div class="col-lg-4 pt-5">
          <i class="ti-bell"></i>
          <p class="text-center"><b>BRITVIC</b></p>
          <p class="text-center">UP MORE THAN 248%</p>
          </div>
          <div class="col-lg-12 pt-5">
            <p class="text-center">Of course, these are some of our most successful tips, selected to illustrate the potential profits… not all of our picks have progressed quite so handsomely. Some have fallen in value. But overall our investment team has firmly beaten the market since Global Research Marketing in December 1993.</p>
          </div>
        </div>
      </div>

      <section class="section bg-image-2">
        <div class="container section-md">
          <div class="row row-30 text-center">
            <div class="col-xl-6 col-sm-6 col-12">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-folder"></span><span class="counter text-white" data-speed="2000">23</span><span class="symbol text-white">,</span><span class="counter text-white" data-speed="2000">4</span><span class="symbol text-white">%</span>
                </div>
                <div class="counter-classic-title">IO Marketing</div>
              </div>
            </div>
            <div class="col-xl-6 col-sm-6 col-12">
              <div class="counter-classic">
                <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-folder"></span><span class="counter text-white" data-speed="2000">15</span><span class="symbol text-white">,</span><span class="counter text-white" data-speed="2000">7</span><span class="symbol text-white">%</span>
                </div>
                <div class="counter-classic-title">S&P UK Broad Market Index</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 pt-5">
            <h3 class="section-name wow fadeInLeft text-center" data-wow-delay=".2s">I Want To Invest, But Isn’t Putting My Money In Shares Incredibly Risky?</h3>
            <p class="text-center">You’re investing your hard-earned cash to try and make your dreams come true, not to see it drip out of your brokerage account like change through a hole in your pocket. The truth is that loss happens. Even the world’s best investors pick the occasional lemon. But they don’t panic. They understand that if you buy and hold for the long term, it’s possible one of your investments could go to 0. But you can gain many, many times more than you could ever lose. And they play it smart. With a portfolio made up of a dozen great stocks or more, we believe your winners are most likely going to squash the ones that didn’t play out the way you expected. That strategy has helped hundreds of thousands of investors build lasting wealth. Without fear. Now. We understand you might still have some questions. You still might even have some doubts. We don’t blame you. So if you’re still not sure if our service is worth checking out. Or if it’s right for you
              </p>
              <p><b>Here’s what we recommend:</b></p>
              <a href="#contact" class="button button-primary button-circle" type="submit">Click here to get started now!</a>
          </div>
          <div class="col-lg-12 pt-5">
            <h3 class="section-name wow fadeInRight text-center" data-wow-delay=".2s">What If I Join And Realise That It’s Not For Me?</h3>
            <p class="text-center">We fully appreciate that you might still have some questions even after you subscribe. You might even have some nagging doubts lingering. But we firmly believe that the best way for you to truly decide whether we are right for you, is to try it for yourself! And that’s exactly what you can do today, without risking a penny your membership free. You see, when you sign up you can dive in and experience the service first, and if for any reason you’re not satisfied, simply unsubscribe customer service team who’ll help you unsubscribe — no questions asked.</p>
          </div>
          <div class="col-lg-12 pt-5">
            <h3 class="section-name wow fadeInLeft text-center" data-wow-delay=".2s">Before You Subscribe</h3>
            <p class="text"><b>- Our TWO Top Share Recommendations Every Month:</b> That’s one income and one growth pick we consider to have superior money-making potential. We’ll send you all the details you need to invest, including buy and sell recommendations and updates on the progress of the shares. We’ll monitor impending market storms and keep you aware of exciting trends.</p>
            <p class="text"><b>- Ongoing Coverage:</b> We won’t leave you guessing on any company we’ve recommended. Instead, you’ll receive easy-to-follow ‘buy-hold-and-sell’ guidance for all of the active share picks in the service.</p>
            <p class="text"><b>- Weekly Updates:</b> It’s not just about delivering your recommendations. Our experts will take you by the hand and show you the secrets of their investment strategies, so that you can develop and grow in confidence as a private investor.</p>
            <p class="text"><b>- Live Interactive Scorecard:</b> We keep track of how all of our recommendations are performing relative to the FTSE All-Share Index.</p>
            <p class="text"><b>- Bonus reports and educational content:</b> We will release other special reports, tutorials and other exciting bonuses to our members.</p>
            <h4 class="pt-3 section-name wow fadeInLeft" data-wow-delay=".2s">Risk Warning</h4>
            <p>- The value of shares and the income from them can fall as well as rise.</p>
            <p>- You run an extra risk of losing money when you buy shares in certain smaller companies including “penny shares”.</p>
            <p>- There is a big difference between the buying price and the selling price of these shares. If you have to sell them immediately, you may get back much less than you paid for them. The price may change quickly, it may go down as well as up and you may not get back the full amount invested. It may be difficult to sell or realize the investment.</p>
            <p>- You should not speculate using money you cannot afford to lose.</p>
            <p>- We have taken all reasonable care to ensure that all statements of fact and opinion contained in this publication are fair and accurate in all material aspects.</p>
            <p>- Investors should seek appropriate professional advice from their stockbroker or other adviser if any points are unclear.</p>
            <p>- This newsletter gives general advice only, and the investments mentioned may not necessarily be suitable for any individual.</p>
            <p>- The newsletter may recommend securities listed on overseas stock exchanges. Investors may incur extra charges when dealing in these securities and should check with their stockbroker before dealing.</p>
            <p>- Changes in exchange rates may have an adverse effect on the value of the value or price of these investments in sterling terms.</p>
            <h4 class="pt-3 section-name wow fadeInLeft" data-wow-delay=".2s">Small Sprint</h4>
            <p>- GSM has delivered an overall return of 23.4%. The S&P UK Broad Market index has delivered an overall return of 15.7%. Returns are calculated using a time-weighted rate of return (TWRR) methodology that includes dividends reinvested and excludes trading costs. The S&P UK Broad Market returns include dividends reinvested. Returns are measured from the date of each recommendation to the close of trading on 31/12/2018. 2 recommendations per month have been made since 27/02/2012.</p>
            <p>- GSM first recommended shares of Micro Focus plc (LSE:MCRO) on 23/04/2012. As of the close of trading on 31/12/2018 the shares had gained 281.7%. The return is calculated using a time-weighted rate of return (TTWR) methodology that includes dividends reinvested and excludes trading costs.</p>
            <p>- GSM first recommended shares of HomeServeplc (LSE:HSV) on 28/08/2012. As of the close of trading on 31/12/2018 the shares had gained 392.0%. The return is calculated using a time-weighted rate of return (TTWR) methodology that includes dividends reinvested and excludes trading costs.</p>
            <p>- GSM first recommended shares of Britvic plc (LSE:BVIC) on 23/07/2012. As of the close of trading on 31/12/2018 the shares had gained 248.7%. The return is calculated using a time-weighted rate of return (TTWR) methodology that includes dividends reinvested and excludes trading costs.</p>
            <h4 class="pt-3 section-name wow fadeInLeft" data-wow-delay=".2s">Need Help?</h4>
          </div>  
          <div class="col-lg-6 pt-3 px-3" style="padding-bottom: 10px;">
          <a href="#contact" class="button button-primary button-circle" type="submit">Contact us!</a>
          </div>
        </div>
      </div>
      
  

     <?php include 'inc_footer.php'?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>