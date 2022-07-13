<?php
 include("connection.php");

 @$Topic=$_POST['Ft'];
 @$Course=$_POST['course'];
 @$Faculty_name=$_POST['Fn'];
 @$Form_id=$_POST['FI'];
 @$Q1=$_POST['ques1'];
 @$Q2=$_POST['ques2'];
 @$Q3=$_POST['ques3'];
 @$Q4=$_POST['ques4'];
 @$Q5=$_POST['ques5'];
 @$Q6=$_POST['ques6'];
 @$Q7=$_POST['ques7'];

 $sql="INSERT INTO `feedbackf` ( `Form_id`,`Topic`,`Course`,`Faculty_name`,`Q1`,`Q2`,`Q3`,`Q4`,`Q5`,`Q6`,`Q7`) values ('$Form_id','$Topic','$Course','$Faculty_name','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7');";
 $data= mysqli_query($con,$sql);
 if($data)
 {
    
    echo "<script>alert('Form is uploaded');
    window.location.href='feedbackform.php';
    </script>";
 }
 else{
    echo "<script>alert('Failed to Upload data');
    window.location.href='feedbackform.php';
    </script>";
 }
?>