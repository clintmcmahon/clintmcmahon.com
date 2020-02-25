<?php

$PageTitle="Clint McMahon // Freelance technical consultant, website maker and mobile app developer in Minneapolis, Minnesota";

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
						<div class="tagline mb-3">Feelance Web and Mobile App Developer / Technology Consultant</div>
						<div class="bio mb-4">I'm a freelance software engineer specializing in full stack web development, building APIs, and mobile apps. I write about coding 
							on <a class="link-on-bg" href="https://medium.com/@cwmcmhn" target="_blank">my blog</a>. Want to know how I may help your project? Check out my project <a class="link-on-bg" href="/portfolio">portfolio</a> and <a class="link-on-bg" href="resume.php">online resume</a>.
						</div><!--//bio-->
						<div class="mb-4">
							<a class="btn btn-primary mr-2 mb-3" href="/portfolio"><i class="fas fa-arrow-alt-circle-right mr-2"></i><span class="d-none d-md-inline">View</span> Portfolio</a>
							<a class="btn btn-secondary mb-3" href="resume.php"><i class="fas fa-file-alt mr-2"></i><span class="d-none d-md-inline">View</span> Resume</a>
						</div>
					</div><!--//media-body-->
					<img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0" src="assets/images/moss.jpg" alt="Moss IT Crowd">
				</div>
			</div>
		</section><!--//about-me-section-->
		
		<section class="overview-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-3">What I do</h2>
				<div class="section-intro mb-2">I've been building software since I was sixteen in my high school Computers I class. I have years of experience leading projects and building software for clients of all sizes all over the 
					world. To see more of my experience and what companies I've worked with check out my <a href="resume.php">online resume</a> 
					and <a href="portfolio.php">project portfolio</a>.
				</div>
				<div class="section-intro mb-2">
                    When I'm not hanging out with my family, putting on a crawfish boil for the neighborhood, making pour over coffees or exploring the city, my free time is often spent scripting
                    my favorite radio stations to <a href="https://github.com/clintmcmahon/currentify" target="_blank">Spotify playlists</a> or building bots to <a href="https://github.com/clintmcmahon/twitter-retweet-bot" target="_blank">track my favorite tamale vendor on Twitter</a>. 
                </div>
                <div class="section-intro mb-5">
                    I'm interested in new opportunities as well as interacting with other tech folks - plus pizza and coffee. If you have recomendations on either of those last two
                    or would like talk about a new project, business or development, drop me a line at <a href="mailto:clint@nordicdev.io">clint@nordicdev.io</a>.
                </div>
			</div>
		</section>
		<div class="container"><hr></div>
		<section class="overview-section p-3 p-lg-5">
			<div class="container">
			<h2 class="section-title font-weight-bold mb-3">My Tech Stack</h2>
				<div class="row">
					<div class="item col-6 col-lg-4">
						<div class="item-inner">
							<div class="item-icon">
							<svg class="svg-inline--fa fa-w-14 mr-2" viewBox="0 0 128 128">
								<path fill="#9B4F96" d="M115.4 30.7l-48.3-27.8c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.4 1 3.5l106.8-62c-.6-1.2-1.5-2.1-2.4-2.7z"></path><path fill="#68217A" d="M10.7 95.3c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4v-55.7c0-.9-.1-1.9-.6-2.8l-106.6 62z"></path><path fill="#fff" d="M85.3 76.1c-4.2 7.4-12.2 12.4-21.3 12.4-13.5 0-24.5-11-24.5-24.5s11-24.5 24.5-24.5c9.1 0 17.1 5 21.3 12.5l13-7.5c-6.8-11.9-19.6-20-34.3-20-21.8 0-39.5 17.7-39.5 39.5s17.7 39.5 39.5 39.5c14.6 0 27.4-8 34.2-19.8l-12.9-7.6zM97 66.2l.9-4.3h-4.2v-4.7h5.1l1.2-6.2h4.9l-1.2 6.1h3.8l1.2-6.1h4.8l-1.2 6.1h2.4v4.7h-3.3l-.9 4.3h4.2v4.7h-5.1l-1.2 6h-4.9l1.2-6h-3.8l-1.2 6h-4.8l1.2-6h-2.4v-4.7h3.3zm4.8 0h3.8l.9-4.3h-3.8l-.9 4.3z"></path>
							</svg> 
							<svg class="svg-inline--fa fa-w-14 mr-2" viewBox="0 0 128 128">
								<path fill="#1384C8" d="M40.335 78.188h-1.685v-9.65c0-.762.05-1.69.14-2.785h-.038c-.158.64-.303 1.104-.43 1.391l-4.902 11.044h-.821l-4.911-10.964c-.138-.306-.283-.799-.43-1.471h-.036c.052.576.081 1.509.081 2.804v9.631h-1.626v-14.371h2.225l4.409 10.021c.332.754.547 1.328.651 1.72h.069c.288-.785.517-1.375.688-1.762l4.505-9.979h2.11v14.371h.001zM45.523 78.188h-1.639v-10.263h1.639v10.263zm.283-13.942c0 .303-.106.555-.317.763-.207.208-.464.312-.764.312-.293 0-.548-.101-.757-.301-.209-.201-.313-.458-.313-.774 0-.296.104-.549.313-.754s.464-.305.757-.305c.3 0 .557.099.764.305.211.205.317.458.317.754"></path><path fill="#1384C8" d="M55.764 77.713c-.786.483-1.726.722-2.812.722-1.472 0-2.655-.488-3.561-1.464-.879-.947-1.321-2.169-1.321-3.667 0-1.681.48-3.042 1.45-4.077.964-1.036 2.261-1.553 3.892-1.553.892 0 1.683.174 2.375.521v1.687c-.766-.538-1.576-.805-2.445-.805-1.045 0-1.896.365-2.555 1.093-.687.745-1.034 1.742-1.034 2.985 0 1.194.317 2.14.948 2.837.633.694 1.476 1.042 2.538 1.042.897 0 1.738-.295 2.524-.882v1.561h.001zM63.604 69.59c-.289-.223-.706-.331-1.255-.331-.668 0-1.229.298-1.683.901-.516.673-.771 1.604-.771 2.795v5.232h-1.644v-10.262h1.644v2.116h.039c.241-.749.614-1.325 1.112-1.733.466-.373.992-.561 1.572-.561.438 0 .762.047.984.14l.002 1.703zM72.758 73.075c0-1.313-.296-2.317-.89-3.006-.575-.662-1.38-.992-2.416-.992-1.021 0-1.841.334-2.453 1.003-.647.715-.971 1.725-.971 3.035 0 1.228.308 2.192.93 2.879.618.692 1.45 1.039 2.494 1.039 1.08 0 1.907-.352 2.474-1.051.555-.684.832-1.652.832-2.907m1.685-.057c0 1.635-.462 2.949-1.382 3.934-.924.989-2.167 1.483-3.73 1.483-1.54 0-2.767-.494-3.665-1.483-.881-.953-1.323-2.211-1.323-3.776 0-1.786.5-3.162 1.503-4.139.929-.906 2.17-1.363 3.726-1.363 1.53 0 2.726.477 3.587 1.422.853.95 1.284 2.258 1.284 3.922M82.589 75.442c0 .84-.313 1.536-.942 2.091-.687.601-1.63.901-2.816.901-.971 0-1.822-.203-2.545-.618v-1.766c.804.654 1.692.983 2.667.983 1.301 0 1.952-.479 1.952-1.434 0-.401-.143-.734-.431-.991-.289-.262-.851-.576-1.685-.943-.859-.376-1.472-.762-1.833-1.163-.434-.476-.652-1.093-.652-1.854 0-.852.341-1.561 1.014-2.125.675-.567 1.542-.85 2.606-.85.815 0 1.546.159 2.194.481v1.654c-.677-.488-1.451-.732-2.329-.732-.544 0-.981.136-1.307.399-.329.27-.494.614-.494 1.034 0 .455.138.808.412 1.061.244.233.761.519 1.541.852.876.367 1.509.748 1.895 1.137.5.494.753 1.121.753 1.883M92.629 73.075c0-1.313-.297-2.317-.892-3.006-.575-.662-1.381-.992-2.415-.992-1.021 0-1.841.334-2.456 1.003-.646.715-.969 1.725-.969 3.035 0 1.228.309 2.192.924 2.879.626.692 1.459 1.039 2.501 1.039 1.082 0 1.906-.352 2.474-1.051.555-.684.833-1.652.833-2.907m1.688-.057c0 1.635-.466 2.949-1.388 3.934-.92.989-2.163 1.483-3.727 1.483-1.542 0-2.768-.494-3.667-1.483-.881-.953-1.323-2.211-1.323-3.776 0-1.786.504-3.162 1.502-4.139.928-.906 2.171-1.363 3.728-1.363 1.531 0 2.725.477 3.584 1.422.855.95 1.291 2.258 1.291 3.922"></path><path fill="#1384C8" d="M101.555 64.438c-.323-.179-.682-.27-1.091-.27-1.15 0-1.721.724-1.721 2.175v1.582h2.405v1.392h-2.405v8.871h-1.645v-8.871h-1.745v-1.392h1.745v-1.664c0-1.129.346-2.016 1.05-2.654.603-.555 1.34-.831 2.217-.831.508 0 .902.061 1.189.178v1.484zM108.039 78.085c-.388.222-.904.333-1.543.333-1.791 0-2.687-1.01-2.687-3.029v-6.07h-1.761v-1.394h1.761v-2.504l1.646-.533v3.037h2.583v1.394h-2.583v5.791c0 .688.112 1.18.348 1.465.237.295.625.439 1.173.439.409 0 .763-.109 1.063-.331v1.402zM19.237 118.242c0 .805-.286 1.5-.867 2.087-.577.585-1.278.88-2.102.88-.805 0-1.489-.295-2.05-.88-.562-.587-.841-1.283-.841-2.087 0-.827.279-1.525.841-2.103.561-.58 1.245-.867 2.05-.867.823 0 1.524.292 2.102.878.581.588.867 1.286.867 2.092"></path><path fill="#1384C8" d="M56.018 120.606h-5.358l-19.448-30.034c-.454-.723-.847-1.508-1.179-2.365h-.16c.139.804.209 2.531.209 5.175v27.224h-4.416v-37.68h5.732l18.865 29.56c.751 1.173 1.265 2.013 1.525 2.519h.104c-.175-1.083-.266-2.932-.266-5.54v-26.539h4.39v37.68h.002zM84.332 120.606h-19.971v-37.68h19.104v3.993h-14.69v12.534h13.612v3.995h-13.613v13.164h15.558v3.994zM114.623 86.919h-10.854v33.688h-4.415v-33.688h-10.875v-3.995h26.144v3.995z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#1384C8" d="M82.108 46.33c.479-1.232 1.022-2.445 1.427-3.701 2.288-7.097 4.554-14.2 6.805-21.309.865-2.731 1.813-5.42 3.515-7.767 2.692-3.709 6.442-5.652 10.88-6.331 1.741-.266 3.518-.389 5.28-.406 5.267-.05 10.536-.015 15.804-.01.28 0 .56.029.957.052-.129.304-.199.525-.311.724-1.955 3.494-3.872 7.009-5.885 10.468-3.505 6.022-7.016 12.042-10.631 17.998-2.319 3.819-4.834 7.52-7.687 10.974-2.105 2.548-4.321 4.984-7.146 6.77-1.925 1.217-3.981 1.929-6.315 1.917-8.278-.045-16.556-.012-24.834-.024-2.461-.004-4.568-.941-6.356-2.603-2.563-2.381-4.093-5.412-5.345-8.608-2.284-5.835-3.563-11.951-5.031-18.014-.688-2.838-1.47-5.654-2.215-8.478-.048-.183-.142-.354-.25-.617l-.577.542c-3.228 3.207-6.071 6.741-8.615 10.498-.693 1.024-.926 2.374-1.313 3.591-1.424 4.47-2.722 8.983-4.264 13.411-1.477 4.242-4.125 7.616-8.264 9.61-2.42 1.165-5.004 1.795-7.689 1.855-3.98.088-7.962.098-11.943.134-.952.009-.996-.069-.748-.99 1.707-6.338 3.87-12.514 6.58-18.492 2.794-6.167 6.085-12.048 10.231-17.419 2.823-3.657 5.941-7.031 9.843-9.582 1.979-1.293 4.083-2.315 6.477-2.584.394-.045.793-.073 1.189-.073 8.478-.004 16.956.082 25.433-.039 4.547-.065 7.839 1.855 10.304 5.515 1.533 2.276 2.63 4.761 3.553 7.328 1.861 5.178 3.018 10.547 4.325 15.878.748 3.051 1.581 6.081 2.379 9.12.06.228.157.446.238.668l.199-.006z"></path>
							</svg> 
							<i class="fab fa-microsoft mr-2"></i>
							</div>
							<h3 class="item-title">C#, .Net Core & MVC</h3>
							<div class="item-desc"></div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-4">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-js-square mr-2"></i><i class="fab fa-angular mr-2"></i><i class="fab fa-react mr-2"></i><i class="fab fa-vuejs"></i></div>
							<h3 class="item-title">JavaScript, Angular, React &amp;  Vue</h3>
							<div class="item-desc"></div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-4">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-windows mr-2"></i><i class="fab fa-aws"></i></div>
							<h3 class="item-title">Azure &amp; AWS</h3>
							<div class="item-desc"></div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-4">
						<div class="item-inner">
							<div class="item-icon"><i class="fab fa-php mr-2"></i><i class="fab fa-python"></i></div>
							<h3 class="item-title">PHP, Python &amp; Django</h3>
							<div class="item-desc"></div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-4">
						<div class="item-inner">
							<div class="item-icon"><img class="svg-inline--fa fa-w-14 mr-2" src="https://img.icons8.com/color/100/000000/shopify.png" /><i class="fab fa-wordpress"></i></div>
							<h3 class="item-title">Shopify &amp; WordPress</h3>
							<div class="item-desc"></div>
						</div><!--//item-inner-->
					</div><!--//item-->
					<div class="item col-6 col-lg-4">
						<div class="item-inner">
							<div class="item-icon"><i class="fas fa-database mr-2"></i></div>
							<h3 class="item-title">SQL Server, MySQL &amp; Postgres</h3>
							<div class="item-desc"></div>
						</div><!--//item-inner-->
					</div><!--//item-->
				</div><!--//row-->
			</div><!--//container-->
		</section>
		
		<div class="container"><hr></div>
		
		<section class="testimonials-section p-3 p-lg-5">
			<div class="container">
				<h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
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

		<footer class="footer text-center py-4">
			<small class="copyright">Made in Minnesota</small>
		</footer>
		
	</div><!--//main-wrapper-->

	


	


<?php
include_once('footer.php');
?>
	