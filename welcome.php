<?php
	include 'session.php';
	include 'nav.php';
	$query 			= "SELECT * FROM USERS WHERE USER_ID=$user_check";
	$result 		= mysqli_query($todoAppMySQLConnection, $query) or die(mysqli_error($todoAppMySQLConnection));
	$row 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$first 			= $row['FIRST_NAME'];
	$last 			= $row['LAST_NAME'];
	$user_id 		= $row['USER_ID'];
?>
<html>
	<head>
		<title>TA Application Homepage</title>
	</head>
	<body>
		<h1 class="title">Welcome <?php echo $first." ".$last.", ".$login_type; ?></h1>
		<p>
			
			<h2> You have access to the following pages: </h2>
			<?php 
				if($login_type == 'Admin')
				{	
					?>
						<p><a href="testadmin.php">Test Admin Page</a></p>
						<p><a href="testprof.php">Test Prof Page</a></p>
						<p><a href="index.php">Team 1: Index 1</a></p>
						<p><a href="index2.php">Team 2: Index 2</a></p>
						<p><a href="index2.php">Team 6: Exporting</a></p>
					<?php
				}
				elseif($login_type == 'Instructor')
				{
					?>
						<p><a href="testprof.php">Test Prof Page</a></p>
						<p><a href="taform.php">View TA Rankings</a></p>
					<?php
				}
				?>
				<p><a href="taform.php">TA Form</a></p>
	</body>
<html>
