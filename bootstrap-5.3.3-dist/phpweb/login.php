<?php
$Myemail = "jasperjayme1@gmail.com";
$Mypass = "jasper12";

$Errormsg = $email = $pass = "";
    if (isset($_POST['login'])) {
        $log = true;
        $email = $_POST["email"];
        $pass = $_POST["password"];

        if (empty($email) && empty($pass)) { 
            $log = false; 
            $Errormsg = "Email and Password are required!";
        } elseif (empty($email)) {
            $log = false;
            $Errormsg = "Email is required!";
        } elseif (empty($pass)) {
            $log = false;
            $Errormsg = "Password is required!";
        }


        if($log){ 
            if($email !== $Myemail || $pass !== $Mypass){
                $Errormsg = "Email or Password is Incorrect!";
                $Errormsg = $email = $pass = "";
            }else{
                $Errormsg = "";
                header("Location: ./homepage.php");
                exit();
            }
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/lore.css">
    <title>Login Form</title>
</head>
<body>
    
<div  class="wrapper loginform">

    <div class="form-box login">

        <form method="post" id="loginForm" onsubmit="handleLoginSubmit(event);">
            <h1>LOG IN</h1>
            <div class="underline"></div>
            <?php 
            if (!empty($Errormsg)) {
                echo "<p class='Error' style='color: red; font-weight: bold;'>$Errormsg</p>";
                }
            ?>
            <div class='input-box'>
                <input type='email' name="email"  placeholder='Email'   value="<?php echo $email?> "/>
                <i class="fas fa-envelope icon"></i>
            </div>
            <div class='input-box'>
                <input type='password' name="password" placeholder='Password'   value="<?php echo $pass?>"/>
                <i class="fas fa-lock icon"></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox" />Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type='submit' name="login" id='login' value="login">Login</button>

            <div class="register">
                <p>Don't have an account? <a href="#" onclick="location.href='../phpweb/register.php'">Register</a></p>
            </div>
        </form>
    </div>
        

</body>
</html>