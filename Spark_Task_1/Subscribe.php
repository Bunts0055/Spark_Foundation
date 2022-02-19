<?php

    $User_email=$_POST['email'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = mysqli_connect($servername, $username, $password,"mno_bank");

        $sql = "insert into subscribers(S_No, Name) values(0, '$User_email')";
        
        if ($conn->query($sql) === TRUE) {  
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          } 
        $conn->close();
?>

<html>
  <head>
    <script>
      // Show a dialog box and redirect to home page
      alert("Subscription successful");
      window.location.href="http://localhost:8080/Task1/MainPage.php";
    </script>
  </head>
</html>