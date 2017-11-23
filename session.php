<?php
   include 'includes/db-connection.php';
   session_start();

   $user_check = $_SESSION['user_id'];
   $login_type = $_SESSION['login_type'];

   /*$ses_sql = mysqli_query($connection,"select Email from Login where USER_ID = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['Email'];*/

   if(!isset($_SESSION['user_id'])){
	echo "<script>";
	echo "alert('You are not logged in');";
	echo "window.location.href='index.php';";
	echo"</script>";
    //header("location:index.php");
   }
?>
