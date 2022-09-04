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
            <pre><h1>G.K.Milk Agency</h1></pre> THAMMAMPATTY

        </div>

        <form method='post' action='orderdb.php'>

                <div class="login-form">
                <h1 align='center' >ReCheck Your Order</h1> <hr> 

<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
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

    echo "<h4 align=center>$RegNo</h4>";      
}

?>

    <input type='hidden' name='Reg_Id' value="<?=$RegNo?>">
    <table  id=ordertable style='margin-top:20px'>
<tr colspan=2 >
        <td colspan="2"><div id="001" class="input-field">
            <h5>SM 140ML</h5>
            <input type="number" min="0"name='SM140' value=<?php echo $SM140 ?>>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="002" class="input-field">
            <h5>SM 500ML</h5>
            <input type="number" min="0"name='SM500'  value=<?php echo  $SM500?>>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="003" class="input-field">
            <h5>FCM 500ML</h5> 
            <input type="number" min="0"name='FCM500'  value=<?php echo  $FCM500?>>
        </div></td>
</tr>
<tr>   
        <td colspan="2"><div id="004" class="input-field">
            <h5>SM 1L</h5>
            <input type="number" min="0"name='SM1L' value=<?php echo  $SM1L?>>
        </div></td>
</tr>
<tr> 
        <td colspan="2"><div id="005" class="input-field">
            <h5>FCM 1L</h5>
            <input type="number" min="0"name='FCM1L' value=<?php echo  $FCM1L?>>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="006" class="input-field">
            <h5>CURD 140</h5>
            <input type="number" min="0"name='C140' value=<?php echo  $C140?>>
        </div></td>
</tr>
<tr>       
        <td colspan="2"><div id="007" class="input-field">
            <h5>CURD 500</h5>
            <input type="number" min="0"name='C500' value=<?php echo  $C500?>>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="008" class="input-field">
            <h5>CUP 100</h5>
            <input type="number" min="0"name='CUP100' value=<?php echo  $CUP100?>>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="009" class="input-field">
            <h5>CUP 200</h5>
            <input type="number" min="0"name='CUP200' value=<?php echo  $CUP200?>>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="010" class="input-field">
            <h5>BUTTER MILK</h5>
            <input type="number" min="0"name='BTMILK' value=<?php echo  $BTMILK?>>
        </div></td>
</tr>
<tr>
        <td><div id="011" class="action">
        <button>Submit</button>
        </div></td>

        <td></form>
        <form action='index.php'>
            <div id="2" class="action" >
                    <button type='submit'>Back</button>
            </div>
            </form></td>
</tr>  
</table>
</div>
</div>
</body>
</html>