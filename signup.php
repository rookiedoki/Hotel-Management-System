<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/formstyle.css"/>
</head>
<body>
<?php
    $con = mysqli_connect("localhost","root","","hotel");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (isset($_REQUEST['name'])) {
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $mobile = stripslashes($_REQUEST['mobile']);
        $mobile = mysqli_real_escape_string($con, $mobile);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (name, email, mobile, password)
                     VALUES ('$name',  '$email',  '$mobile','" . md5($password) . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3 style='color:white; text-align:center;'>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3 style='color:white; text-align:center;'>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>Sign Up</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
    <center><img src="img/logo.png" class="img-fluid" width="100px" alt="logo"></center>
        <h1 class="login-title">Sign Up</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="text" class="login-input" name="mobile" placeholder="Phone Number">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
