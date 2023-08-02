<?php                                                   
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "admin" && $password === "password") {
        echo "<h2>Welcome, $username!</h2>";
    } else {
        echo "<h2>Invalid username or password. Please try again.</h2>";
    }
} else {
    echo "<h2>Please submit the login form.</h2>";
}



?>