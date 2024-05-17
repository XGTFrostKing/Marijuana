<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Crafted Coffees</title>
    <link rel="icon" href="svg/coffee.svg" type="image/icon type">
    <link rel="stylesheet" href="styleee.css" />
    <script>
      window.onscroll = function() { Scroll()};
      function Scroll() {
        if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
          document.getElementById("id-navi").className = "navi-slidedown";
        }
        if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
          document.getElementById("id-about-scroll").className = "scroll-about";
        }
      }

      function menuButtonSnacks(){
        document.getElementById("id-drinks").className = "menu-button-off";
        document.getElementById("id-snacks").className = "menu-button-on";
        document.getElementById("id-menu-snacks").className = "menu-snacks-on";
        document.getElementById("id-menu-drinks").className = "menu-drinks-off";
      }


    </script>
  </head>

  <body>
    <!-- Start of ChatBot (www.chatbot.com) code -->
    <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "6647203477ef780007855fe6";
        (function() {
            var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
        })();
    </script>
    <noscript>You need to <a href="https://www.chatbot.com/help/chat-widget/enable-javascript-in-your-browser/" rel="noopener nofollow">enable JavaScript</a> in order to use the AI chatbot tool powered by <a href="https://www.chatbot.com/" rel="noopener nofollow" target="_blank">ChatBot</a></noscript>
    <!-- End of ChatBot code -->
    <header class="header">
      <section class="main">
        <a class="logo" href="#"><img src="svg/coffee.svg" height="30px"></a>
        <div class="fix" >
          <a class="a1" href="#id-contact">CONTACT US</a>
          <a class="a1" href="#id-menu">DISCOVER</a>
          <a class="a1" href="#id-about">ABOUT US</a>
          <a class="a1" href="#">HOME</a>
        </div>
      </section>
      <div class="fix-background" id="id-navi"></div>
      <div class="banner">
        <h1 class="banner-title">Dough-licious Delights</h1>
        <h3 class="banner-subtitle">"Where the Hole Truth Lies in Flavor!"</h3>
      </div>
      <div class="banner-bottom"><a href="#id-skills"><img src="svg/down-arrow.svg"></a></div>
    </header>
    <div class="content-divider"></div>

    <section class="skills" id="id-skills" style="background-color:#;">
      <!-- single skill -->
      <article class="skill1">
        <center><img src="svg/smile.png" height="45px"></center><br>
        <h3 class="skill-title">Boosts Your Mood</h3>
        <p class="skill-text">
        We all know that eating something sweet can give us an instant mood boost.
        </p>
      </article>
      <!--end single skill -->
      <!-- single skill -->
      <article class="skill2">
        <center><img src="svg/ecology-and-environment.svg" height="45px"></center><br>
        <h3 class="skill-title">Provides Energy</h3>
        <p class="skill-text">
        They contain carbohydrates, which are essential for fueling our bodies.
        </p>
      </article>
      <!--end single skill -->
      <!-- single skill -->
      <article class="skill1">
        <center><img src="svg/spa.svg" height="45px"></center><br>
        <h3 class="skill-title">Contains Antioxidants</h3>
        <p class="skill-text">
        donuts also contain antioxidants, which are important for fighting off harmful free radicals in our bodies.
        </p>
      </article>
      <!--end single skill -->
      <!-- single skill -->
      <article class="skill2">
        <center><img src="svg/cook.svg" height="45px"></center><br>
        <h3 class="skill-title">Improves Brain Function</h3>
        <p class="skill-text">
        Finally, eating donuts can also help to improve brain function. They contain a type of fat called omega-3 fatty acids, which are important for brain health.
        </p>
      </article>
      <!--end single skill -->
    </section>

    

    <!-- about-section -->
<div class="about">
  <br>
    <br>
    <section class="about-section-center-clearfix" style="display: inline; background-color: darkgrey;" id="id-about">
      <!-- <div class="section-center clearfix"> -->
      <!-- first column  -->
      <article class="about-img-1">
        <div class="about-picture-container" >
          <video autoplay muted loop id="myVideo">
            <source src="videos/Donut.mp4" type="video/mp4">
            </video>
        </div>
      </article>
      <!-- second column -->
      <article class="about-info-1">
        <!-- section title -->
        <div class="about-scroll" id="id-about-scroll">
          <!-- <img src="preloader.gif" height="40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
          <h3 class="section-subtitle">ABOUT</h3>
          <h2 class="section-title">Dough-licious Delights</h2>
        
        <!--end section title -->
        <p class="about-text">
          At Dough-licious Delights, we're not just about serving donuts; we're on a mission to redefine the sweet indulgence experience. 
          With a passion for crafting perfection in every bite, we blend traditional recipes with innovative twists, ensuring that every mouthful is a journey of flavor discovery. 
        </p>
        <p class="about-text">
          From classic glazed delights to avant-garde creations, we believe in the power of the perfect donut to elevate your day. 
          Join us at Dough-licious Delights, where the hole truth lies in flavor, and every moment is a celebration of deliciousness.
        </p>
        <a href="#id-contact" class="main-btn">learn more</a>
        <div class="main-btn-back"></div>
      </div>
      </article>

      <div style="clear: both;"></div>
    </section>
  
    <br>
    <br>
  </div>
