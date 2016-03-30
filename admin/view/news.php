<?php 
		include('../module/CheckConnect.php');
?>
<html>
<head>
	<title>News editor</title>
</head>
<body>
	<a href="../index.php">Home</a>
	<?php include('../form/addNewsForm.php'); ?>
	<?php if(!isset($_GET['id'])){include('../form/editNewsForm.php');} ?>
</body>
</html>