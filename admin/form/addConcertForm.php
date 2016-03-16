<head>
	<link rel="stylesheet" type="text/css" href="/BandCMS/admin/assets/css/jquery.datetimepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.full.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.js"></script>

</head>
	
<body>
	<?php 
		if(isset($_GET['t'])){
			echo '<div>Show added !</div>';
		}
	?>
	<form method="post" action="../controller/addConcertController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >
		<table>
			<tr>
				<td>
					<label>Date : </label>
				</td>			
				<td>
					<input type="text" name="dateConcert" id="datetimepicker"/>
				</td>		
			</tr>
			<tr>	
				<td>
					<label>Place : </label>
				</td>		
				<td>
					<input type="text" name="place">
				</td>		
			</tr>
			<tr>
				<td>
					<label>City : </label>
				</td>		
				<td>
					<input type="text" name="city">
				</td>		
			</tr>
			<tr>				
				<td>
					<label>Country : </label>
				</td>		
				<td>
					<select name="country">
						<option>France</option>
						<option>Germany</option>
						<option>United Kingdom</option>
					</select>
				</td>		
			</tr>
			<tr>
				<td>
					<label>Ticket link : </label>
				</td>
				<td>		
					<input type="text" name="billeterie">
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
	<script type="text/javascript">
		$('#datetimepicker').datetimepicker({
			format : 'd-m-Y H:i'
		});
	</script>
</body>

