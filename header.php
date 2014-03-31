<!DOCTYPE html>
<html>
	<head>
		<?php session_start(); ?>
		<title>Black0ut</title>
		<?php if(isset($_SESSION['theme']) && $_SESSION['theme'] == "dark") { ?>
			<link rel="stylesheet" href="style.dark.css">
		<?php } else { ?>
			<link rel="stylesheet" href="style.light.css">
		<?php } ?>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	</head>
	<body>
	<span id="welcome">
		<?php 
			if(isset($_SESSION['id']))
			{
				echo "Logged in as: " . $_SESSION['id'] . " - <a href='post.php'>post</a> / <a href='logout.php'>logout</a>";
			}
			else
			{
				echo "<a href='login.php'>Login</a>";
			}
		?>
	</span>
	<span id="theme">
		<?php if(isset($_SESSION['theme']) && $_SESSION['theme'] == "light") { ?>
			( <a href="theme.php">Dark</a> | <b>Light</b> )
		<?php } else { ?>
			( <b>Dark</b> | <a href="theme.php">Light</a> )
		<?php } ?>
	</span>
		
	</span>
	<a href="index.php" class="title">Black0ut</a>
	<br>
	<span class="subtitle">&nbsp;Random College Adventures</span>
	<hr>