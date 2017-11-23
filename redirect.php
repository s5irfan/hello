
<html>
	<head>
		<title>MSCI 346: Redirect</title>
	</head>
	<body>
		<?php
			if(!empty($_POST['usernameLogin']) && !empty($_POST['passwordLogin']) && !empty($_POST['userTypeLogin'])) {
					session_start();
    				$indexUsername = $_POST['usernameLogin'];
					$indexPassword = $_POST['passwordLogin'];
					$indexUserType = $_POST['userTypeLogin'];
					
					if($indexUsername == 'admin' && $indexPassword == 'admin' && $indexUserType == 'admin'){
						$_SESSION['loggedin'] = true;
						header('Location: welcome.php');
					}
					
					else{
						echo '<script type="text/javascript">'; 
						echo 'alert("Wrong username, password, and/or user type");'; 
						echo 'window.location.href = "login_index.php";';
						echo '</script>';
					}
			}
			
			else {
				echo '<script type="text/javascript">'; 
				echo 'alert("Please input a username, password, and user type");'; 
				echo 'window.location.href = "login_index.php";';
				echo '</script>';
			}
		?>
	</body>
<html>