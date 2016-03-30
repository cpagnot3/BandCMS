<!-- #main-footer -->
<?php 	require_once('../../global/Repository/ContactRepository.php');
$contactRepository = new ContactRepository();
	$contact = $contactRepository->getContact();
?>	
		<footer id="main-footer" class="row footer">
			<div class="col-lg-4 col-xs-12"><ul class="social">
		<li><a <?php echo 'href="'.$contact->getFbLink().'"'; ?> target="_blank"><span class="icon-facebook"></span></a></li>
		<li><a <?php echo 'href="'.$contact->getYtLink().'"'; ?> target="_blank"><span class="icon-youtube"></span></a></li>
		<li><a <?php echo 'href="'.$contact->getTwLink().'"'; ?> target="_blank"><span class="icon-twitter"></span></a></li>
		</ul></div>
			<div class="col-lg-4 col-xs-12"></div>
			<div class="col-lg-4 col-xs-12"><div class="end-footer">
		
		<ul>
		<li><a href="">Mentions Légales</a></li>

		<li><a href="">Cookies</a></li>
		</ul></div></div>			


		</footer> 

</main>
</body>
</html>

