<?php  include 'Connection.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <script src="Feedback.js"></script>
    <link rel = "stylesheet" href="Feedback.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<hr class = "new1">
    <!-- add a logo (b) -->
    <div class="find">
        <img src="profile pic-modified.jpg" alt="Avatar" class="avatar">
        <h1 class="p3">Admin</h1>
        <input type="text" placeholder="Search..">
        <img src="logo.png" alt = "bidZone" width= "100%" height= "100%" input type="text" placeholder="Search.." class="logo">
    </div>
	
    <!-- add a header (c)-->
    <header>
        <!-- add a horizontal line (d)-->
		<hr class = "new1">
        <!-- add a horizontal menu (e) -->
		<div class="bar">
            <div class="headbtn">
                  <a id="button" href= "admin.html">Dashboard</a></li>
                  <a id="button" href= "ManageUser.html">Manage User</a></li>
                  <a id="button" href= "ManageAuction.html">Manage Auction</a></li>
                  <a class="active" id="button" href= "Feedback.html">Feedback</a></li>
            </div>
        </div>		
		<br>

    <h1 class="p1">User Feedbacks</h1>
    <hr class="new1">


    <img src="profile pic-modified.jpg" alt="Avatar" class="avatar2">
    <h3 class="p4">User Name<h3><br>
    <h4 class="p5">Total Payable: </h4>


    <div class="star">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
    </div> 
    
    <center>
    <table border="1px" cellpadding="10px" cellspacing="0">
            <?php
                $query = "SELECT * FROM feedback";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td>
                  <?php echo $row['comment'];?>
                  <?php echo $row['comment'];?>
                  <?php echo $row['comment'];?>
                  <?php echo $row['comment'];?>

                </td>
                </tr>
            <?php
                  }
                }else
                {
                  ?>
                    <tr>
                      <td>No Records found</td>
                    </tr>
                  <?php
                }

      
            ?>

    </table>
    </center>
   

    <button id="btn1" type="button" onclick="loadData('btn1')"><b>Delete Feedback</b></button>
    <button id="btn2" type="button" onclick="loadData('btn2')"><b>Approve</b></button>
    <button id="btn3" type="button" onclick="loadData('btn3')"><b>Respond</b></button>
    <br><br><br><br>

    <img src="profile pic-modified.jpg" alt="Avatar" class="avatar2">
    <h3 class="p4">User Name<h3><br>
    <h4 class="p5">Total Payable: </h4>


    <div class="star">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
    </div> 


    <center>
    <table border="1px" cellpadding="10px" cellspacing="0">
            <?php
                $query = "SELECT * FROM feedback";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td><?php echo $row['comment'];?>

                </td>
                </tr>
            <?php
                  }
                }else
                {
                  ?>
                    <tr>
                      <td>No Records found</td>
                    </tr>
                  <?php
                }

      
            ?>

    </table>
    </center>

    <button id="btn1" type="button" onclick="loadData('btn1')"><b>Delete Feedback</b></button>
    <button id="btn2" type="button" onclick="loadData('btn2')"><b>Approve</b></button>
    <button id="btn3" type="button" onclick="loadData('btn3')"><b>Respond</b></button>
    <span id="dots"></span>
    <span id="more">
    <br><br><br><br>



    <img src="profile pic-modified.jpg" alt="Avatar" class="avatar2">
    <h3 class="p4">User Name<h3><br>
    <h4 class="p5">Total Payable: </h4>


    <div class="star">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
    </div>
    
    <center>
    <table border="1px" cellpadding="10px" cellspacing="0">
            <?php
                $query = "SELECT * FROM feedback";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td><?php echo $row['comment'];?>

                </td>
                </tr>
            <?php
                  }
                }else
                {
                  ?>
                    <tr>
                      <td>No Records found</td>
                    </tr>
                  <?php
                }

      
            ?>

    </table>
    </center>


    <button id="btn1" type="button" onclick="loadData('btn1')"><b>Delete Feedback</b></button>
    <button id="btn2" type="button" onclick="loadData('btn2')"><b>Approve</b></button>
    <button id="btn3" type="button" onclick="loadData('btn3')"><b>Respond</b></button>
    
    <br><br><br><br>



      <img src="profile pic-modified.jpg" alt="Avatar" class="avatar2">
      <h3 class="p4">User Name<h3><br>
      <h4 class="p5">Total Payable: </h4>
  
  
      <div class="star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      </div>
      
      
      <center>
    <table border="1px" cellpadding="10px" cellspacing="0">
            <?php
                $query = "SELECT * FROM feedback";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td><?php echo $row['comment'];?>

                </td>
                </tr>
            <?php
                  }
                }else
                {
                  ?>
                    <tr>
                      <td>No Records found</td>
                    </tr>
                  <?php
                }

      
            ?>

    </table>
    </center>
  
      <button id="btn1" type="button" onclick="loadData('btn1')"><b>Delete Feedback</b></button>
      <button id="btn2" type="button" onclick="loadData('btn2')"><b>Approve</b></button>
      <button id="btn3" type="button" onclick="loadData('btn3')"><b>Respond</b></button>
      <br><br><br><br>



      <img src="profile pic-modified.jpg" alt="Avatar" class="avatar2">
      <h3 class="p4">User Name<h3><br>
      <h4 class="p5">Total Payable: </h4>
  
  
      <div class="star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </div> 

      <center>
    <table border="1px" cellpadding="10px" cellspacing="0">
            <?php
                $query = "SELECT * FROM feedback";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td><?php echo $row['comment'];?>

                </td>
                </tr>
            <?php
                  }
                }else
                {
                  ?>
                    <tr>
                      <td>No Records found</td>
                    </tr>
                  <?php
                }

      
            ?>

    </table>
    </center>
  
  
      <button id="btn1" type="button" onclick="loadData('btn1')"><b>Delete Feedback</b></button>
      <button id="btn2" type="button" onclick="loadData('btn2')"><b>Approve</b></button>
      <button id="btn3" type="button" onclick="loadData('btn3')"><b>Respond</b></button>
      <br><br><br><br>



      <img src="profile pic-modified.jpg" alt="Avatar" class="avatar2">
      <h3 class="p4">User Name<h3><br>
      <h4 class="p5">Total Payable: </h4>
  
  
      <div class="star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </div>

      <center>
    <table border="1px" cellpadding="10px" cellspacing="0">
            <?php
                $query = "SELECT * FROM feedback";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td><?php echo $row['comment'];?>

                </td>
                </tr>
            <?php
                  }
                }else
                {
                  ?>
                    <tr>
                      <td>No Records found</td>
                    </tr>
                  <?php
                }

      
            ?>

    </table>
    </center>
  
  
      <button id="btn1" type="button" onclick="loadData('btn1')"><b>Delete Feedback</b></button>
      <button id="btn2" type="button" onclick="loadData('btn2')"><b>Approve</b></button>
      <button id="btn3" type="button" onclick="loadData('btn3')"><b>Respond</b></button>  
      </span>
      



      <button onclick="myFunction()" id="btn4">View All</button>

      

      <?php
          $query = "SELECT * FROM feedback";
          $data = mysqli_query($con,$query);
          $result = mysqli_num_rows($data);
      ?>



        <!-- add a footer (g)-->
        <br>
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
                   <li><a href="#">Help Us</a></li>
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

</body>
</html>