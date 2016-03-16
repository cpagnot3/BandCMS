<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/ConcertRepository.php');
	?>
	<h1>Liste des concerts</h1>	
	<?php
		$concertRepository = new ConcertRepository();
		foreach ($concertRepository->getListConcert() as $concert) {
			echo '<p>'.$concert->getDateConcert().' - '.$concert->getPlace().' - '.$concert->getCity().', 	'.$concert->getCountry().'  - <a href="'.$concert->getBilleterie().'">Billeterie</a></p>';
		}
	?>
	<h2>Concert particulier</h2>
	<?php 
		$concert = $concertRepository->getConcertById(2);
		echo '<p>'.$concert->getDateConcert().' - '.$concert->getPlace().' - '.$concert->getCity().', 	'.$concert->getCountry().'  - <a href="'.$concert->getBilleterie().'">Billeterie</a></p>';
	?>
</body>

</html>
