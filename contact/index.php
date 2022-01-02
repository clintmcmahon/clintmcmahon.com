<?php

$PageTitle="Contact | Clint McMahon // Freelance technical consultant, website maker and mobile app developer in Minneapolis, Minnesota";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('../header.php');
?>
<div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center single-col-max-width">
			    <h2 class="heading">Contact</h2>
<?php 
if(isset($_POST['submit'])){
    $to = "clint@msoftwaredev.com"; // this is your Email address
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $subject = "New project request";
    $message = $name . " submitted:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Email sent successfully! Thank you, " . $name . ", I'll be in touch shortly.";
	}
	else
	{
?>
			    <div class="intro">
			    <p>Interested in hiring me for your project or just want to say hi? Fill in the contact form below or send me an email to <a href="mailto:clint@msoftwaredev.com?subject=Let's build something great!">clint@msoftwaredev.com</a></p>
			    <p>Want to get connected? Follow me on the social channels below.</p>
			    <ul class="list-inline mb-0">
		            <li class="list-inline-item mb-3"><a class="twitter" href="https://twitter.com/cwmcmhn"><i class="fab fa-twitter fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="linkedin" href="https://www.linkedin.com/in/clintmcmahon/"><i class="fab fa-linkedin-in fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="github" href="https://github.com/clintmcmahon/"><i class="fab fa-github-alt fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item"><a class="instagram" href="https://www.instagram.com/cwmcmhn/"><i class="fab fa-instagram fa-fw fa-lg"></i></a></li>
	                <li class="list-inline-item mb-3"><a class="stack-overflow" href="https://stackoverflow.com/users/118144/clint-mcmahon"><i class="fab fa-stack-overflow fa-fw fa-lg"></i></a></li>
	            </ul><!--//social-list-->
			    
			</div><!--//container-->
	    </section>
	    <section class="contact-section px-3 py-5 p-md-5">
		    <div class="container">
			    <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="">
			        <h3 class="text-center mb-3">Get In Touch</h3>
			        <div class="form-row">                                                           
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="name">Name</label>
		                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" minlength="2" required="" aria-required="true">
		                </div>                    
		                <div class="form-group col-md-6">
		                    <label class="sr-only" for="email">Email</label>
		                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="" aria-required="true">
		                </div>
		                <div class="form-group col-12">
		                    <label class="sr-only" for="message">Your message</label>
		                    <textarea class="form-control" id="message" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true"></textarea>
		                </div>
		                 <div class="form-group col-12">
		                    <button type="submit" name="submit" class="btn btn-block btn-primary py-2">Send Now</button>
		                </div>                           
		            </div><!--//form-row-->
		        </form>
<?php
	}
	?>
			    </div><!--//container-->
		</section>
		<?php
			include_once("../footer.php");
?>
    </div><!--//main-wrapper-->
    
	
