@extends('frontend.layouts.main')
@section('main-container')

<?php $title = "WattGuru | who we are |  it consulting companies in India"; ?>
<?php $description = "WattGuru, the IT Consulting and Solutions Vertical of Idam Infra, develops IT products and solutions under its own brand name"; ?>
<?php $keywords = "it consulting, it consulting companies in India, top it consulting firms in India, top it consulting firms in the world, top it consulting firms by revenue, Energy Modelling Support,energy modeling support to energy companies in India, top it services companies in india"; ?>

<!-- ========================================
          Our Main Hero Section Start
    ========================================  -->
<section class="main_wrapper">
  <div class="wave_img">
    <img src="{{url('frontend/images/BannerImageAboutUs.jpg')}}" alt="">
    <!--container start-->
    <div class="wave-container">
      <div class="main_overlay" data-aos="slide-center">
        <h1>Who we are</h1>
      </div>
    </div>
    <!--container end-->
  </div>
</section>
<!-- About Is Solution -->
<section class="iot">
  <div class="iot-wrapper ">
    <div class="left">
      <h3>About WattGuru </h3>
      <p>WattGuru, the IT Consulting and Solutions Vertical of Idam Infra,
        develops IT products and solutions under its
        own brand name. We aim at providing product
        focused and latest cutting-edge technology-
        based IT solutions. We also provide legacy IT
        services encompassing IT feasibility
        assessment and process overview, IT strategy
        and planning support and IT project
        management. Our home-grown smart IT and
        IoT solutions help in digitizing business
        processes, thereby eliminating the need of
        paperwork and bringing in efficiency
        improvements to our customers’ business
        operations.</p>

    </div>

    <div class="right about-it-solution">
      <img src="{{url('frontend/images/it-solutions-image1.png')}}" alt="IT Solutions">
    </div>
  </div>
</section>
<!-- ========================================
                  IT Assessment
    ========================================  -->
<style>
  ._about_wrap {
    width: 100%;
    float: left;
    margin: 60px 0;
  }

  ._about_wrap ._inner_wrap {
    max-width: 1147px;
    margin: 0 auto;
    text-align: center;
  }

  ._about_wrap ._inner_wrap h2 {
    font-size: 3rem;
    margin-bottom: 20px;
  }

  ._about_wrap ._inner_wrap p {
    font-size: 1.4rem;
  }

  ._about_wrap_section .left {
    flex-basis: 48%;
  }

  ._about_wrap_section .right {
    flex-basis: 48%;
  }

  .m-strategy-wrapper {
    width: 1147px;
    margin: 0 auto;
    max-width: 90%;
  }

  .m-strategy-wrapper .left img {
    width: 100%;
    height: 100%;
    max-width: 100%;
  }
</style>
<section class="about">
  <h2>Core Values and Beliefs</h2>
  <div class="core-values">
    <div class="core-values-item core-box1">
      <img src="{{url('frontend/images/about/Integrity.png')}}">
      <h3>Integrity</h3>
      <p>We are honest, transparent, ethical, consistent and fair in dealing with all stakeholders</p>
    </div>
    <div class="core-values-item core-box2">
      <img src="{{url('frontend/images/about/empowerment.png')}}">
      <h3>Empowerment</h3>
      <p>We are committed to employee development</p>
    </div>
    <div class="core-values-item core-box3">
      <img src="{{url('frontend/images/about/Sustainability.png')}}">
      <h3>Sustainability</h3>
      <p>We firmly believe in protecting environment and sustainable living</p>
    </div>
    <div class="core-values-item core-box4">
      <img src="{{url('frontend/images/about/quality.png')}}">
      <h3>Quality</h3>
      <p>We are dedicated to quality; quality of every output; be it a product or a service</p>
    </div>
    <div class="core-values-item core-box5">
      <img src="{{url('frontend/images/about/innovation.png')}}">
      <h3>Innovation</h3>
      <p>Continuous improvement/ innovations is at the core of our actions</p>
    </div>
    <div class="core-values-item core-box6">
      <img src="{{url('frontend/images/about/Compassion.png')}}">
      <h3>Compassion</h3>
      <p>We expect profit but not at the cost of core values</p>
    </div>
  </div>
</section>





<!-- ========================================

                  IT Strategy

    ========================================  -->

<section class="main-strategy">

  <div class="m-strategy-wrapper _about_wrap_section">

    <div class="left">

      <img src="{{url('frontend/images/Vision.png')}}" alt="">

    </div>

    <div class="right">

      <h3>Vision</h3>

      <p> Our vision is to enable carbon minimal world through our products and services in energy domain</p>

    </div>

  </div>



