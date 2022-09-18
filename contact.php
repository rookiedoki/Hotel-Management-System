<?php
    include 'myhead1.php';
?>
<body>
    <header>
    <div class="contact-background">
        <div class="header-top">
            <div id="navba">
                    <nav>
                        <input type="checkbox" id="check">
                        <label for="check" class="checkbtn">
                            <img src="img/icons/menu.png" alt="Icon Menu">
                        </label>
                        <label class="logo"><img src="img/logo.png" height="70px"> Vienna Villa Hotel</label>
                          <ul>
                            <li> <a href="indexx.php">HOME</a></li>
                            <li> <a href="about.php">About Us</a></li>
                            <li> <a href="features.php">Features</a></li>
                            <li> <a href="bsect.php">Booking Section</a></li>
                            <li> <a class="active" href="contact.php">Contact Us</a></li>
                            <li> <a href="index.php">Log Out</a></li>
                          </ul>
                    </nav>
            </div>
        </div>
        <div class="main-text">
        <h1>CONTACT US</h1>
        </div>
    </div>
    </header>
    <div class="container-fluid">
            <div class=container3>
            <h5>If you have any questions regarding our booking or services, please contact us by calling or e-mailing us and we'll
            get back to you as soon as possible. We look forward to hearing from you.
            </h5>
            <div class="container" >
                <div class="row">
                    <div class="col" >
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <img src="img/icons/envelope.png" alt="">
                                CONTACT US
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" name="msg" rows="6" placeholder="Your message goes here..." required></textarea>
                                    </div>
                                    <div class="mx-auto">
                                        <button type="submit" name="submit" class="btn btn-dark text-right">Submit</button>
                                    </div>
                                    <?php
                            if(isset($_POST['submit']))
                            
                            {
                                $con=mysqli_connect("localhost","root","","hotel");

                                $new ="Not Conform";
                                        $newUser="INSERT INTO `message` (`name`, `email`, `msg`) VALUES ('$_POST[name]','$_POST[email]','$_POST[msg]')";
                                        if (mysqli_query($con,$newUser))
                                        {
                                            echo "<script type='text/javascript'> alert('Thank you for messaging us! 😊')</script>";
                                            
                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'> alert('Your message is not sent 😕')</script>";
                                            
                                        }
                            }
                            ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card bg-light mb-3">
                            <div class="card-header bg-dark text-white text-uppercase">Address</div>
                                <img src="img/location.jpg" alt="location of Vienna Villa">
                                <div class="card-body">
                                <address>
                                <p><img src="img/icons/geo-alt-fill.svg" height="20px">
                                Renaissance Garden, F. Aquende Dr, Legazpi City, Albay</p>
                                <p><img src="img/icons/telephone-fill.svg" height="20px">
                                <a href="tel:+63245 37534 48">+63245 37534 48</a></p>
                                <p><img src="img/icons/envelope-fill.svg" height="20px">
                                <a href="mailto:hotelviennavilla.com.ph">hotelviennavilla.com.ph</a><br /></p>
                            </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <script type="text/javascript" src="js/script.js"></script>            
</body>
<?php include 'myfooter.php' ?>
</html>
