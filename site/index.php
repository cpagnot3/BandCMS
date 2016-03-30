<<<<<<< HEAD
<?php 
?>
=======

>>>>>>> 6ff95cfe29140d894a949cab2237c41401922d31
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./test.css">
<link rel="stylesheet" type="text/css" href="./css/global.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="js/jquery.js"></script>
<!--<script src="js-global/FancyZoom.js" type="text/javascript"></script>
<script type="text/javascript" src="js/app.js"></script>
<script src="js-global/FancyZoomHTML.js" type="text/javascript"></script>-->
</head>
<<<<<<< HEAD

=======
<?php 
	include('../global/Repository/NewsRepository.php');
	$newsRepository = new NewsRepository();
	$news = $newsRepository->getLastNews();
?>
>>>>>>> 6ff95cfe29140d894a949cab2237c41401922d31
<body>

<!-- .container principal -->
	<main class="container">
	<!-- #main header -->
		<header id="main-header" class="row">
			<nav class="col-lg-12">
				<ul>
					<li><a href="./">accueil</a></li>
					<li><a href="#accueil">Accueil</a></li>
  					<li><a href="#apropos">A propos</a></li>
  					<li><a href="#galerie">Galerie</a></li>
  					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
			<div class="header" style="text-align:center;">

			
					<img src="img/profil.jpg"/>
				
			</div>
			<div class="lowheader col-lg-12"></div>

		</header>
  

	
	
	
<!-- #main-content -->
	
	<div id="content">
		<section id="main-content" class="row">
			<h1 class="col-lg-12">Ma Bande</h1>
			<div class="col-lg-4">
				<h2>Le groupe</h2>

							</div>
			<div class="col-lg-4">
				<h2>prochain concerts</h2>	

			</div>

			<div class="col-lg-4">
				<h2>prochain concerts</h2>
			</div>

			<div class="col-lg-4">
				<h2>Le groupe</h2>

			</div>
		</section >
		


		<div class="col-lg-12">
			<h1 >News</h1>
			<article>

				<h2><?php echo $news->getTitle(); ?></h2>
			  	<p><?php echo $news->getDate(); ?></p>
			  	<img <?php echo 'src="'.$news->getImage().'"';?>>
			  	<p><?php echo $news->getChapo() ?><br/><a <?php echo 'href="news.php?id='.$news->getId().'"' ?>>Lire la news</a></p>
			</article>	 

		</div>
	</div>
</div>
<!-- #main-footer 
		<footer id="main-footer" class="row footer">
			<div class="col-lg-4 col-xs-12"><ul class="social">
		<li><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a href="https://instagram.com/" target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a href="https://www.linkedin.com/" target="_blank"><span class="icon-facebook"></span></a></li>
	</ul></div>
			<div class="col-lg-4 col-xs-12"></div>
			<div class="col-lg-4 col-xs-12"><div class="end-footer">
		<ul>
		<li><a href="">Mentions légales</a></li>
		<li><a href="">FAQ</a></li>
		<li><a href="">Cookies</a></li>
		<li><a href="">Conditions générales</a></li>
		</ul>
	</div></div>			

		</footer> -->


<div class="footer col-lg-12">
<div class="end-footer col-lg-4 col-xs-12">
  	<ul class="social">
		<li><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a href="https://instagram.com/" target="_blank"><span class="icon-instagram"></span></a></li>
		<li><a href="https://www.linkedin.com/" target="_blank"><span class="icon-linkedin"></span></a></li>
	</ul>
</div>
	<div class="end-footer col-lg-4 col-xs-12">
		<ul>
		<li><a href="">Mentions Légales</a></li>

		<li><a href="">Cookies</a></li>
		</ul>
	</div>
</div>

</main>
</body>
<<<<<<< HEAD
</html>
<?php 
?>
=======
</html>
>>>>>>> 6ff95cfe29140d894a949cab2237c41401922d31
