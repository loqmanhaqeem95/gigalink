<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../../app/themes/mobirise4/components/menu1/false" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Project</title>
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
    @include('inc.navbar')
  

<section class="engine"><a href="https://mobirise.ws/f">simple web builder</a></section><section class="header1 cid-qMU43q1kKy mbr-parallax-background" id="header1-3m">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
@foreach($projects as $p)
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    {{$p->header_title}}</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                        {{$p->header_subtitle}}</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5"><em>
                    {{$p->header_desc}}</em></p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="page3.php#info1-1x">
                        READ MORE</a></div>
            </div>
        </div>
    </div>
    @endforeach
</section>

<section class="mbr-section info1 cid-qMJxZkZZv5" id="info1-1x">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(239, 239, 239);">
    </div>
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
               <!--  <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">Text Text Text Text Text Text Text Text Text Text Text Text</h3> -->
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                        {{$p->p1}}</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                
            </div>
        </div>
    </div>
</section>

<section class="tabs4 cid-qMPs8900et" id="tabs4-2x">

    

    

    <div class="container">
        <!-- <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
            Title</h2> -->
        <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
            {{$p->p1_subtitle}}</h3>

        <div class="media-container-row mt-5 pt-3">
            <div class="mbr-figure" style="width: 60%;">
                <img src="assets/images/lectures-1204x679.jpg" alt="Mobirise" title="">
            </div>
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style display-7" role="tab" data-toggle="tab" href="#tabs4-2x_tab0" aria-selected="false">
                            {{$p->p1_button1}}</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active show display-7" role="tab" data-toggle="tab" href="#tabs4-2x_tab1" aria-selected="true">
                            {{$p->p1_button2}}</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active show display-7" role="tab" data-toggle="tab" href="#tabs4-2x_tab2" aria-selected="true">
                            {{$p->p1_button3}}
                        </a></li>
                    
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                        {{$p->p1_desc1}}</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                        {{$p->p1_desc2}}</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                        {{$p->p1_desc3}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info1 cid-qMTzA4PR3p" id="info1-37">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(239, 239, 239);">
    </div>
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
               <!--  <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">Text Text Text Text Text Text Text Text Text Text Text Text&nbsp;</h3> -->
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                   {{$p->p2}}</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-qMTATxXTfg" id="content11-38">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><h2><strong>{{$p->p2_q1}}</strong></h2>{{$p->p2_a1}}</li>
                    <li><h2><strong>{{$p->p2_q2}}</strong></h2>{{$p->p2_a2}}</li>
                    <li><h2><strong>{{$p->p2_q3}}</strong></h2>{{$p->p2_a3}}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info1 cid-qMTDblz7Oi" id="info1-3a">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(239, 239, 239);">
    </div>
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                {{$p->p3}}</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content6 cid-qMTDz59DEa" id="content6-3b">
    
     
    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 60%;">
                      <img src="assets/images/mbr-436x591.jpg" alt="Mobirise" title="">  
                    </div>
                    <div class="media-content">
                        <div class="mbr-section-text">
                            <p class="mbr-text mb-0 mbr-fonts-style display-7"><strong>{{$p->p3_bold1}}</strong> {{$p->p3_desc1}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content6 cid-qMTDAyfTa2" id="content6-3c">
    
     
    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 60%;">
                      <img src="assets/images/mbr-436x654.jpg" alt="Mobirise" title="">  
                    </div>
                    <div class="media-content">
                        <div class="mbr-section-text">
                            <p class="mbr-text mb-0 mbr-fonts-style display-7"><strong>{{$p->p3_bold2}}</strong>{{$p->p3_desc2}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section info1 cid-qMTDVPYWAd" id="info1-3e">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <!-- <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">Text Text Text Text Text Text Text Text TextText Text Text &nbsp;&nbsp;</h3> -->
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                    {{$p->p4}}</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                
            </div>
        </div>
    </div>
</section>

<section class="cid-qMTFqgLZm9" id="image1-3f">

    

    <figure class="mbr-figure container">
            <div class="image-block" style="width: 66%;">
                <img src="assets/images/gigalinkk-device-mockup-872x720.png" width="1400" alt="Mobirise" title="">
                
            </div>
    </figure>
</section>

<section class="mbr-section article content3 cid-qMTOdc0YCy" id="content3-3g">
      
     

    <div class="container">
        <div class="media-container-row">
            <div class="row col-12 col-md-8">
                <div class="col-12 col-md-6 pr-lg-4 mbr-text mbr-fonts-style display-7"><!-- <p><strong>
                Title 1</strong></p> --><p>{{$p->p4_desc1}}</p></div>
                <div class="col-12 col-md-6 pl-lg-4 mbr-text mbr-fonts-style display-7"><!-- <p><strong>Title 2</strong></p> --><p>{{$p->p4_desc2}}
</p></div>
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
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>