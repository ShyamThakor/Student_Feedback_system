<?php
include("connection.php");
$username=$_POST['An'];
$Password=$_POST['pa'];
$query="Insert into admin (`username`,`Password`) values ('$username','$Password');";
$data= mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('New Admin Added');
    window.location.href='admin.php';
    </script>
    ";
}
else{
    echo "<script>alert('Failed to Add New Admin');
    window.location.href='admin.php';
    </script>
    ";
  
}

?>
