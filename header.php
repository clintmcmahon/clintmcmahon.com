<!DOCTYPE html>
<html lang="en"> 
<head>
<title><?= isset($PageTitle) ? $PageTitle . " - Clint McMahon" : "Clint McMahon - Software Engineer, Web Developer and Technology Consultant"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
	  customPageHeader();
	 }?>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="I'm a technology consultant and developer for hire in Minneapolis. I help businesses solve problems and overcome obstacles with technology. Sometimes without it, too.">
	<meta name="author" content="Clint McMahon">    
	<link rel="shortcut icon" href="/fav.png"> 
	
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="/assets/css/theme-1.css">
	<link id="theme-style" rel="stylesheet" href="/assets/css/custom.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="/assets/plugins/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/plugins/owlcarousel/assets/owl.theme.default.min.css">
	
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/monokai-sublime.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
	<!-- FontAwesome JS -->
	<script async src="/assets/fontawesome/js/all.js"></script>
</head> 
<body>
	
	<header class="header text-center">	    
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a href="/">Clint McMahon</a></h1>
			
			<nav class="navbar navbar-expand-lg navbar-dark" >
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navigation" class="collapse navbar-collapse flex-column" >
					<div class="profile-section pt-3 pt-lg-0">
					<a href="/">	<img class="profile-image mb-3 rounded-circle mx-auto" src="/assets/images/profile.jpg" alt="Clint McMahon" /></a>
								
						
						<div class="bio mb-3">Hi, there! My name is Clint. I'm a technical consultant in Minneapolis, MN. Welcome to my website.</div><!--//bio-->
						<div class="my-2">
						<a class="btn btn-primary" href="/contact"><i class="fas fa-paper-plane mr-2"></i>Hire Me</a>
					</div>
                        <ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="https://twitter.com/cwmcmhn" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.linkedin.com/in/clintmcmahon/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://github.com/clintmcmahon" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://stackoverflow.com/users/118144/clint-mcmahon" target="_blank" rel="noopener noreferrer"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.instagram.com/cwmcmhn/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram fa-fw"></i></a></li>
						</ul><!--//social-list-->
						<hr> 
					</div><!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-left">
						<li class="nav-item active">
							<a class="nav-link" href="/index.php"><i class="fas fa-user fa-fw mr-2"></i>About Me<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/portfolio"><i class="fas fa-laptop-code fa-fw mr-2"></i>Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/resume"><i class="fas fa-file-alt fa-fw mr-2"></i>Resume</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/blog"><i class="fas fa-blog fa-fw mr-2"></i>Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contact"><i class="fas fa-envelope-open-text fa-fw mr-2"></i>Contact</a>
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