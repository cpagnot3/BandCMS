<head>


</head>
	
<body>

	<?php 
		require(dirname(__FILE__) . '/../../Global/Repository/SettingsRepository.php');

		$settingsRepository = new SettingsRepository();
		$settings = $settingsRepository->getSettings();

		if(isset($_GET['e'])){
			echo '<div>Settings saved !</div>';
		}
	?>
	<form enctype="multipart/form-data" method="post" action="../controller/settingsController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >

		<table>
			<tr>
				<td>
					<label>Site name : </label>
				</td>			
				<td>
					<input type="text" name="site-name" value=<?php echo $settings->getName(); ?> >
				</td>		
			</tr>
			<tr>	
				<td>
					<label>Slogan : </label>
				</td>		
				<td>
					<input type="text" name="slogan" value=<?php echo $settings->getSlogan(); ?> >
				</td>		
			</tr>
			<tr>
				<td>
					<label>Logo : </label>
				</td>		
				<td>
					<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
					<input type="file" name="band-logo" >
				</td>		
			</tr>
			
			<tr>
				<td>
					
				</td>
				<td>		
					<input type="submit" value="Save">
				</td>
			</tr>
		</table>


	</form>

</body>

