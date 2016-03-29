<head>
<title>Music delete</title>
</head>
	
<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/MusicRepository.php');
	?>
	<h1>Edit music</h1>
	<?php 
		if(isset($_GET['d'])){
			echo '<div>Music deleted !</div>';
		}
	?>
	<?php
		$musicRepository = new MusicRepository();
		foreach ($musicRepository->getListMusic() as $music) {
			echo '
			<form method="post" action="../controller/deleteMusicController.php?id='.$music->getId().'">
				<input style="visibility:hidden;display:none;" type="text" name="redirect" value= "http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" >
				<p><input type="submit" name="action" value="X"> - '.$music->getTitle().' - '.$music->getArtist().' - '.$music->getAlbum().', 	'.$music->getReleaseDate().'   - <a href="editMusic.php?id='.$music->getId().'">Edit</a></p>	
			</form>
			';
		}
	?>
</body>