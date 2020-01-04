<!DOCTYPE html>
<html lang="en"> 
<head>
<title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Experienced technical consultant, software architect, web developer and mobile app builder for hire in Minneapolis, Minnesota.">
	<meta name="author" content="Clint McMahon at Nordic Dev">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
	<!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
	
	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owlcarousel/assets/owl.theme.default.min.css">
	
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 
<body>
	
	<header class="header text-center">	    
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Clint McMahon</a></h1>
			
			<nav class="navbar navbar-expand-lg navbar-dark" >
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navigation" class="collapse navbar-collapse flex-column" >
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="assets/images/profile.jpg" alt="Clint McMahon" >			
						
						<div class="bio mb-3">Hi, there! My name is Clint McMahon and I'm a technical architect, web developer and app builder. Welcome to my website!</div><!--//bio-->
						<div class="my-2">
						<a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
					</div>
                        <ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="https://twitter.com/cwmcmhn"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.linkedin.com/in/clintmcmahon/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://github.com/clintmcmahon"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://stackoverflow.com/users/118144/clint-mcmahon"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.instagram.com/cwmcmhn/"><i class="fab fa-instagram fa-fw"></i></a></li>
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-left">
						<li class="nav-item active">
							<a class="nav-link" href="index.php"><i class="fas fa-user fa-fw mr-2"></i>About Me<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="portfolio.php"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php"><i class="fas fa-briefcase fa-fw mr-2"></i>Services &amp; Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="resume.php"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog-home.php"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-cogs fa-fw mr-2"></i>More Pages
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="project.html">Project Page</a>
								<a class="dropdown-item" href="blog-home.html">Blog Home 1</a>
								<a class="dropdown-item" href="blog-home-alt.html">Blog Home 2</a>
								<a class="dropdown-item" href="blog-post.html">Blog Post</a>
							</div>
						</li>
					</ul>
					<div class="dark-mode-toggle text-center w-100">
						<hr class="mb-4">
					    <h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Dark Mode</h4>
					    
					    <input class="toggle" id="darkmode" type="checkbox">
					    <label class="toggle-btn mx-auto mb-0" for="darkmode"></label>
					    
					</div><!--//dark-mode-toggle-->
					
				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>