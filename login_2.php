<?php
require 'connect.php';
if(isset($_POST['username'])&&isset($_POST['password'])){
	$username=$_POST['username'];$password=$_POST['password'];
if(!empty($username)&&!empty($password)){
	$query="SELECT `username`,`password` FROM `login_info` WHERE `username`='$username' AND `password`='$password' ";
	$query_run=mysql_query($query);
	$rows=mysql_num_rows($query_run);
	if($rows==0){echo'<h2>login failed</h2>';}else{echo '<h2>LOGGED IN SUCCESSFULLY</h2>';}
	
}

else{echo"please enter name and password";}
}
	?>