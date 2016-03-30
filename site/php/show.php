<!DOCTYPE html>
<html>
<head>
	<title>Tour</title>
	<link rel="stylesheet" type="text/css" href="../test.css">
	<link rel="stylesheet" type="text/css" href="../css/global.css">

</head>


<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/ConcertRepository.php');
		include('header.php');
	?>
	<h1 class="col-lg-12">Liste des concerts</h1>
	<div id="map" style="height: 480px" class="col-lg-6"></div>	
	<div id="show" class="col-lg-6">
		<table>
			
	<?php
		$concertRepository = new ConcertRepository();
		foreach ($concertRepository->getListConcert() as $concert) {
			echo '<p>'.$concert->getDateConcert().' - '.$concert->getPlace().' - '.$concert->getCity().', 	'.$concert->getCountry().'  - <a href="'.$concert->getBilleterie().'">Billeterie</a></p>';
		}
	?>	
		</table>
	</div>
	

 <script type="text/javascript">
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 48.8534100, lng: 2.3488000},
          zoom: 6
        });
        <?php
        foreach ($concertRepository->getListConcert() as $concert){
	        echo '
        var c'.$concert->getId().' = new google.maps.Marker({
		position: new google.maps.LatLng('.$concert->getLat().','.$concert->getLong().'),
		map: map,});
		c'.$concert->getId().'.info = new google.maps.InfoWindow({
  			content: "<b>'.$concert->getDateConcert().'</b><br/><p>'.$concert->getPlace().'</p> "
		});

		google.maps.event.addListener(c'.$concert->getId().', "click", function() {
		  c'.$concert->getId().'.info.open(map, c'.$concert->getId().');
		});';
			}
       ?>
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB14nxFsuqDXgA_4s1kFlefkDO4CcFWxM8&callback=initMap"
    async defer></script>
<?php include('footer.php'); ?> 
