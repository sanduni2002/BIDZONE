<!DOCTYPE html>
<html>
    <head>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>
            BidZone Auction
       </title>
       <link rel="stylesheet" href="styleNew.css">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       <script>
        document.addEventListener("DOMContentLoaded", function() {
  // Display an alert when the home page is loaded
  alert("Home page is loaded!");

  

  // Add event listeners to the login and signup buttons
  var loginButton = document.querySelector(".login-button");
  var signupButton = document.querySelector(".signup-button");
  loginButton.addEventListener("click", function() {
    // Handle login button click event
    alert("Login button is clicked");
  });
  signupButton.addEventListener("click", function() {
    // Handle signup button click event
    alert("Signup button is clicked");
  });

  // Add event listeners to the buy now buttons
  var buyNowButtons = document.querySelectorAll(".buynow");
  buyNowButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      // Handle buy now button click event
      var productName = button.parentNode.querySelector("h5").textContent;
      alert("Buy now button is clicked ", productName);
    });
  });

  // Add event listeners to the bid now buttons
  var bidNowButtons = document.querySelectorAll(".bid-button");
  bidNowButtons.forEach(function(button) {
    button.addEventListener("click", function() {
      // Handle bid now button click event
      var productName = button.parentNode.querySelector("h5").textContent;
      alert("Bid now button is clicked ", productName);
    });
  });
});
      </script>
    </head>

    <body>

      <header class="hero">
        <img src="img/logo.png">
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
   
    <a href="login/login.php" class="login-button">Login</a>
    <a href="register/register.php" class="signup-button">Sign Up</a>
    <div class="dropdown">
                    <button class="btn1" >Profile</button>
                    <div class="dropdown-content">
                      <a href="admin.html">Admin</a>
                      <a href="seller2.html">Seller</a>
                      <a href="buyer 2.html">Buyer</a>
                    </div>
    </div>
    </header>
        <ul class="menu1">
          
            <li><a class="active" href="#">Home</a></li>
            <li><a href="itemlist.html">Item List</a></li>   
            <li><a href="auction.html">Sell items</a></li>
            <li><a href="contact/contact-us.php">Contact Us</a></li>
            <li><a href="help/help.html">Help</a></li>
              
            </ul>
           
        <div class="slide">
          <h4>Trade-in-offer</h4>
          <h1>Super value Deals</h1>
          <h1>For all products</h1>
          <br>
          <br>
          <h1>Sell and Buy with Bidzone</h1>
          <h4>Unleash the power of Bidding</h4>
          
          
        </div>
    

     <br>
     <section id="product1" class="section-p1">
        <h2 class="trending-topic">Trending Now</h2>
        <hr class="underline">
        <div class="pro-container">
            <div class="pro">
              <img  src="img/jewellery.jpg" alt="">
              <div class="des">
                <span>Cartier</span>
                <h5>A Magnificient Diamond Necklace</h5>
                <h6>Estimate:</h6>
                <h6>Rs5 000 000.00-Rs6 000 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/download (1).jpg" alt="">
              <div class="des">
                <span>Hermes</span>
                <h5>Black Matte Alligator Birkin 25 Gold</h5>
                <h6>Estimate:</h6>
                <h6>Rs2 000 000.00-Rs6 000 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div><div class="pro">
              <img src="img/download (1).webp" alt="">
              <div class="des">
                <span>Rolex</span>
                <h5>Daytona'John Player Special'<br> A yellow gold chronograph wristwatch with bracelet </h5>
                <h6>Estimate:</h6>
                <h6>Rs 6 000 000.00-Rs 12 000 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/download (2).jpg" alt="">
              <div class="des">
                <span>Shepard Fairey</span>
                <h5>Natural Springs</h5>
                <h6>Estimate:</h6>
                <h6>Rs 1800 000.00-R 2000 000 000.00</h6>
               
             </div>
             
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/coincollection.webp" alt="">
              <div class="des">
                <span>Coin Collection</span>
                <h5>Various Makers and Mints</h5>
                <h6>Estimate:</h6>
                <h6>Rs 2000.00-R 3000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/treadmill.webp" alt="">
              <div class="des">
                <span>Quantum Fitness</span>
                <h5>Crabon T7 Treadmill</h5>
                <h6>Estimate:</h6>
                <h6>Rs 400 000.00-R 420 000 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/teapotnew.webp" alt="">
              <div class="des">
                <span>Hermès</span>
                <h5>Chinese Blue and White porcelain TeapotCi CircA 1700</h5>
                <h6>Estimate:</h6>
                <h6>Rs 10 000.00-R 12 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/blender.webp" alt="">
              <div class="des">
                <span>Abans</span>
                <h5>Black & Decker Blender</h5>
                <h6>Estimate:</h6>
                <h6>Rs 7 000.00-Rs 8 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
        </div>
     </section>
     <section id="product1" class="section-p1">
      <h2 class="trending-topic">New Arriaval</h2>
      <hr class="underline">
        <div class="pro-container">
            <div class="pro">
              <img  src="img/necklacenew.webp" alt="">
              <div class="des">
                <span>Currier & Sons</span>
                <h5>18ct golf plated Double Layer Necklace</h5>
                <h6>Estimate:</h6>
                <h6>Rs  300.00-Rs 500.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/leatherhandbag.webp" alt="">
              <div class="des">
                <span>Louis Vuitton</span>
                <h5>Epi Maleselbe Leather Handbag</h5>
                <h6>Estimate:</h6>
                <h6>Rs 8 000.00-Rs 9 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div><div class="pro">
              <img src="img/oilpaintset.webp" alt="">
              <div class="des">
                <span>Sellmejo</span>
                <h5>Arcylic Paints set</h5>
                <h6>Estimate:</h6>
                <h6>Rs 800.00-Rs 1000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/threedoorwardrobe.webp" alt="">
              <div class="des">
                <span>GrahamSmith Antiques</span>
                <h5>Victorian Mahogany wardrobe</h5>
                <h6>Estimate:</h6>
                <h6>Rs 100 000.00-Rs  120 000.00</h6>
               
             </div>
             
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>

            <div class="pro">
              <img src="img/gramophonnew.webp" alt="">
              <div class="des">
                <span>Retro Collections London</span>
                <h5>Wood Gramophone Vintage Antique</h5>
                <h6>Estimate:</h6>
                <h6>Rs 36 000.00-Rs 40 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/sofa.webp" alt="">
              <div class="des">
                <span>A Federal Mahogany Serpentine</span>
                <h5>Front Double-Peaked Sofa circa 1790</h5>
                <h6>Estimate:</h6>
                <h6>Rs 300 000.00-Rs 310 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/tv.webp" alt="">
              <div class="des">
                <span>Toshiba</span>
                <h5>43 Inch 4K UHD Smart TV</h5>
                <h6>Estimate:</h6>
                <h6>Rs 150 000.00-Rs 160 000 000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
            <div class="pro">
              <img src="img/cricketbat.webp" alt="">
              <div class="des">
                <span>SS Sunridges Cricket</span>
                <h5>SS Magnum Pro English-Willow Cricket Bat </h5>
                <h6>Estimate:</h6>
                <h6>Rs 1500.00-Rs  2000.00</h6>
               
             </div>
             <button class="bid-button">Bid Now</button>
             <button class="buynow">Buy Now</button>
            </div>
        </div>
     </section>
     
      

       
      
       
      
       

      </div>
        <footer class="footer">
          <div class="container">
           <div class="row">
             <div class="footer-col">
                 <h4>BidZone</h4>
                 <img src="img/logo.png">
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
                 <li><a href="homeNew.php">Home</a></li>
                 <li><a href="about/about us.html">About Us</a></li>
                 <li><a href="contact/contact-us.php">Contact Us</a></li>
               </ul>
             </div>
             <div class="footer-col">
               <h4>services</h4>
               <ul>
                 <li><a href="help/help.html">Help</a></li>
               </ul>
             </div>
             <div class="footer-col">
               <h4>follow us</h4>
               <div class="social-links">
                 <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                 <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                 <a href="https://lk.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
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