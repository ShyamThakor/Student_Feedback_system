<?php
include("connection.php");
error_reporting(0);
$Form_id=$_GET['Fi'];
// echo "hello";
echo $Form_id;
$query="DELETE  FROM ans_form where Form_id='$Form_id'";
$data=mysqli_query($con,$query);

$query1="DELETE  FROM feedbackf where Form_id='$Form_id'";
$data1=mysqli_query($con,$query1);

echo $query;
echo $query1;

if($data)
{
     
    echo "<script>alert('Form deleted');
    window.location.href='student_review.php';
    </script>";
}
else{
    echo "<script>alert('Failed to Delete Data');
    window.location.href='student_review.php';
    </script>
    ";
}

?>