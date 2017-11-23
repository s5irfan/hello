<?php
	include 'session.php';
	include 'nav.php';
	if ($login_type !='Admin')
	{
		?>
			<h1>You are not authorized to view this page.</h1>
		<?php
			exit();
	}
?>

<HTML>
<head>
		<title>Test Admin Page</title>
	</head>
	<body>
		<h1>Test Admin</h1>
	</body>
</HTML>