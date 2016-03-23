<head>

</head>
<body>
	
	<?php 
		if(isset($_GET['u'])){
			echo '<div>User already exist !</div>';
		}
		if(isset($_GET['p'])){
			echo '<div>Password error !</div>';
		}
		if(isset($_GET['c'])){
			echo '<div>User created !</div>';
		}
	?>
	<form method="post" action="../Controller/addUserController.php">		
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >
		<table>
			<tr>
				<td>
					<label>Pseudo :</label>
				</td>
				<td>
					<input type="text" name="pseudo">
				</td>
			</tr>
			<tr>
				<td>
					<label>Password :</label>
				</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirm password :</label>
				</td>
				<td>
					<input type="password" name="confirmPassword">
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input value="add" type="submit"></input>
				</td>
			</tr>		
		</table>
	</form>	
</body>