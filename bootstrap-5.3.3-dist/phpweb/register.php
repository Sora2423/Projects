<?php
$fname = $lname = $email = $pass = "";
$fnameErr = $lnameErr =$emailErr = $passErr =  ""; 

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field = true;



    if (empty($_POST["fname"])) { 
        $fnameErr = "First Name is required"; 
        $field = false;
    }
    else { 
        $fname = test_input($_POST["fname"]); 
        // check if name only contains letters and whitespace 
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) { 
        $fnameErr = "Only letters and white space allowed";  
        $field = false;
        } 
    }

    if (empty($_POST["lname"])) { 
        $lnameErr = "Last Name is required";
        $field = false; 
    }
    else { 
        $lname = test_input($_POST["lname"]); 
        // check if name only contains letters and whitespace 
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) { 
        $lnameErr = "Only letters and white space allowed";  
        $field = false;
        } 
    }


    if (empty($_POST["email"])) { 
        $emailErr = "Email is required";
        $field = false; 
    }else { 
        $email = test_input($_POST["email"]); 
        // check if e-mail address is well-formed 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $emailErr = "Invalid email format";  
            $field = false; 
        }
    } 

    if (empty($_POST["pass"])) { 
        $passErr = "Password is required";
        $field = false; 
    } else { 
        $pass = test_input($_POST["pass"]);
    }

    if($field){
        //if success go to login page
        header("Location: ./login.php");
        $fname = $lname = $email = $pass = "";
        $fnameErr = $lnameErr = $emailErr = $passErr =  ""; 
        exit();
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../phpweb/components/reghead.php') ?>
</head>
<body>

<div class="wrapper form">
    <div class="form-box register">
            <form method="post" id="registerForm" onsubmit="handleRegisterSubmit(event)">
                <h1>REGISTER</h1>
                <div class="underline"></div>
                <div class='input-box'>     <!-- INPUT FIELD -->
                    <input type='text' name="fname" placeholder='First Name' value ="<?php echo $fname;?>"  />
                    <i class="fas fa-user icon"></i>
                </div>
                <span class="error"><?php echo $fnameErr;?></span> <!-- ERROR MESSAGE -->
                
                <div class='input-box'> <!-- INPUT FIELD -->
                    <input type='text' name="lname" placeholder='Last Name' value= "<?php echo $lname;?>" />
                    <i class="fas fa-user icon"></i>
                </div>
                <span class="error"><?php echo $lnameErr;?></span> <!-- ERROR MESSAGE -->

                <div class='input-box'><!-- INPUT FIELD -->
                    <input type='email' name="email" placeholder='Email' value="<?php echo $email;?>" />
                    <i class="fas fa-envelope icon"></i>
                </div>
                <span class="error"><?php echo $emailErr;?></span><!-- ERROR MESSAGE -->
                
                <div class='input-box'><!-- INPUT FIELD -->
                    <input type='password' name="pass" placeholder='Password' value="<?php  echo $pass; ?>" />
                    <i class="fas fa-lock icon"></i>
                </div>
                <span class="error"><?php echo $passErr;?></span> <!-- ERROR MESSAGE -->

                <div class="remember-forgot">
                    <label><input type="checkbox" />I agree to the terms & conditions</label>
                </div>
                <!-- REGISTER BUTTON -->
                <button type='submit' id='signup'>Register</button>

                <div class="login">
                    <p>Already have an account? <a href="#" onclick="location.href='../phpweb/login.php'">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>