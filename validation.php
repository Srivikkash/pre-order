<?php
include "config_ol.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field.
    $name = $_POST['uname'];
    $pno = $_POST['pNO'];

//validate user existance.
    $sql="SELECT Reg_Id from users_login where fname='$name' and Ph_no='$pno'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error());
    $reg = mysqli_fetch_array($result);
    $numrows = mysqli_num_rows($result);
    if($numrows > 0)
        {
//user exist got to check function.
            check($name,$pno,$reg);
        }
            
    //user not exist go back to index page.
    else
    {   
    //user not exist go back to index page.
    header("Location:index.php?invalid_login=true");
    }
    
}

//check weather the user is an admin user or a regular user.       
function check($name,$pno,$reg){
$regno=(string)$reg[0];
if ($regno=='GKM_1') 
{
//user is an admin user redirect to Admin page.
    header("location: Admin.php");
    exit();
}
else
{
//user is a regular user redirect to orderList page.
    header("location: orderList.php?Reg_Id=".$regno);
    exit();
}
}
?>