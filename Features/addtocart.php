<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Website-design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <script src="behavior.js"></script>
    <title></title>
</head>
<?php
$username="root";
$server="localhost";
$password="";
$dbase="products";
//Create connection
$conn=new mysqli($server,$username,$password);
//Check Connection
if($conn -> connect_error){
    die("Connection failed:".mysqli_connect_error());
}
echo "Connected Successfully<br>";
//Create and check database
if($result=mysqli_query($conn, $query)){
    echo $dbase."Successfully Created<br>";
}else{
    echo"ERROR: ".mysqli_error($conn);
}
$conn=new mysqli($server,$username,$password,$dbase);
$query="Create table if not exists user{
    user_id varchar(10) PRIMARY KEY,

}"






?>
<header>
    <nav>
        <ul class="nav-left">
            <li class="logo">Sari Sari<br> Store</li>
            <li><input type="text" placeholder="Search"></li>
            <button class="category">Category</button>
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
                <img src="C:\xampp\htdocs\database\Features\images\magicsarap.webp">
                <figcaption>Magic Sarap</figcaption>
                <div id="counter">
                    <button id="decrease-button">-</button>
                    <span id="counter">0</span>
                    <button id="increase-button">+</button><br>
                    <button id="add-to-cart">Add to Cart</button>
                    
                    
                  </div>
                </div>
            </figure>
            
        </article>
    </section>
    <footer>

    </footer>
</main>
</body>
</html>
