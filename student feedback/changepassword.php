<?php
include("connection.php");
error_reporting(0);
session_start();
$username=$_SESSION['un'];
 $query="select * from admin where username='$username';";
//  echo $query;
 $data=mysqli_query($con,$query);
 $result=mysqli_fetch_assoc($data);
 $password =$result['Password'];
//  echo "Hello";
//  echo $username;
//  echo $password;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     
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
            <a class="Pf-a" href="admin.php">Exit</a>
            </diV>
    </div>
 <section id="Registration1" class="Registration">
  
  
 
 
  <form  method="get" id="fr" class="form" autocomplete="off">
       <h1 class="login-h1">Reset Password</h1>
       <lable class="Roll-no1">UserName</lable>
       <input type="text" name="An" placeholder="Admin name"  value="<?php echo $username ?>" required>
       <label class="pas1">New Password:</label>
       <input type="Password" name="pa" placeholder="Password" value="<?php echo $password ?>" required>
       
             <input class="btn-10" type="submit" name="submit" value="Reset">
 
     </form>
  
 
 </section>
 </body>
 </html>





<?php
include("connection.php");
error_reporting(0);
  if(Isset($_GET['submit']))
  {
    $username = $_GET['An'];
    $Password = $_GET['pa'];
    
    $query1="UPDATE admin set username='$username',Password='$Password' where username='$username' ";
    // echo $query;
    // echo "<br>";
    // echo $con;
    $data1 = mysqli_query($con,$query1);
    // echo $data;
    // echo "<br>";
    if($data1)
    {
        echo "<script>alert('Password is Reseted');
        window.location.href='admin.php';
        </script>";
        // echo $rn;

    }
    else
    {
      echo "<script>alert('Failed to Reset Password');
      window.location.href='admin.php';
      </script>";
        // echo mysqli_connect_error();
        // echo $f_name.$l_name.$Phone_no.$Student_id.$Dob;
    }
  }
?>


