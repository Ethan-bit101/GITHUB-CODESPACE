<!DOCTYPE html>
<html>
<head>
    <title>Output Page</title>
    <style>
aside {
    float: left;
    border: 1px solid black;
    position: relative;
}

ul, li, a {
    list-style-type: none;
}

li a {
    text-decoration: none;
    color: black;
}

li {
    font-size: larger;
    padding: 10px;
    margin-left: -30px;
}
    </style>
</head>
<body>
    <?php
    // upload.php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if file is uploaded successfully
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image'];
            
            // Define a directory to store uploaded images
            $uploadDir = 'uploads/';
            
            // Generate a unique file name to prevent overwriting
            $fileName = uniqid() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($image['tmp_name'], $uploadDir . $fileName)) {
                echo 'Image uploaded successfully!';
            } else {
                echo 'Image upload failed.';
            }
        } else {
            echo 'No image uploaded.';
        }
    }
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Retrieve the submitted form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the username and password are correct
        if ($username === "admin" && $password === "password") {
            echo "<h2>Welcome, $username!</h2>";
        } else {
            echo "<h2>Invalid username or password. Please try again.</h2>";
        }
    } else {
        echo "<h2>Please submit the login form.</h2>";
    }




    
    ?>

    <aside>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">My store</a></li>
            <li><a href="#">My account</a></li>
            <li><a href="#">Add to cart</a></li>
            <li><a href="#">What's new</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="#">FAQ's</a></li>
            <li><a href="#">Log out</a></li>
        </ul>
    </aside>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Upload">
</form>
    <h1>Dashboard</h1>
    <p>Order-cart</p>
    <p>Pending</p>
    <p>Delivered</p>
</body>
</html>