</section>
<section>
  <div class="quality-wrapper">
    <div class="left">
      <h3>Quality</h3>
      <p>We are accredited with the world’s most recognized quality management standard – ISO
        <a href="https://www.iso.org/iso-9001-quality-management.html" target="_blank">9001:2015</a> for Management Consulting, Information Technology Services and Energy
        Management Services by <a href="https://www.tuv.com/india/en/" target="_blank">TUV Rheinland</a>. ISO accreditation demonstrates our commitment to
        provide high quality services to our clients.
      </p>

    </div>
    <div class="right">
      <img src="{{url('frontend/images/iso-certified.png')}}" alt="quality">

    </div>


  </div>
</section>

<!--about Section-->

<section id="management" role="about management">

  <div class="_about_management">

    <div class="_inner_section">

      <h2>Management Team</h2>

      <div class="_items">

        <div class="_card">

          <img src="{{url('frontend/images/about/team1.png')}}">

        </div>

        <div class="_caption">

          <h3>Balawant Joshi </h3>

          <h5>Founder and Managing Director of Idam Infra</h5>

          <p>Balawant has more than 28 years of experience in energy, infrastructure and utilities sector. In power

            sector, his experience spans across the entire value chain i.e., generation, transmission, distribution

            and supply. He has been extensively involved in design, development and implementation of IT

            solutions such as Maintenance Management System, Regulatory Information Management System,

            Centralized Monitoring System. He is the Founder and Secretary of Indian Renewable Energy Federation

            (IREF) and a member of Indian Wind Energy Association (InWEA), Institute of Electrical and Electronics

            Engineers (IEEE) and also a life member of Computer Society of India. He holds B.E. in Electrical

            Engineering and MBA in Finance and Software Technology from the prestigious Mumbai University. </p>

        </div>

      </div>

      <div class="_items">

        <div class="_card">

          <img src="{{url('frontend/images/about/team2.png')}}">

        </div>

        <div class="_caption">

          <h3>Ajit Pandit </h3>

          <h5> Founding Director and CEO of Idam Infra </h5>

          <p>Ajit has over 26 years of experience in the power sector. His experience in the power sector spans the

            technical, commercial, regulatory and financial spheres. Ajit has extensively supported various

            Electricity Regulatory Commissions (ERCs) and utilities in a variety of regulatory and policy matters

            such as Tariff determination, intra-state Availability Based Tariff (ABT), Renewable Purchase

            Obligations, formulation of regulations etc. Besides, he possess skills in project structuring and

            financial engineering, expertise in technical issues associated with the power system. He holds

            B.E. in Electrical Engineering from Victoria Jubilee Technical Institute (VJTI) and MMS degree from

            Mumbai University.</p>

        </div>

      </div>

    </div>

  </div>

</section>
<!--About Team-->
<section id="team">
  <div class="_about_team">
    <div class="_inner_section">
      <h2>Core Team</h2>
      <div class="_items">

        <div class="_caption">
          <h3>Reena Kori </h3>
          <h5>Associate Director- Business Development</h5>
          <p>Reena has over 21 years of professional experience in power transmission project (EHV/HT/LT) execution,
            regulatory and policy advocacy, contract management, project management and monitoring. Her professional
            experience domain involves business development, strategic planning, bidding support for thermal power
            projects, seeking long term/short term open access at central and state levels, transaction advisory on
            Tariff Based Bidding Guidelines and PPP framework. She holds B.E. in Civil Engineering from the Government
            College of Engineering, Pune. She also holds M. Tech in Water Resources and MBA in Technology Management,
            both from the Indian Institute of Technology (IIT), Mumbai and Delhi respectively to her credit.
          </p>
        </div>
        <div class="_card">
          <img src="{{url('frontend/images/about/Reena-Kori.png')}}">
        </div>
      </div>
      <div class="_items">

        <div class="_caption">
          <h3>Harshad Juvekar </h3>
          <h5>General Manager- Information Technology</h5>
          <p>Harshad has over 20 years of experience in IT services for Energy and ETRM domain. He is a technically
            accomplished IT professional. He has experience in automation, IT project lifecycle management, cost
            estimation, documentation, implementation, client interaction and stakeholder management, system study,
            tender preparation for various IT projects in government and private sector. Harshad holds BE in
            Instrumentation from Mumbai University and PGDBA in Operations Management from Symbiosis Centre for
            Distance Learning, Pune. He is also a UiPath Certified Automation Consultant.
          </p>
        </div>
        <div class="_card">
          <img src="{{url('frontend/images/about/Harshad-S-Juvekar.png')}}">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection