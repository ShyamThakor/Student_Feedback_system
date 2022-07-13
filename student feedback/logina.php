<?php
include("connection.php");
$username=$_POST['An'];

$password=$_POST['pa'];
$query="select * from admin Where username='$username' and Password='$password' ";
$result= mysqli_query($con,$query);
$count=mysqli_num_rows($result);

if($count>0)
{
    session_start();
    $_SESSION['un']=$username;
    echo "Login succesfully";
    header("Location:admin.php");
   
}
else{
    echo "<script>
    alert('Login Faied ,Please Try to fill correct username and Password');
    window.location.href='Admin_login.html';
    
    </script>";
   
    
    // echo $query;
    // echo $count;
}
?>