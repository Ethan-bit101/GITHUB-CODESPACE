<?php
 session_start();
 $cookie_name="user";
 $cookie_value = $_SESSION['username'];
 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 
 if(!isset($_COOKIE[$cookie_name])){
    echo "<script>window.alert('Welcome! $cookie_value')</script>";
 }else
    echo "<script>window.alert('Welcome Back! $cookie_value')</script>";
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="designed-store.css" />
    <title>Sign Up</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<header>
    <div class="rightnav">
        <div id="profile">
            <div class="dropdown">
                <img onclick="myFunction()" class="dropbtn" src="profile-user.png">
                <div id="myDropdown" class="dropdown-content">
                    <div class="hellocontent">
                        <p><?php echo "Hello " .$_SESSION ['username'];
                            echo "<hr>";?>
                    </div>
                    <a href="#">Account</a>
                    <a href="profile-user.php">Profile</a>
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
            <a href="addtocart.php">
                <img src="cart.png">
            </a>
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
    <?php
// Generate a random promo code between 1 and 25
$promoCode = array("Ethan is Handsome","I am Ethan", "I am smart");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered promo code from the form
    $enteredCode = $_POST['promoCode'];
    
    // Check if the entered code matches the generated promo code
    if ($enteredCode == $promoCode) {
        echo "Invalid Promo-code";
    } else {
        echo '<div class="echoed-promo">
                Congratulations! Your shopping has entered a state of promo!</div>';
    }
}
?>

    <form method="POST" action="">
        <div class="promo-code">
            <label for="promoCode">Enter Promo Code:</label>
            <input type="text" name="promoCode" id="promo" required>
            <button type="submit">Submit</button>
        </div>
    </form>
    <div class="container">
        <img src="application.png" alt="Application Icon">
        <div class="dropdown1">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Categories</a></li>
            </ul>
        </div>
    </div>
    <div class="daynight">
        <img src="">
    </div>
</header>

<body>

    <section>
        <form method="GET" action="">
            <table>
                <tr>
                    <th>
                        <h3>Product</h3>
                    </th>
                    <th>
                        <h3>Price</h3>
                    </th>
                    <th>
                        <h3>Quantity:</h3>
                    </th>
                    Category
                    </th>
                    <th>
                        <h3>Date:</h3>
                    </th>
                    <th>
                        <h3>Description:</h3>
                    </th>
                    <th>
                        <h3>Product Code</h3>
                    </th>
                    <th>
                        <h3>Product ID</h3>
                    </th>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        </form>
    </section>
    <div class="hrstyle"></div>
    <footer>
        <div class="about">
            <div class="aboutus">
                <h2>About Us</h2>
                <p>Sari Sari Store is a first online store. <br>It makes is easy and convenient for<br>
                    everyone to shop for their essentials <br>from their trusted Filipino brands<br> anywhere,
                    anytime
                </p>
            </div>
            <div class="links">
                <br>
                <h2>Quick links</h2>
                <p>Term & Condition</p>
                <p>Privacy and Policy</p>
                <p>Cookies Policy</p>
                <p>Contact Us</p>
                <p>Terms of Service</p>
                <p>Refund Policy</p>
                <p>Shipping and Delivery</p>
            </div>
            <div class="helping">
                <h2>Help Formation</h2>
                <p>FAQ's</p>
                <p>Contact Us</p>
            </div>
            <div class="helpingicons">
                <input type="email" value="Enter your Email Address">
                <div class="fb">
                    <img src="fb.png">
                </div>
                <div class="twitter">
                    <img src="icons8-twitter-squared-100.png">
                </div>
            </div>
        </div>
    </footer>
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
const appImage = document.getElementById("appImage");
const dropdown = document.querySelector(".dropdown1");

appImage.addEventListener("click", () => {
    dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
});
</script>

</html>