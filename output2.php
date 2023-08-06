<html>
    <head>
        <title>Signup Form</title>
    </head>
    <body>
        <form method="POST" action="output2.php">
            <h2>Personal Information</h2>
            First Name: <input type="text" name="firstname" placeholder="First Name" required><br>
            Last Name: <input type="text" name="lastname" placeholder="Last Name" required><br>
            Contact no.# <input type="text" name="contact" placeholder="Contact no.#" required><br>
            Address: <input type="text" name="address" placeholder="Address" required><br>
            <h2>Account Information</h2>
            Email Address: <input type="text" name="email" placeholder="Email Address" required><br>
            Username: <input type="text" name="username" placeholder="username" required><br>
            Password: <input type="password" name="password" placeholder="password" required><br>
            Confirm Password: <input type="password" name="confirm" placeholder="Confirm password" required><br>
            User Type: <input type="text" name="usertype" placeholder="User Type" required><br>
            <p><a href="#">Terms & Condition</a></p><br>
            <label for="refund-checkbox">
                <input type="checkbox" id="refund-checkbox"> NO REFUND
            </label>
            <label for="agree-checkbox"><br>
                <input type="checkbox" id="agree-checkbox"> I AGREE
            </label><br>
            <input type="submit" name="btnSignUp">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "root";
            $server = "localhost";
            $password = "";
            $dbase = "Signup";
            
            // Create connection
            $conn = new mysqli($server, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Create and check database
            $query = "CREATE DATABASE IF NOT EXISTS " . $dbase;

            if ($conn->query($query) === TRUE) {
                $conn = new mysqli($server, $username, $password, $dbase);
                
                // Create table in database
                $query = "CREATE TABLE IF NOT EXISTS user (
                    firstname VARCHAR(10) NOT NULL,
                    lastname VARCHAR(10) NOT NULL,
                    contact VARCHAR(12) PRIMARY KEY,
                    address VARCHAR(20) NOT NULL,
                    email VARCHAR(25) UNIQUE,
                    username VARCHAR(15) NOT NULL,
                    password VARCHAR(12) NOT NULL,
                    usertype VARCHAR(10)
                )";
                
                if ($conn->query($query) === TRUE) {
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $contact = $_POST['contact'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $usertype = $_POST['usertype'];
                    $confirm = $_POST['confirm'];

                    // Validation of fields
                    // Check if the password entered is equal to the confirm password
                    if ($password != $confirm) {
                        echo "Confirm password does not match the supplied password";
                    } else {
                        $query = "INSERT INTO user (firstname, lastname, contact, address, email, username, password, usertype)
                            VALUES (
                                '$firstname',
                                '$lastname',
                                '$contact',
                                '$address',
                                '$email',
                                '$username',
                                '$password',
                                '$usertype'
                            )";
                            
                        if ($conn->query($query) === TRUE) {
                            echo "User has been successfully added";
                        } else {
                            echo "ERROR: " . $conn->error;
                        }
                    }
                } else {
                    echo "ERROR: " . $conn->error;
                }
            } else {
                echo "ERROR: " . $conn->error;
            }

            $conn->close();
        }
        ?>
    </body>
</html>
