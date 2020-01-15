<?php

$PageTitle="Portfolio | Clint McMahon // Freelance technical consultant, website maker and mobile app developer in Minneapolis, Minnesota";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
  
<?php }
 define('WEB_ROOT', '/clintmcmahon.com/');
include_once('../header.php');
?>
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center single-col-max-width">
			    <h2 class="heading">Portfolio</h2>
			    <div class="intro">
			    <p>Welcome to my online portfolio. Here's a few of my recent projects I've worked on. I'm currently taking on freelance work at the moment. Want some help building your software?</p>
			    </div>
			    <a class="btn btn-primary" href="contact.php"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
		    </div><!--//container-->
	    </section>
	    <section class="projects-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="project-cards row isotope">
					<div class="isotope-item col-md-6 mb-5 mobileapp frontend">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="/assets/images/project/ldc/ldc.jpg" class="card-img" alt="Living Donor Collective">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="//portfolio/ldc.php" class="theme-link">Living Donor Collective</a></h5>
										<p class="card-text">The purpose of this project is to establish a living organ donor registry in which transplant programs register all living donor candidates who come to be evaluated at their center.</p>
										<p class="card-text"><small class="text-muted">Client: Hennepin Healthcare</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="/portfolio/ldc.php"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="/portfolio/ldc.php">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
						
					</div><!--//col-->
					<div class="isotope-item col-md-6 mb-5 mobileapp frontend">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="/assets/images/project/ahrq/ahrq.jpg" class="card-img" alt="Transplant Center Search">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="/portfolio/ahrq.php" class="theme-link">Transplant Center Search</a></h5>
										<p class="card-text">This website can provide potential transplant candidates with information that may be helpful in making an informed decision about transplant centers.</p>
										<p class="card-text"><small class="text-muted">Client: Hennepin Healthcare</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="/portfolio/ahrq.php"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="/portfolio/ahrq.php">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div><!--//link-mask-->
						</div><!--//card-->
						
					</div><!--//col-->
				</div><!--//row-->
			
		    </div>
	    </section>
	  
    </div><!--//main-wrapper-->
	<?php
	
	include_once('../footer.php');
?>