<?php
 //include 'db-connection2.php';
 include 'includes/db-connection.php';
 session_start();

if (isset($_POST['username']) and isset($_POST['password']))
{
	$username 		= $_POST['username'];
	$password 		= $_POST['password'];
    //$userTypeLogin 	= $_POST['userTypeLogin'];
	$query 			= "SELECT * FROM LOGIN WHERE EMAIL='$username' and PASS='$password'";
	$result 		= mysqli_query($todoAppMySQLConnection, $query) or die(mysqli_error($todoAppMySQLConnection));
	$row 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active 		= $row['IS_ACTIVE'];
	$count 			= mysqli_num_rows($result);
		// User login credentials to find user role
		if ($count == 1 && $active == 1) {
			$userQuery = "SELECT * FROM USERS WHERE EMAIL='$username'";
	        $userResult = mysqli_query($todoAppMySQLConnection, $userQuery) or die(mysqli_error($todoAppMySQLConnection));
	  		$userRow = mysqli_fetch_array($userResult,MYSQLI_ASSOC);
			if ($userRow['IS_ADMIN'] == 1) {
				$_SESSION['user_id'] = $userRow['USER_ID'];
					$_SESSION['login_type'] = "Admin";
          $_SESSION['is_admin'] = $userRow['IS_ADMIN'];
          $_SESSION['is_prof'] = $userRow['IS_PROF'];
          $_SESSION['is_ta'] = $userRow['IS_TA'];
					header("Location:welcome.php");
					//echo "made it into the if statement";
					//exit();
			}
			else if ($userRow['IS_PROF'] == 1) {
					$_SESSION['user_id'] = $userRow['USER_ID'];
					$_SESSION['login_type'] = "Instructor";
          $_SESSION['is_admin'] = $userRow['IS_ADMIN'];
          $_SESSION['is_prof'] = $userRow['IS_PROF'];
          $_SESSION['is_ta'] = $userRow['IS_TA'];
					header("Location:welcome.php");
					//echo "made it into the if statement";
					//exit();
			}
			else if ($userRow['IS_TA'] == 1) {
					$_SESSION['user_id'] = $userRow['USER_ID'];
					$_SESSION['login_type'] = "TA Applicant";
          $_SESSION['is_admin'] = $userRow['IS_ADMIN'];
          $_SESSION['is_prof'] = $userRow['IS_PROF'];
          $_SESSION['is_ta'] = $userRow['IS_TA'];
					header("Location:welcome.php");
					//echo "made it into the if statement";
					//exit();
			}
			//if this happens, something bad happened
			else {
				echo '<script language="javascript">';
				echo 'alert("Something went wrong. Please contact Team 3.")';
				echo '</script>';
			}
		}
		/* OLD CODE WITH USER SELECTING ROLE OFF DROP DOWN
		if ($count == 1 && $userTypeLogin != "" && $active == 1)
		{
	        $userQuery = "SELECT * FROM USERS WHERE EMAIL='$username'";
	        $userResult = mysqli_query($connection, $userQuery) or die(mysqli_error($connection));
	  		$userRow = mysqli_fetch_array($userResult,MYSQLI_ASSOC);
			if (($userTypeLogin == "admin" && $userRow['IS_ADMIN']) == 1 ||
				  ($userTypeLogin == "professor" && $userRow['IS_PROF']) == 1 ||
				  ($userTypeLogin == "teachingAssistant" && $userRow['IS_TA'] == 1))
			{
					$_SESSION['user_id'] = $userRow['USER_ID'];
					$_SESSION['login_type'] = $userTypeLogin;
					header("Location:welcome.php");
					//echo "made it into the if statement";
					//exit();
			  }
			  else
			  {
				echo  "Sorry, you are not validated for the login type you specified.";
			  }


		}
		*/
		//Account not activated by admin
		else if ($count == 1 && $active == 0) {
			echo '<script language="javascript">';
			echo 'alert("Your account has not been activated yet.")';
			echo '</script>';
		}
		//Wrong login credentials
		else {
			echo '<script language="javascript">';
			echo 'alert("Invalid login credentials.")';
			echo '</script>';
		}
}

/*if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	echo "Hello " . $username;
	echo "Welcome to your homepage!";
	echo "<a href='logout.php'>Logout</a>";
	}else{
	echo "login failed";}
*/
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>MSCI 342 Test Login Page</title>

	<body>
	<div>
	<!--this is the DIV that  includes everything-->

	<h1> TA Application Login</h1>
	<!--the title-->
	<form method="POST" action="" onsubmit = "return check_login()">

		<table>
			<tr>
				<td>
					<b>Email</b>
				</td>
				<td>
					<input type="text" name="username" id="inputUsername" placeholder="Email" >
				</td>
			</tr>
			<tr>
				<td>
					<b>Password</b>
				</td>
				<td>
					<input type="password" name="password" id="inputPassword"  placeholder="Password" >
				</td>
			</tr>
			<!-- OLD CODE FOR DROP DOWN
			<tr>
				<td>
					<b>User Type</b>
				</td>
				<td class = "Select">
				<select name="userTypeLogin" id="userTypeLogin" style="width:175px;">
					<option value="">Select your option</option>
					<option value="teachingAssistant">Teaching Assistant</option>
					<option value="professor">Professor</option>
					<option value="admin">Admin</option>
				</select>
				</td>
			</tr>
			-->
			<tr>
				<td align="right" colspan="2">
					<button type="submit" onClick="check_login" style="width:150px;">Login</button>
					</form>
				</td>
			</tr>
			<tr>
				<td align="right" colspan="2">
					<form name="form" action="create_account.php" method="Post" >
						<button type="submit" value="create_account" style="width:150px;">Create Account</button>
					</form>
				</td>
			</tr>
		</table>
	</div>

	<!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
  -->
	<!-- Check if login fields filled out -->
	<script language="JavaScript" >
	var onsubmit_option = true;
	function check_login(){
		if(document.getElementById("inputUsername").value!=""&&document.getElementById("inputPassword").value!=""){
			return true;
		}

		else{
			alert("Please fill out all fields.");
			return false;
		}
		return false;
	}
	</script>
	</body>
</html>
