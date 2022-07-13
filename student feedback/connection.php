<?php
       $server = "localhost";
       $username = "root";
       $password = "";
       $dbname="stuf1";
       
       $con= mysqli_connect($server,$username, $password,$dbname);
       if($con)
       {
           
           //echo "connection is done";
       }
       else{
        //    echo "connection faild" . mysqli_connect_error();
       }
?>