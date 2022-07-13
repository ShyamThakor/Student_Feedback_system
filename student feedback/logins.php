<?php
include("connection.php");
$username=$_POST['Roll_no'];
$password=$_POST['pass'];
$query="select * from registration Where Student_id='$username' and Password='$password' ";
$result= mysqli_query($con,$query);
$count=mysqli_num_rows($result);

if($count>0)
{
    echo "Login succesfully";
    session_start();
    $_SESSION['rn']=$username;
    header("Location:Student_file.php");
    
   
}
else{
    echo "<script>
    alert('Login Faied ,Please Try to fill correct username and Password');
    window.location.href='log_in_for_student.html';
    
    </script>";
   
    // header("Location:log_in_for_student.html");
    // echo $count;
}
?>