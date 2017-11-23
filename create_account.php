<?php

include 'includes/db-connection.php'; 
session_start();


if (isset($_POST['usernameSignUp']) and isset($_POST['usernameSignUp']))
{

	$username = $_POST['usernameSignUp'];
	$userTypeLogin = "TA";
	$firstNameSignUp = $_POST['firstNameSignUp'];
	$lastnamesignup = $_POST['lastNameSignUp'];
	$password = $_POST['passwordSignUp'];
	$QuestID = $_POST['questID'];
	$phoneNumber = $_POST['phone'];
	$IsAdmin = $_POST['IsAdmin'];
	$IsProf = $_POST['IsProf'];
	$IsTA = $_POST['IsTA'];
	if($IsAdmin==""){
		$IsAdmin=0;
	}
	If($IsProf=="") {
		$IsProf = 0;
	}
	If($IsTA==""){
		$IsTA = 0;
	}
	$query = "SELECT * FROM Login WHERE EMAIL='$username'";

		$result = mysqli_query($todoAppMySQLConnection, $query) or die(mysqli_error($todoAppMySQLConnection));
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		$count = mysqli_num_rows($result);
		//$sql = "";
	if ($count == 0)
	{
		$sql = 'INSERT INTO users (EMAIL, FIRST_NAME, IS_ADMIN, IS_PROF, IS_TA, LAST_NAME, PHONE, QUEST_ID) 
				VALUES("' . $username . '", "' . $firstNameSignUp . '", "' . $IsAdmin . '", "' . $IsProf . '", "' . $IsTA . '", "' . $lastnamesignup. '", "' . $phoneNumber . '", "' . $QuestID . '")';
		$query1 = mysqli_query($todoAppMySQLConnection, $sql);
		
		$sql2 = "SELECT USER_ID FROM USERS WHERE EMAIL='$username'";
		$query2 = mysqli_query($todoAppMySQLConnection, $sql2);
		$row = mysqli_fetch_array($query2,MYSQLI_ASSOC); 
		$autoID = $row['USER_ID'];
		
		$sql3 = 'INSERT INTO login (USER_ID, EMAIL, PASS, IS_ACTIVE)
				VALUES("' . $autoID. '", "' . $username  . '", "'. $password .'", 1)';
		$query3 = mysqli_query($todoAppMySQLConnection, $sql3);
				
		If($query1 && $query3){
			//echo '</br>Success: ' . $sql . '</br>';
			$_SESSION['login_user'] = $username;
			$_SESSION['login_type'] = $userTypeLogin;
			header("Location:index.php");
		}
		else {
			echo '</br>Error: ' . $sql . ' | ' . mysqli_error($todoAppMySQLConnection) . '</br>';
			echo '</br>Error: ' . $sql3 . ' | ' . mysqli_error($todoAppMySQLConnection) . '</br>';
		}
		
		/*If(mysqli_query($connection, $sql2)){
			echo '</br>Success: ' . $sql2 . '</br>';
		}
		else {
			echo '</br>Error: ' . $sql2 . ' | ' . mysqli_error($connection) . '</br>';
		}*/
	}
	else
	{
		alert("There is already an account linked to this email.");
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>MSCI 342 Create Account</title>

	<body>
	<div id="site">
	<!--this is the DIV that  includes everything-->

	<h1 class="title"> MSCI 342: Create Account </h1>
	<!--the title-->
	<form name="form" action="" method="Post" onsubmit="return check_signup()">
		<table>
			<tr>
				<td>
					<b>Name</b><a style="color: red;">*</a>
				</td>
				<td>
					<input type="text" name="firstNameSignUp" id="firstNameSignUp" placeholder="First" style="width:133px;">
				</td>
				<td>
					<input type="text" name="lastNameSignUp" id="lastNameSignUp" placeholder="Last" style="width:133px;">
				</td>
			</tr>
			<tr>
				<td>
					<b>email</b><a style="color: red;">*</a>
				</td>
				<td align="center" colspan="2">
					<input type="text" name="usernameSignUp" id="usernameSignUp" placeholder="E-mail Address" style="width:274px;">
				</td>
			</tr>
			<tr>
				<td>
					<b>Password</b><a style="color: red;">*</a>
				</td>
				<td align="center" colspan="2">
					<input type="password" name="passwordSignUp" id="passwordSignUp" style="width:274px;">
				</td>
			</tr>
			<tr>
				<td>
					<b>Confirm Password</b><a style="color: red;">*</a>
				</td>
				<td align="center" colspan="2">
					<input type="password" name="confirmPasswordSignUp" id="confirmPasswordSignUp" style="width:274px;">
				</td>
			</tr>
			<tr>
				<td>
					<b>Phone Number</b>					
				</td>
				<td align="center" colspan="2">
					<input type="text" name="phone" id="phone" style="width:274px;">
				</td>
			</tr>
			<tr>
				<td>
					<b>Quest ID</b>					
				</td>
				<td align="center" colspan="2">
					<input type="text" name="questID" id="QuestID" style="width:274px;">
				</td>
			</tr>
			<!--
			<tr>

				<td>
					<b>Department</b><a style="color: red;">*</a>
				</td>
				<td align="center" colspan="2">
					<?php
					/*
						$servername= '';//ENTER SERVER HERE
						$username= '';//ENTER USERNAME HERE
						$password= '';//ENTER PASSWORD HERE
						$link=mysql_connect($servername, $username, $password) or die ("Error connecting to mysql server: ".mysql_error());
						$dbname = '';//ENTER DB HERE
						mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());   
						
						$queryDepartments = mysql_query("SELECT DISTINCT Department FROM TABLE ORDER BY Department DESC"); //FIX SQL SCRIPT
						echo '<select name="departmentSignUp" id="departmentSignUp" style="width:27px;">';
						echo '<option value ="">Select Department</option>';
						while($rowDepartment = mysql_fetch_array($queryDepartments)) 
						{								
							$departmentEntry = $rowDepartment['Department']];
							echo '<option value="'.$departmentEntry.'">'.$departmentEntry.'</option>';
						}
						echo '</select>';
						*/
					?>
				</td>
			</tr>
			-->
			<!--
			<tr>
				<td>
					<b>Current Program</b><a style="color: red;">*</a>
				</td>
			
				<td align="center" colspan="2">
					<?php
					/*
						$servername= '';//ENTER SERVER HERE
						$username= '';//ENTER USERNAME HERE
						$password= '';//ENTER PASSWORD HERE
						$link=mysql_connect($servername, $username, $password) or die ("Error connecting to mysql server: ".mysql_error());
						$dbname = '';//ENTER DB HERE
						mysql_select_db($dbname, $link) or die ("Error selecting specified database on mysql server: ".mysql_error());   
						
						$queryCurrentProgram = mysql_query("SELECT DISTINCT CurrentProgram FROM TABLE ORDER BY CurrentProgram DESC"); //FIX SQL SCRIPT
						echo '<select name="programSignUp" id="programSignUp" style="width:27px;">';
						echo '<option value ="">Select Current Program</option>';
						while($rowCurrentProgram = mysql_fetch_array($queryCurrentProgram)) 
						{								
							$currentProgramEntry = $rowCurrentProgram['CurrentProgram']];
							echo '<option value="'.$currentProgramEntry.'">'.$currentProgramEntry.'</option>';
						}
						echo '</select>';
						*/
					?>
				</td>
			</tr>
			-->
			<!--
			<tr>
				<td>
					<b>English Proficiency</b><a style="color: red;">*</a>
				</td>
				<td>
					<input type="radio" name="englishProficiencySignUp" value="Yes">Yes
				</td>
				<td>
					<input type="radio" name="englishProficiencySignUp" value="No">No
				</td>
			</tr>
			<tr>
				<td>
					<b>Available for Full Duration of Term</b><a style="color: red;">*</a>
				</td>
				<td>
					<input type="radio" name="employmentDurationSignUp" value="Yes">Yes
				</td>
				<td>
					<input type="radio" name="employmentDurationSignUp" value="No">No
				</td>
			</tr>
			<tr>
				<td>
					<b>Full time/Part time</b><a style="color: red;">*</a>
				</td>
				<td>
					<input type="radio" name="fullTimePartTimeSignUp" value="fullTime">Full time studies
				</td>
				<td>
					<input type="radio" name="fullTimePartTimeSignUp" value="partTime">Part time studies
				</td>
			</tr>
			-->
			<tr>
				<td> 
					<b>Date of Birth</b> <a style="color: red;">*</a>
				</td>
				<td colspan="2">
					<select id="year" name="year" style="width:60px;">
						<option value="">Select...</option>
						<script>
							var theDate = new Date();
							var year = theDate.getFullYear();
							for(var i = 1930; i < year+1; i++){
								document.write('<option value="'+i+'">'+i+'</option>');
							}
						</script>
					</select>
					<select id="month" name="month" style="width:60px;">
						<option value="">Select...</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sept</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select id="day" name="day" style="width:60px;">
						<option value="">Select...</option>
						<script>
							for(var i = 1; i < 32; i++){
								document.write('<option value="'+i+'">'+i+'</option>');
							}
						</script>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<b>User Type</b><a style="color: red;">*</a>
				</td>
				<td>
					<input type="checkbox" name="IsAdmin" value="1"> Admin<br>
					<input type="checkbox" name="IsProf" value="1"> Professor<br>
					<input type="checkbox" name="IsTA" value="1"> TA<br>
				</td>
			</tr>
			<tr>
				<td align="right" colspan="3">
					<button type="submit" onClick="check_signup" style="width:130px;">Create Account</button>
				</td>
			</tr>
		</table>
	</form>
	</div>
	<script language="JavaScript" >
	var onsubmit_option = true;
		function check_signup(){
			if(((document.getElementById("firstNameSignUp").value!=""&&document.getElementById("usernameSignUp").value!="")&&(document.getElementById("lastNameSignUp").value!=""&&document.getElementById("year").value!=""))&&((document.getElementById("passwordSignUp").value!=""&&document.getElementById("confirmPasswordSignUp").value!="")&&(document.getElementById("day").value!=""&&document.getElementById("month").value!=""))){
				var usernameReq = /\S+@\S+\.\S+/;
				if(!document.getElementById("usernameSignUp").value.match(usernameReq)) {
					alert("Username entered is not in a valid e-mail address format");
					return false;
				}
				if(document.getElementById("passwordSignUp").value == document.getElementById("confirmPasswordSignUp").value) {
					var passwordReq=  /^[a-zA-Z0-9]{6,15}$/;
					if(document.getElementById("passwordSignUp").value.match(passwordReq)) {
						return true;
					}
					else {
						alert("Password does not meet requirements - Alphanumeric and between 6 and 15 characters");
						return false;
					}
				}
				else {
					alert("Passwords entered do not match");
					return false;
				}
			}
			else{
				alert("Please fill out all text fields");
				return false;	
			}
			return false;
		}
	</script>
	</body>
</head>
</html>