<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")  {
    $server ="localhost";
    $username = "root";
    $password = "";
    $dbase ="php-store";

    include 'bootstrap.php';
    // Create Connection
    $conn = new mysqli($server, $username, $password);

    // Check Connection
    if($conn -> connect_error){
        die("Connection failed: ".mysql_connect_error());
    }
    echo "Connected Successfully<br>";
    // Create and check database
    $query = "Create database if not exists ".$dbase;

    if($result = mysqli_query($conn, $query)) {
        $conn = new mysqli($server, $username, $password, $dbase);
    // Drop the 'products' table if it already exists
    } else {
        echo "ERROR: ".mysqli_error($conn);
    }

    $conn = new mysqli($server, $username, $password, $dbase);
    // create table to database
    
    $query = "Create table if not exists Products(
        productname VARCHAR(25) NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        quantity INT(10) NOT NULL,
        category VARCHAR(25) NOT NULL,
        date int(25) NOT NULL,
        image VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        productcode VARCHAR(25) NOT NULL,
        productid VARCHAR(25) PRIMARY KEY AUTO INCREMENT,
        )";

        $result = mysqli_query($conn, $query);

        if($result) {
        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $date = $_POST['date'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $productcode = $_POST['productcode'];
        $productid = $_POST['productid'];

        if($productcode != $productid) {
            echo "code and id is not mathed!";
        } else
        {
        // SQL query to insert data into the table
        $query = "INSERT INTO Products ('productname, price,
        quantity, category, date, price, quantity, category,
        image, description, productcode, productid') 
        values (
            '".$productname."',
            '".$price."',
            '".$quantity."',
            '".$category."',
            '".$date."',
            '".$price."',
            '".$quantity."',
            '".$image."',
            '".$description."',
            '".$productcode."',
            '".$productid."',
        )";
        $result = mysqli_query($conn, $query);
        if ($result ) {
            echo "The products has been successfully added";
         } else {
            echo "ERROR: ".mysqli_error($conn);
         }
        }
    } else {
        echo "ERROR: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>