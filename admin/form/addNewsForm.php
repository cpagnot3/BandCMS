<head>

	<link rel="stylesheet" type="text/css" href="/BandCMS/admin/assets/css/jquery-te-1.4.0.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery-te-1.4.0.min.js"></script>
</head>
<body>
	<form method="post" action="../controller/addNewsController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> />
		<table>
			<tr>
				<td>
					<label>Title : </label>
				</td>			
				<td>
					<input type="text" name="title"/>
				</td>		
			</tr>
			<tr>
				<td>
					<label>Chapo : </label>
				</td>			
				<td>
					<input type="chapo" name="title"/>
				</td>		
			</tr>
			<tr>	
				<td>	
				Contenu :
				</td>	
				<td>
					<textarea class="editor" name="text1"></textarea>
				</td>	
			</tr>
			<tr>
				<td>
					Image :
				</td>
				<td>
					<input type="file" name="fileToUpload" id="fileToUpload">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" value="Add">
				</td>	
			</tr>
		</table>
	</form>


	</form>
	<script type="text/javascript">
		$("textarea").jqte();
	</script>
</body>