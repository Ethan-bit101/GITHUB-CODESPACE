<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_store";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop the 'users' table if it already exists
$sql_drop = "DROP TABLE IF EXISTS users";
$conn->query($sql_drop);

// SQL query to create the 'users' table
$sql_create = "CREATE TABLE users (
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    usertype VARCHAR(50) PRIMARY KEY
)";

// Execute the query
if ($conn->query($sql_create) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
 // SQL query to insert data into the table
 $sql = "INSERT INTO users (username, password, usertype) VALUES ('$username', '$password', '$usertype')";

 // Execute the query
 if ($conn->query($sql) === TRUE) {
     echo "Data inserted successfully";
     header("Location: login.php"); // Redirect to login.php
     exit;
 } else {
     echo "Error inserting data: " . $conn->error;
 }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <style>
    aside {
        float: left;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <aside>
        <ul>
            <li>Home</li>
            <li>Products</li>
            <li>Settings</li>
            <li>Users</li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </aside>
    <section>
        <h1>Welcome Admin <article>
                <table style="border: 1px solid black;
border-collapse: collapse;
    ">
                    <tr>
                        <th>Order Loot</th>
                        <th>Pending</th>
                        <th>Delivery</th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $_SESSION['username']
                            ?>
                        </td>
                    </tr>
                    <tr> </tr>
                </table>
            </article>
    </section>

    <?php 
    ?>