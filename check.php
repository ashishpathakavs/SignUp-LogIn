<?php
require'connect.php';
$query="SELECT `firstname`,`lastname` FROM `login_info`";
if($query_run=mysql_query($query)){
while($query_row=mysql_fetch_assoc($query_run)){
echo $query_row['firstname'];
echo $query_row['lastname'].'<br>';

}
}
	
?>