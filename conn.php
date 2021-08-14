<?php
$db=new Mysqli;
$db->connect('localhost','root','','banking_system');
if(!$db){
	echo "Connection failed";
}
?>