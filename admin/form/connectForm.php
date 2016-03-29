<head>
	<link rel="stylesheet" type="text/css" href="/BandCMS/admin/assets/css/jquery.datetimepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.full.js"></script>
	<script src="/BandCMS/admin/assets/js/jquery.datetimepicker.js"></script>

</head>
<body>
	<?php if(isset($_GET['e'])){echo 'Error Pseudo/Password';}?> 
	<form action=<?php echo '"http://'.$_SERVER['HTTP_HOST'].'/BandCMS/admin/Controller/connectController.php"'?> method="post">
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >

	<table>
		<tr>
			<td>
				Pseudo :
			</td>
			<td>
				<input type="text" name="pseudo"></input>
			</td>
		</tr>
		<tr>
			<td>
				Password :
			</td>	
			<td>
				<input type="password" name="password"></input>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="submit" value="Connect"></input>
			</td>
		</tr>
	</table>
	</form>
</body>