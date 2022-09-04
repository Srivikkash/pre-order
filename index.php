<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN_PAGE</title>
    
</head>
<body>

<?php
if( isset( $_GET['invalid_login'] ) AND $_GET['invalid_login'] == 'true' ) {
    echo "<script>alert('UserName/Phone number Invalid ');</script>";
    }
?>

<div class="header">
    <pre><h1>G.K.Milk Agency</h1></pre> THAMMAMPATTY
</div>
        
    
<div class="boxing">
    <div class="login-form">
<!--Form for login details-->
    <form method='post' action='validation.php'>
        <h1>Login</h1>
        <div class="content">

            <div id="001" class="input-field">
                <input type="text" name='uname' placeholder="Enter Username" require="">
            </div>

            <div id="002" class="input-field">
                <input type="text" name='pNO' placeholder="Enter phone number" require="" pattern="[6789][0-9]{9}">
            </div>

        </div>
        <div id="004" class="action">
        <button>Submit</button>
        </div>
            
    </form>
<!--Form for New registor button-->
    <form action='registration.php'>
    <div id='005' class="action">
            <button type='submit'>New user register</button>
    </div>
    </form>
 
</div>
</div>

</body>
</html>