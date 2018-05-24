<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../../app/themes/mobirise4/components/menu1/false" type="image/x-icon">
  <meta name="description" content="Web Generator Description">
  <title>Rate Card</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="icon" href="assets/images/gigalink logo(3).png">
  <link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="stylesheet" href="assets/form/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style>
 .sadasdad {
  height: 800px;
  padding-top: 135px;
  padding-bottom: 90px;
  background-image: url("../../../assets/images/meeting-ppl.jpg");
}
img {
    
}
 </style>
  
  
</head>
<body class= "navbar-collapse">

     @include('inc.navbar') 
  

<section class="engine"><a href="https://mobirise.ws/b">best site creator</a></section><section class="header1 cid-qMU7THnV7B sadasdad mbr-parallax-background" id="header1-3p">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);" >
    </div>

  
    <div class="container">
       @foreach($ratecard as $c)
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1" style="font-weight:700; text-align:center;">
                  {{$c->header_title}}</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2" style="text-align:center;">
                    {{$c->header_subtitle}}</h3>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5" style="text-align:center;"><em>{{$c->header_desc}}</em></p>
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="page4.php#image1-3s">
                        SEE IT NOW!</a></div>
            </div>
        </div>
    </div>


</section>

<section class="cid-qMUbiaUUcp" id="image1-3s">

    

    <figure class="mbr-figure">
            <div class="image-block" style="width: 88%;">
                <img src="assets/images/company-profile-rate-card-v4-page-19-1754x1240.jpg" width="1400" alt="Mobirise" title="">
                
            </div>
    </figure>
</section>

<!-- <section class="cid-qMUcj0drJq" id="pricing-tables1-3t">

    

    
    <div class="container">
        <div class="media-container-row">

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Platinum</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">UAD&nbsp;</span>
                        <span class="price-figure mbr-fonts-style display-1">100000</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per month
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text&nbsp;</li>
                            <li class="list-group-item">Text Text Text Text&nbsp;</li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a href="https://mobirise.com" class="btn btn-primary display-4">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Gold</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">UAD&nbsp;</span>
                        <span class="price-figure mbr-fonts-style display-1">
                            60000<br></span>
                        <small class="price-term mbr-fonts-style display-7">
                            per day
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text&nbsp;</li>
                            <li class="list-group-item">Text Text Text Text&nbsp;</li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a href="https://mobirise.com" class="btn btn-primary display-4">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Silver</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">UAD&nbsp;</span>
                        <span class="price-figure mbr-fonts-style display-1">
                            30000<br></span>
                        <small class="price-term mbr-fonts-style display-7">
                            per year
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text&nbsp;</li>
                            <li class="list-group-item">Text Text Text Text&nbsp;</li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4">
                        <a href="https://mobirise.com" class="btn btn-primary display-4">BUY NOW</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section> -->

<section class="cid-qOGpS9lUlc" id="image2-4i">

    <figure class="mbr-figure">
        <div class="image-block" style="width: 100%;">
            <img src="assets/images/company-profile-rate-card-v4-page-24-1754x1240.jpg" alt="Mobirise" title="">
            
        </div>
    </figure>
</section>

<section class="cid-qOpe49JusK" id="image2-42" style="width:100%;">

    <figure class="container mbr-figure" style="" >
        <div class="image-block" style="width: 100%;">
            <img src="assets/images/company-profile-rate-card-v4-page-25-1754x1240.jpg" alt="Mobirise" title="">
            
        </div>
    </figure>
</section>

<section class="progress-bars3 cid-qMUew8Jwhg" id="progress-bars3-3x">
 
     

    
    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            {{$c->report}}</h2>

        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            {{$c->report_subtitle}}
</h3>
    
        <div class="media-container-row pt-5 mt-2">
            <div class="card p-3 align-center"  style="text-align: 
                    center;">
                <div class="wrap">
                <div class="pie_progress progress1" role="progressbar" data-goal="{{$c->percent_total}}">
                        <p class="pie_progress__number mbr-fonts-style display-5">80</p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        {{$c->total}}</h4>
                        <h5 style="color:#767676;">*11 devices being maintained</h5>
                </div>                 
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress2" role="progressbar" data-goal="{{$c->percent_online}}">
                        <p class="pie_progress__number mbr-fonts-style display-5"></p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        {{$c->online}}</h4>
                </div>                 
            </div>

            <div class="card p-3 align-center">
                <div class="wrap">
                    <div class="pie_progress progress3" role="progressbar" data-goal="{{$c->percent_offline}}">
                        <p class="pie_progress__number mbr-fonts-style display-5">14</p>
                    </div>
                </div> 
                <div class="mbr-crt-title pt-3">
                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                        {{$c->offline}}</h4>
                </div>                 
            </div>

            

            

            
        </div>
</div></section>

<section class="mbr-section info3 cid-qMUFnm39i1" id="info3-3z">

    @include('inc.modalRe')
    {{-- @include('inc.modalRe') --}}
    @include('inc.modalAd')
    {{-- @include('inc.modalRe') --}}
     

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    {{$c->seller}}</h2>
                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5">{{$c->seller_desc}}</h3>
                <p class="mbr-text align-left mbr-white mbr-fonts-style display-7"></p>
                <div class="mbr-section-btn align-left py-4"><a onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary display-4" href="#id03">SUBSCRIBE</a>
                    {{-- <a class="btn btn-white-outline display-4" href="#">SUBSCRIBE</a></div> --}}

            </div>
        </div>
    </div>
</section>

<section class="mbr-section info3 cid-qMUFQGxeCi" id="info3-40">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    {{$c->adv}}
                </h2>
                <h3  class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    {{$c->adv_desc}}</h3>
                <p class="mbr-text align-left mbr-white mbr-fonts-style display-7"></p>
                <div class="mbr-section-btn align-left py-4"><a onclick="document.getElementById('id04').style.display='block'" class="btn btn-primary display-4" href="#id04" >SUBSCRIBE</a>
                    {{-- <a class="btn btn-white-outline display-4" href="#">SUBSCRIBE</a></div> --}}
            </div>
        </div>
    </div>
    @endforeach
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
  <script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>