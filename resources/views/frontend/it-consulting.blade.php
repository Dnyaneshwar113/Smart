
@extends('frontend.layouts.main')
@section('main-container')
<?php $title = "IT Consulting"; ?>
<?php $description = "IT Consulting"; ?>
<?php $keywords = "IT Consulting"; ?>



  <!-- ======================================== 

          Our Main Hero Section Start  

    ========================================  -->

  <section class="main_wrapper">

    <div class="wave_img">

      <img src="{{url('frontend/images/it-consulting-bg.jpg')}}" alt="">

      <!--container start-->

      <div class="wave-container">





        <!--<img src="https://workinp.xyz/projects/wattguru/images/laptop.png" alt="" id="laptop1">-->

        <div class="main_overlay left-banner" data-aos="slide-right">



          <h2>IT Consulting</h2>

          <p>We provide advisory services in IT assessment and process<br>

            review, IT strategy and planning support and IT Project <br>

            Management. Our strong capabilities in these areas put <br>

            energy companies on focused IT roadmap to design, develop <br>

            and implement solutions that help them in improving process<br> efficiency

            and automation.</p>



        </div>

      </div>

      <!--container end-->

    </div>

  </section>





  <!-- ======================================== 

                  IT Assessment

    ========================================  -->



  <section class="main-assessment">

    <div class="m-assessment-wrapper">



      <div class="left">

        <h3>IT Assessment and Process Review</h3>

        <p> IT assessment of your business will help you understand the state of your IT systems. The benefits of such
          assessment include identifying initiatives to save costs,

          improve efficiency, and enhance service to business. </p>

        <p>Idam Infra can undertake a range of assessments depending on the level of detail required and the time
          available to

          conduct the review - Full IT and targeted assessment, rapid assessment, and detailed assessment. Our team can
          review your current processes and capabilities quickly and efficiently to report on service delivery and
          latest capabilities of your enterprise and to show you how to deploy the best practices and bridge the
          capability gap.

        </p>

      </div>



      <div class="right">



        <img src="{{url('frontend/images/it-assessment.png')}}" alt="">



      </div>





    </div>



  </section>





  <!-- ======================================== 

                  IT Strategy 

    ========================================  -->



  <section class="main-strategy">

    <div class="m-strategy-wrapper">







      <div class="left">



        <img src="{{url('frontend/images/strategy.png')}}" alt="">



      </div>



      <div class="right">

        <h3>IT Strategy and Planning Support</h3>

        <p> Inadequately planned IT can lead to poor returns on investment in IT systems, which may not meet long-term
          needs of your organization. Typically, large organizations have chief information officer (CIO) to take care
          of strategic IT planning whereas smaller organizations undertake such planning without the expert guidance
          they really need. Our team will work with you to develop an IT strategy for the organization to make the most
          of your IT budget while addressing your current and future technology needs and to build an IT strategy

          tailored specifically to your needs.



        </p>

      </div>





    </div>



  </section>





  <!-- ======================================== 

                  IT Project

    ========================================  -->



  <section class="main-project">

    <div class="m-project-wrapper">



      <div class="left">

        <h3>IT Project Management Support</h3>

        <p> Our support does not stop with assessment and planning but extends to assisting you in implementing the
          right IT solutions in your organization. We not only identify business requirements to help you identify the
          ideal IT solution vendor but also monitor the vendor's work to ensure that it conforms to the documented
          requirements.</p>

      </div>



      <div class="right">



        <img src="{{url('frontend/images/it-project.png')}}" alt="">



      </div>





    </div>



  </section>
  @endsection