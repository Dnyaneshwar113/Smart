<?php

session_start();

if(isset($_POST['submit']))
{
    
    if($_FILES['attachment']['size'] < 6000000 || $_FILES['cv']['size'] < 6000000 ) {
     
	$to = 'akash@acelema.com'; 
	
	$name = $_POST["name"]; 
	$email = $_POST["email"]; 
    $mobile = $_POST['mobile'];
	$subject	 = "Query From Enfragy Website Career Form";
	$messag	 = $_POST["message"]; //body of the email
	$cv= $_FILES['cv'];
	$attachment = $_FILES['attachment'];

	$message = " Name = " . $name . "\n" . " Number = " .$mobile . "\n" . " Email = " .$email . "\n" .   " Message =" . $messag;

	
	$tmp_name = $_FILES['attachment']['tmp_name']; 
	$name	 = $_FILES['attachment']['name']; 
	$size	 = $_FILES['attachment']['size']; 
	$type	 = $_FILES['attachment']['type']; 
	$error	 = $_FILES['attachment']['error']; 


		$tmp_namee = $_FILES['cv']['tmp_name']; 
	$namee	 = $_FILES['cv']['name']; 
	$sizee	 = $_FILES['cv']['size']; 
	$typee	 = $_FILES['cv']['type']; 
	$errorr	 = $_FILES['cv']['error']; 


	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}
	$handle = fopen($tmp_name, "r");
	$content = fread($handle, $size); 
	fclose($handle);	

	$handlee = fopen($tmp_namee, "r");
	$contentt = fread($handlee, $sizee); 
	fclose($handlee);							

	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random"); 

	$encoded_contentt = chunk_split(base64_encode($contentt));
	$boundaryy = md5("random"); 

	//header
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "From:". "contact@idaminfra.com" ."\r\n"; 
	$headers .= "Content-Type: multipart/mixed;"; 
	$headers .= "boundary = $boundary\r\n"; 
		
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .= chunk_split(base64_encode($message));
		
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content; // Attaching the encoded file with email


		//attachment
	$body .= "--$boundaryy\r\n";
	$body .="Content-Type: $typee; name=".$namee."\r\n";
	$body .="Content-Disposition: attachment; filename=".$namee."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 999991)."\r\n\r\n";
	$body .= $encoded_contentt; // Attaching the encoded file with email
	
	$sentMailResult = mail($to, $subject, $body, $headers);

	if($sentMailResult ){
        $_SESSION['message'] = " Thank you for filling the form. We will get in touch with you shortly. ";
	}
	else{
		die("Sorry but the email could not be sent.
					Please go back and try again!");
	}

}

else {
    $_SESSION['message'] = " Only Use  5mb file size. ";
}

}
?>




<?php include('header.php') ?>
   <style>

     
   .message {

background-image: linear-gradient(15deg, #07a2f4 0%, #371fa8 100%);

color: #fff;

width: 1147px;

padding: 10px;

margin: 0 auto 25px;

text-align: center;

border-radius: 5px;

}



@media(max-width:768px) {

.message {

   width: 90%;

}

}


   .contact{width:100%;max-width:100%;margin-bottom:60px;}
    #modal1 {
  position: fixed;
  z-index: 10000; /* 1 */
  top: 0;
  left: 0;
  display: block;
   visibility: hidden;
  width: 100%;
  height: 100%;
}


#modal1.is-visible {
  visibility: visible;
}

#modal-overlay1 {
position: fixed;
z-index: 10;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: hsla(0, 0%, 0%, 0.5);
  visibility: hidden;
opacity: 0;
transition: visibility 0s linear 0.3s, opacity 0.3s;

}

#modal1.is-visible #modal-overlay1 {
opacity: 1;
visibility: visible;
transition-delay: 0s;
}

  #modal2 {
  position: fixed;
  z-index: 10000; /* 1 */
  top: 0;
  left: 0;
  display: block;
   visibility: hidden;
  width: 100%;
  height: 100%;
}


#modal2.is-visible {
  visibility: visible;
}

#modal-overlay2 {
position: fixed;
z-index: 10;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: hsla(0, 0%, 0%, 0.5);
  visibility: hidden;
