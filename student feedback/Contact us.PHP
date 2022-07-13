<?php
$insert = false;
if(isset($_POST['Name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //  echo "Success connecting to the db";

    // Collect post variables
    $Name = $_POST['Name'];
    $email= $_POST['email'];
    $NUmber = $_POST['Number'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO  `stuf1`.`contact us` (`NAME`, `E-MAIL`, `NUMBER`, `MESSAGE`) VALUES('$Name','$email','$NUmber','$msg');";
    //  echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";
        echo "
        <script>alert('Data inserted')</script>";
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="navbar">
		<h1><span>O</span>nline <span>S</span>tudent <span>F</span>eedback</h1>
		<div class="nav-1">
		<ul>	
			<li><a href="index.html">Home</a></li>
			<li><a href="registartion.html">Register</a></li>
			<li><a href="contact.html">Contact us</a></li>
		</ul>
		</div>
	</div>

  
   <section class="Registration">
   	<h1 class="container-h1">Contact Us</h1>
   	   <form class="form" action="Contact us.php" method="post" autocomplete="off">
   	   <label class="f-name-1">Name</label>
   	   <input type="text" name="Name" id="Name" placeholder="Name" required><br>
   	   <label class="pn-1">E-mail</label>
   	   <input type="email" name="email" id="email" placeholder="E-mail" required><br>
   	   <label class="pn-2">Number</label>
   	   <input type="number" name="Number" id="Number"  placeholder="Number" required><br>
   	   <label class="msg">Message</label>
     	<textarea placeholder="textarea" name="msg" id="msg"></textarea><br>
       <input class="btn-9" type="Submit" name="Submit">
   </form>
   </section>
</body>
</html>