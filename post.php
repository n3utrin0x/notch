<?php include_once('header.php'); ?>

	<?php
		if(!isset($_SESSION['id'])) {
			header("location: login.php");
			return;
		}
	?>

	<script>
		function emptyText()
		{
			if(event.target.value == "[insert title]")
				event.target.value = "";
			if(event.target.value == "[insert content]")
				event.target.value = "";
		}

		function textAreaAdjust(o) 
		{
		    o.style.height = "1px";
		    o.style.height = (o.scrollHeight)+"px";
		}

		function post()
		{
			$.post("functions.php?function=post", $('#post_form').serialize()).done(function(response) {
				window.location.href = "index.php";
			});
		}
	</script>

	<form id="post_form" class="post">
		<textarea class="title" maxlength="30" onclick="emptyText()" name="title">[insert title]</textarea>
		<span class="time">&nbsp;<?php echo date("F jS, Y"); ?></span>
		<textarea class="content" onclick="emptyText()" onkeyup="textAreaAdjust(this)" name="content">[insert content]</textarea>
	</form>
	<button onclick="post()">Publish</button>

<?php include_once('footer.php'); ?>