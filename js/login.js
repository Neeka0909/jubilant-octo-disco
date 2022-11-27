$(document).ready(function(){
	$('#submit_login').click(function(){
		var username = $('#inputEmail').val();
		var password = $('#inputPassword').val();
		if (username !=='' || password !=='') {
			$.ajax ({
				url:"include/login.inc.php",
				method:"POST",
				data:{username:username, password:password},
				beforeSend:function() {
					$('#loaderText').html("Loading...");
					$('#loader').addClass('loader');
				},
				success:function(data) {
					$('#loader').removeClass('loader');
					$('#loaderText').html("");

					if ('Your user name is incorrect') {
						$('#errorEmail').html('<br><div class="alert alert-danger"><strong>Error!</strong> Your user name is incorrect</div>');
					}else{
						if ('login successed') {
						window.location.replace("http://localhost/pid/user.dashboard.php");
						}
					}
				}
			});
		}else{
			alert("Both Fields are required");
		}
	});
});