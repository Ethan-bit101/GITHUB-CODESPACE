<html>
    <head>
        <style>
            
        </style>
    </head>
    <form method="GET" action="output2.php">
        <input type="text" name="username" required>
        <input type="password" name="password" required>


<a href="output2.php">Back</a>




    </form>

        <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    //database instance
    $username="root";
    $server="localhost";
    $password="";
    $dbase="Signup";

    //Create connection
    $conn =new mysqli($server, $username, $password);

    //Check Connection
    if($conn -> connect_error){
        die("Connection failed: ".mysqli_connect_error());
    }

    //Create and check database
    $query = "Create database if not exists ".$dbase;

    if($result =mysqli_query($conn, $query)){
        $conn = new mysqli($server, $username, $password, $dbase);
    } else{
        echo "ERROR ".mysqli_error($conn);
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username =$_POST['username'];
        $password=$_POST['password'];

        if($username && $password){
            echo "<h1>Welcome, Human_Weeb 101";
        } else{
            echo "<h1>Invalid username or password. Please try again</h1>";
        }
    }else{
        echo "<h2>Please submit the login form.</h2>";
    }
}
    
    ?>
</html>