<?php
	require_once 'database.php';

	// if (isset($_POST['submit'])) {
		$user = mysqli_real_escape_string($connection, $_POST['user']);
		$message = mysqli_real_escape_string($connection, $_POST['message']);
		date_default_timezone_set('America/New_York');
		$time = date('h:i:s', time());

		if (!isset($user) || !isset($message) || $message == '' || $user == '') {
			$error="Please fill in your name and a message";
			header("Location: index.php?error=".urlencode($error));
			exit();
		}else{

			$q = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
			$result = mysqli_query($connection, $q);
			if ($result) {
				header("Location: index.php");
			}else{
				die(mysqli_error($connection));
			}
		}
	// }
?>