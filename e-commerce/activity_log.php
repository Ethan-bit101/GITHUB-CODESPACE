<?php
 session_start();
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
?>



<!DOCTYPE html>
<html>

<head>
    <title>Activity Log</title>
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
                        <p><?php $_SESSION ['username'];
                        echo "Hello " .$_SESSION ['username'];
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

    <form method="post">
        <label for="promo_code">Promo Code:</label>
        <input type="text" name="promo_code" id="promo_code">
        <input type="submit" value="Submit">
    </form>

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
    <table>
        <?php

        // Select all rows from the 'users'
$SQL = "select * from users";
$result = mysqli_query($conn, $SQL);

// Loop through the result and insert each row into the table
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<th>ID</th>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "<th>User type</th>";
        echo "<tr>";
      
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["username"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["password"] . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . $row["usertype"] . "</td>";
      echo "</tr>";
    }
   } else {
    echo "<tr><td colspan='3'>No results found</td></tr>";
   }
   ?>
        <tr>
            <th>ID:</th>
            <th>Usernames</th>
            <th>Password</th>
            <th>User type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
            <th>IP Address</th>
            <th>Browser</th>
        </tr>
        <tr>
            <td>
                <?php if ($row !== null) {
                     echo $row["id"]; 
                }
                 else { echo "N/A"; }?>
            </td>
        <tr>
            <td>
                <?php if ($row !== null) {
                     echo $row["id"]; 
                }
                 else { echo "N/A"; }?>
            </td>
        </tr>
        <tr>
            <td>
                <?php if ($row !== null) {
                     echo $row["id"]; 
                }
                 else { echo "N/A"; }?>
            </td>
        </tr>
        <tr>
            <td>
                <?php if ($row !== null) {
                     echo $row["id"]; 
                }
                 else { echo "N/A"; }?>
            </td>
        </tr>
        <tr>
            <td>
                <?php if ($row !== null) {
                     echo $row["id"]; 
                }
                 else { echo "N/A"; }?>
            </td>
        </tr>
        <tr>
            <td>
                <?php if ($row !== null) {
                     echo $row["id"]; 
                }
                 else { echo "N/A"; }?>
            </td>
        </tr>
</body>
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
// Close the connection
mysqli_close($conn);
?>
?>

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