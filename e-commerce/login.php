<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>title</title>
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
    <?php
// Set the default time zone to "Asia/Manila" for the Philippines
date_default_timezone_set('Asia/Manila');

// Get the current date and time in the Philippines
$currentDateTime = date('Y-m-d H:i:s');

// Print the current date and time in the Philippines
echo "Current Date and Time in the Philippines: " . $currentDateTime;
?>
    <div class="container">
        <h1>Login</h1>
        <?php
if (isset($error_message)) {
    echo '<p style="color: red;">' . $error_message . '</p>';
}
        ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="usertype" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" name='login'>Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
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

// Check if the login form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

   
    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND usertype = '$usertype'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, set session variables
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;
        $_SESSION['loggedIn'] = true;

        // Redirect to a protected page or perform any other desired action
        header('Location: bootstrap.php');
        exit;
    } else {
        // Authentication failed, display an error message
        echo 'Invalid username, password, or usertype';
    }
       
}
$conn->close();
?>

</html>