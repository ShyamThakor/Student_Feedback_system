<?php
include("connection.php");
error_reporting(0);
 $rn=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$p=$_GET['pn'];
$Dob=$_GET['Dob'];

?>
<?php
include("connection.php");
error_reporting(0);
  if(Isset($_GET['Update']))
  {
    $f_name = $_GET['Firstname'];
    $l_name = $_GET['Lastname'];
    $Phone_no = $_GET['Phone'];
    $Student_id = $_GET['Studentid'];
    $Dob = $_GET['Dob'];
    // echo $f_name;
    $query="UPDATE registration set f_name='$f_name',l_name='$l_name',Phone_no='$Phone_no',Student_id='$Student_id',Dob='$Dob' where Student_id='$Student_id' ";
    // echo $query;
    // echo "<br>";
    // echo $con;
    $data = mysqli_query($con,$query);
    // echo $data;
    // echo "<br>";
    if($data)
    {
        echo "<script>alert('Data is Updated');
        window.location.href='stu_man.php';
        </script>";
        // echo $rn;

    }
    else
    {
      echo "<script>alert('Failed to Update data');
      window.location.href='stu_man.php';
      </script>";
        // echo mysqli_connect_error();
        // echo $f_name.$l_name.$Phone_no.$Student_id.$Dob;
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="Registration">
 
 <h1 class="Registration-h1">Registation Form</h1>
 <form class="form" methode="GET">

     <label class="f-name">FirstName</label>
     <input class="First-name" type="Firstname" value="<?php echo "$fn" ?>" name="Firstname" id="Firstname" placeholder="Firstname" required>

    <label class="l-name">LastName</label>
     <input class="Lastname" type="Lastname" value="<?php echo "$ln" ?>"  name="Lastname" id="Lastname" placeholder="Lastname" required>
    <!-- <?php echo $p ?> -->
     <label class="pn">Phone</label>
     <input type="number" name="Phone" value=<?php echo $p ?> placeholder="Phone number" id="Phone" required><br>

     <label class="S-id">Student ID No</label>
     <input type="text" name="Studentid" value="<?php echo "$rn" ?>" placeholder="Enter your Id No" id="Studentid" required><br>

   <br> 
   <label class="Dob">Date Of Birth</label>
   <input type="date"  value="<?php echo "$Dob" ?>" name="Dob" id="Dob"><br>

   <input class="btn-9" type="Submit" name="Update" id="Submit" value="Update">
 </form>

</section>
</body>
</html>
