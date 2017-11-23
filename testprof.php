<?php
	include 'session.php';
	include 'nav.php';
	if ($login_type=='TA Applicant')
	{
		?>
			<h1>You are not authorized to view this page.</h1>
		<?php
			exit();
	}
?>

<HTML>
<head>
		<title>Test Admin and Prof Page</title>
	</head>
	<body>
		<h1>Test Admin and Professor Page</h1>
	</body>
</HTML>