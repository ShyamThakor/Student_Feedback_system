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
<div id="az100" class="navbar">
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
               <li id="special3"><a href="#" ></a></li>
           </ul>
        </div>
       
        <div id="s_r1" class="info">
        <form action="student_review.php">
            <br>
            <br>
            <label class="lable-sr">Select Form-Id</label><br>
            <select name='Form_id' class="select-sr">
                <option>------FormId------</option>
                <?php
                include("connection.php");
                $query="SELECT * from feedbackf";
                $data= mysqli_query($con,$query);
                $total= mysqli_num_rows($data); 
                while($result=  mysqli_fetch_assoc($data))
                {
                    echo"
                    <option>".$result['Form_id']."</option>";
                }

                ?>
            </select>
             
            <input type="submit" value="Click here" class="btn-5">
            </form>

            <?php
             @$Form_id=$_GET['Form_id'];
            $query1="SELECT * from feedbackf where Form_id='$Form_id'";
            $data1= mysqli_query($con,$query1);
            $total= mysqli_num_rows($data1); 
            $result1=  mysqli_fetch_assoc($data1);
               echo "
               <table >
               <tr>
               <td class='al'>Que number</td>
               <td class='al'>Question</td></tr>
               <tr>
               <td>Q1</td>
               <td>".$result1['Q1']."</td></tr>
               <tr>
               <td>Q2</td>
               <td>".$result1['Q2']."</td></tr>
               <tr>
               <td>Q3</td>
               <td>".$result1['Q3']."</td></tr>
               <tr>
               <td>Q4</td>
               <td>".$result1['Q4']."</td></tr>
               <tr>
               <td>Q5</td>
               <td>".$result1['Q5']."</td></tr>
               <tr>
               <td>Q6</td>
               <td>".$result1['Q6']."</td></tr>
               <td>Q7</td>
               <td>".$result1['Q7']."</td></tr>
               </table>
           
               "
             ?>


      
              <table>
                  <tr>
                      <th>Student Name</th>
                      <th>Student Roll no</th>
                      <th>Q1</th>
                      <th>Q2</th>
                      <th>Q3</th>
                      <th>Q4</th>
                      <th>Q5</th>
                      <th>Q6</th>
                      <th>Q7</th>
                  </tr>
              
              <?php
               include("connection.php");
                error_reporting(0);
               @$Form_id=$_GET['Form_id'];
                $query = "SELECT * FROM ans_form where Form_id='$Form_id' ";
                // echo $query;
                $data = mysqli_query($con,$query);
                 $total = mysqli_num_rows($data);
                  echo "<br>";
                //  echo $total;
                


                 if($total!=0)
                 {
         
                  while( $result= mysqli_fetch_assoc($data))
                   {
                       
                     $query1="SELECT f_name,l_name from registration where Student_id='$result[Student_id]' ";
                    //  echo $query1;
                     $data1 = mysqli_query($con,$query1);
                     $result1= mysqli_fetch_assoc($data1);
                     
                         echo "
                        <tr>
                        <td>".$result1['f_name']." ".$result1['l_name']."</td>
                        <td>".$result['Student_id']."</td>
                        <td>".$result['Q1']."</td>
                         <td>".$result['Q2']."</td>
                         <td>".$result['Q3']."</td>
                         <td>".$result['Q4']."</td>
                         <td>".$result['Q5']."</td>
                         <td>".$result['Q6']."</td>
                         <td>".$result['Q7']."</td>
                          </tr>
                          ";
                    }
                 }
               
                 else
                {
                // echo "no records found";
                }
                
              ?>
                </table>
                <br>
                <table>
                  <tr>
                      <th>Student Name</th>
                      <th>Suggestion</th>
                </tr>

              <?php
               include("connection.php");
                error_reporting(0);
               @$Form_id=$_GET['Form_id'];
                $query = "SELECT * FROM ans_form where Form_id='$Form_id' ";
                // echo $query;
                $data = mysqli_query($con,$query);
                 $total = mysqli_num_rows($data);
                  echo "<br>";
                //  echo $total;
                
                 if($total!=0)
                 {
         
                  while( $result= mysqli_fetch_assoc($data))
                   {
                       
                     $query1="SELECT f_name,l_name from registration where Student_id='$result[Student_id]' ";
                    //  echo $query1;
                     $data1 = mysqli_query($con,$query1);
                     $result1= mysqli_fetch_assoc($data1);
                     
                         echo "
                        <tr>
                        <td>".$result1['f_name']." ".$result1['l_name']."</td>
                        <td>".$result['Suggestion']."</td>
                        
                          </tr>";
                    }
                 }

                 else
                {
                // echo "no records found";
                }
              ?>
            </table>

            <?php
             include("connection.php");
             error_reporting(0);
            @$Form_id=$_GET['Form_id'];
             $query3 = "SELECT * FROM ans_form where Form_id='$Form_id' ";
             // echo $query;
             $data3 = mysqli_query($con,$query3);
              $total = mysqli_num_rows($data3);
               echo "<br>";
             //  echo $total;
             $Poor=0;
             $Neutral=0;
             $Good=0;
             $Excellent=0;
             


              if($total!=0)
              {
      
               while( $result3= mysqli_fetch_assoc($data3))
                {
                     if($result3['Q1']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q1']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q1']=='Good')
                     { $Good += 1;}
                     if($result3['Q1']=='Excellent')
                     { $Excellent += 1;}

                     if($result3['Q2']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q2']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q2']=='Good')
                     { $Good += 1;}
                     if($result3['Q2']=='Excellent')
                     { $Excellent += 1;}

                     
                     if($result3['Q3']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q3']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q3']=='Good')
                     { $Good += 1;}
                     if($result3['Q3']=='Excellent')
                     { $Excellent += 1;}

                     if($result3['Q4']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q4']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q4']=='Good')
                     { $Good += 1;}
                     if($result3['Q4']=='Excellent')
                     { $Excellent += 1;}

                     
                     if($result3['Q5']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q5']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q5']=='Good')
                     { $Good += 1;}
                     if($result3['Q5']=='Excellent')
                     { $Excellent += 1;}

                     
                     if($result3['Q6']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q6']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q6']=='Good')
                     { $Good += 1;}
                     if($result3['Q6']=='Excellent')
                     { $Excellent += 1;}

                     
                     if($result3['Q7']=='Poor')
                     { $Poor += 1;}
                     if($result3['Q7']=='Neutral')
                     { $Neutral += 1;}
                     if($result3['Q7']=='Good')
                     { $Good += 1;}
                     if($result3['Q7']=='Excellent')
                     { $Excellent += 1;}
                }
            }
            echo "
             <table>
                <tr>
                <th>Poor</th>
                <th>Neutral</th>
                <th>Good</th>
                <th>Excellent</th>
                </tr>
                <tr>
                <td>$Poor</th>
                <td>$Neutral</th>
                <td>$Good</th>
                <td>$Excellent</th>
                </tr>

             </table>";
            ?>
                <?php
                 
                @$Form_id=$_GET['Form_id'];
       echo "
              
            <a href='deleteform.php?Fi=$Form_id'><button class='sr_btn'>Delete Form</button></a>";
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