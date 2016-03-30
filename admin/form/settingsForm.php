<head>
	<link rel="stylesheet" type="text/css" href="/BandCMS/admin/assets/css/jquery.datetimepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.full.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.js"></script>

</head>
	
<body>

	<?php 
		require(dirname(__FILE__).'/../../Global/Repository/SettingsRepository.php');
		$settingsRepository = new SettingsRepository();
		$settings = $settingsRepository->getSettings();
	?>
	<?php 
		if(isset($_GET['e'])){
			echo '<div>Settings saved !</div>';
		}
	?>
	<form method="post" action="../controller/settingsController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >

		<table>
			<tr>
				<td>
					<label>Site name : </label>
				</td>			
				<td>
					<input type="text" name="site-name" value=<?php echo (isset($_GET['id']))? '"'.$settings->getName().'"' : '""';  ?> >
				</td>		
			</tr>
			<tr>	
				<td>
					<label>Site slogan : </label>
				</td>		
				<td>
					<input type="text" name="slogan" value=<?php echo (isset($_GET['id']))? '"'.$settings->getSlogan().'"' : '""';  ?> >
				</td>		
			</tr>
			<tr>
				<td>
					<label>Site logo : </label>
				</td>		
				<td>
					<input type="file" name="logo">
				</td>		
			</tr>
			
			<tr>
				<td>
					
				</td>
				<td>		
					<input type="submit" value="Edit">
				</td>
			</tr>
		</table>


	</form>

</body>