<!--Menu-->
<div style="background-color:#E0E5EC; z-index: -1;">
<section class="menu-template" id="id-menu">
  <h1 class="menu-title">Discover</h1><br>
  <center><h3 class="menu-subtitle">O U R &nbsp;&nbsp;M E N U</h3></center>
</section><br><br>


<section class="menu-header-container">
  <div class="menu-hr-container"><hr class="menu-hr"></div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" id="id-snacks" class="menu-button-off" onclick="menuButtonSnacks()"><img src="svg/donut.png" class="menu-circle-image"></button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="menu-hr-container"><hr class="menu-hr"></div>
</section>

<!-- snacks menu -->
<div class="menu-snacks-off" id="id-menu-snacks">

  <section class="menu" style="display: inline;">
      <article class="menu-section">
        <!-- first column -->
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/Alcapone.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Alcapone</h3>
                <p class="about-text">
                  Donut dipped in white chocolate and topped with sliced toasted almonds.
                </p>
                <h3 class="menu-text-title">100 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
  
      <!-- second column -->
      <article class="menu-section">
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/avocado-dicaprio.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Avocado</h3>
                <p class="about-text">
                  Donut filled with avocado cream, dipped in avocado chocolate, and garnished with dark chocolate flakes.
                </p>
                <h3 class="menu-text-title">100 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
  
      <!-- third column -->
      <article class="menu-section">
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/berry-spears.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Berry Spears</h3>
                <p class="about-text">
                  Donut filled with whipped cream cheese, dipped in strawberry jam, and garnished with white chocolate flakes.
                </p>
                <h3 class="menu-text-title">150 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- fourth column -->
      <article class="menu-section">
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/black-jack.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Black Jack</h3>
                <p class="about-text">
                  Donut fully encased in dark chocolate.
                </p>
                <h3 class="menu-text-title">100 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
  
      <div style="clear: both;"></div>
      <br>
    </section>
    <section class="menu" style="display: inline;">
      <article class="menu-section">
        <!-- first column -->
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/caviar-strawberry.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Caviar Strawberry</h3>
                <p class="about-text">
                  Donut dipped in strawberry milk chocolate and sprinkled with dark chocolate coated crisps.
                </p>
                <h3 class="menu-text-title">200 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
  
      <!-- second column -->
      <article class="menu-section">
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/cheese-cakelicious.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Cheese Cakelicious</h3>
                <p class="about-text">
                  Donut filled with whipped cream cheese, dipped in white chocolate, topped with cookie crumbs, and garnished with white chocolate.
                </p>
                <h3 class="menu-text-title">120 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
  
      <!-- third column -->
      <article class="menu-section">
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/choconutzy.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Choco Nutzy</h3>
                <p class="about-text">
                  Donut filled with dark chocolate ganache & peanut butter cream, dipped in milk chocolate, and garnished with dark chocolate.
                </p>
                <h3 class="menu-text-title">125 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- fourth column -->
      <article class="menu-section">
        <div class="menu-flip-card">
          <div class="menu-flip-card-inner">
            <div class="menu-flip-card-front">
              <img src="Coffee/chocolate-rainbow.webp" alt="Avatar" class="menu-image">
            </div>
            <div class="menu-flip-card-back">
              <div class="menu-text"><h3 class="menu-text-title">Chocolate Rainbow</h3>
                <p class="about-text">
                  Donut dipped in white chocolate, sprinkled with crushed toasted almonds, and garnished with strawberry jam.
                </p>
                <h3 class="menu-text-title">90 PHP</h3>
              </div>
            </div>
          </div>
        </div>
      </article>
  
      <div style="clear: both;"></div>
      <br>
    </section>
    <br>
  
  </div>

  <!-- snacks menu ending -->

<!--Response-->
  <div class="back">
    <section class="about-section-center-clearfix" style="display: inline; ">

      <article class="about-img">
        
        <h3 class="response-title">YOUR RESPONSE</h3>
      <br>
      <form action="#">
        <label for="fname">Name</label>
        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Alex Hunter"
          required="Name"
        /><label for="City">City</label>
        <input type="text" id="city" name="cityname" placeholder="City Name" required="City Name" />

        <label for="mail">E-Mail</label>
        <input
          type="email"
          id="email"
          name="mail"
          placeholder="alexhunter@xyz.com"
          required="Email"
        />

        
        <label for="subject">Rate Us:</label><br>
        <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
          <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
          <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
          <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
          <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
          <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
      </fieldset>
