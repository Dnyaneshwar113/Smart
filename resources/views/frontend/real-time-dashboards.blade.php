@extends('frontend.layouts.main')
@section('main-container')

<?php $title = "Realtime Dashboards | WattGuru | Security Constrained Economic Dispatch monitoring portal"; ?>
<?php $description = " Real time dashboard is an information management tool that makes it easy for operations teams as well as senior executives across the organizations to review key data in an easily digested format."; ?>
<?php $keywords = "it consulting, it consulting companies in India, top it consulting firms in India, top it consulting firms in the world, top it consulting firms by revenue, Energy Modelling Support,energy modeling support to energy companies in India, top it services companies in india"; ?>

  <!-- ======================================== 
          Our Main Hero Section Start  
    ========================================  -->
  <section class="main_wrapper">
    <div class="wave_img">
      <img src="{{url('frontend/images/banner/real-time-dashboards.jpg')}}" alt="">
      <!--container start-->
      <div class="wave-container ">
        <!--<img src="https://workinp.xyz/projects/wattguru/images/laptop.png" alt="" id="laptop1">-->
        <div class="iot-based">
          <h2>Improve your business operations performance with our real time dashboard solutions</h2>
        </div>
      </div>
      <!--container end-->
    </div>
  </section>
  <!-- ======================================== 
                  real time 1 
    ========================================  -->
  <section class="iot pb0">
    <div class="iot-wrapper mobile dashboard">
      <div class="left">
        <div class="heading">
          <h3>Realtime Dashboards</h3>
        </div>
        <p> Real time dashboard is an information management tool that makes it easy for operations teams as well as
          senior executives across the organizations to review key data in an easily digested format. As a result, they
          can identify and correct negative trends in
          operational and organization performance, understand which areas of the business are performing efficiently
          and identify the best
          opportunities for improvement. With the rise of big data and Business Technology(BI), Real-time dashboards
          have become increasingly
          popular. While organizations expand their capability to collect and aggregate increasing volumes of data,
          real-time dashboards are being used to display that data in real-time, providing IT teams and other staff with
          the most up-to-date information on a variety of
          operational, security and business performance metrics.</p>
      </div>
      <div class="right">
        <img src="{{url('frontend/images/banner/real-time-dashboard1.jpg')}}">
      </div>
    </div>
  </section>
  <!-- ======================================== 
                  real time 1 
    ========================================  -->
  <section class="iot">
    <div class="iot-wrapper dashboard">
      <div class="left">
        <img src="{{url('frontend/images/banner/real-time-dashboard2.jpg')}}">
      </div>
      <div class="right realtime-dashboard">
        <div class="heading">
          <h3>Security Constrained Economic Dispatch (SCED) monitoring portal </h3>
        </div>
        <p> Security Constraints Economic Dispatch (SCED) is a procedure that optimises the dispatch of available
          generation on bar by taking into consideration the applicable constraints, such as variable cost of generator,
          ramp rates, share, maximum generation, minimum generation, etc. The goal of generation optimization to reduce
          overall generating costs while respecting the technical and commercial restrictions of the generators and the
          transmission network. The SCED portal serves as a tool for system operators that provide day ahead and
          intraday power scheduling positions of various power plants and support their decision-making to enable
          economic dispatch of generation from appropriate plants. The key aspects of this solution are:</p>
        <ul>
          <li> Automated day ahead and intraday power scheduling data capture from regional dispatch centre systems</li>
          <li> Automatic input and output scheduling data flow to and from optimization engine</li>
          <li> Dashboard capability</li>
          <li> Scheduling and Cost Savings Analysis capability</li>
        </ul>
      </div>
    </div>
  </section>
   @endsection