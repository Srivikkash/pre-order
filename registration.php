<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register_Page</title>
</head>
<body>

<?php
if( isset( $_GET['invalid_login'] ) AND $_GET['invalid_login'] == 'true' ) {
    echo "<script>alert('UserName/Phone number Already Exists ');</script>";
    }
?>

    <div class="header">
        <pre><h1>G.K.Milk Agency</h1></pre> THAMMAMPATTY
    </div>
        
    
    <div class="boxing">
<div class="login-form">
<!--Form for New register-->
<form method='post' action='dbmanager.php'>
<h1>New User Register</h1>
    <div class="content">

        <div id="001" class="input-field">
            <input type="text" name='uname' placeholder="Enter name_shop/name" required="">
        </div>

        <div id="002" class="input-field">
            <input type="text" name='pNO' placeholder="Enter phone number" require="" pattern="[6789][0-9]{9}">
        </div>

        <div id="003" class="input-field">
            <input type="text" name='Area' placeholder="Enter Area name" required="">
        </div>

    </div>
    <div id="004" class="action">
    <button>Submit</button>
    </div>
        
</form>

        
<!--form for back button -->
    <form action='index.php'>
        <div id="2" class="action" >
                <button type='submit'>Back</button>
        </div>
        </form>

</div>
</div>
</body>
</html>