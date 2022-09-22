<?php 
if($_POST){
	extract($_POST);
	$c = mysqli_connect('localhost','root','','flawer');
	mysqli_query($c,"insert into sendmess(id,name,email,number,message) values('0','$n1','$e1','$num1','$m1')");
	echo "Successfull";
}
?>
