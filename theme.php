<?php
	session_start();
	if(!isset($_SESSION['theme']) || $_SESSION['theme'] == "light")
		$_SESSION['theme'] = "dark";
	else
		$_SESSION['theme'] = "light";
	header("location: " . $_SERVER["HTTP_REFERER"]);
?>