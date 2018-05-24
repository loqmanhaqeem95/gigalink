<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../../app/themes/mobirise4/components/menu1/false" type="image/x-icon">
  <meta name="description" content="Web Creator Description">
  <title>About Us</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="icon" href="assets/images/gigalink logo(3).png">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
</head>
<body>
  <section class="menu cid-qMTzqQyIxQ" once="menu" id="menu1-34">

    

    
</section>

@include('inc.navbar')


<section class="header1 cid-qMIfjuO2A3 mbr-parallax-background" id="header1-14">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
@foreach($about as $a)
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                {{$a->header_title}}</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                    {{$a->header_subtitle}}</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5" style="text-align: center;"><em>{{$a->header_desc}}
                </em></p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="#content4-15">
                        LEARN MORE</a></div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section content4 cid-qMIfyUNtBo" id="content4-15">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                {{$a->mission_title}}</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    {{$a->mission_desc}}
                    <div><br></div>
                </h3>               
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qMIk7j43hM" id="content4-17">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    {{$a->vision_title}}</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    {{$a->vision_desc}}
                </h3>
                
            </div>
        </div>
    </div>
</section>

<section class="cid-qMIkIXG2su" id="image4-18">
    <!-- Block parameters controls (Blue "Gear" panel) -->
    
    <!-- End block parameters -->
    <div class="container images-container">
            <div class="media-container-row" style="width: 80%;">
                <div class="img-item item1" style="width: 177%;">
                    <img src="assets/images/celcom-1-550x366.jpg" alt="" title="">
                    
                </div>
                <div class="img-item item1" style="width: 177%;">
                    <img src="assets/images/celcom-1-550x366.jpg" alt="" title="">
                    
                </div>
            </div>
    </div>
</section>

<section class="accordion1 cid-qMIoNkMTTj" id="accordion1-1d">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">
                       {{$a->foc}}</h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_34" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_34" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    {{$a->foc_q1}}</h4>
                            </a>
                        </div>
                        <div id="collapse1_34" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_34">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">{{$a->foc_a1a}}
<br>
<br>{{$a->foc_a1b}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_34" aria-expanded="false" aria-controls="collapse2">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span> {{$a->foc_q2}}</h4>
                            </a>
                            
                        </div>
                        <div id="collapse2_34" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_34">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                   {{$a->foc_a2a}}<br><br>{{$a->foc_a2b}}<br><br>{{$a->foc_a2c}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_34" aria-expanded="false" aria-controls="collapse3">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    {{$a->foc_q3}}</h4>
                            </a>
                        </div>
                        <div id="collapse3_34" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_34">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">{{$a->foc_a3a}}<br><br>{{$a->foc_a3b}}</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="timeline2 cid-qMUSPdiuHP" id="timeline2-41">

    

    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(46, 46, 46);">
    </div>

    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
            {{$a->timeline}}
        </h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">
            {{$a->timeline_desc}}</h3>

        <div class="container timelines-container" mbri-timelines="">
            <div class="row timeline-element reverse separline">      
                <span class="iconsBackground">
                    <span class="mbri-pages mbr-iconfont"></span>
                </span>          
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            {{$a->year1}} </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                           {{$a->desc1}}</p>
                     </div>
                </div>
            </div>

            <div class="row timeline-element  separline">
                <span class="iconsBackground">
                    <span class="mbri-responsive mbr-iconfont"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">{{$a->year2}}</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                                {{$a->desc2}}
                        </p>
                    </div>
                </div>
            </div> 

            <div class="row timeline-element reverse">
                <span class="iconsBackground">
                    <span class="mbri-watch mbr-iconfont"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">{{$a->year3}}</h4>      
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                                {{$a->desc3}}
                        </p>
                    </div>
                </div>
            </div>

            

            

            

            

            

            

            

            

            
        </div>
    </div>
</section>
@endforeach
@include('inc.footer')


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>