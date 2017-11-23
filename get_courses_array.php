<?php
				include ("includes/db-connection.php") ;

				$SQL = "SELECT * FROM course_section WHERE Term = (SELECT MAX(Term) From course_section)";
				$result = mysqli_query($todoAppMySQLConnection,$SQL);
				$phpArray = array();
				while ($row = mysqli_fetch_array($result)) {
					$phpArray[] = $row; 	
				}
?>