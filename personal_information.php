<!DOCTYPE html>
<html>
    <head>

    </head>
    <?php
    $username="root";
    $server="localhost";
    $password="";
    //echo Personal Information:database
    $Database="e_commerceDB";
    //Create connection
        $conn =new mysqli($server,$username,$password);
    //Check Connection
    if($conn -> connect_error){
        die("Connection failed: ".mysql_connect_error());
    }echo "Connected Successfully<br>";
    //Create and check database
    $query="Create database if not exists ".$Database;
    
    if($result =mysqli_query($conn, $query)){
        echo $Database.
        "Successfully Created.<br>";
    }else "ERROR: ".mysqli_error($conn);
    $conn=new mysqli($server,$username,$password,$Database);
    
    //Create table database
    $query = "Create table if not exists user(
		first_name varchar(10) NOT NULL,
		last_name varchar(15) NOT NULL,
		contact_number varchar(25) NOT NULL,
        Address varchar(255) NOT NULL,
        email_address varchar(25) NOT NULL,
        username varchar(25) NOT NULL,
        password varchar(25) NOT NULL
		)";

        $result =mysqli_query($conn, $query);

        if($result){
            echo    "Table user has been successfully created.<br>";
        }else{
            echo"ERROR: ".mysqli_error($conn);
        }
        //Insert data into database
        $first_name="John Ethan";
        $last_name="Dela Cruz";
        $contact_number="09xx-xxx-xxx";
        $address_="xxxxxxxxxxxxxxx";
        $email_address="ethandelacruzxxx@xxx.com";
        $username="ethan-bit101";
        $password="<PASSWORD>";

       mysqli_close($conn);
    ?>
    <form method="POST">
	<h1>Personal Information</h1>
	<p>First name: <input type="text" placeholder="First name" echo 
    $first_name;?></p>
    <p></p>
	</form>
</html>
