<?php
 if (isset ($_POST['login1']))
 {
 	$un = $_POST['un'];
 	$pw = $_POST['pw'];

 	$result = $cn ->query("SELECT * from user where username='$un' and password = '$pw' ")
 	or die('cannot login:'.mysqli_error());
 	
 	$row = $result ->fetch_array();
 	$nr =$result ->num_rows;

 	if( $nr > 0 )
 		header("location: welcome.php");	

 		
 }
?>