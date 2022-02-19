<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<section>
    <!-- Navigation bar -->
    <header>
    <a href="http://localhost:8080/Task1/MainPage.php" class="logo"><- Home</a>
        <div class="toggle"></div>
        <ul class="navigation">
           <li><a href="http://localhost:8080/Task1/Users.php">View Customers</a></li>
           <li><a href="http://localhost:8080/Task1/Transfer.html">Transfer money</a></li>
           <li><a href="#" class="active">History</a></li>
        </ul>
    </header>

<!-- Building connection with mysql database -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
   
    $conn = mysqli_connect($servername, $username, $password,"mno_bank");

    $sql = "SELECT * FROM Transaction_history";
    $result = $conn->query($sql);

    echo "<table>";
            echo "<tr>";
            echo "<th>SNo</th>";
            echo "<th>Sender Name</th>";
            echo "<th>Receiver Name</th>";
            echo "<th>Amount</th>";
            echo "<th>Date</th>";
            echo "</tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["SNo"] . "</td><td>" . $row["Sender_Name"] . "</td><td>" . $row["Receiver_Name"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Date"] . "</td></tr><br>";    
        }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</section>
</body>
</html>