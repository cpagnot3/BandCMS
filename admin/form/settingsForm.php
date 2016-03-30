<head>

	<link rel="stylesheet" type="text/css" href="/BandCMS/admin/assets/css/jquery-te-1.4.0.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery-te-1.4.0.min.js"></script>
	<script src="/BandCMS/admin/assets/js/verify.notify.min.js"></script>
	<script type="text/javascript"></script>
</head>
<body>
	<?php 
		if(isset($_GET['t'])){
			echo '<div>News added !</div>';
		}

		if(isset($_GET['id'])){
			$id = $_GET['id'];
			require(dirname(__FILE__).'/../../Global/Repository/NewsRepository.php');
			$newsRepository = new NewsRepository();
			$news= $newsRepository->getNewsById($id);
		}
	?>
	<form method="post" action="../controller/addNewsController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> />
		<?php echo (isset($_GET['id']))? '<input style="visibility:hidden;display:none;" type="text" name="id" value="'.$id.'">': ''; ?>
		<table>
			<tr>
				<td>
					<label>Band name : </label>
				</td>			
				<td>
					<input type="text" data-validate="required" name="band-name" value=<?php echo (isset($_GET['id']))? '"'.$news->getTitle().'"' : '""';  ?> />
				</td>		
			</tr>
			<tr>
				<td>
					<label>Slogan : </label>
				</td>			
				<td>
					<input type="chapo" data-validate="required" name="slogan" value=<?php echo (isset($_GET['id']))? '"'.$news->getChapo().'"' : '""';  ?>/>
				</td>		
			</tr>
			<tr>	
				<td>	
					<label>Description :</label>
				</td>	
				<td>
					<textarea class="editor" data-validate="required" name="text1"><?php echo (isset($_GET['id']))? $news->getTexte() : '';  ?></textarea>
				</td>	
			</tr>
			<tr>
				<td>
					<label>Logo :</label>
				</td>
				<td>
					<input type="file" name="fileToUpload" id="fileToUpload" value=<?php echo (isset($_GET['id']))? '"'.$news->getImage().'"' : '""';  ?>>
					<?php echo (isset($_GET['id']))? '<img src="'.$news->getChapo().'">' : '';  ?>
				</td>

			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" name="action" value=<?php echo (isset($_GET['id']))? 'Edit' : 'Save' ;?>>
				</td>	
			</tr>
		</table>
	</form>
	<script type="text/javascript">
		$("textarea").jqte();
	</script>
</body>