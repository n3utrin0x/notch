<?php include_once('header.php'); ?>

	<script>
		$(function(){
			$("#user").focus();
		});

		function user_keyup(e)
		{
			if(e.keyCode == 13)
			{
				$("#divpass").show();
				$("#pass").focus();
			}
		}

		function pass_keyup(e)
		{
			if(e.keyCode == 13)
			{
				$.post('functions.php?function=login', $('#login_form').serialize()).done(function(response) {
					if(response == "1") {
						window.location.href = "post.php"
					}
					else {
						$("#fail").show();
					}
				});
			}
		}
	</script>

	<form id="login_form">
		<span>Username pl0x:&nbsp;</span><input type="text" class="answer" name="user" id="user" onkeyup="user_keyup(event)"><br>
		<div id="divpass" style="display:none"><span>Password pl0x:&nbsp;</span><input type="password" class="answer" name="pass" id="pass" onkeyup="pass_keyup(event)"><br></div><br>
		<span id="fail" style="color:red;display:none">You shall not pass!</span>
	</form>

<?php include_once('footer.php'); ?>