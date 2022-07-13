<?php
include("connection.php");
error_reporting(0);
$rollno=$_GET['rn'];

$query="DELETE FROM registration where Faculty_id='$rollno'";
$data=mysqli_query($con,$query);
if($data)
{
    
    echo "<script>alert('Record deleted from database');
    window.location.href='faculty_man.php';
    </script>
    ";
}
else{
    echo "<script>alert('Failed to Delete Data');
    window.location.href='faculty_man.php';
    </script>
    ";
  
}
?>