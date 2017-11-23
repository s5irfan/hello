<!DOCTYPE html>
<html>
	<style>
		body {
			margin: 0;
		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}
		
		li {
			float: left;
			border-right:1px solid #bbb;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			font-size: 16px;
			font-family: "Times New Roman", Times, serif;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #111;
			color: white;
			display: block;
		}

		.active {
			background-color: #FFFF00;
			color: black;
			display: block;
		}
	</style>
	
	<style>
		.dropbtn {
			background-color: #333;
			color: white;
			padding: 14px 16px;
			border: none;
			cursor: pointer;
			font-size: 16px;
			font-family: "Times New Roman", Times, serif;
		}

		.dropdown {
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
		}

		.dropdown-content b {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			font-size: 12px;
			font-family: "Times New Roman", Times, serif;
		}

		.dropdown-content b:hover {background-color: #c0c0c0}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #111;
		}
	</style>
	
	<body>
			<ul>
				<li><a class="active" href="welcome.php">Home</a></li>
				<li><a href="#">Profile - Under Construction</a></li>
				
				<li>
					<div class="dropdown">
					  <button class="dropbtn">Dropdown - Under Construction</button>
					  <div class="dropdown-content">
						<b href="#">Link 1</b>
						<b href="#">Link 2</b>
						<b href="#">Link 3</b>
					  </div>
					</div>
				</li>
				
				<li style="float:right;border-left:1px solid #bbb;"><a href="logout.php">Logout</a></li>
			</ul>
	</body>
<html>
