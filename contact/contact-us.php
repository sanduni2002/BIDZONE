<?php
// Database configuration
$host = "localhost";
$username = "root";
$password="";
$database = "iwt";

// Create a database connection
$conn = new mysqli($host, $username,$password, $database);


// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo 'Connection Successful.';
}

if(isset($_POST['submit'])) {
    $w3review = $_POST['w3review'];
    

    $query = "INSERT INTO feedback (feedback)
            VALUES ('$w3review')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data inserted successfully.";
        //header('Location: Contact us.php');

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>
            BidZone Auction
       </title>
       <link rel="stylesheet" href="contact us.css">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    </head>

    <body>

      <header class="hero">
        <img src="logo.png">
        <div class="search">
        <form action="/search" method="get">
            <input type="text" name="q" placeholder="Search...">
            <button type="submit">Search</button>
          </form>
        </div>
        <div class="language">

        <label for="language-select">Language</label>
        <select id="language-select" name="language">
          <option value="en">English</option>
          <option value="fr">French</option>
          <option value="es">Spanish</option>
         
        </select>
    </div>
    <button class="login-button">Login</button>
    <button class="signup-button">Sign Up</button>


    </header>
        <ul class="menu1">

            <li><a href="../homeNew.php">Home</a></li>
            <li><a href="../itemList.html">Item List</a></li>   
            <li><a href="../auction.html">Sell items</a></li>
            <li><a class="active" href="contact.asp">Contact Us</a></li>
            <li><a href="../help/help.html">Help</a></li>
              
        </ul>

<!-- content start -->
      <br>    
      <h1>Contact Us</h1>
      <dev class="contact">
        <div class="byphone">
          <img src="phone.png" alt="phone number">
          <p><h3>By Phone</h3></p>
          <p>Call to Us Monday to Friday, 9am to 5pm </p>
          <p>0112-345678</p>
        </div>
       
        <div class="email">
          <img src="email.jpg" alt="">
          <p><h3>Send Emails</h3></p>
          <p>Reply within a day or two </p>
          <p>bidzone@gmail.com</p>
        </div>

        <div class="chat">
          <img src="chat.png" alt="">
          <p><h3>Live Chat</h3></p>
          <p>Chat with us monday to friday, 9am to 4pm </p>
          <p>whatsapp  0712345669</p>

        </div>
      </dev> 
      
      <div class="feedback">
        <p>We would like to improve our website</p>
        <p>What is your opinion about our website...?</p>
      </div>

      <br>
      <form action="contact-us.php" method="post">
        <div class="insfeedback">
          <p>Please Leave your feedback.....</p>
          <br>
          <textarea id="w3review" name="w3review" rows="8" cols="150"></textarea>
          <input type="submit" class="subbtn" onclick="openPopup()" name="submit">
        </div>
      </form>

       
        <div class="popup" id="popup">
          <img src="tick.png">
          <h2>Thank You !</h2>
          <p>Your Feedback Successfully submited. Thanks!</p>
          <button type="okbutton" onclick="closePopup()">OK</button>
          
        </div>
       
  <script>
    let popup= document.getElementById("popup");

    function openPopup(){
      popup.classList.add("open-popup");
    }
    function closePopup(){
      popup.classList.remove("open-popup");
    }
  </script>      
<!-- content ends -->

      </div>
        <footer class="footer">
          <div class="container">
           <div class="row">
             <div class="footer-col">
                 <h4>BidZone</h4>
                 <img src="logo.png">
                 <ul class="info">
                   <li>
                     <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                     </span>
                     <span>456,Park Street,Colombo 03.<br>Sri Lanka</span>
                   </li>
                   <li>
                     <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                     <p><a href="tel:+94112548654">+94112548654</a></p>
                     <p><a href="tel:+94112548700">+94112548700</a></p>
                   </li>
                   <li>
                     <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                     <p><a href="mailto:bidzone@gmail.com">bidzone@gmail.com</a></p>
                   </li>
                 </ul>
             </div>
             <div class="footer-col">
               <h4>Company</h4>
               <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="#">About Us</a></li>
                 <li><a href="#">Contact Us</a></li>
               </ul>
             </div>
             <div class="footer-col">
               <h4>services</h4>
               <ul>
                 <li><a href="#">Help</a></li>
               </ul>
             </div>
             <div class="footer-col">
               <h4>follow us</h4>
               <div class="social-links">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-linkedin-in"></i></a>
               </div>
             </div>
           </div>
          </div>
       </footer>
     
     <div class="terms">
      <p><a href="terms and services">Terms and services </a></p>
     
     </div>
     <div class="copyrightText">
      <p>Copyright @ 2023 BidZone<br>
         All Rights Reserved.</p>

     </div>
    </body>
</html>