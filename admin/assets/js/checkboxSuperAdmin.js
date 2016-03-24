$(document).ready(function(){
	$('li :checkbox').change(function(){
		
	            var redirect = $('#redirect'+$(this).val()).val();
				window.location.href = document.location.origin+'/BandCMS/admin/controller/editUserController.php?r='+redirect+'&id='+$(this).val();
	        
	});
});
