
{{-- 
// session_start();

// $db = mysqli_connect("localhost", "root", "", "xuser");

// if(isset($_POST['signupbtn'])) {
//      session_start();
//      $email = mysql_real_escape_string($_POST['email']);
//      $psw = mysql_real_escape_string($_POST['psw']);
//      $psw_repeat = mysql_real_escape_string($_POST['psw_repeat']);

//      if($psw == $psw_repeat) {

//      $psw = md5($psw);
//      $sql = "INSERT INTO users(email, psw) VALUES('$email', '$password')";
//      mysqli_query($db, $sql);
//      $_SESSION['message'] = "You are now logged in";
//      } 
//      else{
//      $_SESSION['message'] = "Password does not match";
//      }
//  }
  --}}

  <!DOCTYPE html>

  <html >
  <head>
    <!-- Site made with Mobirise Website Builder v4.7.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="../../app/themes/mobirise4/components/menu1/false" type="image/x-icon">
    <meta name="description" content="">
    <title>Gigalink Solutions</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="icon" href="assets/images/gigalink logo(3).png">
    <link rel="stylesheet" type="text/css" href="register.php">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  
    
    <script>
        var modal=document.getElementById('id01');
  
        window.onclick=function(event) {
          if(event.target==modal) {
              modal.style.display="none";
          }
        }
    </script>
    
  </head>
  <body>
     
   @include('inc.navbar2')
  
  <section class="engine"><a href="https://mobirise.ws/m">drag and drop site builder</a></section><section class="carousel slide cid-qMHOjhgibe" data-interval="false" id="slider1-q">
  
      
  
      <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-q" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-q" data-slide-to="3"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="https://www.youtube.com/watch?v=jyrsUid2tJs&amp;t=136s"><div class="mbr-overlay" style="opacity: 0.5;"></div><div class="container container-slide"><div class="image_wrapper"><img src="assets/images/1.jpg" style="opacity: 0;"><div class="carousel-caption justify-content-center"><div class="col-10 align-left"><h2 class="mbr-fonts-style display-1">About Us</h2><p class="lead mbr-text mbr-fonts-style display-5" style="text-align: left;"><em>Gigalink Solutions? Who do you ask? Never heard of us? That’s strange so you should read about us here.</em>
  </p></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/2.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/2.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Services</h2><p class="lead mbr-text mbr-fonts-style display-5"><em>We have done a lot of things –except disappointing our clients. What can we give you? A lot. And this is only the beginning.</em>
  </p><div class="mbr-section-btn" buttons="0"><a class="btn  btn-primary display-4" href="#content5-r">SEE MORE</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"><h2 class="mbr-fonts-style display-1" style="text-align: right;">Projects</h2><p class="lead mbr-text mbr-fonts-style display-5" style="text-align: right;"><em>Some achievements can be measured by the recognition it gained. Our projects leave meaningful impacts to our partners –and you can be part of them today.</em></p><div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-success" href="#features18-v">SEE MORE</a> </div></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-709x1080.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/mbr-709x1080.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Rate Card</h2><p class="lead mbr-text mbr-fonts-style display-5"><em>What does <b>this</b> button do? Our simulator can work wonders and you may gain full insights of it by clicking here.</em>
  </p><div class="mbr-section-btn" buttons="0"><a class="btn display-4 btn-secondary" href="#info2-y">Click here</a> </div></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-q"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-q"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>
  
  </section>
  
  <section class="features11 cid-qMHBI0yE8T" id="features11-m">
  
      
  
      
  
      <div class="container">   
          <div class="col-md-12">
              <div class="media-container-row">
                  <div class="mbr-figure" style="width: 55%;">
                  <a href='about'><img src="assets/images/airport-taxi-innova-3-952x714.jpg" class="about" alt="Mobirise" title=""></a>
                  </div>
                  <div class=" align-left aside-content">
                      <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                          About Us</h2>
                      <div class="mbr-section-text">
                          <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                          Gigalink Solutions Sdn Bhd or GIGALINK is a UTM spin-off company founded by an engineer in 2011 through UTM-MTDC Symbiosis Programme. 
                          <br><br>
                          Our company first made its headlines in Malaysian market with SmartaxiAds, which provide and maintain a mobile digital advertising platform embedded with mobile hotspot in Malaysian taxis.
  
  
                         <div class="media">
                             <div class="media-body">
                                 <h4 class="card-title mbr-fonts-style display-5">Click on the picture to know more about us.</h4>
                             </div>
                         </div>
                      </div>
  
                      <!-- <div class="block-content">
                          <div class="card-box">
                              <p class="block-text mbr-fonts-style display-5">
                                  Click on the picture to know more about us.
                              </p>
                          </div>
                      </div> -->
                      <!-- <div class="block-content">
                          <div class="card p-3 pr-3">
                              <div class="media">
                                  <div class=" align-self-center card-img pb-3">
                                      <a href="page1.html"><span class="mbr-iconfont mbri-flag"></span></a>
                                  </div>     
                                  <div class="media-body">
                                      <h4 class="card-title mbr-fonts-style display-7">What We Do</h4>
                                  </div>
                              </div>                
  
                              <div class="card-box">
                                  <p class="block-text mbr-fonts-style display-7">
                                     We make stuff happen. From theory, dream &amp; concept to test-bed &amp; prototype to deployment &amp; delivery. We try to connect every dot that we found to make it a better solution and more viable. 
                                  </p>
                              </div>
                          </div>
  
                          <div class="card p-3 pr-3">
                              <div class="media">
                                  <div class="align-self-center card-img pb-3">
                                      <a href="page1.html"><span class="mbr-iconfont mbri-drag-n-drop2"></span></a>
                                  </div>     
                                  <div class="media-body">
                                      <h4 class="card-title mbr-fonts-style display-7">
                                          How We Do</h4>
                                  </div>
                              </div>                
  
                              <div class="card-box">
                                  <p class="block-text mbr-fonts-style display-7">
                                      Every project we plan to involve must be viable. The return must always be higher than the investments. Then we will start playing with our toys to make it works.
                                  </p>
                              </div>
                          </div>
                      </div> -->
                  </div>
              </div>
          </div> 
      </div>          
  </section>
  
  <section class="mbr-section content5 cid-qMHQOILkiV mbr-parallax-background" id="content5-r">
  
      
  
      <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(118, 118, 118);">
      </div>
  
      <div class="container">
          <div class="media-container-row">
              <div class="title col-12 col-md-8">
                  <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                      Services</h2>
                  <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">We aim to develop and maintain our highly satisfied customers.&nbsp;</h3>
                  
                  
              </div>
          </div>
      </div>
  </section>
  
  <section class="features1 cid-qMHR8mysdx" id="features1-s">
      
      
  
      
      <div class="container">
          <div class="media-container-row">
  
              <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-img pb-3" id="smart_screen">
                      <span class="mbr-iconfont mbri-touch"  style="color: rgb(7, 59, 76);"></span>
                  </div>
                  <div class="card-box">
                      <h4 class="card-title py-3 mbr-fonts-style display-5" >
                          Infotainment Smart Screen</h4>
                      <!-- <p class="mbr-text mbr-fonts-style display-7">
                          We took information publication to a whole new level. At the end of your fingertips, all possibilities that lies within your brands can be explored.</p> -->
                  </div>
              </div>
  
              <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-img pb-3">
                      <span class="mbr-iconfont mbri-laptop" style="color: rgb(15, 118, 153);"></span>
                  </div>
                  <div class="card-box">
                      <h4 class="card-title py-3 mbr-fonts-style display-5">Software Development</h4>
                      <!-- <p class="mbr-text mbr-fonts-style display-7">
                          Some people do not know the fundamental requirements to develop a fully working program. We are here to assess and assist the growth of your software. </p> -->
                  </div>
              </div>
  
              <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-img pb-3">
                      <span class="mbr-iconfont mbri-hot-cup" style="color: rgb(20, 157, 204);"></span>
                  </div>
                  <div class="card-box">
                      <h4 class="card-title py-3 mbr-fonts-style display-5">
                          Business Intelligent</h4>
                      <!-- <p class="mbr-text mbr-fonts-style display-7">
                          This is an area that we pay most attention about it. Certain business potentials can be maximised by visualisation and detailed data analytic processes.</p> -->
                  </div>
              </div>
  
              
  
          </div>
  
      </div>
  
  </section>
  
  <section class="features1 cid-qMHR9vQly9" id="features1-t">
      
      
  
      
      <div class="container">
          <div class="media-container-row">
  
              <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-img pb-3">
                      <span class="mbr-iconfont mbri-idea" style="color: rgb(127, 25, 51);"></span>
                  </div>
                  <div class="card-box">
                      <h4 class="card-title py-3 mbr-fonts-style display-5">Ui &amp; UX Design</h4>
                      <!-- <p class="mbr-text mbr-fonts-style display-7">
                         A good interface would determine how well your product can be accepted by the end users. As far as we know, this is the area we excel the most and there is no such thing as unsatisfied customers.</p> -->
                  </div>
              </div>
  
              <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-img pb-3">
                      <span class="mbr-iconfont mbri-users" style="color: rgb(204, 41, 82);"></span>
                  </div>
                  <div class="card-box">
                      <h4 class="card-title py-3 mbr-fonts-style display-5">
                          IT Consulting &amp; Networking</h4>
                      <!-- <p class="mbr-text mbr-fonts-style display-7">
                          There were answers for every questions. And we would be very glad to help you with it. Any confusion on IT and networking? Electronic engineering related problems? We got your back.</p> -->
                  </div>
              </div>
  
              <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-img pb-3">
                      <span class="mbr-iconfont mbri-browse" style="color: rgb(255, 51, 102);"></span>
                  </div>
                  <div class="card-box">
                      <h4 class="card-title py-3 mbr-fonts-style display-5">
                          Project Management CMS</h4>
                      <!-- <p class="mbr-text mbr-fonts-style display-7">
                          If you fail to plan, then you plan to fail. We would never fail you with our respectful work integrity and that is why successful projects have been our backbone for years to come.</p> -->
                  </div>
              </div>
  
              
  
          </div>
  
      </div>
  
  </section>
  
  <section class="features18 popup-btn-cards cid-qMHSc3xoQd" id="features18-v">
  
      
  
      
      <div class="container">
          <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Projects</h2>
          <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">Some of the project accomplished by us.  </h3>
          <div class="media-container-row pt-5 ">
              <div class="card p-3 col-12 col-md-6 col-lg-3">
                  <div class="card-wrapper ">
                      <div class="card-img">
                          <div class="mbr-overlay"></div>
                          <div class="mbr-section-btn text-center"><a href="projects" class="btn btn-primary display-4">Learn More</a></div>
                          <img src="assets/images/lecture-hall-1-492x236.jpg" alt="Mobirise" title="">
                      </div>
                      <div class="card-box">
                          <h4 class="card-title mbr-fonts-style display-7">
                              Capture Lecture <br>Solution</h4>
                     <!--      <p class="mbr-text mbr-fonts-style align-left display-7">This is a section for detail description for the first project which is lecture capture solution</p> -->
                      </div>
                  </div>
              </div>
              <div class="card p-3 col-12 col-md-6 col-lg-3">
                  <div class="card-wrapper">
                      <div class="card-img">
                          <div class="mbr-overlay"></div>
                          <div class="mbr-section-btn text-center"><a href="projects" class="btn btn-primary display-4">Learn More</a></div>
                          <img src="assets/images/mbr-492x328.jpg" alt="Mobirise" title="">
                      </div>
                      <div class="card-box">
                          <h4 class="card-title mbr-fonts-style display-7">
                              Innovative Wireless Solution</h4>
                        <!--   <p class="mbr-text mbr-fonts-style display-7">This is a section for detail description for the second project which is innovative wireless solution.<br></p> -->
                      </div>
                  </div>
              </div>
  
              <div class="card p-3 col-12 col-md-6 col-lg-3">
                  <div class="card-wrapper">
                      <div class="card-img">
                          <div class="mbr-overlay"></div>
                          <div class="mbr-section-btn text-center"><a href="projects" class="btn btn-primary display-4">Learn More</a></div>
                          <img src="assets/images/celcom-492x327.jpg" alt="Mobirise" title="">
                      </div>
                      <div class="card-box">
                          <h4 class="card-title mbr-fonts-style display-7">
                              Infotainment Screen (Malaysia)</h4>
                        <!--   <p class="mbr-text mbr-fonts-style display-7">This is a section for detail description for the third project which is infotainment screen in Malaysia.</p> -->
                      </div>
                  </div>
              </div>
  
              <div class="card p-3 col-12 col-md-6 col-lg-3">
                  <div class="card-wrapper">
                      <div class="card-img">
                          <div class="mbr-overlay"></div>
                          <div class="mbr-section-btn text-center"><a href="projects" class="btn btn-primary display-4">Learn More</a></div>
                          <img src="assets/images/airport-limo-492x369.jpg" alt="Mobirise" title="">
                      </div>
                      <div class="card-box">
                          <h4 class="card-title mbr-fonts-style display-7">
                              Infotainment Screen (Dubai)</h4>
                        <!--   <p class="mbr-text mbr-fonts-style display-7">This is a section for detail description for the fourth project which is infotainment screen in Dubai.</p> -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  {{-- <section class="counters2 counters cid-qMNhMOLuKw" id="counters2-24">
  
      
  
      
  
      <div class="container pt-4 mt-2">
          <div class="media-container-row">
              <div class="media-block" style="width: 50%;">
                  <h2 class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">Simulator</h2>
                  <h3 class="mbr-section-subtitle pb-5 align-left mbr-fonts-style display-5">The infotainment Screen Simulator would guide you on ways to upload your media and the way it being displayed to the passengers.</h3>
                  <div class="mbr-figure">
                      <a href="page4.php"><img src="assets/images/gigalinkk-device-mockup-872x720.png" class="simulator" alt="" title=""></a>
                  </div>
              </div>
              <div class="cards-block">
                  <div class="cards-container">
                      <div class="card px-3 align-left col-12 col-md-6">
                          <div class="panel-item p-3">
                              <div class="card-img pb-3">
                                  <a href="page4.php"><span class="mbr-iconfont pr-2 mbri-image-gallery"></span></a>
                                  <h3 class="py-3 mbr-fonts-style display-2"></h3>
                              </div>
                              <div class="card-text">
                                  <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Banner upload</h4>
                                  <p class="mbr-content-text mbr-fonts-style display-7">
                                      The uploaded banner would be displayed on the top of the simulator player. </p>
                              </div>
                          </div>
                      </div>
                      <div class="card px-3 align-left col-12 col-md-6">
                          <div class="panel-item p-3">
                              <div class="card-img pb-3">
                                  <a href="page4.php"><span class="mbr-iconfont pr-2 mbri-video"></span></a>
                                  <h3 class="py-3 mbr-fonts-style display-2"></h3>
                              </div>
                              <div class="card-text">
                                  <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Video upload</h4>
                                  <p class="mbr-content-text mbr-fonts-style display-7">
                                      The uploaded video would be displayed at the centre of the simulator player.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="card px-3 align-left col-12 col-md-6">
                          <div class="panel-item p-3">
                              <div class="card-img pb-3">
                                  <a href="page4.php"><span class="mbr-iconfont pr-2 mbri-add-submenu"></span></a>
                                  <h3 class="py-3 mbr-fonts-style display-2"></h3>
                              </div>
                              <div class="card-text">
                                  <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7"><div><span style="color: inherit; font-size: 1.2rem; background-color: transparent;">Button upload</span><br></div></h4>
                                  <p class="mbr-content-text mbr-fonts-style display-7">
                                      The uploaded button would be displayed on the right side of the simulator player. </p>
                              </div>
                          </div>
                      </div>
                      <div class="card px-3 align-left col-12 col-md-6">
                          <div class="panel-item p-3">
                              <div class="center card-img pb-3">
                                  <a href="page4.php"><span class="mbr-iconfont pr-2 mbri-cloud"></span></a>
                                  <h3 class="py-3 mbr-fonts-style display-2"></h3>
                              </div>
                              <div class="card-texts">
                                  <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Save to cloud</h4>
                                  <p class="mbr-content-text mbr-fonts-style display-7">
                                          All the uploaded media would be stored in a cloud storage.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  
  <section class="mbr-section info2 cid-qMI6wdaTt4" id="info2-y">
  
      
  
      
  
      <div class="container">
          <div class="row main justify-content-center">
              <div class="media-container-column col-12 col-lg-3 col-md-4">
                  <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="ratecard">
                      KNOW MORE</a></div>
              </div>
              <div class="media-container-column title col-12 col-lg-7 col-md-6">
                  <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                      SEE OUR RATE CARD</h2>
                  <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">See our rate card, package and become our reseller and advertiser.</h3>
              </div>
          </div>
      </div>
  </section>
  
  @include('inc.footer')
  
  
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/slidervideo/script.js"></script>
    
    
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
      <input name="animation" type="hidden">
    </body>
  </html>