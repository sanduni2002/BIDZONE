<?php  include 'Connection.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserManagement Page</title>
    <script src="Feedback.js"></script>
    <link rel = "stylesheet" href="ManageAuction.css">
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
                  <a class="active" id="button" href= "ManageAuction.html">Manage Auction</a></li>
                  <a id="button" href= "Feedback.html">Feedback</a></li>
            </div>
        </div>		
		<br>

    <h1 class="p1">Auctions</h1><br>
    <hr class="new1">
    <div class="item">
    
    <table border="2px" cellpadding="100px" cellspacing="10px">
        <tr>
            <th>AuctionId</th>
            <th>ItemName</th>
            <th>sellerID</th>
            <th>starTime</th>
            <th>endTime</th>
            <th>CurrentPrice</th>
            <th>Auction </th>
        </tr>
            <?php
                $query = "SELECT * FROM auction";
                $data = mysqli_query($con,$query);
                $result = mysqli_num_rows($data);
                
                if($result){
                  while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                  
                <td><?php echo $row['auctionID'];?></td>
                <td><?php echo $row['ItemName'];?></td>
                <td><?php echo $row['sellerID'];?></td>
                <td><?php echo $row['startTime'];?></td>
                <td><?php echo $row['endTime'];?></td>
                <td><?php echo $row['currentPrice'];?></td>
                <td><button id="btn3" type="button" onclick="loadData('btn1')"><b>View Details</b></button></td>
                <td><button id="btn2" type="button" onclick="loadData('btn1')"><b>Approve</b></button></td>
                <td><button id="btn1" type="button" onclick="loadData('btn1')"><b>Reject</b></button></td>
            
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
    
    </div>





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