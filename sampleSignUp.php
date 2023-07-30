<html>
	<head>
		<title>
			Sample Sign Up with POST
		</title>
	</head>
	<body>
		<form method = "POST" action = "sampleSignUp.php">
			<input type = "text" name = "user_id" placeholder = "User ID" required/></br></br>
			<input type = "text" name = "username" placeholder = "Username" required/> </br></br>
			<input type = "text" name = "email" placeholder = "sample@gmail.com" required/></br></br>
			<input type = "text" name = "phoneNumber" placeholder = "Contact Number" required/></br></br>
			<input type = "password" name = "password" placeholder = "Password" required/></br></br>
			<input type = "password" name = "confirm" placeholder = "Confirm Password" required/></br></br>
			<input type = "submit" name = "btnSignUp">
		</form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            //database instance
            $username = "root";
            $server = "localhost";
            $password = "";
            $dbase = "user_db";

            //create connection
            $conn = new mysqli($server, $username, $password);

            //check connection
            if($conn -> connect_error){
                die("Connection failed: ".mysql_connect_error());
            }

            // create and check database
            $query = "Create database if not exists ".$dbase;

            if($result = mysqli_query($conn, $query)){
                $conn = new mysqli($server, $username, $password, $dbase);
            }else{
                echo "ERROR: ".mysqli_error($conn);
            }


            // create table to database
            $query = "Create table if not exists user(
            user_id varchar(10) PRIMARY KEY,
            username varchar(15) NOT NULL,
            password varchar(15) NOT NULL,
            email varchar(25) NOT NULL,
            phone_number varchar(12) NOT NULL
            )";

            $result = mysqli_query($conn, $query);

            if($result){
                $user_id =  $_POST['user_id'];
                $pword = $_POST['password'];
                $confirm = $_POST['confirm'];
                $uname = $_POST['username'];
                $email = $_POST['email'];
                $phone_number = $_POST['phoneNumber'];
                
                //validation of fields
                //if the password entered is equal to the confirm password
                if($pword != $confirm){
                    echo "Confirm password is not matched to the supplied password";
                }else{
                    $query = "Insert into user (user_id, username, email, phone_number, password) values (
                    	'".$user_id."',
                    	'".$uname."',
                    	'".$email."',
                    	'".$phone_number."',
                        '".$pword."'
                    )";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                    	echo "User has been successfully added";
                    }else{
                    	echo "ERROR: ".mysqli_error($conn);
                    }
                }
            }else{
                echo "ERROR: ".mysqli_error($conn);
            }

		mysqli_close($conn);
        }
	?>
	</body>
</html>