<?php
    include 'myhead1.php';
?>
<body>
    <header>
    <div class="bsect-background">
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
                            <li> <a class="active" href="bsect.php">Booking Section</a></li>
                            <li> <a href="contact.php">Contact Us</a></li>
                            <li> <a href="index.php">Log Out</a></li>
                          </ul>
                    </nav>
            </div>
        </div>
        <div class="main-text">
        <h1>BOOKING SECTION</h1>
        </div>
        </div>
    </header>
    <div class="container-fluid">
    <div class="container3">
        <h4></h4>
        <h5>Make Yourself At Home At Our Hotel</h5>
    <div class="row">
            <div class="col-md-6">
                <img src="img/c.jpg" class="img-fluid" height="765px" alt="front">
            </div>
            <div class="col-md-6">
                <div class="book1">
                <form name="form" method="post">

                    <div class=row>
                    <div class="form-group">
                        <label>First Name</label>
                        <input name="fname" class="form-control" required>
                    </div>                    
                    </div>
                    
                    <div class="row">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input name="lname" class="form-control" required>
                    </div>                       
                    </div>
                    
                    <div class="row">
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>                        
                    </div>

                    <div class="row">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input name="phone" type ="text" class="form-control" required>                     
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group">
                        <label>Type Of Room </label>
                            <select name="troom"  class="form-control" required>
                                <option value selected ></option>
                                <option value="Superior Room">SUPERIOR ROOM</option>
                                <option value="Deluxe Room">DELUXE ROOM</option>
                                <option value="Guest House">GUEST HOUSE</option>
                                <option value="Single Room">SINGLE ROOM</option>
                            </select>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group">
                        <label>Bedding Type</label>
                            <select name="bed" class="form-control" required>
                                <option value selected ></option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Triple">Triple</option>
                                <option value="Quad">Quad</option>
                                <option value="None">None</option>
                            </select>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group">
                        <label>No.of Rooms </label>
                            <select name="nroom" class="form-control" required>
                                <option value selected ></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group">
                        <label>Meal Plan</label>
                            <select name="meal" class="form-control"required>
                                <option value selected ></option>
                                <option value="Room only">Room only</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Half Board">Half Board</option>
                                <option value="Full Board">Full Board</option>
                            </select>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Check-In</label>
                            <input name="cin" type ="date" class="form-control">              
                        </div>
                        <div class="col">
                            <label>Check-Out</label>
                            <input name="cout" type ="date" class="form-control">               
                        </div>
                    </div>
                    <div class="row">
                    <h6>HUMAN VERIFICATION</h6>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p>
						<p>Enter the random code
							<input type="text" class="col" name="code1" title="random code" required/>
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" required/>
                        </p>
						<div class="row">    
                        <button type="submit" name="submit" class="submitButton">Submit Reservation</button>
                        </div>
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}
                                    else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database hotel')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
                    </div>
                </form>
                </div>  
            </div>
    </div>    
    </div>    
    </div>    
    <script type="text/javascript" src="js/script.js"></script>    
</body>
<?php include 'myfooter.php' ?>
</html>
