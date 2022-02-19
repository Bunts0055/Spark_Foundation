<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer money</title>
    <link rel="stylesheet" href="Main.css">
</head>
<body>
  <section>
    <!-- Navigation bar -->
    <header>
        <a href="#" class="logo">MNO Bank of India</a>
        <div class="toggle"></div>
        <ul class="navigation">
           <li><a href="#" class="active">Home</a></li>
           <li><a href="#AboutUs">About Us</a></li>
           <li><a href="#Subscribe">Subscribe</a></li>
        </ul>
    </header>
    <div class="info">
        <!-- Link to Users.php file -->
        <img src="https://crbechervaise.files.wordpress.com/2015/12/tips-to-turn-potential-customers-into-real-customers.jpg" alt="View All customers" class='icon'>
        <a href="http://localhost:8080/Task1/Users.php"><h2><br>View all customers</h2></a>
        <h3><br>With a customer base all over the world, our bank has around 1,00,000 customers till date.<br><br> Here, you can view the list of all users currently registered with us. </h3>
        </div>
        <div class="info">
        <!-- Link to transfer.html -->
        <img src="https://moneymint.com/wp-content/uploads/2020/12/20-Best-Money-Transfer-Apps-or-Wallets-In-India.jpg" alt="Transfer money" class='icon'>
        <a href="http://localhost:8080/Task1/Transfer.html"><h2><br>Transfer Money</h2></a>
        <h3><br>You are just a few clicks away from making a bank transaction! <br><br> Our company makes the process of tranferring money really easy and quick.</h3></div>
        <div class="info">
        <!-- Link to History.php -->
        <img src="https://cdn1.vectorstock.com/i/1000x1000/22/50/transaction-history-rgb-color-icon-vector-33392250.jpg" alt="Transfer money" class='icon'>
        <a href="http://localhost:8080/Task1/Histroy.php"><h2><br>Transaction History</h2></a>
        <h3><br>We keep the records of all transactions that take place through our bank safe. <br><br>Here you can check all the transactions that took place in the past one month.  </h3>
    </div>
  </section>
  <!-- "About Us" section -->
  <section>
    <!-- Navigation bar -->
    <header id="AboutUs">
        <a href="#" class="logo">MNO Bank of India</a>
        <div class="toggle"></div>
    <ul class="navigation">
        <li><a href="#">Home</a></li>
        <li><a href="#AboutUs" class="active">About Us</a></li>
        <li><a href="#Subscribe">Subscribe</a></li>
    </ul>
    </header>
    <div class="info">   
         <!--Main content for the webpage  -->
        <img src="https://d28wu8o6itv89t.cloudfront.net/images/bankjpg-1591875524478.jpeg" alt="View All customers" class='icon'><br><br>
        <h2><u>Our Vibe- </u></h2><br>
        <h3>We dream to take the concept of<br> e-banking to new heights </h3>
        <br><h2><u> Our Mission- </u></h2><br>
        <h3>To make the experience of online banking seemless </h3>
    </div>    
  </section>
  <!-- "Subscribe" section -->
  <section>
    <header id="Subscribe">
        <a href="#" class="logo">MNO Bank of India</a>
        <div class="toggle"></div>
    <ul class="navigation">
        <li><a href="#">Home</a></li>
        <li><a href="#AboutUs">About Us</a></li>
        <li><a href="#Subscribe" class="active">Subscribe</a></li>
    </ul>
    </header>
    <div class="info">
        <br><br><h2><u>SUBSCRIPTION </u></h2><br><br>
        <h3>Get updates of investment schemes, mutual funds and much more!<br><br>It helps you stay tuned with the ever-growing world.. </h3><br><br><br>
        <!-- Form to input emails -->
        <form action="Subscribe.php" method="POST">
            <div id="form"><label><h2>Enter e-mail address: </label><br>
            <input type="text" name="email" size="30" required><br><br>
            <button>Proceed</button></h2>        
            </div>
        </form>  
    </div>
  </section>
</body>
</html>