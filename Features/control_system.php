<html>
    <?php
// Connect to the database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "control_system";
$conn = new mysqli($server, $username, $password, $dbname);
if($conn -> connect_error){
    die("Connected Failed: ".mysql_connect_error());
}
echo "Connected Successfully<br>";
$query="Create database if not exists".$control_system;
if($result =mysqli_query($conn,$query))
{
     echo $control_system. "successfully created.<br>";
}
$query="Create database if not exists".$control_system;
if($result=mysqli_query($conn,$query)){
    echo $control_system." Successfully created.<br>";
}else{
    echo"ERROR:".mysqli_error($conn);
}
$conn=newmysqli($server,$username,$password,$dbname);
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve scanned barcode
    $barcode = $_POST["barcode"];

    // Fetch product details
    $sql = "SELECT * FROM products WHERE barcode = '$barcode'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $category = $row["category"];
        $price = $row["price"];

        // Update category expenses
        $updateSql = "UPDATE expenses SET total = total + $price WHERE category = '$category'";
        $conn->query($updateSql);
    }
}

// Display expenses
$sql = "SELECT category, total FROM expenses";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Category: " . $row["category"] . ", Total Expenses: " . $row["total"] . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
</html>