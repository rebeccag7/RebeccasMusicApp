<?php
if(isset($_POST['loginButton'])) {
	// Login button was pressed.
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	// Login
	$result = $account->login($username, $password);

	if ($result == true) {
		header("Location: index.php");
	}
}
?>