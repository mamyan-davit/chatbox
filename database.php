<?php

	// Connect
	$connection = mysqli_connect('localhost', 'root', 'mher', 'chatbox');
	
	// Test
	if (mysqli_connect_errno()) {
		die("Connection to database failed! " . mysqli_connect_errno());
	}
?>