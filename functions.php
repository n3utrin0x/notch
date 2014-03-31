<?php
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	if(!empty($_GET) && isset($_GET['function'])) call_user_func($_GET['function']);
	if(!empty($_POST) && isset($_POST['function'])) call_user_func($_POST['function']);

	function login() 
	{
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);
		$con = mysqli_connect("localhost", "root", "", "black0ut");
		$query = $con->prepare("SELECT id FROM users WHERE user=? AND pass=?");
		$query->bind_param("ss", $user, $pass);
		$query->execute();
		$results = $query->get_result();
		$result = $results->fetch_assoc();
		if($result != null) {
			$_SESSION['id'] = $result['id'];
			echo "1"; 
		}
	}

	function post()
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$time = date("F jS, Y");
		$con = mysqli_connect("localhost", "root", "", "black0ut");
		$query = $con->prepare("INSERT INTO posts(user,title,content,time) VALUES(?,?,?,?)");
		$query->bind_param("isss", $_SESSION['id'], $title, $content, $time);
		$query->execute();
	}
?>