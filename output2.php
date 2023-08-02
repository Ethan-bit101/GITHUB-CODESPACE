<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form method="POST" action="output2.php">
            <h2>Personal Information</h2>
            First Name:<input type="text" name="firstname" placeholder="First Name" required><br>
            Last Name:<input type="text" name="lastname" placeholder="Last Name" required><br>
            Contact no.#<input type="text" name="contact" placeholder="Contact no.#" required><br>
            Address:<input type="text" name="address" placeholder="Address" required><br>
            <h2>Account Information</h2>
            Email Address<input type="text" name="email" placeholder="Email Address" required><br>
            Username<input type="text" name="text" placeholder="username" required><br>
            Password<input type="password" name="password" placeholder="password" required><br>
            Confirm Password<input type="password" name="password" placeholder="Confirm placeholder" required><br>
            User Type<input type="text" name="usertype" placeholder="User Type" required><br>
            <p><a href="#">Terms & Condition</a></p><br>
            <label for="refund-checkbox"><input type="checkbox" id="refund-checkbox">
            NO REFUND
            </label>
            <label for="agree-checkbox"><br>
                <input type="checkbox" id="agree-checkbox">
                I AGREE
            </label><br>
            <input type = "submit" name = "btnSignUp">
        </form>
        
        <?php
        if($_SERVER["REQUEST_METHOD"] =="POST")
        {
            $username="root";
            $server="localhost";
            $password="";
            $dbase="Signup";
            //Create connection
            $conn =new mysqli($server,$username,$password);

            //Check connection
            if ($conn-> connect_error){
                die("Connection failed:" .mysql_connect_error());
            }
            //Create and checkbase
            $query="Create database if not exists ".$dbase;

            if($result = mysqli_query($conn,$query)){
                $conn =new mysqli($server, $username,$password, $dbase);
            }else{
                echo"ERROR" .mysqli_error($conn);
            }
            
            //Create table to database
            $query ="create table if not exists user(
                firstname varchar(10) NOT NULL,
                lastname varchar (10) NOT NULL,
                contact varchar (12) PRIMARY KEY,
                address varchar (20) NOT NULL,
                email varchar (25) PRIMARY KEY,
                username varchar (15) NOT NULL,
                password varchar (12) NOT NULL,
                usertype varchar (10) PRIMARY KEY
            )";

            $result =mysqli_query($conn,$query);
            if($result){
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $contact= $_POST['contact'];
                $address=$_POST['address'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $usertype=$_POST['usertype'];
                $confirm=$_POST['confirm'];
            

            //validation of fields
            //if the password entered is equal to the confirm password
            if($password != $confirm){
                echo "Confirm password is not matched to the supplied password";
            }else{
                $query="Insert into user(firstname,lastname,contact
                ,address,email,username,password,usertype)
                values(
                    '".$firstname."',
                    '".$lastname."',
                    '".$contact."',
                    '".$address."',
                    '".$email."',
                    '".$username."',
                    '".$password."',
                    '".$usertype."',
                )";
                $result =mysqli_query($conn,$query);
                if ($result) {
                    echo "User has been successfully added";
                } else{
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