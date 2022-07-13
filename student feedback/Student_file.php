<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style111.css">
</head>
<body>
    
    <div id="az1" class="navbar">
        <h1><span>O</span>nline <span>S</span>tudent <span>F</span>eedback</h1></div>
        <section class="main-11">
        <div class="navbar-2">
            <ul>
                <li id="std_info">
                   <?php
                   include("connection.php");
                   
                   session_start();
                   $rn=$_SESSION['rn'];
                   $query= "SELECT Img,f_name,l_name from registration where Student_id='$rn';"; 
                   $data= mysqli_query($con,$query);
                   $result= mysqli_fetch_assoc($data);
                //    echo $result['Img'];
                   
                   echo $result['f_name']." ".$result['l_name'];
                   echo "<br>";
                   echo "<br>";
                    ?>
                   
                
                <?php
        
                echo $_SESSION['rn'];
                ?>
            </li>
                <li><a href="
                Student_file.php">Student Dashboard</a></li>
                <li><a href="Post Feedback.php">Post Feedback</a></li>
                <li><a href="updatestudentprofile.php" >Update Profile</a>
                <li><a href="#" onclick="confirmbox()">Log Out</a></li>
                <li id="special1"><a href="" ></a></li>
            </ul>
         </div>

         <div class="info">
         <span class="D-board">
             <span class="D-board1">
                 <?php
                    error_reporting(0);
                   $fn=$_SESSION['Form_id'];
                   $query1="select * from feedbackf inner join registration on registration.Course=feedbackf.Course where Student_id='$rn' ";
                   
                   $data2= mysqli_query($con,$query1);
                   $total2= mysqli_num_rows($data2);

                
                   echo " <h1>$total2</h1><br>
                   <p><a class='Student-a1' href='Post Feedback.php'>Total Feedback</a></p>";

                   ?>
             </span>
             <span class="D-board1">
                 <?php
                 
                 $ans="SELECT * from ans_form where Student_id='$rn'";

                //  echo $ans;
    
                 $data1= mysqli_query($con,$ans);
                 $total1= mysqli_num_rows($data1);

                 echo " <h1>$total1</h1><br>
                 <p><a class='Student-a1' href='Post Feedback.php'>Feedback answerd</a></p>";
                
                 ?>
             </span>
             <span class="D-board1">
                 <?php
                 $total3=$total2-$total1;
                 echo " <h1>$total3</h1><br>
                 <p><a class='Student-a1' href='Post Feedback.php'> Feedback Unanswerd</a></p>";
                 ?>
             </span>
            </span>

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
            window.location.href='Student_file.php';
           }
        }
    </script>
</body>
</html>