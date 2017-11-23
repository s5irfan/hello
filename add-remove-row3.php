<?php

	include ("includes/db-connection.php");
	include ("get_courses_array.php") ;

?>


	<!DOCTYPE html>

	<html>

	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	</head>
	<body>


			<table id="addedRows" rules="all" style="background:#fff;">
				<tr>
					<th style="font-size:14px;">Course</th>
					<th style="font-size:14px;">Description</th>
					<th style="font-size:14px;">Rank</th>
					<th><span style="font:normal 14px agency, arial; color:blue; text-decoration:underline; cursor:pointer;" onclick="addMoreRows(this.form);">
Add More Courses 
</span>
				</tr>
				<tr id="rowId">
					<td>

						<?php
				echo '<select id = "firstSelect" onchange = "updateDesc()" name="Select Course">';
				$result = mysqli_query($todoAppMySQLConnection,$SQL);
				while ($row = mysqli_fetch_array($result)) {
   				echo '<option size = "80%" value="'.$row['Catalogue_Number'].' - '.$row['Section'].  '">'.$row['Catalogue_Number'].' - '.$row['Section'].  '</option>';
   				}	

   				echo "</select>";
			?>

					</td>
					<td id="FirstChoice">
						<input id="firstDesc" type="textarea" value="" size="80%" readonly/>
					</td>

					<td>
						<input type="text" size="17%" value="1" />
					</td>
	</tr>
			</table>
		

			<script type="text/javascript">
				var jArray = <?php echo json_encode($phpArray); ?>;
				document.getElementById("firstDesc").value = jArray[0]["Description"];
				var options = "";
				var course = "";
				var section = "";
				var dash = " - ";
				for (i = 0; i < jArray.length; i++) {
					course = jArray[i]["Catalogue_Number"];
					section = jArray[i]["Section"];
					options = options + '"<option value ="' + course.concat(dash, section) + '">' + course.concat(dash, section) + '</option>';
				}
				var rowCount = 1;
				var desc = 1;
				function addMoreRows(frm) {
					rowCount++;
					desc++;

					var rval = "'hi'";
					var recRow = '<tr  id = "tr' + rowCount + '"> ' + '<td><select id = "test' + rowCount + '" onchange="updateDesc(' + rowCount + ');">' + options + '</select></td><td><input id = "desc' + rowCount + '" type="textarea" value= "' + jArray[0]["Description"] + '" size="80%" readonly/></td>' + '<td><input name="" type="text"  value="' + rowCount + '" size="17%"/></td>' + '<td><a href="javascript:void(0);" onclick="removeRow(' + rowCount + ');">Delete</a></td></tr>';

					jQuery('#addedRows').append(recRow);
				}

				function updateDesc(rowCount) {
					var select_id;
					var option_id;
					if (isNaN(rowCount) == true) {
						select_id = "firstSelect";
						option_id = "firstDesc";

					} else {
						select_id = "test" + rowCount;
						option_id = "desc" + rowCount;
					}
					var optionVal = document.getElementById(select_id);
					var course = optionVal.options[optionVal.selectedIndex].value;
					course = course.split(" ", 2);
					course = course.join(" ");
					for (i = 0; i < jArray.length; i++) {
						if (course == jArray[i][0]) {
							document.getElementById(option_id).value = jArray[i][3];
							break;
						}
					}
				}
				function removeRow(removeNum) {
					var row = document.getElementById("tr" + removeNum);
					row.parentNode.removeChild(row);
				}
			</script>

	</body>

	</html>