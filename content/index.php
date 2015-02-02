<!DOCTYPE html>
<!--[if lte IE 7]> <html class="oldie ie" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="ie8 ie" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">

	<title>Steve Anderson</title>

	<!--[if lt IE 9]>
		<script src="../js/html5shiv.min.js"></script>
	<![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../style/fontello/css/sanura.css">
	<link rel="stylesheet" href="../style/reset.css">
	<link rel="stylesheet" href="../style/style.css">
	

	
</head>
<body>
<div id="wrapper">


	<header class="clearfix">
		<h1><a href="#">Steve Anderson</a></h1>
		<h2>Freelance Web Designer</h2>
	</header>
	
	<nav class="clearfix">
		
		<div id="menuMasque">
			<ul id="menuContenu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<i class="icon-menu" id="menuBouton"></i>
	</nav>
	<div class="clearfix"></div>
	<div id="tagline">
		<p>Hi there, I design clean and stylish websites ...</p>
		<p>... with a focus on simplicity and usability</p>
	</div>
	
	<section id="featured" class="clearfix">
		<h2>Featured Projects</h2>
		
		<figure>
			<img src="../image/featured01.jpg">
			<figcaption>
				Project One
			</figcaption>
		</figure>
		
		<figure>
			<img src="../image/featured02.jpg">
			<figcaption>
				Project Two
			</figcaption>
		</figure>
		
		<figure>
			<img src="../image/featured03.jpg">
			<figcaption>
				<a href="http://google.fr">Project Three</a>
			</figcaption>
		</figure>
		
	</section>
	
	
	<main id="content" class="clearfix">
		<section id="services">
			<h2>Services Available</h2>
			
			<article class="clearfix">
				<a href="#">
					<img src="../image/thumb.jpg" alt="">
					<h3>WebDesign and developpement</h3>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, expedita, aliquid, aut sapiente modi fugit dolorem distinctio corporis esse.</p>
			</article>
			
			<article class="clearfix">
				<a href="#">
					<img src="../image/thumb.jpg" alt="">
					<h3>Search Engine Optimization</h3>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, expedita, aliquid, aut sapiente modi fugit dolorem distinctio corporis esse.</p>
			</article>
			
			<article class="clearfix">
				<a href="#">
					<img src="../image/thumb.jpg" alt="">
					<h3>Social Media and Online Marketing</h3>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, expedita, aliquid, aut sapiente modi fugit dolorem distinctio corporis esse.</p>
			</article>
			
		</section>

		<section id="blog">
			<h2>Latest Blog Posts</h2>
			
			<article class="clearfix">
				<a href="#">
					<img src="../image/thumb.jpg" alt="">
					<h3>Lorem ipsum dolor sit amet</h3>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, expedita, aliquid, aut sapiente modi fugit dolorem distinctio corporis esse.</p>
			</article>
			
			<article class="clearfix">
				<a href="#">
					<img src="../image/thumb.jpg" alt="">
					<h3>Consectetur adipisicing</h3>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, expedita, aliquid, aut sapiente modi fugit dolorem distinctio corporis esse.</p>
			</article>
			
			<article class="clearfix">
				<a href="#">
					<img src="../image/thumb.jpg" alt="">
					<h3>Dolorem distinctio</h3>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, expedita, aliquid, aut sapiente modi fugit dolorem distinctio corporis esse.</p>
			</article>
			
		</section>
		

	</main> <!-- /#content -->

	<footer>
		<p>Copyright &copy; 2014 / Steve Anderson / All Rights Reserved</p>
	</footer>


</div><!-- /#wrapper -->
<script src="../js/rem.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
$(document).ready(function(){
	
	//Quand je clique sur #menuBouton
	$('#menuBouton').click(function(){
		
		//j'ajoute ou j'enlève la class "show" sur #menuContenu
		$('#menuContenu').toggleClass('show');
		
	});
	
});	
</script>

</body>
</html>
