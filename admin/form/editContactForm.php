<head>

</head>
<body>
	<?php 
		require(dirname(__FILE__).'/../../Global/Repository/ContactRepository.php');
		$contactRepository = new ContactRepository();
		$contact = $contactRepository->getContact();
	?>
	<?php 
		if(isset($_GET['e'])){
			echo '<div>Contact edited !</div>';
		}
	?>
	<form method="post" action="../Controller/editContactController.php">		
		<input style="visibility:hidden;display:none;" type="text" name="redirect" value= <?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'"'?> >
		<table>
			<tr>
				<td>
					<label>Mail :</label>
				</td>
				<td>
					<input type="text" name="mail" value=<?php echo $contact->getMail(); ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Firstname :</label>
				</td>
				<td>
					<input type="text" name="firstname" value=<?php echo $contact->getFirstName(); ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Name :</label>
				</td>
				<td>
					<input type="text" name="name" value=<?php echo $contact->getName(); ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Facebook :</label>
				</td>
				<td>
					<input type="text" name="facebook" value=<?php echo $contact->getFbLink(); ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Twitter :</label>
				</td>
				<td>
					<input type="text" name="twitter" value=<?php echo $contact->getTwLink(); ?> >
				</td>
			</tr>
			<tr>
				<td>
					<label>Youtube :</label>
				</td>
				<td>
					<input type="text" name="youtube" value=<?php echo $contact->getYtLink(); ?> >
				</td>
			</tr>
			<tr>
				<td>					
				</td>
				<td>
					<input type="submit" value="Edit" >
				</td>
			</tr>

		</table>
	</form>	
</body>