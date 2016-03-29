<?php 
		include('../module/CheckConnect.php');
?>
<html>
	<head>
	</head>
	<body>
		<h2>Add user</h2>		
		<?php include('../form/addUserForm.php'); ?>
		<h2>Edit user (if you're a superuser)</h2>
		<?php include('../form/editUserForm.php'); ?>
	</body>
	
</html>	