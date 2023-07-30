<html>
	<head>
		<title>
			Sample Connection
		</title>
	</head>
	<?php
		echo "Hello World!";
		$username = "root";
		$server = "localhost";
		$password = "";
		$dbase = "movies_db";
		$dbase2 = "movies2";

		//create connection
		$conn = new mysqli($server, $username, $password);

		//check connection
		if($conn -> connect_error){
			die("Connection failed: ".mysql_connect_error());
		}
		echo "Connected Successfully<br>";

		// create and check database
		$query = "Create database if not exists ".$dbase2;

		if($result = mysqli_query($conn, $query)){
			echo $dbase2." successfully created.<br>";
		}else{
			echo "ERROR: ".mysqli_error($conn);
		}

		$conn = new mysqli($server, $username, $password, $dbase2);

		// create table to database
		$query = "Create table if not exists user(
		user_id varchar(10) PRIMARY KEY,
		username varchar(15) NOT NULL,
		email varchar(25) NOT NULL,
		phone_number varchar(12) NOT NULL
		)";

		$result = mysqli_query($conn, $query);

		if($result){
			echo "Table user has been successfully created.<br>";
		}else{
			echo "ERROR: ".mysqli_error($conn);
		}

		// insert data
		$user_id = "U-0002";
		$username = "ethanXXX";
		$email = "ethan@gmail.com";
		$phone_number = "+63900033333";

		// $query = "Insert into user (user_id, username, email, phone_number) values (
		// 	'".$user_id."',
		// 	'".$username."',
		// 	'".$email."',
		// 	'".$phone_number."'
		// )";

		// $result = mysqli_query($conn, $query);
		// if ($result) {
		// 	echo "User has been successfully added";
		// }else{
		// 	echo "ERROR: ".mysqli_error($conn);
		// }

		// delete User
		$query = "Delete from user where user_id = '".$user_id."'";

		$result = mysqli_query($conn, $query);
		if ($result) {
			echo "User ".$user_id." has been successfully deleted";
		}else{
			echo "ERROR: ".mysqli_error($conn);
		}

		mysqli_close($conn);
	?>

</html>