<?php

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
?>
<div class="main-wrapper">
		
		<section class="about-me-section p-3 p-lg-5 theme-bg-light">
			<div class="container">
				<div class="profile-teaser media flex-column flex-lg-row">
					
					<div class="media-body">
						<h2 class="name font-weight-bold mb-1">Clint McMahon</h2>
						<div class="tagline mb-3">Senior Software Engineer and Technology Consultant</div>
						<div class="bio mb-4">
							I'm a senior software engineer, technical consultant and solutions architect in Minneapolis, MN. I like to build things in React, C#, JavaScript, SQL and AWS. I've worked on a range of 
							projects from complex, high transactional apps for large Fortune companies like Wells Fargo, Thomson Reuters and Wolters 
							Kluwer in a variety of industries such as healthcare, finance and e-commerce.
						</div>
						<div class="mb-4">
							<a class="btn btn-primary mr-2 mb-3" href="/contact"><i class="fas fa-arrow-alt-circle-right mr-2"></i><span class="d-md-inline">Hire Me</span></a>
							<a class="btn btn-secondary mb-3" href="/portfolio"><i class="fas fa-file-alt mr-2"></i><span class="d-md-inline">View</span> Portfolio</a>
						</div>
					</div><!--//media-body-->
				</div>
			</div>
		</section><!--//about-me-section-->
		
		<section class="overview-section p-3">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3">About Me</h2>
				<div class="section-intro mb-2">I've been building software since I was sixteen in my high school Computers I class. I have years of experience leading projects and building software for clients of all sizes all over the 
					world. To see more of my experience and what companies I've worked with check out my <a href="resume">online resume</a> 
					and <a href="/portfolio">project portfolio</a>.
				</div>
				<div class="section-intro mb-2">
                    When I'm not hanging out with my family, putting on a crawfish boil for the neighborhood, making pour over coffees or exploring the city, my free time is often spent scripting
                    my favorite radio stations to <a href="https://github.com/clintmcmahon/currentify" target="_blank">Spotify playlists</a> or building bots to <a href="https://github.com/clintmcmahon/twitter-retweet-bot" target="_blank">track my favorite tamale vendor on Twitter</a>. 
                </div>
                <div class="section-intro mb-5">
                    I'm interested in new opportunities as well as interacting with other tech folks - plus pizza and coffee. If you have recomendations on either of those last two
                    or would like talk about a new project, business or development, drop me a line at <a href="mailto:clint@msoftwaredev.com">clint@msoftwaredev.com</a>.
                </div>
			</div>
		</section>
		<div class="container"><hr></div>
		
		<section class="testimonials-section p-3 ">
			<div class="container">
				<h2 class="section-title font-weight-bold">Testimonials</h2>
				<div class="mb-4">A few nice words some great clients have said about working with me.</div>
				<div class="testimonial-carousel owl-carousel owl-theme">

					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Clint has proven himself to be highly competent, efficient, and responsive when we've encountered debilitating issues with our application.  We are grateful for his work and we highly recommend him! We are grateful for his work with us and would highly recommend him!
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="meta">
								<div class="name">Amy B</div>
								<div class="info">University of Minnesota</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								My group needed a developer in a short period of time to provide maintenance and perform updates to our custom-built online lesson system. Clint had the skills we required and was able to navigate and understand our lesson system in a very short period of time. Clint is great to work with. 
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="meta">
								<div class="name">Xiong X</div>
								<div class="info">University of Minnesota</div>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="quote-holder">
							<blockquote class="quote-content">
								Working with Clint is great. He is enthusiastic about his job and a great problem solver. He goes beyong fixing the issue to identify the underlying issue. Clint always goes the extra mile, and our intranet and extranet clients love him. I highly recommend working with Clint!
							</blockquote>
							<i class="fas fa-quote-left"></i>
						</div><!--//quote-holder-->
						<div class="source-holder">
							<div class="meta">
								<div class="name">Amy O</div>
								<div class="info">Thomson Reuters</div>
							</div>
						</div>
					</div>
					
					
					
					
				</div><!--//testimonial-carousel-->	
			</div><!--//container-->
		</section><!--//testimonials-section-->
		
		<div class="container"><hr></div>
		
		<!--section class="featured-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
				<div class="row">
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-1.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Project intro lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">	
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-2.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Dropbox</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-3.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Google</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="card project-card">
							<div class="row no-gutters">
								<div class="col-lg-4 card-img-holder">
									<img src="assets/images/project/project-4.jpg" class="card-img" alt="image">
								</div>
								<div class="col-lg-8">
									<div class="card-body">
										<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
										<p class="card-text"><small class="text-muted">Client: Uber</small></p>
									</div>
								</div>
							</div>
							<div class="link-mask">
								<a class="link-mask-link" href="project.html"></a>
								<div class="link-mask-text">
									<a class="btn btn-secondary" href="project.html">
										<i class="fas fa-eye mr-2"></i>View Case Study
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center py-3"><a href="portfolio.php" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Portfolio</a></div>
				
			</div>
		</section><
		
		<div class="container"><hr></div>
		

		<section class="latest-blog-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
				<div class="row">
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-1.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">Top 3 JavaScript Frameworks</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
								
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 2 days ago</small>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-2.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">About Remote Working</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published a week ago</small>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="card blog-post-card">
							<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-3.jpg" alt="image">
							<div class="card-body">
								<h5 class="card-title"><a class="theme-link" href="blog-post.html">A Guide to Becoming a Full-Stack Developer</a></h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
								<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
							</div>
							<div class="card-footer">
								<small class="text-muted">Published 3 weeks ago</small>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center py-3"><a href="blog-home.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Blog</a></div>
			</div>
			
		</section-->
		<?php
include_once('footer.php');
?>
	</div><!--//main-wrapper-->

	


	



	