<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    // collect value of input field
        $name = $_POST['uname'];
        $pno = $_POST['pNO'];
        $area =$_POST['Area'];
    }

    
//connectiong server
include "config_ol.php";

//collect Sno and R_no from user_login database.

$result=mysqli_query($conn,"SELECT * FROM users_login");
$row= mysqli_num_rows($result);

$Sno=$row +1;
$r_no="GKM_".$Sno;

//insert the new user details.
$sql = "INSERT INTO users_login (S_no,Reg_Id,fname, Ph_no, Area) VALUES ($Sno,'$r_no','$name', '$pno', '$area')";

//check the insertion state.   
if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful');
        window.location.replace('index.php');</script>";
    } 
else
    {   
    //user not exist go back to index page.
    echo "<script>window.location.replace('registration.php?invalid_login=true');</script>";
    }

//close database connecion.   
$conn->close();
    ?>