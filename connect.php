<?php
$connection_error='could not connect';
$mysql_host='localhost';$mysql_user='root';$mysql_pass='avs123@#';
$mysql_db='login_info';


if(@mysql_connect($mysql_host,$mysql_user,$mysql_pass)){}else{echo$connection_error;}
@mysql_select_db($mysql_db)or die($connection_error)

















?>