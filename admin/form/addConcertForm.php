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

		if(isset($_GET['id'])){
			$id = $_GET['id'];
			require(dirname(__FILE__).'/../../Global/Repository/ConcertRepository.php');
			$concertRepository = new ConcertRepository();
			$concert = $concertRepository->getConcertById($id);
		}
	?>
	<form method="post" action="../controller/addConcertController.php">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >
		<?php echo (isset($_GET['id']))? '<input style="visibility:hidden;display:none;" type="text" name="id" value="'.$id.'">': ''; ?>
		<table>
			<tr>
				<td>
					<label>Date : </label>
				</td>			
				<td>
					<input type="text" value=<?php echo (isset($_GET['id']))? $concert->getDateConcert() : '';  ?> name="dateConcert" id="datetimepicker"/>
				</td>		
			</tr>
			<tr>	
				<td>
					<label>Place : </label>
				</td>		
				<td>
					<input type="text" value=<?php echo (isset($_GET['id']))? $concert->getPlace() : '';  ?> name="place">
				</td>		
			</tr>
			<tr>
				<td>
					<label>City : </label>
				</td>		
				<td>
					<input type="text" value=<?php echo (isset($_GET['id']))? $concert->getCity() : '';  ?> name="city">
				</td>		
			</tr>
			<tr>				
				<td>
					<label>Country : </label>
				</td>		
				<td>
					<select name="country" id="country"> 						
						<option value="Germany">Germany</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="France">France</option>
					</select>
				</td>		
			</tr>
			<tr>
				<td>
					<label>Ticket link : </label>
				</td>
				<td>		
					<input type="text" value=<?php echo (isset($_GET['id']))? $concert->getBilleterie() : ''; ?> name="billeterie">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
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

