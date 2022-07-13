<?php
include("connection.php");
error_reporting(0);
session_start();
$rn=$_SESSION['rn'];
$query="select * from registration where Student_id='$rn';";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
$fn=$result['f_name'];
$ln=$result['l_name'];
$p=$result['Phone_no'];
$pw=$result['Password'];
$Dob=$result['Dob'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style111.css">
</head>
<body>
<div id="az18" class="navbar">
    <div class="Pf-div1">
            <h1><span>O</span>nline <span>S</span>tudent <span>F</span>eedback</h1>
      </div>
      <div>
            <a class="Pf-a" href="Student_file.php">Exit</a>
            </diV>
    </div>
<section id="Registration1" class="Registration">
 
 <h1 class="Registration-h123">Update Your Details</h1>
 <form class="form" methode="GET">

     <label class="f-name">FirstName</label>
     <input class="First-name" type="Firstname" value="<?php echo "$fn" ?>" name="Firstname" id="Firstname" placeholder="Firstname" required>

    <label class="l-name">LastName</label>
     <input class="Lastname" type="Lastname" value="<?php echo "$ln" ?>"  name="Lastname" id="Lastname" placeholder="Lastname" required>
    <!-- <?php echo $p ?> -->
     <label class="pn">Phone</label>
     <input type="number" name="Phone" value=<?php echo $p ?> placeholder="Phone number" id="Phone" required><br>

        <br>
         	
 		<label class="pass">Password</label>
 		<input type="password" name="Password"  value="<?php echo "$pw" ?>"" placeholder="Enter your Password" id="Password" required>

   <br> 
   <label class="Dob">Date Of Birth</label>
   <input type="date"  value="<?php echo "$Dob" ?>" name="Dob" id="Dob"><br>

   <input class="btn-9" type="Submit" name="Update" id="Submit" value="Update">
 </form>

</section>
</body>
</html>





<?php
include("connection.php");
error_reporting(0);
  if(Isset($_GET['Update']))
  {
    $f_name = $_GET['Firstname'];
    $l_name = $_GET['Lastname'];
    $Phone_no = $_GET['Phone'];
    $Password = $_GET['Password'];
    $Dob = $_GET['Dob'];
    // echo $f_name;
    $query1="UPDATE registration set f_name='$f_name',l_name='$l_name',Phone_no='$Phone_no',Password='$Password',Dob='$Dob' where Student_id='$rn' ";
    // echo $query;
    // echo "<br>";
    // echo $con;
    $data1 = mysqli_query($con,$query1);
    // echo $data;
    // echo "<br>";
    if($data1)
    {
        echo "<script>alert('Data is Updated');
        window.location.href='Student_file.php';
        </script>";
        // echo $rn;

    }
    else
    {
      echo "<script>alert('Failed to Update data');
      window.location.href='Student_file.php';
      </script>";
        // echo mysqli_connect_error();
        // echo $f_name.$l_name.$Phone_no.$Student_id.$Dob;
    }
  }
?>



