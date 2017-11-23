<?php 
include ("includes/db-connection.php") ;
include ("session.php");
///////////////////////////////////////////////////////////
//        INSERT QUERY
///////////////////////////////////////////////////////////
// issues:
// userID - need to integrate with team 3 to get logged in userID


$qry = "SELECT MAX(`TERM`) FROM `course_section`";
$result = mysqli_query($todoAppMySQLConnection,$qry);
$term = mysqli_fetch_array($result) ;


$userID = $user_check ;
$appTerm = $term[0] ;
$appDate =  date('Y-m-d H:i:s');
$studentID = $_POST['studentID'] ;
$lastName = $_POST['lastName'] ;
$firstName = $_POST['firstName'] ;
$questID = $_POST['questID'] ;
$userEmail = $_POST['email'] ;
$phoneNumber = $_POST['phone'] ;
$citizenship = $_POST['citizenship'] ;
$permitExpiry = $_POST['permitExpiryDate'] ;
$department = $_POST['department'] ;
$currentProgram = $_POST['currentProgram'] ;
$fullTimePartTime = $_POST['fullPartTime'] ;
$isFullTime ;
$isPartTime ;
$expectations = $_POST['expectations'] ;
$numberOfCourses = $_POST['numberOfCourses'] ;

$courses = array() ;
$ranks = array () ;


for ( $i = 1 ; $i <= $numberOfCourses  ; $i++)
{
$courses[] = $_POST['course'.$i] ;
$ranks[] = $_POST['course'.$i.'Rank'] ;
}


$coursesApplied = '{' ;
for ($i = 0 ; $i < count($courses) ; $i++)
{
	if ( $i != count($courses) - 1 ) {
	$coursesApplied .= $ranks[$i].':'.$courses[$i].',';
	}
	else {
		$coursesApplied .= $ranks[$i].':'.$courses[$i];
	}
}
$coursesApplied .= '}' ;

$pvsWinter = $_POST['previousWinter']; 
$pvsSpring = $_POST['previousSpring'];
$pvsFall = $_POST['previousFall'];

$nextAcademicTerm = $_POST ['nextTerm'] ;
$relevantCourses = $_POST['relevantCourses'] ;
$relaventExp = $_POST['otherExperience'] ;
//problem with full time / part time studies

if ($fullTimePartTime == "fullTime")
{
	$isFullTime  = 1;
	$isPartTime  = 0;
}
else
{
	$isFullTime  = 0;
	$isPartTime  = 1;
}

$query = "INSERT INTO form (USER_ID, APPLICATION_TERM, STUDENT_ID, LAST_NAME, FIRST_NAME, UW_USER_ID, EMAIL, PHONE, CITIZENSHIP, PERMIT_EXPIRY, DEPARTMENT, CURRENT_PROGRAM, IS_FULL_TIME, IS_PART_TIME, EXPECTATIONS, NEXT_ACADEMIC_TERM, TA_POS_PREV_WINTER, TA_POS_PREV_SPRING, TA_POS_PREV_FALL, RELEVANT_COURSES, COURSES_APPLIED, RELEVANT_EXPERIENCE, APPLICATION_DATE, GA_COMMENTS, GA_VALIDATION, ACCEPT_REJECT) VALUES('$userID','$appTerm','$studentID','$lastName','$firstName','$questID','$userEmail','$phoneNumber','$citizenship','$permitExpiry','$department','$currentProgram','$isFullTime','$isPartTime','$expectations','$nextAcademicTerm','$pvsWinter','$pvsSpring','$pvsFall','$relevantCourses','$coursesApplied','$relaventExp','$appDate','','','')" ;

if (mysqli_query($todoAppMySQLConnection, $query)) {
	include ("includes/integrate_downstream.php") ;
    echo "<a href='welcome.php'>Your application has been successfully received!</a>";
} else {
    echo "Error inserting query: " . mysqli_error($todoAppMySQLConnection);
}

?>