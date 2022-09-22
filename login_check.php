<?php 
	if($_POST){
		extract($_POST);
		$c = mysqli_connect("localhost","root","","flawer");
		$q = mysqli_query($c,"select * from users where email='$e1' and password='$p1'");
		$count = mysqli_num_rows($q);
		if($count==0){
			echo"Invalid";
		}else{
			session_start();
			$_SESSION['mysession']=$e1;
			header("location:dashboard.php");
		}
	}
	?>
