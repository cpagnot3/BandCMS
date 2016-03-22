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
	<div id="map" style="height: 500px;width:50%;"></div>

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
        var marqueur = new google.maps.Marker({
		position: new google.maps.LatLng('.$concert->getLat().','.$concert->getLong().'),
		map: map});';
			}
       ?>
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB14nxFsuqDXgA_4s1kFlefkDO4CcFWxM8&callback=initMap"
    async defer></script>
</body>

</html>
