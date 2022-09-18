<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/formstyle.css"/>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","hotel");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            header("Location: indexx.php");
        } else {
            echo "<div class='form'>
                  <h2 style='color:white; text-align:center;'>Incorrect email/password.</h2><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <center><img src="img/logo.png" class="img-fluid" width="100px" alt="logo"></center>
        <h1 class="login-title">Welcome to Vienna Villa</h1><br /><br />
        <input type="emai;" class="login-input" name="email" placeholder="Email" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/><br />
        <p class="link">Don't have an account? <a href="signup.php">Sign Up Now</a></p>
    </form>
<?php
    }
?>
</body>
</html>
