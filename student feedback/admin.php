<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style111.css">
    <title>Document</title>
</head>
<body>
    <div id="az40" class="navbar">
        <div>
            <h1><span>O</span>nline <span>S</span>tudent <span>F</span>eedback</h1>
        </div>
        <div class="Admin-div">
            <ul >
                <li><a href="#">Admin</a>
                  <ul>
                      <li><a href="addnew_admin.php">Add New Admin</a></li>
                      <li><a href="changepassword.php">Change Password</a></li>
                  </ul>
                </li>
            </ul>
        </div>


    </div>
    <section class="main-11">
        <div class="navbar-2">
           <ul>
           <li id="std_info1">
                   <?php
                   include("connection.php");
                   error_reporting(0);
                   session_start();
                   $un=$_SESSION['un'];
                   $query1= "SELECT username from admin where username='$un';"; 
                   $data1= mysqli_query($con,$query1);
                   $result= mysqli_fetch_assoc($data1);
                //    echo $result['Img'];
                
                echo "<p>Username: ".$result['username']."</p>";
                   echo "<br>";
                   echo "<br>";
                    ?>
                   
               <li><a href="admin.php">Dashboard</a></li>
               <li><a href="faculty_man.php">Faculty</a> </li>
              
               <li><a href="stu_man.php">Student</a> </li>
              
               <li><a href="feedbackform.php">Feedback</a></li>
               <li><a href="student_review.php">Feedback Review</a></li>
               <li><a href="#" onclick="confirmbox()">Log Out</a></li>
               <li id="special45"><a href="#" ></a></li>
           </ul>
        </div>
        <div class="info">
        
               
               <?php
               include("connection.php");
               $query = "SELECT * FROM registration where profession='Student' ";
                $data = mysqli_query($con,$query);
                 $total = mysqli_num_rows($data);
                 echo "
                 <p class='info-p'><a class='Student-a' href='stu_man.php'>Number of Students: $total</a></p>";

                 $sql = "SELECT * FROM registration where profession='Faculty member' ";
                $data1 = mysqli_query($con,$sql);
                 $total1 = mysqli_num_rows($data1);
                 echo "
                 <p class='info-p1'><a class='Student-a' href='faculty_man.php'>Number of Faculty Members: $total1</a></p>";

               ?>
              
    
        </div>
    </section>
    <script>
        function confirmbox()
        {
           var userconfirm=confirm("Do you want to logout");
           if(userconfirm == true)   
           {
            window.location.href='index.html';
           }    
           else
           {
            window.location.href='admin.php';
           }
        }
    </script>
</body>
</html>