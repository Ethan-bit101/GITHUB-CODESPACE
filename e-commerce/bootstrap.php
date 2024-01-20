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

$promo_codes = array("ABC123", "DEF456", "GHI789");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $sql = "SELECT * FROM promo_codes WHERE code = '$promo_code' AND expiration_date > NOW()";
$result = $conn->query($sql);

  $promo_code_entered = $_POST["promo_code"];

  if (in_array($promo_code_entered, $promo_codes)) {
      // Promo code is valid, process user's request
      // ...
      echo "Promo code is valid!";
  } else {
      // Promo code is invalid, display error message
      echo "Invalid promo code. Please try again.";
  }
}

?>
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
</header>

<body>
    <section>
        <div class="card">
            <div class="welcome-content">
                <h1>Welcome to LOLA TENING'S SARI SARI-SARI STORE
            </div>

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="egg.png" style="width:50%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="egg-trays.png" style="width:50%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg-trays.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg-trays.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg-trays.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="egg-trays.png" style="width:50%">
                    <div class="text">Caption Three</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
        </div>
        <div class="service">
            <figure>
                <img src="egg.png">
                <figcaption class="service-caption">Fruits</figcaption>
            </figure>
            <figure>
                <img src="egg-trays.png">
                <figcaption class="service-caption"> Vegetables</figcaption>
            </figure>
            <figure>
                <img src="egg.png">
                <figcaption class="service-caption">Tunas</figcaption>
            </figure>
            <figure>
                <img src="egg-trays.png">
                <figcaption class="service-caption">Fresh Meat</figcaption>
            </figure>
            <figure>
                <img src="egg-trays.png">
                <figcaption class="service-caption">Fish & SeaFoods</figcaption>
            </figure>
            <figure>
                <img src="egg-trays.png">
                <figcaption class="service-caption">Recipes</figcaption>
            </figure>
            <figure>
                <img src="egg-trays.png">
                <figcaption class="service-caption">Soft Drinks</figcaption>
            </figure>
        </div>

    </section>

    <section class="banner">
        <hr style="border-style:double">
        <h2>Featured Products</h2>
        <hr style="border-style:double">
        <hr style="border-style:double">

        <div class="product">
            <form method="POST">
                <fieldset>

                    <?php
                $cartValue = 0; // Initialize the cart value

                // Check if the "Add to Cart" button is clicked
                if(isset($_POST['add_to_cart'])) {
                    // Get the current value from the cart
                    $cartValue = $_POST['cart_value'];
                
                    // Post-increment the cart value
                    $cartValue++;
                
                    // Update the cart value in your database or session variable
                    // For example, you can save it in a session variable like this:
                    $_SESSION['cart_value'] = $cartValue;
                }
                ?>
                    <figure><img src="29.webp">
                        <figcaption>
                            <label for="Peanut">Peanut</label>
                            <input type="hidden" name="Peanut">
                        </figcaption>
                        <input type="button" name="plus" value="+"></button>
                        <input type="button" name="minus" value="-"></button><br>
                        <input type="hidden" name="cart_value" value="<?php echo $cartValue; ?>">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                        <div class="cartvalue">
                            <?php echo $cartValue; ?>
                        </div>
                    </figure>
                    <figure><img src="29.webp">
                        <figcaption>
                            <label for="Peanut"><data value="50">Peanut</data></label>
                            <input type="hidden" name="Peanut">
                        </figcaption>
                        <input type="button" name="plus" value="+"></button>
                        <input type="button" name="minus" value="-"></button><br>
                        <input type="hidden" name="cart_value" value="<?php echo $cartValue; ?>">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                        <div class="cartvalue">
                            <?php echo $cartValue; ?>
                        </div>
                    </figure>
            </form>
        </div>
        </fieldset>
        <aside>
            <h5>0 Item(s) - P0.00</h3>
        </aside>
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