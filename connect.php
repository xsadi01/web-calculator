<?php
	$servername= $_POST[''];

	// Database connection
	$conn = new mysqli('localhost','root','','feedback');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, feedback) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $feedback);
		$execval = $stmt->execute();
		echo $execval;
		echo "Feedback Submit Successfully...";
		$stmt->close();
		$conn->close();
	}
?>