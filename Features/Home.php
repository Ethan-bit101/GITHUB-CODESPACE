<?php
$username = "root";
$server = "localhost";
$password = "";
$database = "mydatabase";

// Create Connection
$conn = new mysqli($server, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully<br>";

// Create and check database
$query = "CREATE DATABASE IF NOT EXISTS " . $database;
if ($result = mysqli_query($conn, $query)) {
    echo $database . " Successfully Created.<br>";
} else {
    echo "ERROR: " . mysqli_error($conn);
}

// Use correct database
$conn->select_db($database);

// Create table in the database
$query = "CREATE TABLE IF NOT EXISTS user (
    Types_of_foods varchar(10) PRIMARY KEY,
    Food_name varchar(20),
    Price int,
    Quantity int,
    Image varchar(100)
)";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Table user has been successfully created.<br>";
} else {
    echo "ERROR: " . mysqli_error($conn);
}

// Retrieve data from the form
$name = $_POST['name'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

// Move uploaded image to desired location
$upload_dir = "uploads/";
$target_file = $upload_dir . basename($image);
if (move_uploaded_file($image_tmp, $target_file)) {
    // Insert data into the database
    $sql = "INSERT INTO user (Food_name, Image) VALUES ('$name', '$image')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Failed to upload an image.";
}

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Website-design.css">
    <script src="behavior.js"></script>
    <title></title>
</head>
<header>
    <nav>
        <ul class="nav-left">
            <li class="logo">Sari Sari<br> Store</li>
            <li>
                <div class="search-box">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </li>
            <li><button class="category">Category</button></li>
            <div class="nav-right">
                <li>Add to cart</li>
                <li>|My account|</li>
                <li>|Log out|</li>
            </div>
        </ul>
    </nav>
</header>
<body>
<main>
    <ul class="main-nav">
        <li>Home|</li>
        <li><details><Summary>Shop|</Summary></details></li>
        <li>New Arrivals|</li>
        <li>All Products|</li>
        <li>Categories|</li>
        <li>Limited Edition|</li>
    </ul>
    <aside id="cart-items"></aside>
    <section>
        <article>
            <div class="products">
                <figure>
                    <img src="relative/path/to/magicsarap.webp">
                    <figcaption>Magic Sarap</figcaption>
                    <div id="counter">
                        <button id="decrease-button">-</button>
                        <span id="counter-value">0</span>
                        <button id="increase-button">+</button><br>
                        <button id="add-to-cart">Add to Cart</button>
                    </div>
                </figure>
            </div>
        </article>
    </section>
    <footer></footer>
</main>
</body>
</html>
