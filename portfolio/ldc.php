<<?php

$PageTitle="Living Donor Collective | Clint McMahon // Freelance technical consultant, website maker and mobile app developer in Minneapolis, Minnesota";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
define('WEB_ROOT', '/clintmcmahon.com/');
include_once('../header.php');
?>
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container single-col-max-width">
			    <h2 class="heading text-center">Project: Living Donor Collective</h2>
			    <div class="project-intro text-center">
					<p class="mb-0 lead">The purpose of this project is to establish a living organ donor registry in which transplant programs register all living donor candidates who come to be evaluated at their center.</p>
				</div>
			    
		    </div><!--//container-->
	    </section>
	    <section class="project px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="project-meta media flex-column flex-md-row p-4 theme-bg-light">
				    <img class="project-thumb mb-3 mb-md-0 mr-md-5 rounded d-none d-md-inline-block" src="/assets/images/project/ldc/ldc.jpg" alt="Living Donor Collective">
					<div class="media-body">
					    <div class="client-info">
						    <h3 class="client-name font-weight-bold mb-4">Hennepin Healthcare</h3>
						    <ul class="client-meta list-unstyled">
							    <li class="mb-2"><i class="fas fa-industry fa-fw mr-2"></i><strong>Industry:</strong> Healthcare</li>
							    <li class="mb-2"><i class="fas fa-users fa-fw mr-2"></i><strong>Size:</strong> 100+</li>
							    <li class="mb-2"><strong><i class="fas fa-link fa-fw mr-2"></i>Website:</strong> <a class="theme-link" href="https://livingdonorcollective.org">livingdonorcollective.com</a></li>
							    
						    </ul>
						    <div class="client-bio mb-4">Worked in conjunction with research staff and doctors to develop a C# MVC living organ donor collection application to study the long-term outcomes of living organ donation of transplant programs across the country.</div>
						    <h4 class="subheading mb-3">Project Requirements</h4>
						    <ul class="mb-0">
							    <li class="mb-2">Securely collected and stored transplant donor information from over 250 transplants centers from around the country</li>
							    <li class="mb-2">Implemented encryption protocol, SSL and encryption in transit between database and web servers to protect sensitive data</li>
							    <li class="mb-2">Mentored developers in new methodology, technology, best coding practices and code reviews</li>
						    </ul>
					    </div>					
					</div><!--//media-body-->
				</div><!--//project-meta-->
				
					
	    </section>
	    
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container single-col-max-width">
			    <h2 class="title">Want me to help with your project?</h2>
			    <p>If you take on freelance work, you can use this section to prompt any potential clients to get in touch with you with their project requirements.</p>
                <div class="text-center"><a class="btn btn-primary" href="/contact.php"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a></div>
		    </div><!--//container-->
	    </section><!--//promo-section-->
    </div><!--//main-wrapper-->
	<?php
	
	include_once('../footer.php');
?>