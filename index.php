<?php include_once('header.php'); ?>
	
	<?php if(!isset($_GET['page'])) $_GET['page'] = 1; ?>

	<a href="index.php?page=<?php echo $_GET['page']-1; ?>" style="float:left"><?php if($_GET['page'] != 1) echo "&lt;&lt;&nbsp;Prev"; ?></a>
	<?php
		$con = mysqli_connect("localhost","root","","black0ut");
		$posts = $con->query("SELECT * FROM POSTS ORDER BY id DESC");
		$page = $_GET['page'];
		$nextpage = $_GET['page']+1;
		while($page-->0)
			$post = $posts->fetch_assoc();
		if($posts->fetch_assoc() != null) 
			echo "<a href='index.php?page=$nextpage' style='float:right'>Next&nbsp;&gt;&gt;</a>";
		echo '<div style="clear:both"></div><br>';
		echo '<div class="post">';
		echo '<span class="title">' . $post['title'] . "</span>";
		echo '<span class="time">' . $post['time'] . "</span>";
		echo '<span class="content">' . $post['content'] . "</span>";
		echo '</div><hr>';
	?>
	
<?php include_once('footer.php'); ?>