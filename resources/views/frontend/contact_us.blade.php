@extends('frontend.layouts.main')
@section('main-container')

<?php $title = "Contact Us | Think Energy. Think IT Solutions |  WattGuru."; ?>
<?php $description = "Ready to start your next projects with us? That's great! Give us a call or send us an email and we get back to you as soon as possible!"; ?>
<?php $keywords = "it consulting, it consulting companies in India, top it consulting firms in India, top it consulting firms in the world, top it consulting firms by revenue, Energy Modelling Support,energy modeling support to energy companies in India, top it services companies in india"; ?>

  <style >
    
   
    .message {
   background-image:linear-gradient(15deg, #07a2f4 0%, #371fa8 100%);
    color: #fff;
    width: 1147px;
    padding: 10px;
    margin: 0 auto 25px;
    text-align: center;
    border-radius: 5px;
   }
   @media(max-width:768px){
       .message{width:90%;}
   }

  </style>

  <!-- ======================================== 

          Our Main Hero Section Start  

    ========================================  -->

  <section class="main_wrapper">

    <div class="wave_img">

      <img src="{{url('frontend/images/banner/contact-banner.jpg')}}" alt="">

      <!--container start-->

      <div class="wave-container ">

        <div class="iot-based">



          <h2>Contact Us</h2>





        </div>

      </div>

      <!--container end-->

    </div>

  </section>



  <!-- ======================================== 

                  contact form  

         ========================================  -->



  <section class="contact">

    <div class="contact-wrapper">







      <div class="left">

        <div class="heading">

          <h3>Get In Touch</h3>
          

          <p>Ready to start your next projects with us? That's great! Give us a call or send us an email and we get back
            to you as soon as possible!</p>
           
            @if(Session::has('message_sent')) 
            <div class="message" role="alert"> 
            <h2>{{Session::get('message_sent')}}</h2>
            @endif
          </div> 

                    
          <form action="{{ route ('contact_us.send') }}" method="post" class="_form_wrap">
          @csrf
            <div class="_right_message">

              <label>Full Name*</label>

              <input name="name" type="text" class="form-row" placeholder="Full Name">

              <label>Mobile Number*</label>

              <input name="phone" type="text" class="form-row" placeholder="Mobile Number">

              <label>Email*</label>

              <input type="email" name="email" class="form-row" placeholder="Email">

            </div>

            <div class="_left_message">

              <label>Message*</label>

              <textarea name="message" class="form-row" style="height:80%;" placeholder="Enter Your Message"></textarea>

            </div>



            <div class="_button_wrap" id="contact">

              <button type="submit" name="submit"> Submit</button>

            </div>

          </form>



        </div>

      </div>

      <div class="right">

        <div class="heading">

          <h3>Contact details</h3>

          <div class="_main_address">



          </div>







        </div>



      </div>



    </div>



  </section>



  <section>

    <div class="contact_map" align="center">





      <div class="map_left1">

        <div class="image_wrapper">

          <img src="{{url('frontend/images/map/Map_Image.png')}}">

              <div class="pin mu"> <img src="{{url('frontend/images/map/mu.png')}}"></div>
              <div class="pin de"> <img src="{{url('frontend/images/map/de.png')}}"></div>
              <div class="pin ko"> <img src="{{url('frontend/images/map/ko.png')}}"></div>
              <div class="pin hy"> <img src="{{url('frontend/images/map/hy.png')}}"></div>
              <div class="pin pu"> <img src="{{url('frontend/images/map/pu.png')}}"></div>
 
        </div>

      </div>



      <div class="map_right1">

        <div class="red address">

          <h4><i class="fa fa-map-marker"></i>&nbsp; Mumbai </h4>

          <p> Quest Coworks Pvt. Ltd., Technopolis Knowledge Park, 5th Floor, Mahakali Caves Road, Chakala, Andheri
            East,<br> Mumbai - 400 093</p>

          <h5><i class="fa fa-phone"></i>&nbsp; +91 (22) 6862 0300 </h5>



          <h5><i class="fa fa-envelope"></i> &nbsp; contact@idaminfra.com </h5>

        </div>

        <div class="green address">

          <h4><i class="fa fa-map-marker"></i>&nbsp; Delhi </h4>

          <p>Awfis Space at Awfis, L29 - L34, 1st Floor, Connaught Place, <br> New Delhi – 110 001</p>

          <h5><i class="fa fa-phone"> &nbsp; </i> +91 (22) 6862 0300 </h5>



          <h5><i class="fa fa-envelope">&nbsp; </i> contact@idaminfra.com </h5>

        </div>







        <div class="blue address">

          <h4><i class="fa fa-map-marker"></i>&nbsp; Kolkata </h4>

          <p> Awfis Space Solutions Pvt Ltd. Godrej Waterside, 12th Floor, Tower II, DP Block, Salt Lake, Sector V, <br>
            Kolkata – 700 091</p>

          <h5><i class="fa fa-phone"></i> &nbsp; +91 91369 20669 </h5>

          <h5><i class="fa fa-envelope"></i> &nbsp; info@enfragy.com</h5>

        </div>

        <div class="orange address">

          <h4><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Hyderabad </h4>

          <p> House No. 3-51, Flat No. 201 Abhishek Towers (Opp. HAL Gate) Balanagar <br> Hyderabad – 500 042</p>

          <h5><i class="fa fa-phone"> &nbsp; </i> +91 91369 20664 </h5>

          <h5><i class="fa fa-envelope"> &nbsp; </i> info@enfragy.com </h5>

        </div>



        <div class="violet address">

          <h4><i class="fa fa-map-marker"></i>&nbsp; Pune </h4>

          <p> 1st Floor, Teerth Technospace, Mumbai - Bengaluru Highway, Baner,<br> Pune – 411 045</p>

          <h5><i class="fa fa-envelope"> &nbsp; </i> contact@wattguru.com </h5>

        </div>



      </div>



    </div>

  </section>







  <!-- ======================================== 

                  footer

    ========================================  -->

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>



  <script src="{{url('frontend/js/index.js')}}"></script>
  <script src="{{url('frontend/js/custom-cd.js')}}"></script>
  

  <script>



    // animation

    AOS.init({

      duration: 800,

      offset: 50,

    })



  </script>

</body>

</html>
@endsection