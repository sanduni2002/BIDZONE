<?php 
    $msg = '';
    $email = '';
    $user_pass = '';


    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $user_pass = $_POST['user_pass'];
        
        if (empty($email) || empty($user_pass)) {
          $msg = 'Email or password cannot be blank';
        } else {
          $conn  = new mysqli("localhost","root","","iwt");

          // Check connection
          if ($conn -> connect_errno) {
            $msg = "Failed to connect to MySQL: ";
            exit();
          }

          $stmt = $conn->prepare("SELECT COUNT(*) AS 'count' FROM user WHERE email = ? AND user_pass = SHA1(?)");
          $stmt->bind_param("ss", $email, $user_pass);
          $stmt->execute();
          $user_count = 0;
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) {
              $user_count = $row['count'];
          }

          if ($user_count > 0) {
            header("Location: /IWT/homeNew.php");
          } else {
            $msg = 'Email or password is incorrect';
          }

        }
    }
 ?>

<!DOCTYPE html>
<html>
   <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Login form</title>
        <link rel="stylesheet" href="loginstyle.css">
        <script src="https://kit.fontawesome.com/249b1682b6.js" crossorigin="anonymous"></script>
   </head>
   <body>
     
<div class="container">
  <img src="logo.png">
 <div class="form-box">
   <h1>Welcome!
    <br>Login</h1>
   <h6>Log in or If you don't have an account <a href="/IWT/register/register.php">register</a></h6>
   <form action="login.php" method="POST">
     

         <div class="input-field">
           <i class="fa-solid fa-envelope"></i>
           <input type="email" placeholder="Email" name="email">

         </div> 

         <div class="input-field">
           <i class="fa-solid fa-unlock"></i>
           <input type="password" placeholder="Password" name="user_pass">

         </div>
            
        
      <div class="btn-field" style="margin-bottom: 5px; color: red;">
           <?php echo($msg); ?>

      </div> 
     <div class="btn-field">
         <button type="submit" name="submit">Login</button>
     </div>
     <a href="./forgot.html">Forgot Password?</a>
    <h6>or</h6>
    <br>
    
     <div class="col">
        <h3 >Continue With:</h3>
        <a href="https://www.facebook.com/login/" inputmode="button" class="fb btn">
            <i class="fa fa-facebook fa-fw"></i> Continue with Facebook
         </a>
       
        <a href="https://accounts.google.com/signin/v2/challenge/pwd?TL=AG7eRGB6utdB16vX_D4GVdRiTjFr81NlXS4tkPSnTlM_Gz8NCne9UeOeicXGGv1h&cid=1&continue=https%3A%2F%2Fmyaccount.google.com%2Fdeleteaccount&flowName=GlifWebSignIn&ifkv=Af_xneFM9lihJFozNhDLhOHywLPk8fohv0-JY5_SA2d-tsjqVM4T1PPH3qw76XumjUGkTqRy5RN4&rart=ANgoxcd8gIqaqR3Q8Cr1tvN20Xa-DxHkuqu86hRvujwsgMsmA6av0kai7myjxI6ojtZ3xF52jTt7QkFMYkvRJLL-O9cho89v6g&sarp=1&scc=1&service=accountsettings" class="google btn">
            <i class="fa fa-google fa-fw"></i> Continue with Google
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