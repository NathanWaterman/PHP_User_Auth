<?php 
    session_start(); 
    if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        session_destroy();
        exit;
    } 
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>test</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--[if lte IE 9]>
      <p class="browserupgrade" style="background-color: #CB0475; color: #ffffff;">Sorry, your browser is not supported. To improve your experience we recommend using a <a href="http://browsehappy.com/">modern browser</a>.</p>
  <![endif]-->


    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->

    <!--build:css css/styles.min.css-->
    <link rel="stylesheet" type="text/css" href="stylesheets/formalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/jquery.fullPage.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <!--endbuild-->

    <!--build:js js/main.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-2.2.0.min.js"></script> -->
    <script src="js/javascript.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fullPage.min.js"></script>
    <script src="js/player.min.js"></script>
    <!-- endbuild -->

</head>
<body class="body home-page gradient-animation" data-anchor="backToTop">



<div class="navbar navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
  <div class="container">
   <div class="navbar-header">
    <!-- <a id="nav-icon3" class="navbar-toggle"> 
      <span></span>
      <span></span>
      <span></span>
      <span></span>
     </a> -->
    <a class="navbar-brand" href="#"><img class="" src="images/logo.png"></a>
   </div>
   <div id="slidemenu">
    <div class="btn_container">
      <a href="pdf/pdf.pdf" target="_blank"><button class="navbar-right"><span class="desktop-text">Download Proposal </span><span class="download_arrow"><img src="images/download_arrow_nav.png"></span></button></a>
    </div>
   </div>
  </div>
 </div>

      <div id="fullpage">
          <div class="section section0" data-anchor="sect0">

              <div class="section0-content">
                  <div class="labs-powered-div">
                      <img class="svg-logo-big" src="images/logo_main.png" alt="">
                  </div>
                  <div class="reimagine-text slide-in-bottom">
                      <p>
                        A Digital Experience Transformation: working together to marry the interests of your customers to the aggressive interests of your business.  
                      </p>
                  </div>
                  <div class="tool-button-div clearfix slide-in-bottom-btn">
                    <a href="pdf/pdf.pdf" target="_blank">
                      <img src="images/download_circle_btn.png"/>
                      <p>Download Proposal</p>
                    </a>
                  </div>
                  <div class="icon-wrapper with-video slide-in-bottom-btn">
                      <a href="#sect1"><img class="scroll-arrow" src="images/svg/arrow-down-tiff.svg" alt="Scroll down"></a>
                  </div>
              </div>
              
          </div><!-- section 0 -->

          <div class="section section1 fadeInText animUpIn-container" data-anchor="sect1">

            <div class="clearfix widescreen-flex highly_visual">
                <div class="about-heading home-about dark-bg purple">
                    <img src="images/highVisual_smartphone.png" class="home-product-img" alt="a picture of a desktop computer and audio headset representing the support product">
                </div>
                <div class="main-stage clearfix home-about-text light-text">
                  <h1 class="front-text-block">
                    Personal &amp; <br/>
                    Attentive
                  </h1>
                  <div class="front-text-block">
                    <p>
                      A personalized, customer experience for every customer; <span>new &amp; familiar, gifter &amp; self-gifter, millennial &amp; boomer, and self-service &amp; high-touch. </span> 
                    </p>
                  </div>
                </div>
            </div><!-- main-stage -->
            <div class="icon-wrapper">
                <a href="#sect2"><img class="scroll-arrow" src="images/svg/arrow-down-tiff.svg" alt="Scroll down"></a>
            </div>
          </div><!-- section1 -->

          <div class="section section2 fadeInText animUpIn-container" data-anchor="sect2">
            <div class="clearfix widescreen-flex simple_modular">
                <div class="main-stage about-heading home-about dark-bg">
                    
                    <h1 class="front-text-block">
                    Modular &amp; <br/>
                    Flexible
                  </h1>
                  <p class="front-text-block">
                    A responsive design system of templates and modules within AEM that provides more control, improves efficiency, and decreases overall costs.
                  </p>
                </div>
                <div class="clearfix home-about-text light-text purple">
                  <img src="images/simple_modular.png" class="home-product-img" alt="a picture of a desktop computer and audio headset representing the support product">
                </div>
            </div><!-- main-stage -->
            <div class="icon-wrapper">
                <a href="#sect3"><img class="scroll-arrow" src="images/svg/arrow-down-tiff.svg" alt="Scroll down"></a>
            </div>
          </div><!-- section2 -->

          <div class="section section3 fadeInText animUpIn-container" data-anchor="sect3">
            <div class="clearfix widescreen-flex mobileFirst">
                <div class="about-heading home-about dark-bg purple">
                    <img src="images/mobileFirst.png" class="home-product-img" alt="a picture of a desktop computer and audio headset representing the support product">
                </div>
                <div class="main-stage clearfix home-about-text light-text">
                  <h1 class="front-text-block">
                    Elegant &amp; <br/>
                    On Brand
                  </h1>
                  <div class="front-text-block">
                    <p>
                      Inspired by the emotive imagery and lifestyle vignettes you share, a simple, highly visual experience that humanizes the austere elegance of your products' silhouettes.
                    </p>
                  </div>
                </div>
            </div><!-- main-stage -->
            <div class="icon-wrapper">
                <a href="#sect4"><img class="scroll-arrow" src="images/svg/arrow-down-tiff.svg" alt="Scroll down"></a>
            </div>
          </div><!-- section3 -->

          <div class="section section4 fadeInText animUpIn-container" data-anchor="sect4">

              <div class="section4-content">
                  <div class="labs-powered-div">
                      <p class="amp">&amp;</p>
                      <p class="thank thankText">Thank You</p>
                  </div>
                  <div class="reimagine-text slide-in-bottom purple">
                      <p>Infinite ways to engage with customers. <br/> To explore with design. <br/> To evolve marketing technology.
                  </div>
                  <div class="tool-button-div clearfix purple">
                    <a href="pdf/pdf.pdf" target="_blank">
                      <img src="images/download_circle_btn.png"/>
                      <p>Download Proposal</p>
                    </a>
                  </div>
                  <div class="icon-wrapper scroll-top-wrapper">
                      <a href="#sect0"><img class="scroll-arrow scroll-top" src="images/backTop.png" alt="Scroll up"></a>
                      <p class="scroll-text">Back to Top</p>
                  </div>
              </div>
              
          </div><!-- section 0 -->
        </div><!-- fullpage -->
          
</body>

</html>

