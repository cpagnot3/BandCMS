
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
				<h2>prochain concerts</h2>	
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
</main>
<?php include('./php/footer.php'); ?> 
