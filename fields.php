<?php
	include 'session.php';
	$query 			= "SELECT * FROM USERS WHERE USER_ID=$user_check";
	$result 		= mysqli_query($todoAppMySQLConnection, $query) or die(mysqli_error($todoAppMySQLConnection));
	$row 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$firstname 		= $row['FIRST_NAME'];
	$lastname 		= $row['LAST_NAME'];
	$questid 		= $row['QUEST_ID'];
	$email 			= $row['EMAIL'];
	$phone 			= $row['PHONE'];

?>