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
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expiarydate = $_POST['expiarydate'];
    $cvv = $_POST['cvv'];
    
    $query = "INSERT INTO paymenttable (CardHolderName, CardNumber, ExpirationDate, CVV)
            VALUES ('$cardname', '$cardnumber', '$expiarydate', '$cvv')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data inserted successfully.";
        //header('Location: paymentNew3.php');

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<style>

    body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
        background-color: #1f045e;
       
    }


    

* {
  box-sizing: border-box;
}

.container
{
  
  width:50%;
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin-top:10%;
  margin-right: auto;
  margin-bottom: 10%;
  margin-left: auto;
  
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color:#1f045e;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 25%;
  
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color:#FF0000;
}

</style>





</head>
<body>
    <form method="post" action="paymentNew3.php" >
        <div class="container">
            <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>

                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>

                <label>  <i class='fas fa-lock'></i><small>Your Payment is secure.Your payment details will not be shared with others.</small></label><br />
                <label for="cname">Card Holder's Name</label>
                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                <label for="ccnum">Card number</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                <div class="row">
                    <div class="col-50">
                        <label for="expyear">Expiration date</label>
                        <input type="date" id="expiarydate" name="expiarydate" min="2023-06">
                    </div>
                    <div class="col-50">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                </div>
            </div>




            <input type="submit" value="Confirm" name="submit" class="btn">
            <input type="reset" value="Cancel" class="btn">

        </div>
    </form>
</body>
</html>



