<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedbackform</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style111.css">

</head>
<body>
<div id="az90" class="navbar">
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
               <li><a href="faculty_man.php">Faculty</a>  </li>
               <li><a href="stu_man.php">Student</a> </li>
               <li><a href="feedbackform.php">Feedback</a></li>
               <li><a href="student_review.php">Feedback Review</a></li>
               <li><a href="#" onclick="confirmbox()">Log Out</a></li>
               <li id="special90"><a href="#" ></a></li>
           </ul>
        </div>
        <div class="info">
            <form class="Edit-form" action="ff.php" method="Post">
                <label class="topic1">Feedback Topic:-</label><br>
                <input class="Edit-in" type="text" name="Ft" placeholder="Enter Topic Name" ></br>
                </br>
                <label class="topic1"> Form-ID:</label><br>
                <input class="Edit-in" type="text" name="FI" placeholder="Enter Id" required></br>
                </br>
                <label class="topic12">Course:-</label>
                <br>
                <select name="course">
                <option>..Course..</option>
                <option>B.tech</option>
                <option>M.tech</option>
                </select></br>
                <br>
                <label class="topic13">Faculty:-</label><br>
                <select name="Fn">
                    <option>--Fuculty Name--</option>
                <?php
               include("connection.php");
               // error_reporting(0);
                $query = "SELECT * FROM registration where profession='Faculty member' ";
                $data = mysqli_query($con,$query);
                 $total = mysqli_num_rows($data);
                  echo "<br>";
                //  echo $total;

                 if($total!=0)
                 {
         
                  while( $result= mysqli_fetch_assoc($data))
                   {
                         echo 
                         "<option>".$result['f_name']." ".$result['l_name']."</option>";
                    }
                 }
                ?>
                </select>
                <br>
                <br>
                <br>
                <br>
                <hr>
                <p class="Edit-h2">Add Feedback Question:-</p>
    <span class="Edit-span">     
        <span>      <br>
                <p class="Edit-p">Question 1</p>
               <input class="Edit-text" type="text" name="ques1" placeholder="Enter First Question"><br>
            
               <br>
               <p class="Edit-p">Question 2</p>
               <input class="Edit-text" type="text" name="ques2" placeholder="Enter Second Question"><br>
           
              <br>
           
              <p class="Edit-p">Question 3</p>
              <input class="Edit-text" type="text" name="ques3" placeholder="Enter Third Question"><br>
           
               <br>
            
               <p class="Edit-p">Question 4</p>
               <input class="Edit-text" type="text" name="ques4" placeholder="Enter Fourth Question"><br>
            
            <br>
    </span>
    <span>
        <br>
            <p class="Edit-p">Question 5</p>
            <input class="Edit-text" type="text" name="ques5" placeholder="Enter Fifth Question"><br>
      
           <br>
       
           <p class="Edit-p">Question 6</p>
           <input class="Edit-text" type="text" name="ques6" placeholder="Enter sixth Question"><br>
        
          <br>
        
          <p class="Edit-p">Question 7</p>
          <input class="Edit-text" type="text" name="ques7" placeholder="Enter Seventh Question"><br>
        <div class="Edit-div"> 
         <br>
    </span>
</span>

        <input   id="Edit-sub" name="submit" type="Submit" value="Post Feedback" >
    </form>
         </div>
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