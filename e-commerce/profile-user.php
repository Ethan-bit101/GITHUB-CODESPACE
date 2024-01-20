<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>E-commerce Store</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: whitesmoke;
    }

    header {
        position: relative;
        background-color: white;
        color: black;
        padding: 20px;

        height: 50px;
    }

    nav {
        background-color: white;
        font-size: small;
        padding: 10px;
        border: 1px solid black;
        text-align: center;
        border-bottom: 1px solid black;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 130px;
    }

    nav ul li a {

        color: black;
        text-decoration: none;
    }

    section.banner {
        background-color: gray;
        margin-top: 30px;
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
        padding: 20px;
        text-align: center;
    }

    .product {
        display: inline-block;
        margin: 20px;
    }

    .product img {
        width: 200px;
        height: 200px;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .rightnav {
        float: right;
        position: relative;
    }

    .logo img {
        display: block;
        border: 1px solid black;
        background-color: red;
        width: 70px;
        position: absolute;
        top: 7px;
        border-radius: 30px;
    }


    #search,
    .search-container,
    #search-button img,
    #search-button,
    .promo-code {
        display: inline-block;
        left: 260px;
        top: -46px;
        position: inherit;
    }

    .location {
        font-size: xx-small;
        width: 110px;
        position: inherit;
        left: 110px;
    }

    #signup {
        background-color: red;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #signup:hover {
        background-color: darkred;
    }

    #login {
        background-color: green;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #login:hover {
        background: darkgreen;
    }

    #profile img,
    #bell img,
    #cart img {
        width: 24px;
        display: inline-block;
    }

    #profile {
        position: inherit;
        top: -13px;
    }

    #bell {
        position: inherit;
        top: -53px;
        left: -50px;
    }

    .dropbtn {
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }


    .dropdown {
        float: right;
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        font-family: fantasy;
        font-size: small;
        border-radius: 10px;
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        right: 0;
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    #cart img {
        display: inline-block;
        position: relative;
        left: -120px;
        top: -85px;
        width: 35px;
    }

    search input[type=text] {
        width: 130px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
        width: 100%;
    }

    .search-container {
        position: relative;

    }

    #search-input {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        width: 500px;
        border-radius: 4px 0 0 4px;
    }

    #search-button {
        padding: 8px 16px;
        background-color: white;
        border: 1px solid black;
        color: white;
        position: inherit;
        top: 0px;
        height: 36px;
        left: 516px;

        position: absolute;
        border-radius: 0 4px 4px 0;
        cursor: pointer;
    }

    #search-button img {
        width: 25px;
        position: inherit;
        left: 4px;
        top: 5px;
    }

    .bottomnav a {
        margin-top: 10px;
        font-size: small;
        margin-right: 10px;
        color: black;
    }

    .promo-code {
        position: inherit;
        top: -70px;
        left: 310px;
        font-size: small;
    }

    .promo-code input[type="text"] {
        height: 12px;
        width: 107px;
    }

    * //Slide show*/

    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
        width: 700px;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 16.66%;
    }

    /* Add a transparency effect for thumbnail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    figure {
        display: inline-block;
    }

    figcaption {}

    .hellocontent {
        text-align: center;
        color: black;
        font-size: medium;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    .service figure img {
        width: 150px;
        position: relative;
        left: 400px;
    }

    aside {
        float: left
    }
    </style>
</head>


<header>
    <div class="rightnav">
        <div id="profile">
            <div class="dropdown">
                <img onclick="myFunction()" class="dropbtn" src="profile-user.png">
                <div id="myDropdown" class="dropdown-content">
                    <div class="hellocontent">
                        <p><?php $_SESSION ['username'];
                        echo "Hello " .$_SESSION ['username'];
                            echo "<hr>";?>
                    </div>
                    <a href="#">Account</a>
                    <a href="Home.php">Profile</a>
                    <a href="#">Settings</a>
                    <a href="activity_log.php">Activity log</a>
                    <hr>
                    <a href="logout.php">Logout</a>
                    <hr>
                </div>
            </div>
        </div>
        <div id="bell">
            <img src="bell.png">
        </div>
        <div id="cart">
            <img src="cart.png">
        </div>
    </div>
    <div class="logo">
        <a href="bootstrap.php"><img src="logo.png"></a>
    </div>
    <div class="location">
        <?php
              $_SESSION['address'] = "Lucky Heart Village <br>Hacienda Salamat,<br>Zone 1, Cadlan,<br> Pili, Cam Sur, South Luzon";
             if (!empty($_SESSION["address"])) {
                  echo $_SESSION["address"];
              } else {
                  echo "Your location is not found";
             // };
              }
              ?>
    </div>
    <div class="search-container">
        <input type="text" id="search-input" placeholder="Search...">
        <button type="button" id="search-button">
            <img src="search (1).png">
        </button>
        <div class="bottomnav">
            <a href="#">Follow us</a>
            <a href="#">Notification</a>
            <a href="#">Contact us</a>
            <a href="#">English</a>
            <a href="#">Donate</a>
        </div>
    </div>

    <div class="promo-code">
        <label for="promo">Promo-code:</label>
        <input type="text" id="promo" placeholder="Enter promo code">
    </div>

</header>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="#">Contact</a></li>

    </ul>
</nav>

<body>

    <section>
        <fieldset>
            <h1>Welcome back!
                <?php echo  $_SESSION['username'];?>
            </h1>
            <h2>My Account</h2>
            <p><a href="#">Edit your account information</a></p>
            <p><a href="#">Change your password</a></p>
            <p><a href="#">Modify your address book entries</a></p>
            <p><a href="#">Modify your wish list</a></p>
            <h2>My Orders</h2>
            <p><a href="#">View your order history</a></p>
            <p><a href="#">Subscriptions</a></p>
            <p><a href="#">Downloads</a></p>
            <p><a href="#">Your Reward Points</a></p>
            <p><a href="#">View your return requests</a></p>
            <p><a href="#">Your transactions</a></p>
        </fieldset>
    </section>
</body>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
</script>

</html>