<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }

    button {
        padding: 10px 20px;
    }

    p {
        text-align: center;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="usertype" required>
                <option value="user" name="user">User</option>
                <option value="admin" name="admin">Admin</option>
            </select>
            <button type="submit" name='signup'>Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <style>
    /* CSS styles here */
    </style>
</head>

<body>
    <!-- HTML code here -->
    <div class="container">
        <!-- Sign Up form here -->
    </div>
</body>
<?php
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
// SQL query to create the 'users' table
$sql_create = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
   username VARCHAR(255) NOT NULL,
   password VARCHAR(255) NOT NULL,
   usertype VARCHAR(50) NOT NULL
)";
// Execute the query
if ($conn->query($sql_create) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// Check if the signup form is submitted
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
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
}
$conn->close();
?>

</html>