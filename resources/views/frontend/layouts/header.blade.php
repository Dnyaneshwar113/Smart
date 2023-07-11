<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title; ?></title>
 <meta name="description" content="<?php echo $description; ?>">
 <meta name="keywords" content="<?php echo $keywords; ?>">

  <!-- HTML Meta Tags -->
  <title>Think Energy. Think IT Solutions.Think WattGuru.</title>
  <meta name="description" content="WattGuru harnesses the power of technology to redefine the energy solutions market. Our market-proven products and expertise in developing smart custom solutions have helped businesses grow within the power sector.">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://wattguru.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Think Energy. Think IT Solutions.Think WattGuru.">
  <meta property="og:description" content="WattGuru harnesses the power of technology to redefine the energy solutions market. Our market-proven products and expertise in developing smart custom solutions have helped businesses grow within the power sector.">
  <meta property="og:image" content="https://wattguru.com/images/wattguru_logo_3.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="wattguru.com">
  <meta property="twitter:url" content="https://wattguru.com/">
  <meta name="twitter:title" content="Think Energy. Think IT Solutions.Think WattGuru.">
  <meta name="twitter:description" content="WattGuru harnesses the power of technology to redefine the energy solutions market. Our market-proven products and expertise in developing smart custom solutions have helped businesses grow within the power sector.">
  <meta name="twitter:image" content="https://wattguru.com/images/wattguru_logo_3.png">

  <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- <script src="{{url('frontend/js/custom-cd.js')}}"></script> -->
</head>
<body>
  <!--<div id="it_consulting_page">-->
  <header class="header">
    <!-- <a href="{{url('/')}}" class="logo"> <img src="{{url('frontend/images/watt-guru-logo.png')}}" alt=""> </a> -->
    <a href="{{url('/')}}" class="logo"> <img src="https://wattguru.com/images/watt-guru-logo.png" alt=""> </a>
    <nav class="navbar">
      <ul class="navbar-list">
        <li><a class="navbar-link" href="{{url('/')}}">Home</a></li>
        <li class="about_sub"><a class="navbar-link about_down " href="{{url('/who-we-are')}}">Who we are</a>
          <!--mobile icon-->
          <i class="mob_icon about_sub_icon fa fa-angle-right"></i>
          <!--sub menu start-->
          <ul id="sub-menu-2">
           
            <li><a href="{{url('/who-we-are#management')}}">Management Team</a> </li>
            <li><a href="{{url('/who-we-are#team')}}">Core Team</a></li>
             <li><a href="{{url('/gallery')}}">Gallery</a> </li>
          </ul>
          <!--sub sub menu end-->
        </li>
        <li class="service_offerings">
          <!--mobile icon-->
          <i class="mob_icon service_offerings_icon fa fa-angle-right"></i>
          <a class="navbar-link mobile_offer"  href="{{url('/#itservices')}}">What we do</a>
          <!--sub menu start-->
          <ul id="sub-menu-1">
            <li class="it_services"><a href="javascript:void(0);" class="mobile_service">IT Services</a>
              <!--mobile icon-->
              <i class="mob_icon itserviceicon fa fa-angle-right"></i>
              <!--sub sub menu start-->
              <ul id="sub-sub-menu-1">
                <li><a href="{{url('/it-consulting')}}">IT Consulting</a></li>
                <li><a href="{{url('/energy-modelling-support')}}">Energy Modelling Support</a> </li>
              </ul>
              <!--sub sub menu end-->
            </li>
            <li class="it_solutions"><a href="javascript:void(0);" class="mobile_it">IT Solutions</a>
              <!--mobile icon-->
              <i class="mob_icon itsolutionicon fa fa-angle-right"></i>
              <!--sub sub menu start-->
              <ul id="sub-sub-menu-2">
                <li><a href="{{url('/iot-based-solutions')}}">IoT Based Solutions</a></li>
                <li><a href="{{url('/blockchain-based-solutions')}}">Blockchain Based Solutions</a> </li>
                <li><a href="{{url('/transaction-support-solutions')}}">Transaction Support Solutions</a> </li>
                <li><a href="{{url('/real-time-dashboards')}}">Real Time Dashboards </a> </li>
                <li><a href="{{url('/commercial-solutions')}}">Commercial Solutions</a> </li>
                <li><a href="{{url('/knowledge-portals')}}">Knowledge Portals</a> </li>
                <li><a href="{{url('/mobile-applications')}}">Mobile Applications </a> </li>
              </ul>
              <!--sub sub menu end-->
              </li>
          </ul>
          <!--sub menu end-->
        </li>
        <li><a class="navbar-link" href="{{url('/career')}}">Career</a></li>
        <!--<li><a class="navbar-link" href="career">Career</a></li>-->
        <li><a class="navbar-link" href="{{url('/contact_us')}}">Contact Us</a></li>
      </ul>
    </nav>
    <div class="social_menu">
      <a href="https://www.facebook.com/idaminfra" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href=" https://www.linkedin.com/company/idam-infrastructure-advisory-pvt-ltd/mycompany/" target="_blank"><i  class="fa fa-linkedin"></i></a>
      <a href="https://twitter.com/IdamInfra" target="_blank"><i class="fa fa-twitter"></i></a>
    </div>
    <div class="mobile-navbar-btn">
      <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
      <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
    </div>
  </header>