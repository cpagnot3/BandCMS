<head>

</head>
	
<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/ConcertRepository.php');
	
		if(isset($_GET['d'])){
			echo '<div>Show deleted !</div>';
		}
	
		$concertRepository = new ConcertRepository();
		foreach ($concertRepository->getListConcert() as $concert) {
			echo '
			<form method="post" action="../controller/deleteConcertController.php?id='.$concert->getId().'">
				<input style="visibility:hidden;display:none;" type="text" name="redirect" value= "http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" >
				<p><input type="submit" name="action" value="X"> - '.$concert->getDateConcert().' - '.$concert->getPlace().' - '.$concert->getCity().', 	'.$concert->getCountry().'  - <a href="'.$concert->getBilleterie().'">Billeterie</a> - <a href="editTour.php?id='.$concert->getId().'">Edit</a></p>	
			</form>';
		}
	?>
</body>

