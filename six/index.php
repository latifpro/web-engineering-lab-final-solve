<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
	<title>My website</title>
</head>

<body>

	<div>
		Hello, <?php echo $user_data['user_name']; ?>
	</div>
	
	<h1>This is the home page</h1>
	<a href="logout.php">Logout</a>

</body>

</html>