opacity: 0;
transition: visibility 0s linear 0.3s, opacity 0.3s;

}

#modal2.is-visible #modal-overlay2 {
opacity: 1;
visibility: visible;
transition-delay: 0s;
}


.modal-wrapper {
position: absolute;
z-index: 9999;
border-radius: 10px;
border: 10px solid #3272b5;
top: 5em;
left: 0%;
right: 0;
padding:20px;
width:80%;
margin: 0 auto;

background-color: #fff;
box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
}

.modal-transition {
transition: all 0.3s 0.12s;
transform: translateY(-10%);
opacity: 0;
}

#modal1.is-visible .modal-transition {
transform: translateY(0);
opacity: 1;
}
#modal2.is-visible .modal-transition {
transform: translateY(0);
opacity: 1;
}

.modal-body{padding: 0px;margin: 0px;}

.modal-header {
position: absolute;
right: 0px;
background-color:none;
box-shadow: inherit;
border-bottom: none;
}
.modal-content{width: 100%;float: left;display: flex;justify-content: space-between;flex-wrap: wrap;}
.modal-content ._uper_part{width:57%;float:left;position:relative;}
.modal-content ._uper_part a{width:40%;margin:50px auto 0px;background:#3272b5;padding:10px 0px;text-align:center;border-radius:5px;color:#fff;font-size:15px;display:inline-block;}
.modal-content ._uper_part ._item{display:flex;width:100%;flex-wrap:wrap;justify-content:space-between;margin-bottom:20px;}
.modal-content ._uper_part ._item strong{font-size:18px;font-weight:500;letter-spacing:1px;width:40%;color:#000;text-align:left;}
.modal-content ._uper_part ._item span{font-size:15px;font-weight:400;letter-spacing:1px;width:60%;color:#000;text-align:left;}
.modal-content ._bottom_part{width:40%;float:left;position:relative;height:380px;overflow-y:scroll;overflow-x:hidden;}
.modal-content ._bottom_part ._list{margin-bottom:30px;padding-right:30px;}
.modal-content ._bottom_part h2{color:#000;font-weight:500;font-size:22px;width:100%;float:left;margin-bottom:10px;}
.modal-content ._bottom_part ul{width:100%;display:flex;flex-wrap:wrap;justify-content:space-between;margin-left:20px;}
.modal-content ._bottom_part ul li{width:100%;font-size:14px;color:#000;font-weight:300;margin-bottom:14px;line-height:24px;}
#style-4::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px #e5e5e5;}
#style-4::-webkit-scrollbar{width: 8px;background-color: #e5e5e5;}
#style-4::-webkit-scrollbar-thumb{background-color: #3272b5;border:none;}
.modal-close {
  position: absolute;
  top: -36px;
  right: -22px;
  width: 30px;
  height: 30px;
  background: #3272b5;
  border-radius: 100%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  z-index: 22;
  border: 0;
}

.modal-close-new {
  position: absolute;
  top: -36px;
  right: -22px;
  width: 30px;
  height: 30px;
  background: #3272b5;
  border-radius: 100%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  z-index: 22;
  border: 0;
}

.modal-close i{font-size: 20px;color: #fff;}
.modal-close-new i{font-size: 20px;color: #fff;}

.modal-close:hover {
color: #777;
}

.modal-heading {
font-size: 1.125em;
margin: 0;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}

.modal-content > *:first-child {
margin-top: 0;
}

.modal-content > *:last-child {
margin-bottom: 0;
}
@media(max-width:768px){
    .modal-wrapper{width:95%;padding:0px;border: 5px solid #3272b5; }
    .modal-content ._uper_part{width:100%;margin-bottom:20px;}
    .modal-content ._uper_part ._item{margin-bottom:15px;}
    .modal-content ._bottom_part{width:100%;height:auto;overflow-y:inherit;overflow-x:inherit;}
    .modal-content ._uper_part a{width: 102%;
   border-radius:0px;
    position: fixed;
    display: inline-block;
    bottom: -1px;
    padding:12px 0px;
    left: -2px;
    right: 0px;
    z-index: 22;}
    .modal-body {
    padding: 15px;margin: 0px;width: 100%;height: 70vh;overflow-y: scroll;}
.modal-close{top:-10px;right:-10px;}
.modal-content ._uper_part ._item span{font-size:14px;width:50%;}
.modal-content ._uper_part ._item strong{font-size:17px;width:50%;}
.modal-content ._bottom_part ul li{margin-bottom:10px;}
    
}

</style>


<!---banner section-->

<section role="about banner section">

    <div class="_about_banner_section _career_banner">

        <div class="_inner_section">

        </div>

    </div>]

</section>

<!---banner section-->





<!---job offering-->

<!--<div class="_job_offering">-->

<!--  <div class="_inner">-->

<!--     <h2>Take a Look at job offerings</h2>-->

<!--     <form>-->

<!--        <div class="_filed">-->

<!--           <input type="text" placeholder="Search for Keywords">-->

<!--        </div>-->

<!--        <div class="_filed">-->

<!--           <input type="text" placeholder="Search for Location">-->

<!--        </div>-->

<!--        <div class="_filed">-->

<!--           <button type="submit">Find Jobs</button>-->

<!--        </div>-->

<!--     </form>-->

<!--  </div>-->

<!--</div>-->

<!---job offering-->



<!---career section-->
 
<div class="_career_withus">

    <div class="_inner">

        <h2>Career With Us</h2>

        <p>We are an equal-opportunity employer. All qualified applicants will receive consideration for employment solely on merit without any discrimination on the basis of race, colour, caste, creed, religion, gender, nationality, political affiliation, disability, sexual orientation, marital or family status, or other differences. Our aim is to capture and communicate the enthusiasm of being part of a vibrant results-oriented organization.</p>

        <ul>

            <li><img src="images/career/Image_1.png"></li>

            <li><img src="https://enfragy.com/images/career/IM_2.jpg"></li>

            <li><img src="https://enfragy.com/images/career/IM_3.jpg"></li>

        </ul>

    </div>

</div>

<!---career section-->



<!---Hiring section-->

<div class="_career_hiring">

    <div class="_inner">

        <h2>We are hiring for the position?</h2>

        <ul>

            <li>

                <strong>Software Developer (PHP,LAMP, LEMP Stack)</strong>

                <p><small> Loaction: Pune</small><small>Experience : 2 to 4 years</small></p>

                <a href="javascript:void(0);" class="modal-toggle">Read More</a>

            </li>

            <li>

                <strong>IT - Manager/ Sr. Manager</strong>

                <p><small> Loaction: Pune</small><small>Experience : 8 to 12 years</small></p>

                <a href="javascript:void(0);" class="modal-toggle1">Read More</a>

            </li>

            <!--<li>-->

            <!--    <strong>Sr. Software Developer (Microsoft Platform)</strong>-->

            <!--    <p><small> Loaction: Pune</small><small>Experience : 6 to 7 years in Microsoft development platform</small></p>-->

            <!--    <a href="javascript:void(0);">Read More</a>-->

            <!--</li>-->

            <!--<li>-->

            <!--    <strong>Sr. Software Developer (Microsoft Platform)</strong>-->

            <!--    <p><small> Loaction: Pune</small><small>Experience : 6 to 7 years in Microsoft development platform</small></p>-->

            <!--    <a href="javascript:void(0);" id="apply">Read More</a>-->

            <!--</li>-->

        </ul>

    </div>

</div>

<!---Hiring section-->



<!---job offering-->

<!-- <div class="_subscribe_section">-->

<!--  <div class="_inner">-->

<!--     <h2>Subscribe Our Newsletter</h2>-->

<!--     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>-->

<!--     <form>-->

<!--        <div class="_filed">-->

<!--           <input type="text" placeholder="Enter Your Name">-->

<!--        </div>-->

<!--        <div class="_filed">-->

<!--           <input type="text" placeholder="Enter Your Email ID">-->

<!--        </div>-->

<!--        <div class="_filed">-->

<!--           <button type="submit">Submit</button>-->

<!--        </div>-->

<!--     </form>-->

<!--  </div>-->

<!--</div>-->

<!---job offering-->





<!-- ========================================

               contact form

      ========================================  -->



<section class="contact _career">

    <div class="contact-wrapper _career_page">

        <div class="left">

            <div class="heading">

                <h3>Join Our Team</h3>

                <?php



if (isset($_SESSION['message'])) {

?>

   <div class="message">

      <h2><?php echo  $_SESSION['message']; ?></h2>



   </div>

<?php

   unset($_SESSION['message']);

}



?>

                <form action="career.php" method="post" enctype="multipart/form-data" class="_form_wrap">
                    <div class="_right_message">

                        <label>Full Name*</label>

                        <input name="name" class="form-row" placeholder="Full Name" required="">

                        <label>Mobile Number*</label>
                        <input name="mobile" class="form-row" placeholder="Mobile Number" required="">
                        <label>Email*</label>
                        <input name="email" class="form-row" placeholder="Email" required="">


                    </div>

                    <div class="_left_message">

                        <label>Message*</label>

                        <textarea class="form-row" style="height:57%;" name="message" required="">
                              </textarea>
                        <div class="_btn">
                            <div class="_file">
                                <input type="file" name="attachment">
                                <p>Cover Letter<i class="fa fa-download" aria-hidden="true"></i></p>

                            </div>

                            <div class="_file">
                                <input type="file" name="cv"  >

                                <p>CV <i class="fa fa-download" aria-hidden="true"></i></p>

                            </div>

                        </div>
                    </div>

                    <div class="_button_wrap">

                        <button name="submit" type="submit" > Submit</button>

                    </div>

                </form>

            </div>

        </div>





    </div>



</section>

 <div class="modal" id="modal1">
    <div class="modal-overlay modal-toggle" id="overlay1"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
      
      </div>
      
      <div class="modal-body">
        <div class="modal-content">
            <div class="_uper_part">
                <div class="_item">
                    <strong>Designation</strong>
                    <span>: Software Developer (PHP,LAMP, LEMP Stack)</span>
                </div>
                 <div class="_item">
                    <strong>Location</strong>
                    <span>: Pune</span>
                </div>
                  <div class="_item">
                    <strong>Educational Qualification</strong>
                    <span>: B.Tech/MCA</span>
                </div>
                <div class="_item">
                    <strong>Years of Experience</strong>
                    <span>: 2 to 4 years</span>
                </div>
                    <div class="_item">
                    <strong>Remuneration</strong>
                    <span>: As per industry standard</span>
                </div>
                <a href="#apply" class="modal-close1">Apply Now</a>
            </div>
            <div class="_bottom_part" id="style-4">
                <div class="_list">
                    <h2>Job Description</h2>
                    <ul>
                        <li>Participate in requirements analysis</li>
                        <li>Write clean, scalable code using PHP and LAMP/LEMP Stack</li>
                        <li>Test and deploy applications and systems</li>
                        <li>Revise, update and debug code</li>
                        <li>Improve existing software</li>
                        <li>Deploy application into web server</li>
                        <li>Develop documentation throughout the software development life cycle (SDLC)</li>
                        <li>Serve as an expert on applications and provide technical support</li>
                        <li>Development practice in continuous integration environment</li>
                    </ul>
                </div>
                    <div class="_list">
                    <h2>Required skills and Experience:</h2>
                    <ul>
                        <li>Proven experience in web application development in full stack technologies - LAMP, LEMP stack, PHP</li>
                        <li>Must have in-depth knowledge in full stack technologies and desired to have knowledge and experience in Microsoft technologies - C#, ASP.NET framework, MVC architecture, IIS</li>
                        <li>Understanding of System Architecture</li>
                        <li>Knowledge of HTML5/CSS3, AJX, JavaScript, jQuery</li>
                        <li>Familiarity with architecture styles/APIs (REST, RPC), WCF</li>
                        <li>Familiar with URS, SRS</li>
                        <li>An ability to understand end users/client’s requirements</li>
                        <li>Problem-solving attitude</li>
                        <li>Must be able to work both independently and as part of a team</li>
                        <li>Excellent troubleshooting and communication skills</li>
                        <li>Understanding of Web security & resolutions</li>
                    </ul>
                </div>
                
                  <div class="_list">
                    <h2>Preferred Skills:</h2>
                    <ul>
                        <li>Work experience in Power Utility/Energy Sector</li>
                        <li>Knowledge of MS SQL Server, MySQL, RDBMS</li>
                        <li>Willingness to learn cloud technologies</li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="modal2">
    <div class="modal-overlay modal-toggle1"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close-new modal-toggle"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
      
      </div>
      
      <div class="modal-body">
        <div class="modal-content">
            <div class="_uper_part">
                <div class="_item">
                    <strong>Designation</strong>
                    <span>: IT - Manager/ Sr. Manager</span>
                </div>
                 <div class="_item">
                    <strong>Location</strong>
                    <span>: Pune</span>
                </div>
                  <div class="_item">
                    <strong>Educational Qualification</strong>
                    <span>: B.Tech/MCA</span>
                </div>
                <div class="_item">
                    <strong>Years of Experience</strong>
                    <span>: 8 to 12 years</span>
                </div>
                    <div class="_item">
                    <strong>Remuneration</strong>
                    <span>: As per industry standard</span>
                </div>
                <a href="#apply" class="modal-close1">Apply Now</a>
            </div>
            <div class="_bottom_part" id="style-4">
                <div class="_list">
                    <h2>Job Description</h2>
                    <ul>
                        <li>Manage software development and maintenance projects</li>
                        <li>Build, foster and overseea small team of software engineers and testers</li>
                        <li>Communicate the project progress to management and customers </li>
                        <li>Build, maintain, and nurture customer relationships effectively</li>
                        <li>Drive implementation of SDLC approaches such as Agile, Scrum inproject team</li>
                        <li>Mentor the team effectively on design of software solutions,development, build, deployment to servers,performance tuning/testing and security audit</li>
                        <li>Review,update and debugthe code written by developers and advise them for corrective actions appropriately</li>
                        <li>Develop documentation throughout the software development life cycle (SDLC)</li>
                        <li>Serve as an expert on applications and provide technical support</li>
                        <li>Should be able to Design, Develop, Test and deploy applications and systems(hands on) as necessary</li>
                    </ul>
                </div>
                    <div class="_list">
                    <h2>Required skills and Experience:</h2>
                    <ul>
                        <li>Minimum 3 years of project management experience</li>
                        <li>Minimum 5 years of proven experience in software development and delivery in Microsoft and open-sourcetechnologies such as PHP, delivery experience in full stack technologies such as LAMP, LEMP, MEAN is desirable</li>
                        <li>Understanding of System Architecture and software solution design</li>
                        <li>Knowledge of HTML5/CSS3, AJX, JavaScript, jQuery</li>
                        <li>Familiarity with architecture styles/APIs (REST, RPC), WCF</li>
                        <li>Familiarity andexperience in creating and working with URS, SRS</li>
                        <li>Ability to understand and discussend users/client’s requirements in meetings</li>
                        <li>Problem-solving attitude</li>
                        <li>Must be able to work both independently and as well as manage a small team</li>
                        <li>Excellent troubleshooting and communication skills</li>
                        <li>Understanding of Web security & resolutions</li>
                        <li>Understanding of Agile methodologies</li>
                    </ul>
                </div>
                
                  <div class="_list">
                    <h2>Preferred Skills:</h2>
                    <ul>
                        <li>Work experience in Power Utility/Energy Sector</li>
                        <li>Knowledge of MS SQL Server, MySQL, RDBMS</li>
                        <li>Willingness to learn cloud technologies</li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php') ?>
  <script>
    $('.modal-toggle').on('click', function(e) {
  $('#modal1').toggleClass('is-visible');
  
});
  $('.modal-toggle1').on('click', function(e) {
  $('#modal2').toggleClass('is-visible');
   
   $('#modal1').hide('is-visible');
  
});
  $('.modal-close-new').on('click', function(e) {
  $('#modal2').hide();
   location.reload();
  
});


  

 $('.modal-close1').on('click', function(e) {
  $('.modal').hide('is-visible');
  
});

</script>