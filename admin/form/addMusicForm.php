<head>
	<link rel="stylesheet" type="text/css" href="/BandCMS/admin/assets/css/jquery.datetimepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.full.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.js"></script>

</head>
	
<body>

	<?php 
		if(isset($_GET['t'])){
			echo '<div>Music added !</div>';
		}

		if(isset($_GET['id'])){
			$id = $_GET['id'];
			require(dirname(__FILE__).'/../../Global/Repository/MusicRepository.php');
			$musicRepository = new MusicRepository();
			$music = $musicRepository->getMusicById($id);
		}
	?>
	<form enctype="multipart/form-data" method="post" action="../controller/addMusicController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >
		<?php echo (isset($_GET['id']))? '<input style="visibility:hidden;display:none;" type="text" name="id" value="'.$id.'">': ''; ?>
		<table>
			<tr>
				<td>
					<label>Title : </label>
				</td>			
				<td>
					<input type="text" name="title" value=<?php echo (isset($_GET['id']))? $music->getTitle() : '';  ?> />
				</td>		
			</tr>
			<tr>	
				<td>
					<label>Artist : </label>
				</td>		
				<td>
					<input type="text" name="artist" value=<?php echo (isset($_GET['id']))? $music->getArtist() : '';  ?> />
				</td>		
			</tr>
			<tr>
				<td>
					<label>Album : </label>
				</td>		
				<td>
					<input type="text" name="album" value=<?php echo (isset($_GET['id']))? $music->getAlbum() : '';  ?> />
				</td>		
			</tr>
			<tr>
				<td>
					<label>Release date : </label>
				</td>		
				<td>
					<input type="text" name="release-date" value=<?php echo (isset($_GET['id']))? $music->getReleaseDate() : '';  ?> />
				</td>		
			</tr>

			<tr>
				<td>
					<label>File : </label>
				</td>		
				<td>
					<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
					<input type="file" name="file">
				</td>		
			</tr>
		
			<tr>
				<td>		
					<input type="submit" name="action" value=<?php echo (isset($_GET['id']))? 'Edit' : 'Add' ;?>>
				</td>
			</tr>
		</table>


	</form>
	<script type="text/javascript">
		<?php echo (isset($_GET['id']))? '$("#country").val("'.$concert->getCountry().'");' : '';  ?>
		$('#datetimepicker').datetimepicker({
			format : 'd-m-Y H:i'
		});
	</script>
</body>
