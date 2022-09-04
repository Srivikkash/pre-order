<?php
    include "config_ol.php";
    $result=mysqli_query($conn,"SELECT * FROM orders");
    $row= mysqli_num_rows($result);

    $Sno= $row ;
    ++$Sno;
    global $Sno;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
$RegNo=$_POST['Reg_Id'];
$SM140=$_POST['SM140'];
$SM500=$_POST['SM500'];
$FCM500=$_POST['FCM500'];
$SM1L=$_POST['SM1L'];
$FCM1L=$_POST['FCM1L'];
$C140=$_POST['C140'];
$C500=$_POST['C500'];
$CUP100=$_POST['CUP100'];
$CUP200=$_POST['CUP200'];
$BTMILK=$_POST['BTMILK'];

$Pro=array(
"S_no"=>$Sno,
"Reg_Id"=>$RegNo,
"SM140"=> $SM140,
"SM500"=> $SM500,
"FCM500"=>$FCM500,
"SM1L"=> $SM1L,
"FCM1L"=>$FCM1L,
"C140"=> $C140,
"C500"=> $C500,
"CUP100"=>$CUP100,
"CUP200"=>$CUP200,
"BTMILK"=>$BTMILK
);  
}

    function myfunction($v)
        {
        return($v);
        }

    function insert($table, $inserts) {
        $values = array_map('myfunction', array_values($inserts));
        $keys = array_keys($inserts); 
        global $conn;  
        return mysqli_query($conn,'INSERT INTO '.$table.' ('.implode(',', $keys).') VALUES (\''.implode('\',\'', $values).'\')');
    }
    
$value=insert('orders',$Pro);

    if ($value === TRUE) {
        echo "<script>alert('Order placed Successfull');
        window.location.replace('index.php');</script>";
    } 
    else
    {   
    //user not exist go back to index page.
    echo "<script>alert('Order Failed Try again');
    window.location.replace('orderList.php?Reg_Id='.$RegNo));</script>";
    }
$conn->close();

?>
