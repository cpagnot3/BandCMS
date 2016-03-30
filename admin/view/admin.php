<?php 
		include('../module/CheckConnect.php');
?>
<html>
	<head>
	</head>
	<body>
		<h1>Administration</h1>
		<?php $date = new DateTime();
			  echo '<h3>'.date_format($date, 'd/m/Y H:i:s').'</h3>';
			  
			  ?>
		<ul>
			<li><a href="tour.php">Edit tour</a></li>
			<li><a href="music.php">Edit music</a></li>
			<li><a href="contact.php">Edit contact</a></li>
			<li><a href="user.php">Edit user</a></li>
			<li><a href="settings.php">Edit settings</a></li>		
			<li><a href="news.php">Edit news</a></li>		

		</ul>


	</body>
	
</html>	