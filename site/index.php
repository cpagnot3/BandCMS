
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
		<?php include('./php/header.php'); ?> 


	
	
	
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
			  	<p><?php echo $news->getChapo() ?><br/><a <?php echo 'href="php/news.php?id='.$news->getId().'"' ?>>Lire la news</a></p>
			</article>	 

		</div>
	</div>
</div>
<!-- #main-footer -->
		<footer id="main-footer" class="row footer">
			<div class="col-lg-4 col-xs-12"><ul class="social">
		<li><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a href="https://instagram.com/" target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a href="https://www.linkedin.com/" target="_blank"><span class="icon-facebook"></span></a></li>
	</ul></div>
			<div class="col-lg-4 col-xs-12"></div>
			<div class="col-lg-4 col-xs-12"><div class="end-footer">
		<ul class="social">
		<li><a <?php echo 'href="'.$contact->getFbLink().'"'; ?> target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a <?php echo 'href="'.$contact->getYtLink().'"'; ?> target="_blank"><span class="icon-youtube"></span></a></li>
		<li><a <?php echo 'href="'.$contact->getTwLink().'"'; ?> target="_blank"><span class="icon-twitter"></span></a></li>
		</ul>
	</div></div>			


		</footer> 

<div class="footer col-lg-12">
<div class="end-footer col-lg-4 col-xs-12">
  	
</div>
	<div class="end-footer col-lg-4 col-xs-12">

	</div>
</div>
</main>
</body>
</html>

