<!DOCTYPE html>
<html>

<head>
    <title>Insert Data into MySQL Database</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        text-align: center;
        font-size: 24px;
    }

    form {
        width: 500px;
        margin: 0 auto;
    }

    input {
        width: 200px;
        padding: 10px;
        border: 1px solid #ccc;
    }

    button {
        background-color: #008CBA;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
    }
    </style>
</head>

<body>
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
    // Create a new record
    $sql = "INSERT INTO users (id, username, password, usertype) VALUES ('John Doe', 'johndoe@example.com',
    'password123', 'admin');";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
    ?>
    <h1>Insert Data into MySQL Database</h1>
    <form action="insert.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Insert">
    </form>
</body>

</html>