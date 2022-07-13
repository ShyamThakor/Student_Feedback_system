<?php
include("connection.php");
session_start();
$rn=$_SESSION['rn'];
@$Form_id=$_POST['Form_id'];
@$Q1=$_POST['que1'];
@$Q2=$_POST['que2'];
@$Q3=$_POST['que3'];
@$Q4=$_POST['que4'];
@$Q5=$_POST['que5'];
@$Q6=$_POST['que6'];
@$Q7=$_POST['que7'];
$Suggestion=$_POST['que8'];
// echo $Suggestion;

$query= "INSERT INTO `ans_form` (`Student_id`,`Form_id`,`Q1`,`Q2`,`Q3`,`Q4`,`Q5`,`Q6`,`Q7`,`Suggestion`) values('$rn','$Form_id','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Suggestion');";
// echo $query;
$data= mysqli_query($con,$query);
if($data)
{
    echo $Suggestion;
    echo "<script>
    alert('Your Response is submitted.Thank you Form giving response');
    window.location.href='Post Feedback.php';
    
    </script>";
}
else{
    echo "<script>
    alert('Submission Faied ,You have already Submitted This Feedback Form');
    window.location.href='Post Feedback.php';
    
    </script>";
}

?>