<br><br>
        <label for="subject">Your Reviews</label>
        <textarea
          id="feedback"
             name="feedback"
          placeholder="Your Thoughts"
          style="height:120px"
        ></textarea>
        

      <p align="right"><input type="submit" value="Submit"></p>
      </form>
      </article>
      <!-- second column -->
      <article class="about-info-slider">
        <h3 class="response-title">TESTIMONIALS</h3>
        <!--end section title -->
        <div class="slideshow-container">

          <div class="mySlides fade">
            <br>
            <p class="p1">“ Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. ”</p>
            <br>
            <img class="slider-img1" src="people/1.jpeg">
            <h3 class="slider-name1">Charles White</h3>
            <br><br>
            <hr class="slides-hr">
            <div class="social">
              <img src="svg/instagram-red.svg" class="slider-social">
              <img src="svg/facebook-red.svg" class="slider-social">
            </div>
            <br><br><br>
            <p class="p2">“ Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. ”</p>
            <br>
            <img class="slider-img2" src="people/5.jpeg">
            <h3 class="slider-name2">Seth Doyle</h3>
            <br><br>
            <hr class="slides-hr1">
            <div class="social2">
              <img src="svg/instagram-red.svg" class="slider-social">
              <img src="svg/facebook-red.svg" class="slider-social">
            </div>
          </div>
          
          <div class="mySlides fade">
            <br>
            <p class="p1">“ Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. ”</p>
            <br>
            <img class="slider-img1" src="people/2.jpeg">
            <h3 class="slider-name1">Roberto Webb</h3>
            <br><br>
            <hr class="slides-hr">
            <div class="social">
              <img src="svg/instagram-red.svg" class="slider-social">
              <img src="svg/facebook-red.svg" class="slider-social">
            </div>
            <br><br><br>
            <p class="p2">“ Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. ”</p>
            <br>
            <img class="slider-img2" src="people/4.jpeg">
            <h3 class="slider-name2">Midas Hofsatra</h3>
            <br><br>
            <hr class="slides-hr1">
            <div class="social2">
              <img src="svg/instagram-red.svg" class="slider-social">
              <img src="svg/facebook-red.svg" class="slider-social">
            </div>
          </div>
          
          <div class="mySlides fade">
            <br>
            <p class="p1">“ Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. ”</p>
            <br>
            <img class="slider-img1" src="people/3.jpeg">
            <h3 class="slider-name1">Mellisa Howard</h3>
            <br><br>
            <hr class="slides-hr">
            <div class="social">
              <img src="svg/instagram-red.svg" class="slider-social">
              <img src="svg/facebook-red.svg" class="slider-social">
            </div>
            <br><br><br>
            <p class="p2">“ Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. ”</p>
            <br>
            <img class="slider-img2" src="people/7.jpeg">
            <h3 class="slider-name2">DeMorris Byrd</h3>
            <br><br>
            <hr class="slides-hr1">
            <div class="social2">
              <img src="svg/instagram-red.svg" class="slider-social">
              <img src="svg/facebook-red.svg" class="slider-social">
            </div>
          </div>
          <br>
          <br>
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          </div>
          
          
          <script>
          var slideIndex = 0;
          showSlides();
          
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>

      </article>
      <div style="clear: both;"></div>
    </section>
  </div>
  <!-- Contact -->
  <section class="contact-template" id="id-contact">
    <h1 class="contact-title">Contact</h1>
    <br><center><h3 class="menu-subtitle">L O C A T E&nbsp;&nbsp;U S</h3></center>
  </section>

  <div class="contact">
    <section class="about-section-center-clearfix" style="display: inline; ">

      <article class="contact-map">
      <!--left column-->
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11742.318172872468!2d-70.60008598088696!3d42.6278723867818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e32f16ef6e3113%3A0x12ae063153d5ad86!2sMilk%20Island!5e0!3m2!1sen!2sph!4v1715930602771!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact-iframe"></iframe>
      <br><br>
      </article>
      <!-- right column -->
      <article class="contact-img">
       <!-- second column -->
        <br>
        <!-- section title -->
        <div class="opening-container">
          <img src="Struct.jpg" alt="Snow" style="width:67%;">
          <div class="opening-text ">
            <h3>O P E N&nbsp;&nbsp;H O U R S</h3>
              <p>
                <strong>Monday: Closed</strong><br>
                <strong>Tuesday to Friday</strong><br>
                7:00 AM - 9:00 PM<br>
                <strong>Saturday & Sunday</strong><br>
                11:00 AM - 10:00 PM
              </p>
          </div>
        </div>
        

        <!--end section title -->
      </article>
      <div style="clear: both;"></div>
    </section>
    <center>
    <div class="contact-social">
        <a class="contact-social-icons" href="#"><img src="svg/facebook.svg" weight="25" title="facebook" height="25"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="contact-social-icons" href="#"><img src="svg/instagram.svg" weight="25" title="instagram" height="25"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="contact-social-icons" href="#"><img src="svg/google.svg" weight="25" title="gmail" height="25"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="contact-social-icons" href="#"><img src="svg/linkedin.svg" weight="25" title="gmail" height="25"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="contact-social-icons" href="#"><img src="svg/whatsapp.svg" weight="25" title="whatsapp" height="25"></a> 
    </div><br>
    <p class="fontsettings">Copyright © 2020 | <a class="colorcover-link" href="#">Dough-licious Delights</a></p><br><br>
  </div></center>
  </body>
</html>
