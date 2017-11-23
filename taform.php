<?php
include 'fields.php';
include ("includes/db-connection.php");
include  ("get_courses_array.php") ;
echo $activeDatabaseConnection ; // This shows what DB is being used in the form. 
?>

	<html>

	<head>
		<title>Teaching Assistantship (TA) Application</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</head>

	<body style="font-family: Helvetica;">

		<style>
			body {
				color: dimgrey;
				line-height: 1.6em;
			}
			
			p,
			ul,
			li {
				font-size: 18px;
				line-height: 1.6em;
			}
			
			h1,
			h2,
			h3 {
				color: black;
			}
			
			#multipleCoursesTable input,
			select {
				margin: 10px;
				padding: 10px;
				font-size: 0.8em;
			}
		</style>

		<div style="height:80px; width:100%; background-color: 57068C;margin-bottom:20px;"><table style="line-height:80px;margin:auto;"><tr><td ><font style="color:white;font-size:24px;">Management Sciences</font></td></tr></table></div> 

	    <table style="line-height:80px;margin:auto;"><tr><td align="right" style="margin-right:20px;"> <a href="welcome.php">Homepage</a></td></tr></table>
	    
		<form method="post" action="insert.php">

			<table style="width:900px; text-align:center; margin-bottom: 100px; margin:auto;" align="center" cellpadding="15">

				<tr>
					<td>
						<h1> 
          Teaching Assistantship (TA) Application
          </h1>
					</td>
				</tr>

				<tr style="text-align:left; padding-top:">
					<td>
						<p>Fall TA application.</p>
						<p>Application is closed.</p>
						<p>Only successful applicants will be contacted.</p>
					</td>
				</tr>

				<tr style="text-align:left; padding-top:50px;">
					<td style="padding-top:50px;">
						<h1>Introduction</h1>

						<p>Within the Department of Management Sciences the Teaching Assistantship is <b>not</b> an award but an employment assignment where the applicant's relevant academic background and communication skills are primary considerations. There is no guarantee that an applicant will receive a teaching assistantship.</p>

						<p>Your application is for a teaching assistantship and not for a specific course's teaching assistant position. If you receive a teaching assignment, your assignment to a course will be based on the needs of the department and your capabilities. This application provides you a means to provide your course preferences, but ultimately, TA positions are awarded based on many factors:</p>
						<ul>
							<li>the course instructor rankings of applicants</li>
							<li>the teaching support needs within the department and actual enrolment numbers</li>
							<li>the applicant's preferred courses</li>
							<li>the applicant's verbal communication skills (delivery of tutorials require good verbal skills)</li>
							<li>the qualifications and suitability of applicant</li>
							<li>satisfactory completion of the 2-day ExpecTAtions workshop</li>
							<li>etc.</li>
						</ul>

					</td>
				</tr>

				<tr style="text-align:left;">
					<td>
						<h1>Requirements</h1>
						<p>There are several requirements that must be met by a student to qualify for employment as a teaching assistant:</p>

						<ul>
							<li>It is a requirement of the Faculty of Engineering that only those students who have successfully completed the 2-day workshop, ExpecTAtions, are eligible to hold a TA. (Note: For Fall 2016, students without ExpecTAtions training will be considered for a TA but are expected to enroll in ExpecTAtions when it is offered in December, 2016.)</li>
							<li>Teaching assistants must be currently enrolled as students.
							</li>
							<li>Teaching assistants must be fully available for their assigned course.
							</li>
							<ul>
								<li>At a minimum, the TA must be available during times scheduled for the course's tutorial and labs. Some instructors may need a TA available during lectures for in class exams, etc.</li>
								<li>You must be available to proctor the final exam.</li>
								<li>As a TA, you must be available from the first day of the first month of the term until the last day of the last month of the term. Note that the end of the term extends past final exams. You may not leave early for vacation at the end of the term without permission of the instructor.</li>

							</ul>
							<li>Students should not have any outstanding English Language Proficiency requirements as part of their conditions of admission for their Graduate Studies program.</li>
							<li>A Full-time registered graduate student is not permitted to be employed by the University for more than an average of (10) ten hours per week per term.</li>
							<li>International students must have a valid study permit.</li>
						</ul>

						<hr style="color:purple;">


						<div align="center" style="width:90%; height:50px; text-align:center;border: 1px solid black; margin:auto; margin-top:20px; margin-bottom:20px;">*Navigating from this page without saving a draft will cause you to lose any information completed in the form below.

						</div>

						<div align="center" style="width:90%; height:60px; text-align:center;border: 1px solid black; margin:auto; margin-top:20px; margin-bottom:20px;">If you are logged into WatIam before you complete the form, the system will recognize you and you will be able to view and edit each of your submissions.

						</div>

						<div align="center" style="width:90%; height:50px; text-align:center;border: 1px solid black; margin:auto; margin-top:20px; margin-bottom:20px;">By submitting this form, you complete your application, and will be taken to the confirmation of application page.

						</div>

						<div align="center" style="width:90%; height:40px; text-align:center;border: 1px solid black; margin:auto; margin-top:20px; margin-bottom:20px;padding-left:10px;padding-right:20px;"> You will need to submit an application for each course you wish to apply for.

						</div>


						<strong>Information and privacy:</strong> questions regarding the collection of information on this form can be directed to the <a href="mailto:msmucker@uwaterloo.ca">form administrator</a>.

					</td>
				</tr>

				<tr style="text-align:left;">
					<td style="padding-top:10px;">
						<hr>

						<h3>Student ID <font size="3" color="grey">(ex.20416334) </font> <font style="color:red;">*(required)</font></h3>

						<input name="studentID" type="text" placeholder="ex. 20416334" required>
						<br>

						<h3>First Name <font size="3" color="grey"> </font> <font style="color:red;"></font></h3>

						<!-- <p> <?php $firstname; ?> </p> -->
						<input name="firstName" type="text" value="<?php echo $firstname; ?>" class="field left" readonly="readonly">
						<br>

						<h3>Last Name <font size="3" color="grey"></font> <font style="color:red;"></font></h3>

						<input name="lastName" type="text" value="<?php echo $lastname; ?>" class="field left" readonly="readonly">
						<br>

						<h3>UW Quest User ID <font size="3" color="grey"></font> <font style="color:red;"></font></h3>

						<input name="questID" type="text" value="<?php echo $questid; ?>" class="field left" readonly="readonly">
						<br>

						<h3>Email <font size="3" color="grey"></font> <font style="color:red;"></font></h3>

						<input name="email" type="text" value="<?php echo $email; ?>" class="field left" readonly="readonly">
						<br>

						<h3>Phone Number <font size="3" color="grey"> </font> <font style="color:red;"></font></h3>

						<input name="phone" type="text" value="<?php echo $phone; ?>" class="field left" readonly="readonly">
						<br>

						<h3>Citizenship <font style="color:red;">*(required)</font></h3>

						<input type="radio" name="citizenship" value="canadianCitizen" required> Canadian citizen
						<br>
						<input type="radio" name="citizenship" value="permanentResident"> Permanent resident
						<br>

						<input type="radio" name="citizenship" value="studentVisa"> Student Visa
						<br>
						<br>

						<h3>Study Permit Expiry Date</h3>

						<p>*If you are an International Student, it is your responsibility to ensure that you have a valid Study Permit. You must ensure that the Study Permit has not expired or will not expire during the period of the Teaching Assistantship.</p>

						<input name="permitExpiryDate" type="date">
						<br>
						<br>


						<h3>Department <font style="color:red;">*(required)</font></h3>

						<p>Department of your current academic program. (eg. Management Sciences, Civil and Environmental)</p>

						<input type="radio" name="department" value="depARCH" required> School of Architecture
						<br>

						<input type="radio" name="department" value="depCHE"> Department of Checmical Engineering
						<br>

						<input type="radio" name="department" value="depCIVE"> Department of Civil and Environmental Engineering
						<br>

						<input type="radio" name="department" value="depECE" required> Department of Electrical and Computer Engineering
						<br>

						<input type="radio" name="department" value="depMSCI"> Department of Management Sciences
						<br>

						<input type="radio" name="department" value="depMTE"> Department of Mechanical and Mechatronics Engnieering
						<br>

						<input type="radio" name="department" value="depSYS"> Department of Systems Design Engineering
						<br>

						<input type="radio" name="department" value="other"> Other...
						<br>

						<h3>Current Program <font style="color:red;">*(required)</font></h3>

						<input type="radio" name="currentProgram" value="mmsc" required> MMSC
						<br>

						<input type="radio" name="currentProgram" value="masc"> MASC
						<br>

						<input type="radio" name="currentProgram" value="phd"> PHD
						<br>

						<input type="radio" name="currentProgram" value="other"> Other...
						<br>

						<h3>Full time / part time <font style="color:red;">*(required)</font></h3>

						<input type="radio" name="fullPartTime" value="fullTime" required> Full time studies
						<br>

						<input type="radio" name="fullPartTime" value="partTime"> Part time studies
						<br>

						<h3>ExpecTAtions <font style="color:red;">*(required)</font></h3>

						<input type="radio" name="expectations" value="1" required> Yes
						<br>

						<input type="radio" name="expectations" value="0"> No
						<br>

						<h3>Course for which you wish to apply <font style="color:red;">*(required)</font><br></h3>
						<p>Please select from the available courses which you are submitting this application for.</p>

						<div id="multipleCoursesTable">
							<table id="addedRows" rules="all" style="background:#fff; margin:10px;">
								<tr>
									<th style="font-size:14px;">Course - Section</th>
									<th style="font-size:14px;">Course Description</th>
									<th style="font-size:14px;">Rank</th>
									<th><span style="font:normal 12px agency, arial; color:blue; text-decoration:underline; cursor:pointer;" onclick="addMoreRows(this.form);">Add More Courses </span>
								</tr>
								<tr id="rowId">
									<td>

										<?php
											echo '<select name = "course1" id = "test1" onchange = "updateDesc()" >';
											$result = mysqli_query($todoAppMySQLConnection,$SQL);
											while ($row = mysqli_fetch_array($result)) {
											echo '<option  size = "80%" value="'.$row['COURSE_ID'].' - '.$row['SECTION'].  '">'.$row['COURSE_ID'].' - '.$row['SECTION'].  '</option>';
											}	

   											echo "</select>";
										?>
									</td>

									<td id="FirstChoice" width = "60%">
										<p id="firstDesc"></p>
									</td>

									<td >
										<input id="rank1" name="course1Rank" type="number" style = "width:60px;" value="1" />
									</td>
								</tr>

							</table>




						</div>

						<br/>
						<br/>


						<h3>TA Positions Held Previous Winter Term <font size="3" color="grey">(ex. MSCI 311)</h3> List (if any) courses you have held TA positions for the previous Winter term.
						<br>

						<input name="previousWinter" type="text" placeholder="ex. MSCI 311">
						<br>

						<h3>TA Positions Held Previous Spring Term <font size="3" color="grey">(ex. MSCI 311)</h3> List (if any) courses you have held TA positions for the previous Spring term.
						<br>

						<input name="previousSpring" type="text" placeholder="ex. MSCI 311">
						<br>

						<h3>TA Positions Held Previous Fall Term <font size="3" color="grey">(ex. MSCI 311)</h3> List (if any) courses you have held TA positions for the previous Fall term.
						<br>

						<input name="previousFall" type="text" placeholder="ex. MSCI 311">
						<br>

						<h3>Next Academic Term # <font style="color:red;">*(required)</font></h3> If you are beginning your program of study this term would be 'Term 1', your next term would be 'Term 2' and so on.
						<br>

						<input name="nextTerm" type="text" placeholder="ex. Term 2" required>
						<br>

						<h3>Relevant Courses Completed</h3> List any relevant courses you have successfully completed that would be considered a strength for this course(s) previous institution, graduate or undergraduate courses (eg. WLU BUS, MSCI 603, MSCI 211,).
						<br>

						<input name="relevantCourses" placeholder="ex. MSCI 444, MSCI 541" type="text">
						<br>

						<h3>Other relevant experience</h3> List any other relevant experience you think we should know when considering you for this TA position.
						<br>

						<textarea name="otherExperience" style = " width: 500px; height:100px;"> </textarea>
						<br>

						<h3>Confirmation</h3> In addition to the above information, an application for a teaching assistant position implies that the applicant agrees to the following conditions of employment, and gives the department permission to verify that the student meets these conditions via examination of the student record. For full details on the Responsibilities and Requirements of a Management Sciences Teaching Assistantship please read in full <a href="/management-sciences/graduate-studies/teaching-assistantships-management-sciences">teaching assistantships management sciences.</a>

						<br>

						<h3>English Language Proficiency <font style="color:red;">*(required)</font></h3>

						<input type="checkbox" name="englishProficiency" value="agree" required>I confirm that I do not have any outstanding English Language Proficiency requirements as part of my conditions of admission for my Graduate Studies Program
						<br>
						<h3>Hours of Employment <font style="color:red;">*(required)</font>
