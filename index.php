<?php 
include("includes/config.php");

// session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header["Location: register.php"];
}
?>

<html>
<head>
	<title>Rebecca's Music App</title>
</head>
<body>
	Where the music never stops! <3
</body>
</html>