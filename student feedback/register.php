<?php
$insert = false;
if(isset($_POST['Firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $f_name = $_POST['Firstname'];
    $l_name = $_POST['Lastname'];
    $password = $_POST['Password'];
    $Phone_no = $_POST['Phone'];
    @$profession=$_POST['type'];
    @$Faculty_id = $_POST['Facultyid'];
    @$Student_id = $_POST['Studentid'];
    @$Course = $_POST['course'];
    $Img = $_POST['Image'];
    $Dob = $_POST['Dob'];
    $sql = "INSERT INTO `stuf1`.`registration` (`f_name`, `l_name`, `Password` ,`profession`,`Phone_no`, `Faculty_id`, `Student_Id`, `Course`, `Img` , `Dob`) VALUES ('$f_name', '$l_name', '$password','$profession','$Phone_no', '$Faculty_id','$Student_id', '$Course', '$Img' , '$Dob');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="validation.js">

    </script>
</head>
<body>
	<div class="navbar">
		<h1><span>O</span>nline <span>S</span>tudent <span>F</span>eedback</h1>
		<div class="nav-1">
		<ul>	
			<li><a href="index.html">Home</a></li>
			<li><a href="register.php">Registration</a></li>
			<li><a href="contact.html">Contact us</a></li>
		</ul>
		</div>
	</div>
 <section class="Registration">
 
 	<h1 class="Registration-h1">Registation Form</h1>

     <form class="form" autocomplete="off" action="register.php"  method="POST" onsubmit="return validation()">
  
 	<label class="f-name">FirstName</label>
 		<input class="First-name" type="Firstname" name="Firstname" id="Firstname" placeholder="Firstname" required>
        <label class="l-name">LastName</label>
 		<input class="Lastname" type="Lastname" name="Lastname" id="Lastname" placeholder="Lastname" required>
 		
 		<label class="pass">Password</label>
 		<input type="password" name="Password" placeholder="Enter your Password" id="Password" required>

 		<span id = "message" style="color:red"> </span>

 		<label class="pn">Phone</label>
 		<input type="number" name="Phone" placeholder="Phone number" id="Phone" required><br>
         <span id = "message1" style="color:red"> </span>
         
		 <label class="type1">Proffesion:</label>
		 <select name="type" id="type" onchange="disablefaculty()">
			 <option value="..">--select--</option>
			 <option value="Student" >Student</option>
			 <option value="Faculty member">Faculty member</option>
		 </select>

		 <label class="S-id">Student ID No</label>
 		<input type="text" name="Studentid" placeholder="Enter your Id No" id="Studentid" required><br>

 		 <label class="F-id">Faculty No</label>
 		<input type="text" name="Facultyid" placeholder="Enter your No" id="Facultyid" required><br>

 		<!-- <label class="pn">E-mail</label>
 		<input type="email" name="Email" placeholder="E-mail" id="Email" required><br> -->
 	
 		<!-- <label class="Ge">Gender</label>
 		
 		<input type="radio" id="male" name="gender" value="male">
 		<label>Male</label>
 	
        <input type="radio" id="female" name="gender" value="female">
        <label>Female</label>
        
        <input type="radio" id="other" name="gender" value="other">
        <label>Others</label> -->
    
       <label class="cou">Course:</label>
       <select name="course" id="course">
       	<option value="Course">Course</option>
       	<option value="B.tech">B.tech</option>
       	<option value="M.tech">M.tech</option>
       </select>

       <br> 
       <label class="img">Image :</label>
       <input type="file" name="Image" alt="choose file" id="Image"><br>
       <label class="Dob">Date Of Birth</label>
       <input type="date" name="Dob" id="Dob"><br>
       <input class="btn-9" type="Submit" name="Submit" id="Submit">
	
 
 	</form>
 </section>
 <script type="text/javascript">
     function disablefaculty()
     {
         var status= document.getElementById("type");
         if(status.value == "Student")
         {
             document.getElementById("Facultyid").innerHTML="Null";
             document.getElementById("Facultyid").disabled="true";
         }
         if(status.value == "Faculty member")
         {
            document.getElementById("Studentid").innerHTML="Null";
            document.getElementById("Studentid").disabled="true";

            document.getElementById("course").innerHTML="Null";
            document.getElementById("course").disabled="true";
         }
     }    
   
 </script>

</body>
</html>