<?php      
//connectiong server.
    $server_name='localhost';
    $username='root';
    $password='';
    $database_name='orderlist';
    $conn=mysqli_connect($server_name,$username,$password,$database_name);

// Check connection.
    if ($conn->connect_error)
        {
        die("Connection failed: "
            . $conn->connect_error);
        }
?>