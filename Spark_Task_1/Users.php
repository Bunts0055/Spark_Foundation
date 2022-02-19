<!DOCTYPE html>
<html lang="en">
<head>
    <title>All users</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>

<body>
<section>
  <!-- Navigation bar -->
  <header>
    <a href="http://localhost:8080/Task1/MainPage.php" class="logo"><- Home</a>
        <div class="toggle"></div>
        <ul class="navigation">
           <li><a href="#" class="active">View Customers</a></li>
           <li><a href="http://localhost:8080/Task1/Transfer.html">Transfer money</a></li>
           <li><a href="http://localhost:8080/Task1/Histroy.php">History</a></li>
        </ul>
  </header>

<!-- Building connection with mysql database -->
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password,"mno_bank");

    $sql = "SELECT * FROM all_users";
    $result = $conn->query($sql);

    echo "<table>";
            echo "<tr>";
            echo "<th>User ID</th>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Balance</th>";
            echo "</tr>";
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["User_ID"] . "</td><td>" . $row["NAME"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Balance"] . "</td></tr><br>";    
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