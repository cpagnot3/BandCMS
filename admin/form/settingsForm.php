<head>


</head>
	
<body>

	<?php 
		error_reporting(E_ALL);
		echo "ok1";
		try {
			require(dirname(__FILE__) . '/../../Global/Repository/SettingsRepository.php');

		}
		catch(Exception $e){
			echo 'ERROR : '.$e;
		} 

		echo "ok2";
		$settingsRepository = new SettingsRepository();
		$settings = $settingsRepository->getSettings();

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
					<input type="text" name="site-name" value=<?php echo $settings->getName(); ?> >
				</td>		
			</tr>
			<tr>	
				<td>
					<label>Site slogan : </label>
				</td>		
				<td>
					<input type="text" name="slogan" value=<?php echo $settings->getSlogan(); ?> >
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
					<input type="submit" value="Save">
				</td>
			</tr>
		</table>


	</form>

</body>

