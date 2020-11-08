<?php 
if(isset($_POST['submit'])){
    $to = "casspangell@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


                
<!DOCTYPE html>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blessings for Homes</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <!--Favicon-->
    <link rel="icon" href="img/favicon/favicon.ico">
    <!--Libs css-->
    <link rel="stylesheet" href="css/libs.css">
    <!--Main css-->
    <link rel="stylesheet" href="css/main.css">

    <style>
		html {
  		scroll-behavior: smooth;
		}
	</style>
  </head>
  <body class="dark-load">
    <header class="top-nav page-header" id="top-nav">
     
        <nav class="top-menu">
          
        </nav>
        <!-- Start mobile menu-->
        <div id="mobile-menu">
          <div class="inner-wrap">

          </div>
        </div>
        <!-- End mobile menu-->
      </div>
    </header>
    <!-- Start full screen top nav-->
    <div class="fullscreen-topnav rotate background-image" data-image="img/bg1.jpg">
    
      <!-- Start container-->
      <div class="container-fluid height-half-60">
        <div class="row no-padding-bottom height-full">
          <div class="items height-full">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 video-play height-full">
              <div class="video-section table">
                <div class="table-cell"><a class="icon-play anim-shadow" href="https://www.youtube.com/watch?v=l6mvVKNk-D0"><i class="pe-7s-play"></i></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-full-screen height-full">
              <div class="content table">
                <div class="table-cell">
                  <h3>Start project:</h3>
                  <form class="contact-form-sub">
                    <input type="text" name="Name" placeholder="Your Name">
                    <input type="text" name="Email" placeholder="Email *">
                    <select class="demo-default" name="Servises" id="selectize">
                      <option value="">Choose service:</option>
                      <option value="Services">Services 1</option>
                      <option value="Services 2">Services 2</option>
                      <option value="Services 3">Services 3</option>
                    </select>
                    <textarea name="Message" placeholder="Message *" cols="3" rows="5"></textarea>
                    <p class="success-msg hidden notify">Your order has been send</p>
                    <p class="success-msg hidden notify">Error sending order</p>
                    <input class="btn" type="submit" value="Send message">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End container-->
    </div>



    <!-- End full screen top nav-->
    <!-- Start slider section-->
   <!-- <div class="slider" id="top">
      <div class="player" id="bgndVideo" data-property="{videoURL:'https://www.youtube.com/watch?v=l6mvVKNk-D0',containment:'.full-slider', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></div>
       <div class="full-slider background-image intro" >  -->
        <!-- Start slide-->
      <!--  <div class="slide bg-mask-small full-vh">
          <div class="container-slide vertical-align center">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="heading-title-big" style="color: #c9700a">How Toxic Is Your Home?</h1>
                  <div class="description-slide"> 
                  	<br>
                  	<ul>
                  		<h2 style="color: #db4227">Stagnant energy in your home?</h2>
						<h2 style="color: #deba2a">Areas that no one – even the pets –  want to be in?</h2>
						<h2 style="color: #30db27">Moved in, excited at the new place, but a month later the boxes aren’t unpacked?</h2>
					</ul>
                  	</div>
                  <div class="buttons-section"><a href="https://www.youtube.com/watch?v=l6mvVKNk-D0"><i class="pe-7s-play"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Start slider section-->
    <div class="slider" id="top">
      <div class="player" id="bgndVideo" data-property="{videoURL:'https://www.youtube.com/watch?v=l6mvVKNk-D0',containment:'.full-slider', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></div>
      <div class="full-slider background-image intro" data-image="img/bg2_2.jpg">
        <!-- Start slide-->
        <div class="slide bg-mask-small full-vh">
          <div class="container-slide vertical-align center">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                	<h1 class="heading-title-big" style="color: #c9700a">How Toxic Is Your Home?</h1>
                  <br>
                  	<ul>
                  		<h2 style="color: #db4227">Stagnant energy in your home?</h2>
						<h2 style="color: #deba2a">Are there areas that no one – even the pets –  want to be in?</h2>
						<h2 style="color: #30db27">Moved in, Excited about the new place! <br>...and a month later the boxes aren’t unpacked?</h2>
					</ul>
                  	</div>
                  <div class="buttons-section"><a href="https://www.youtube.com/watch?v=pGbIOC83-So"><i class="pe-7s-play"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	<!--Section quote-->
    <section class="services-section background-image bg-dark-section" id="services" data-image="img/bg3_2_hc.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title small-heading center">
              <h2><span style="color: #ed9005">Since we moved here 10 years ago I have rarely felt at peace in this house and have frequently thought seriously about moving. (But after the Home Blessing). I am now comfortable in this beautiful property.</span></h2>
              <p style="color: #ed9005">- GL</p>
            </div>
          </div>
        </div>
    </section>

    <!--Section why chose us-->
   <section class="background-image bg-dark-section2" data-image="img/bg2_1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">

            <div class="heading-title center" style="background-color: rgba(0,0,0,0.8); padding: 10px 10px 10px 10px">
              <h2 style="color: white">How old <span style="color: #ed9005">is your home?</span></h2>
              <div class="small-desd" style="color: white">The answer is actually from <span style="color: #ed9005">Quantum Physics.</span></div>
              <p style="color: white">Was it lived in before you moved in? Let’s go deeper – literally:  the land your home is on is how old, 4 Billion years?  There have been fires, rainstorms and sandstorms. Earthquakes. Perhaps volcanic eruptions. The flow of energy through the land may be blocked, or disrupted. Those who walk the land or build a dwelling and live on the land, will be affected by the energies in the land. In addition to that, of course, we bring home  energy.</p>
            </div>
          </div>
        </div>
        </div>
    </section>

	<!--Section quote-->
    <section class="services-section background-image bg-dark-section" id="services" data-image="img/bg3_2_hc.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title small-heading center">
              <h2><span style="color: #ed9005">My husband felt and saw negative energies in areas in our home.  These energies affected the vibration of our home, our sleep. And our cat was on constant watch.  The night that Terry blessed our home, we slept like babies.  I felt like we were enveloped in light. My family and I are sensitive to energy and we immediately felt the change.</span></h2>
              <p style="color: #ed9005">- Micaela</p>
            </div>
          </div>
        </div>
    </section>


    <!--Start into slider-->
    <div class="into-slider background-image" id="into" data-image="img/bgn1.jpg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="item">
              <h4 style="color: #e60b0b">Consider how the world has changed since Covid-19. Many are Social Separating – working from home. Social workers and trauma workers are reporting increased physical abuse.</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
            	<img src="img/covid19_virus.jpg" style="width: 100%; height: auto">
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <img src="img/covid_lg.jpg" style="width: 100%; height: auto">
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <img src="img/riot_lg.jpg" style="width: 100%; height: auto">
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--End into slider-->

	<!--Section quote-->
    <section class="services-section background-image bg-dark-section" id="services" data-image="img/bg3_2_hc.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title small-heading center">
              <h2><span style="color: #ed9005">I always felt frozen when I came inside, because of the relationship with the other person I share the apartment with. That changed literally overnight – after the Home Blessing.</span></h2>
              <p style="color: #ed9005">- KB</p>
            </div>
          </div>
        </div>
    </section>

    <!--Start into slider-->
    <div class="into-slider background-image" id="into" data-image="img/bgn1.jpg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="item">
              <img src="img/drinking.jpg" style="width: 100%; height: auto">
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
        	<h4 style="color: #e60b0b">Our coping mechanisms aren’t coping as well as they used to – so alcohol use has increased over 30% and marijuana use, 46%. (statistics as of 24 September 2020)</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <img src="img/naturaldisastor.jpg" style="width: 100%; height: auto">
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <h4 style="color: #e60b0b">And…there’s more worry about riots, fires on the West of all North America, and hurricanes again destroying the East Coast of the United States…with increasing frequency and velocity.</h4>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--End into slider-->

    <!--Section trigger-->
    <section class="section-trigger bg-white-section white-70 background-image" data-image="img/bg3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="buttons-section center"><a class="btn accent-btn large-btn" href="#contact">Here are Ways to Transform Your Home</a></div>
          </div>
        </div>
      </div>
    </section>

    <!--Section why chose us-->
    <!-- <section class="section-choose-us"> -->
    	<section class="services-section background-image bg-dark-section" id="services" data-image="img/bg2_1.jpg">
      <div class="container">
        <div class="row">
        	<div>
          <!-- <div class="col-md-8 col-md-push-2"> -->

            <div class="heading-title center">
              <h2 style="color: #ed9005">How can my home’s energy be changed <span style="color: #ed9005"><br>from a distance?</span></h2>
              <div class="small-desd">The answer is actually from <span>Quantum Physics.</span></div>
              <img src="img/quantum_2.png" style="width: 50%; height: auto; padding-top: 20px;">
              <p style="color: #d9d9d9">Although we experience much of our world as solid matter, physicists have determined that Nothing is really solid.  Everything in the universe is made up of molecules which are composed of atoms. The electrons, protons and neutrons of atoms all vibrate at very high frequencies. So everything in our house is made up of atoms at different frequencies. Anger,  pain, are the blocked or stagnant energies in a home are low frequency vibrations.<br><br>
              During a Home Blessing, transmissions of the high frequencies of Love, Peace, Harmony, Compassion, Empathy and Oneness change low frequencies that make the home feel unsupportive, stagnant or unhealthy. Home Blessings transform the negative information. People experience the difference, time after time.</p>
            </div>
          </div>
        </div>
        </div>
    </section>

	<!--Section quote-->
    <section class="services-section background-image bg-dark-section" id="services" data-image="img/bg3_2_hc.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-title small-heading center">
              <h2><span style="color: #ed9005">I had recently moved and was concerned about negative energies that the last tenant had left.  I really wanted a fresh start, so I contacted Terry.</span></h2><br>
              <h2><span style="color: #ed9005">Without stepping foot on the property, without ever having been here, he asked questions as if he were walking around the property in person. It was like he walked down to the creek that runs behind the house and back up again and through the house, asking questions and sharing what he perceived - I was amazed.</span></h2><br>
           	<h2><span style="color: #ed9005">Wherever he sensed negative energy, he would describe how he saw the darkness there changing into golden light. Under the house, by that tree, down at the creek and inside. I am very grateful to Terry for what he did here (without coming here physically). I feel a sense of peace I haven't had in any of my other homes.</span></h2>
           	<p style="color: #ed9005">- PD</p>
            </div>
          </div>
        </div>
    </section>
    
<!--Section trigger-->
    <section class="section-trigger bg-white-section white-70 background-image" data-image="img/bg3.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="buttons-section center"><a class="btn accent-btn large-btn" href="#contact">Here are Ways to Transform Your Home</a></div>
          </div>
        </div>
      </div>
    </section>








    <!--Section how we work-->
    <section class="section-how-we-work bg-white-section background-image" data-image="img/bg2_2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title center">
              <h2>Here's Help for Your Home</h2>
              <p style="color: #ed9005">Please select below to book an appointment:</p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Item-->
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
            <div class="icon-container">
              <div class="icon icon-circle"><i class="pe-7s-home"></i></div>
            </div>
            <h3>Blessing Option 1</h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
          </div>
          <!-- Item-->
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
            <div class="icon-container">
              <div class="icon icon-circle"><i class="pe-7s-photo"></i></div>
            </div>
            <h3>Blessing Option 2</h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
          </div>
          <!-- Item-->
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
            <div class="icon-container">
              <div class="icon icon-circle"><i class="pe-7s-map-2"></i></div>
            </div>
            <h3>Blessing Option 3</h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
          </div>
          <!-- Item-->
          <div class="col-md-3 col-sm-6 col-xs-12 item-icon">
            <div class="icon-container">
              <div class="icon icon-circle"><i class="pe-7s-global"></i></div>
            </div>
            <h3>Blessing Option 4</h3>
            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
          </div>
          <!-- Edn items-->
        </div>
      </div>
    </section>






    <!--Section contact with us-->
    <section class="section-contact-with-us bg-dark-section background-image" id="contact" data-image="img/bg3_2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="heading-title small-heading center">
              <h2><img src="img/profileimage.jpg" style="padding: 10px 10px 10px 0px">Connect <span style="color: #ed9005">with Terry</span></h2>
              <p style="font-size: 16px">Terry McGill has studied for over 40 years with advanced teachers, Masters, and now a Quan Yin Lineage Holder. Terry is certified by the Tao Institute. This is not Taoism or any religion. The philosophy and practices are the wisdom accumulated over thousands of years from around the world, and passed to us at this time.<br><br>The Process: You can receive your special service by telephone or visual internet connection. I will share what I perceive while we're connected, then email you any guidance.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="contact-wrap">
              <!--<p class="phone"><i class="fa fa-phone" aria-hidden="true"> </i>+58(667) 543 54 55</p> -->
              <p class="street">12500 SE Huron St<br>Clackamas, Oregon 97015<br>United States of America</p><a class="email" href="malito:terry@blessingsforhome.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>terry@BLESSINGSFORHOMES.COM</a>
              <!--Start social links-->
              <!-- <ul class="social-links">
                <li><a href="https://www.facebook.com/terry.mcgill.71"><i class="fa fa-facebook"></i></a></li>
              </ul> -->
              <!--End social links-->
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="contact-form">
              <!-- <form class="contact-form-sub contact-form-bg" method="post" action=""> -->
                <!-- Input name -->
               <!--  <div class="col-md-6"> -->
                <!--  <input class="form-control" type="text" required="" name="name" placeholder="Name">
                </div> -->
                <!-- Input email-->
              <!--   <div class="col-md-6">
                  <input class="form-control" type="email" required="" name="email" placeholder="Email">
                </div> -->
                <!-- textarea-->
               <!-- <div class="col-md-12">
                  <textarea class="form-control" rows="9" required="" name="messageentered" placeholder="Message"></textarea>
                  <p class="success-msg hidden notify">Your message has been sent</p>
                  <p class="error-msg hidden notify">Error sending message</p>
                  <input class="btn btn-blue btn-form" type="submit" value="Send Form" name="submit">
                </div>
              </form> -->

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section our location-->

    <!-- Old browsers support--><!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
            
          </div>
        </div>
      </div>
      <div class="down-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>© 2020 All Rights Reserved.  -   Blessings for Homes</p>
              <ul class="footer-menu">
                <li><a href="index.html">Home</a></li>
                <li><a class="smooth-scroll" href="#about">About</a></li>
                <li><a class="smooth-scroll" href="#services">Services</a></li>
                <li><a class="smooth-scroll" href="#portfolio">Our works</a></li>
                <li><a class="smooth-scroll" href="#skills">Skills</a></li>
                <li> <a class="smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--button to top-->
    <div class="top icon-down toTopFromBottom"><a class="smooth-scroll" href="#top"><i class="pe-7s-angle-up"></i></a></div>
    <!--end button to top-->
    <!--Google map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfIvcRb39yOu1OFOX2G0c4jemKpLgpJl0&amp;sensor=false"></script>
    <!--Libs-->
    <script src="js/libs.js"></script>
    <!--Use scripts-->
    <script src="js/common.js"></script>

  </body>

</html>

