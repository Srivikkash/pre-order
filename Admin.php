<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <div class="header">
    <h1> G.K.MILK</h1>
    </div>
        <div>
            <?php
//connectiong server.
            include "config_ol.php";
            ?>
        </div>
<!-- Form to display the product order details-->
        <div class='login-form' style="width:100%;height:auto; " >
        <?php
//collecting datas from orderdb.
            $sql = "SELECT orders.S_no ,orders.Reg_Id ,users_login.fName ,
            users_login.Ph_no , orders.sub_date ,orders.SM140 ,orders.SM500 ,
            orders.FCM500 ,orders.SM1L ,orders.FCM1L ,orders.C140 ,orders.C500 ,
            orders.CUP100 ,orders.CUP200 , orders.BTMILK 
            FROM orders 
            INNER JOIN users_login 
            ON orders.Reg_Id = users_login.Reg_Id;";
            // $name = "SELECT fName,Ph_no from users_login where S_no in (SELECT S_no from orders);";
            $result = $conn->query($sql);
        ?>
                
<!-- pretty table -->


<table border='2' id=ordertable>
<tr>
    <th>S_no </th>
    <th>Reg_Id</th>
    <th>Name</th>
    <th>Phone number</th>
    <th>Submit_Date</th>
    <th>SM140</th>
    <th>SM500</th>
    <th>FCM500</th>
    <th>SM1L</th>
    <th>FCM1L</th>
    <th>C140</th>
    <th>C500</th>
    <th>CUP100</th>
    <th>CUP200</th>
    <th>BTMILK</th>
</tr>

<?php
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {?>
    <tr>
    <td><?php echo $row["S_no"];?></td>
    <td><?php echo $row["Reg_Id"];?></td>
    <td><?php   echo $row["fName"]  ?></td>
    <td><?php   echo $row["Ph_no"] ?></td>
    <td><?php echo $row["sub_date"];?></td>
    <td><?php echo $row["SM140"];?></td>
    <td><?php echo $row["SM500"];?></td>
    <td><?php echo $row["FCM500"];?></td>
    <td><?php echo $row["SM1L"];?></td>
    <td><?php echo $row["FCM1L"];?></td>
    <td><?php echo $row["C140"];?></td>
    <td><?php echo $row["C500"];?></td>
    <td><?php echo $row["CUP100"];?></td>
    <td><?php echo $row["CUP200"];?></td>
    <td><?php echo $row["BTMILK"];?></td>
</tr>
    <?php }
        }
    else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </table>
    <form action='index.php'> 
        <div id="2" class="action" >
                <button type='submit'>Back</button>
        </div>
        </form>
</div>
</div>
<!--form for back button -->
        

</body>
</html>