</h3>

						<input type="checkbox" name="hoursOfEmployment" value="agree" required> I understand that as a Full-time registered graduate student I am not permitted to be employed by the University for more than an average of ten (10) hours per week per term.
						<br>
						<h3>Duration of Employment <font style="color:red;">*(required)</font>
</h3>

						<input type="checkbox" name="durationEmployment" value="aegre" required> I acknowledge that I will be available from the first day of the first month of the term to the last day of the last month of the term.

						<br>
						<h3>Responsibilities and Requirements <font style="color:red;">*(required)</font></h3>

						<input type="checkbox" name="requirements" value="agree" required>I have read and understand fully the Responsibilities and Requirements of being a Management Sciences Teaching Assistant
						<br>
						<br>

						<input name="numberOfCourses" id="numberOfCourses" type="hidden" value="1" />

						<input type="submit" value="Submit" style="width:200px; height: 50px; font-size: 1.4em;border:none;">

						<div style="height:100px;"></div>
					</td>
				</tr>
			</table>

		</form>
		<script type="text/javascript">
			var jArray = <?php echo json_encode($phpArray); ?>;
			document.getElementById("firstDesc").innerHTML = jArray[0]["DESCRIPTION"];

			var options = "";
			var course = "";
			var section = "";
			var dash = " - ";
			for (i = 0; i < jArray.length; i++) {
				course = jArray[i]["COURSE_ID"];
				section = jArray[i]["SECTION"];
				options = options + '"<option value ="' + course.concat(dash, section) + '">' + course.concat(dash, section) + '</option>';
			}
			var rowCount = 1;
			var desc = 1;
			var rank = 1;
			var crs = 1;

			function addMoreRows(frm) {
				rowCount++;
				desc++;
				rank++;
				crs++;
				var recRow = '<tr  id = "tr' + rowCount + '"> ' + '<td><select name = "course' + rowCount + '" id = "test' + crs + '" onchange="updateDesc(' + crs + ');">' + options + '</select></td><td><p id = "desc' + crs + '">' + jArray[0]["DESCRIPTION"] + '</p></td></td>' + '<td><input id = "rank' + rank + '" name="course' + rowCount + 'Rank" type="number" style = "width:60px;" value="' + rowCount + '" size="1%"/></td>' + '<td><a href="javascript:void(0);" onclick="removeRow(' + rowCount + ');">Delete</a></td></tr>';

				jQuery('#addedRows').append(recRow);
				document.getElementById("numberOfCourses").value = rowCount;
			}

			function updateDesc(crs) {
				var select_id;
				var option_id;
				if (isNaN(crs) == true) {
					select_id = "test1";
					option_id = "firstDesc";

				} else {
					select_id = "test" + crs;
					option_id = "desc" + crs;
				}
				var optionVal = document.getElementById(select_id);
				var course = optionVal.options[optionVal.selectedIndex].value;
				course = course.split(" ", 1);
				course = course.join(" ");
				for (i = 0; i < jArray.length; i++) {
					if (course == jArray[i][0]) {
						document.getElementById(option_id).innerHTML = jArray[i][3];
						break;
					}
				}
			}

			function removeRow(removeNum) {
				var row = document.getElementById("tr" + removeNum);
				row.parentNode.removeChild(row);
				rowCount--;

				document.getElementById("numberOfCourses").value = rowCount;

				var id;
				var j = 1;

				for (i = 1; i <= rank + 1; i++) {

					if (i != removeNum) {
						id = "rank" + i;
						try {
							document.getElementById(id).value = j;
							document.getElementById(id).setAttribute("name", "course" + j + "Rank");
							document.getElementById("test" + i).setAttribute("name", "course" + j);
							j++;

						} catch (err) {

						}
					}
				}
			}
		</script>
	</body>

	</html>
