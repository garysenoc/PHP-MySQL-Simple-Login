<?php
$db ='dbphplogin';

$cn = new mysqli('localhost',"root","",$db);

if($cn->connect_errno)
	echo'Failed to connect to MYSQL:('.$cn->connect_errno.')'.$cn->connect_error;
?>