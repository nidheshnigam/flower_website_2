<?php 
	if($_POST){
		extract($_POST);
		$c = mysqli_connect("localhost","root","","flawer");
		mysqli_query($c,"insert into users(id,name,email,password) values('0','$n1','$e1','$p1')");
		echo "Successfull";
	}
?>