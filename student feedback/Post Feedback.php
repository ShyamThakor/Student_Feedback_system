<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style111.css">
    <style>
        body{
           background-image:url('ab.jpg');
        }
    </style>
</head>
<body >
    <div id="az4" class="navbar">
    <div class="Pf-div1">
            <h1><span>O</span>nline <span>S</span>tudent <span>F</span>eedback</h1>
      </div>
      <div>
            <a class="Pf-a" href="Student_file.php">Exit</a>
            </diV>
    </div>
  


   <?php
     include("connection.php");
     error_reporting(0);
     session_start();
     $rn=$_SESSION['rn'];
     $query1="SELECT * FROM ans_form where Student_id='$rn'";
    //  echo $query1;
     $data1= mysqli_query($con,$query1);
     echo "<select id='p-select' class='Pf-table'>
     <option>Form Submitted By You</option>";
     while($result1=mysqli_fetch_assoc($data1))
     {
      //  echo "Hello";
       echo "
        <option>
       ".$result1['Form_id']."</option>
       ";
     }
     echo"
     </select>";
   ?>

   <table>
    <?php
    include("connection.php");
    error_reporting(0);
    session_start();
    $rn=$_SESSION['rn'];
   
    $query="select * from feedbackf inner join registration on registration.Course=feedbackf.Course where Student_id='$rn'";
    // echo $query;
    $data= mysqli_query($con,$query);
    $total= mysqli_num_rows($data);
    // echo $total;


    if($total!=0)
    {
   
          while($result= mysqli_fetch_assoc($data))
          {
              echo"
              <form>
              <table class='Pf-table1'>
                <tr>
              <th>Course Name</th>
              <th>B.tech or M.tech</th>
              <th>Faculty Name</th>
              <th>Form Id</th>
            </tr>
            <tr>
              <td>".$result['Topic']."</td>
              <td class='tda'>".$result['Course']."</td>
              <td>".$result['Faculty_name']."</td>
              <td>".$result['Form_id']."</td>
             
            </tr>
              </table>
            </form>
            
              ";


              echo"
              <form action='Ans.php' method='post'>
              <input type='hidden' value=".$result['Form_id']." name='Form_id'>
            <h6 class='edit-h6'>  SESSION_START();
              $_SESSION[fn]=$result[Form_id];</h6>
                <table class='Pf-table'>
                  <tr>
                    <td>Q1</td>
                    
              <td class='Pf-td'>".$result['Q1']."</td>
              <td>
              <div class='Edit-div'>
              <input type='radio' name='que1' value='Poor'>Poor
                <input type='radio' name='que1' value='Neutral'>Neutral
                <input type='radio' name='que1' value='Good'>Good
               <input type='radio' name='que1' value='Excellent'> Excellent<br></div></td>
               

               </tr>
               <tr>
                <td>Q2</td>
               <td class='Pf-td'>".$result['Q2']."</td>
               <td>
              <div class='Edit-div'>
              <input type='radio' name='que2' value='Poor'>Poor
                <input type='radio' name='que2' value='Neutral'>Neutral
                <input type='radio' name='que2' value='Good'>Good
               <input type='radio' name='que2' value='Excellent'> Excellent<br></div></td>
              
              </tr>
              <tr>
                <td>Q3</td>
               <td class='Pf-td'>".$result['Q3']."</td>
               <td>
              <div class='Edit-div'>
              <input type='radio' name='que3' value='Poor'>Poor
                <input type='radio' name='que3' value='Neutral'>Neutral
                <input type='radio' name='que3' value='Good'>Good
               <input type='radio' name='que3' value='Excellent'> Excellent<br></div></td>

              </tr>
              <tr>
                <td>Q4</td>
               <td class='Pf-td'>".$result['Q4']."</td>
               <td>
              <div class='Edit-div'>
              <input type='radio' name='que4' value='Poor'>Poor
                <input type='radio' name='que4' value='Neutral'>Neutral
                <input type='radio' name='que4' value='Good'>Good
               <input type='radio' name='que4' value='Excellent'> Excellent<br></div></td>

              </tr>
              <tr>
                <td >Q5</td>
               <td class='Pf-td'>".$result['Q5']."</td>
               <td>
              <div class='Edit-div'>
              <input type='radio' name='que5' value='Poor'>Poor
                <input type='radio' name='que5' value='Neutral'>Neutral
                <input type='radio' name='que5' value='Good'>Good
               <input type='radio' name='que5' value='Excellent'> Excellent<br></div></td>
              </tr>

              <tr>
                <td>Q6</td>
               <td class='Pf-td'>".$result['Q6']."</td>
               <td>
              <div class='Edit-div'>
              <input type='radio' name='que6' value='Poor'>Poor
                <input type='radio' name='que6' value='Neutral'>Neutral
                <input type='radio' name='que6' value='Good'>Good
               <input type='radio' name='que6' value='Excellent'> Excellent<br></div></td>

               </tr>
               <tr>
               <td>Q7</td>
               <td class='Pf-td'>".$result['Q7']."</td>
               <td>
               <div class='Edit-div'>
              <input type='radio' name='que7' value='Poor'>Poor
                <input type='radio' name='que7' value='Neutral'>Neutral
                <input type='radio' name='que7' value='Good'>Good
               <input type='radio' name='que7' value='Excellent'> Excellent<br></div></td>
              </tr>
                </table>
                <textarea class='Pf-ta' placeholder='Give Your Suggetions' name='que8'></textarea><br>
                <input type='submit' class='but' >
              </form>";
          }
      }
      else{
          echo "<script>alert('Please Don't fill Form again.It is already submited')</script>";
      }
    ?>

    </table>
</div>  

    </form>
  
</body>
</html>