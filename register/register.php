 <?php 
    $msg = '';
    $user_name = '';
    $nic = '';
    $phone_no = '';
    $email = '';
    $dob = '';
    $user_pass = '';
    $conf_user_pass = '';
    $user_type = '';

    if (isset($_POST['submit'])) {
        $user_name = $_POST['user_name'];
        $nic = $_POST['nic'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $user_pass = $_POST['user_pass'];
        $conf_user_pass = $_POST['conf_user_pass'];

        if (empty($user_name)) {
          $msg = 'Name is required';
        } else if (empty($nic)) {
          $msg = 'NIC is required';
        } else if (empty($phone_no)) {
          $msg = 'Phone number is required';
        } else if (empty($email)) {
          $msg = 'Email is required';
        } else if (empty($dob)) {
          $msg = 'Birthday is required';
        } else if (empty($user_pass)) {
          $msg = 'Password is required';
        } else if ($user_pass !== $conf_user_pass) {
          $msg = 'Password and Confirm password do not match';
        } else if (!preg_match('/^[0-9]{10}+$/', $phone_no)) {
          $msg = 'Phone number is not valid';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $msg = 'Email is not valid';
        } else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dob)) {
          $msg = 'Birthdy is not valid';
        } else {
          $conn  = new mysqli("localhost","root","","iwt");

          // Check connection
          if ($conn -> connect_errno) {
            $msg = "Failed to connect to MySQL: ";
            exit();
          }

          $stmt = $conn->prepare("INSERT INTO user (user_name, nic, phone_no, email, dob, user_pass, user_type) VALUES (?, ?, ?, ?, ?, SHA1(?), ?)");
          $stmt->bind_param("sssssss", $user_name, $nic, $phone_no, $email, $dob, $user_pass, $user_type);
          $stmt->execute();

          $msg = 'Account created!, Please login into continue';
          $user_name = '';
          $nic = '';
          $phone_no = '';
          $email = '';
          $dob = '';
          $user_pass = '';
          $conf_user_pass = '';
        }
    }
 ?>
 
 
 <!DOCTYPE html>
 <html>
    <head>
         <meta name="viewport" content="width=device-width,initial-scale=1.0">
         <title>Register form</title>
         <link rel="stylesheet" href="registerstyle.css">
         <script src="https://kit.fontawesome.com/249b1682b6.js" crossorigin="anonymous"></script>
    </head>
    <body>
      
<div class="container">
   <img src="logo.png">
  <div class="form-box">
    <h1>Create an Account</h1>
    <h6>If you already have an account <a href="/IWT/login/login.php">Login</a></h6>
    <form action="register.php" method="post">
      
      <h5 class="p1">I am a</h5>
       <div class="radio-container">
         <input type="radio" id="html" name="user_type" value="seller">
         <lable for="html">Seller</lable>
         <input type="radio" id="html" name="user_type" value="buyer" checked>
         <lable for="html">Buyer</lable>
      </div>
       
      <div class="input-group">
          <div class="input-field">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Name" name="user_name" value="<?php echo($user_name);?>">

          </div>
          
          <div class="input-field">
            <i class="fa-solid fa-id-card"></i>
            <input type="text" placeholder="NIC" name="nic" value="<?php echo($nic);?>">

          </div>

          <div class="input-field">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" placeholder="Phone Number" name="phone_no" value="<?php echo($phone_no);?>">

          </div>

          
          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" value="<?php echo($email);?>">

          </div> 
          <div class="input-field">
            <i class="fa-regular fa-calendar-days"></i>            
            <input type="text" placeholder="Birthday (YYYY-MM-DD)" name="dob" value="<?php echo($dob);?>">

          </div> 

          <div class="input-field">
            <i class="fa-solid fa-unlock"></i>
            <input type="password" placeholder="Password" name="user_pass" value="<?php echo($user_pass);?>">

          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="conf_user_pass" value="<?php echo($conf_user_pass);?>"> 
          </div>      
         
      </div>
      <div class="btn-field" style="margin-bottom: 5px; color: red;">
           <?php echo($msg); ?>

      </div> 
      <div class="btn-field">
          <button type="submit" name="submit">Create Account</button>
      </div>
     <br>
     <h6>or</h6>
     <br>
     
      <div class="col">
         <h3 >Continue With:</h3>
         <a href="https://www.facebook.com/login/" inputmode="button" class="fb btn">
           <i class="fa fa-facebook fa-fw"></i> Continue with Facebook
          </a>
         
         <a href="https://accounts.google.com/signin/v2/challenge/pwd?TL=AG7eRGB6utdB16vX_D4GVdRiTjFr81NlXS4tkPSnTlM_Gz8NCne9UeOeicXGGv1h&cid=1&continue=https%3A%2F%2Fmyaccount.google.com%2Fdeleteaccount&flowName=GlifWebSignIn&ifkv=Af_xneFM9lihJFozNhDLhOHywLPk8fohv0-JY5_SA2d-tsjqVM4T1PPH3qw76XumjUGkTqRy5RN4&rart=ANgoxcd8gIqaqR3Q8Cr1tvN20Xa-DxHkuqu86hRvujwsgMsmA6av0kai7myjxI6ojtZ3xF52jTt7QkFMYkvRJLL-O9cho89v6g&sarp=1&scc=1&service=accountsettings" class="google btn"><i class="fa fa-google fa-fw">
           </i> Continue with Google
         </a>
         <a href="https://www.icloud.com" class="apple btn">
          <i class="fa-brands fa-apple"></i>  Continue with Apple
        </a>
       </div>
    </form>
</div>
</div>
   </body>
   <footer>
   <div class="copyrightText">
      <p>Copyright @ 2023 BidZone<br>
         All Rights Reserved.</p>
   
     </div>
   </footer>
 </html>