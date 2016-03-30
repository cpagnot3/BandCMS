
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

<?php 
	include('../global/Repository/NewsRepository.php');
	include('../global/Repository/ContactRepository.php');
	$newsRepository = new NewsRepository();
	$news = $newsRepository->getLastNews();
	$contactRepository = new ContactRepository();
	$contact = $contactRepository->getContact();
?>
<body>

<!-- .container principal -->
	<main class="container">
	<!-- #main header -->
		<header id="main-header" class="row">
	<nav class="col-lg-12">
		<ul>
			<li><a href="./php/contact.php">Contact</a></li>
			<li><a href="#site/php/Band">Band</a></li>
			<li><a href="./php/show.php">Concerts</a></li>
			<li><a href="./php/music.php">Nos Musiques</a></li>
			<li><a href="./php/news.php">News</a></li>
			<li><a href="./index.php">Accueil</a></li>
		</ul>
	</nav>

	<div class="logo">
		<div id="logo-pad">
			<img src="./img/profil.jpg"/>
		</div>
	</div>
	<div class="lowheader col-lg-12"></div>

</header>
	
	
	
<!-- #main-content -->
	
	<div>
		<section id="main-content" class="row">
			<h1 class="col-lg-12">Ma Bande</h1>
			<div class="col-lg-4 col-xs-12">
				<div class="rounded">
				<a href="#band.php">
				<h2>Le groupe</h2>
				</a>
				</div>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="rounded">
				<a href="./php/show.php">
				<h2>Prochains concerts</h2>	
				</a>
				</div>
			</div>
			<div class="col-lg-4 col-xs-12">
				<div class="rounded">
				<a href="./php/music.php">
				<h2>Musiques</h2>
				</a>
				</div>
			</div>

		</section >
		


		<div class="news">
			<h1 >News</h1>
			<article>

				<h2><?php echo $news->getTitle(); ?></h2>
			  	<p><?php echo $news->getDate(); ?></p>
			  	<img <?php echo 'src="'.$news->getImage().'"';?>>
			  	<p><?php echo $news->getChapo() ?><br/><a <?php echo 'href="php/news.php?id='.$news->getId().'"' ?>>Lire la news</a></p>
			</article>	 

		</div>
	</div>
</div>
<!-- #main-footer -->
		<footer id="main-footer" class="row footer">
			<div class="col-lg-4 col-xs-12"><ul class="social">
		<li><a <?php echo 'href="'.$contact->getFbLink().'"'; ?> target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a <?php echo 'href="'.$contact->getYtLink().'"'; ?> target="_blank"><span class="icon-youtube"></span></a></li>
		<li><a <?php echo 'href="'.$contact->getTwLink().'"'; ?> target="_blank"><span class="icon-twitter"></span></a></li>
		</ul></div>
			<div class="col-lg-4 col-xs-12"></div>
			<div class="col-lg-4 col-xs-12"><div class="end-footer">
		
		<ul>
		<li><a href="">Mentions Légales</a></li>

		<li><a href="">Cookies</a></li>
		</ul></div></div>			


		</footer> 

</main>
</body>
</html>

