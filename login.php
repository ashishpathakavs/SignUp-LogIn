<?php
require 'connect.php';
if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['uusername'])&&isset($_POST['ppassword'])){
	$firstname=$_POST['firstname'];$lastname=$_POST['lastname'];$username=$_POST['uusername'];$password=$_POST['ppassword'];
		
	if(!empty($firstname)&&!empty($lastname)&&!empty($username)&&!empty($password)){

			$query="SELECT `username` FROM `login_info` WHERE `username`='$username'";
			$query_run=mysql_query($query);
			$rows=mysql_num_rows($query_run);
			
			if($rows==0){
			$query="INSERT INTO `login_info` VALUES('','$firstname','$lastname','$username','$password')";
			$quer_run=mysql_query($query);
		}else {echo '<h3>User Name already exist</h3>';}

	}
		else{echo 'no field should be empty';}	
}
?>

<form action="second.php" method="POST">
name:<input type="text" name="username">
password:<input type="password" name="password">
<input type="submit" value="submit"><br><br></form>


<form action="first.php" method="POST">
first name:<input type="text" name="firstname"><br><br>
last name:<input type="text" name="lastname"><br><br>
username:<input type="text" name="uusername"><br><br>
pasword:<input type="password" name="ppassword"><br><br>
<input type="submit" value="SignUp"><br><br></form>