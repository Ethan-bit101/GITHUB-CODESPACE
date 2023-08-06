<html>
    <head>
        <style>
            
        </style>
    </head>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username =$_POST['username'];
        $password=$_POST['password'];

        if($username === "Human_Weeb101" && $password === "Programmingislife2022"){
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