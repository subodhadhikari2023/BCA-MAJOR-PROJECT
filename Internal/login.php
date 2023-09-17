<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="shortcut icon" href="../Images/Logos/logo.ico" type="image/x-icon">

</head>

<body>
    <?php
    if ($_SESSION) {
        session_destroy();
    } ?>
    <form action="../PHP/operation.php" class="signup-form" method="post">
        <div class="form-header">
            <a href="#">
                <h1>E-Clinic</h1>
            </a>
        </div>
        <div class="form-body">
            <div class="form-group">
                <label for="email" class="label-title">Email*</label>
                <input type="email" id="email" class="form-input" name="email" placeholder="enter your email"
                    required="required" />
            </div>
            <div class="form-group">
                <label for="password" class="label-title">Password </label>
                <input type="password" name="password" class="form-input" id="password" placeholder="Password"
                    required="required" />

                <div class="form-footer">
                    <button type="submit" value="Login" class="btn" name="action">Log In</button>
                    <button class="btn" style="float: left;"><a href="../index.html">Sign up</a></button>

                </div>
            </div>
        </div>
    </form>
</body>

</html>