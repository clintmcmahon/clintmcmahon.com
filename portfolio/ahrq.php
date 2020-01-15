<<?php

$PageTitle="AHRQ | Clint McMahon // Freelance technical consultant, website maker and mobile app developer in Minneapolis, Minnesota";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
	  
define('WEB_ROOT', '/clintmcmahon.com/');
include_once('../header.php');
?>
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container single-col-max-width">
			    <h2 class="heading text-center">Project: Transplant Center Search</h2>
			    <div class="project-intro text-center">
					<p class="mb-0 lead">This website can provide potential transplant candidates with information that may be helpful in making an informed decision about transplant centers.</p>
				</div>
			    
		    </div><!--//container-->
	    </section>
	    <section class="project px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="project-meta media flex-column flex-md-row p-4 theme-bg-light">
				    <img class="project-thumb mb-3 mb-md-0 mr-md-5 rounded d-none d-md-inline-block" src="/assets/images/project/ahrq/ahrq.jpg" alt="Transplant Center Search">
					<div class="media-body">
					    <div class="client-info">
						    <h3 class="client-name font-weight-bold mb-4">Hennepin Healthcare</h3>
						    <ul class="client-meta list-unstyled">
							    <li class="mb-2"><i class="fas fa-industry fa-fw mr-2"></i><strong>Industry:</strong> Healthcare</li>
							    <li class="mb-2"><i class="fas fa-users fa-fw mr-2"></i><strong>Size:</strong> 100+</li>
							    <li class="mb-2"><strong><i class="fas fa-link fa-fw mr-2"></i>Website:</strong> <a class="theme-link" href="https://transplantcentersearch.org">transplantcentersearch.org</a></li>
							    
						    </ul>
						    <div class="client-bio mb-4">Designed, architected and developed ASP.NET Core WebAPI web services and React JS frontend product to enable potential organ donor recipients to search & compare organ transplant centers throughout the country.</div>
						    <h4 class="subheading mb-3">Project Requirements</h4>
						    <ul class="mb-0">
							    <li class="mb-2">Provide information to transplant candidates about their alternatives when choosing transplant centers.</li>
							    <li class="mb-2">Create data processes via SQL Server to securely transfer organ transplant data from multiple data sources into a single repository</li>
							    <li class="mb-2">Consult with doctors, research staff and other developers to identify technology strategy and best practices</li>
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