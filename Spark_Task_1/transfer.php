<?php

    $Sender_Name=$_POST['sender'];
    $Receiver_Name=$_POST['receiver'];
    $Amount=$_POST['amount'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $conn = mysqli_connect($servername, $username, $password,"mno_bank");

        mysqli_query($conn,"update all_users set Balance=Balance-$Amount where Name='$Sender_Name'");
        mysqli_query($conn,"update all_users set Balance=Balance+$Amount where Name='$Receiver_Name'");

        $sql = "insert into transaction_history(SNo, Sender_Name, Receiver_name, Amount, Date) values(0, '$Sender_Name', '$Receiver_Name', $Amount, Now())";
          
        if ($conn->query($sql) === TRUE) {
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          } 
        $conn->close();
?>

<html>
  <head>
    <script>
      // Show a dialog box and redirect to History.php
      alert("Transaction successful");
      window.location.href="http://localhost:8080/Task1/Histroy.php";
    </script>
  </head>
</html>