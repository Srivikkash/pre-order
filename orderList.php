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

    <form method='post' action='orderRecheck.php'>

        <div class="login-form">
        <h1 align=center>Orders</h1> <hr> 
            <h4 align=center><?php
            // collect value of input field
            if($_GET){
                $RegNo= $_GET['Reg_Id'];
                echo "$RegNo";     
            }
            ?></h4>


        <input type='hidden' name='Reg_Id' value="<?=$RegNo?>">
        <table  id=ordertable style='margin-top:20px'>
<tr colspan=2 >
        <td colspan="2"><div id="001" class="input-field">
            <h5>SM 140ML</h5>
            <input type="number" min="0"name='SM140' value=0>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="002" class="input-field">
            <h5>SM 500ML</h5>
            <input type="number" min="0"name='SM500'  value=0>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="003" class="input-field">
            <h5>FCM 500ML</h5> 
            <input type="number" min="0"name='FCM500'  value=0>
        </div></td>
</tr>
<tr>   
        <td colspan="2"><div id="004" class="input-field">
            <h5>SM 1L</h5>
            <input type="number" min="0"name='SM1L' value=0>
        </div></td>
</tr>
<tr> 
        <td colspan="2"><div id="005" class="input-field">
            <h5>FCM 1L</h5>
            <input type="number" min="0"name='FCM1L' value=0>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="006" class="input-field">
            <h5>CURD 140</h5>
            <input type="number" min="0"name='C140' value=0>
        </div></td>
</tr>
<tr>       
        <td colspan="2"><div id="007" class="input-field">
            <h5>CURD 500</h5>
            <input type="number" min="0"name='C500' value=0>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="008" class="input-field">
            <h5>CUP 100</h5>
            <input type="number" min="0"name='CUP100' value=0>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="009" class="input-field">
            <h5>CUP 200</h5>
            <input type="number" min="0"name='CUP200' value=0>
        </div></td>
</tr>
<tr>
        <td colspan="2"><div id="010" class="input-field">
            <h5>BUTTER MILK</h5>
            <input type="number" min="0"name='BTMILK' value=0>
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
        </div>
</tr>  
</table>
    </div>
    </body>
    </html>