<?php
    include 'myhead.php';
?>
    <body>
    <div id="fb-root">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="5aX4UBib"></script></div>
        <header>
            <div class="home-background">
                <div class="header-top">
                    <div id="navba">
                            <nav>
                            <input type="checkbox" id="check">
                            <label for="check" class="checkbtn">
                                <img src="img/icons/menu.png" alt="Icon Menu">
                            </label>
                            <label class="logo"><img src="img/logo.png" height="70px"> Vienna Villa Hotel</label>
                            <ul>
                              <li> <a class="active" href="indexx.php">HOME</a></li>
                              <li> <a href="about.php">About Us</a></li>
                              <li> <a href="features.php">Features</a></li>
                              <li> <a href="bsect.php">Booking Section</a></li>
                              <li> <a href="contact.php">Contact Us</a></li>
                              <li> <a href="index.php">Log Out</a></li>
                            </ul>
                            </nav>
                      </div>
                </div>
          <h1 class="main-text">Come, Stay and Enjoy Your Day!</h1>
          <h3 class="main-text-two">Relaxation Like Never Before</h3>
         <div class = "book">
         <form action="bsect.php" class = "book-form">
                <div class = "form-item">
                    <label for = "rooms">No. of Rooms: </label>
                    <input type = "number" min = "1" max= "10" value = "1" id = "rooms" required>
                </div>
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" id = "chekin-date" required>
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" id = "chekout-date" required>
                </div>
                <div class = "form-item">
                    <input type = "submit" class = "btn" value = "Book Now">
                </div>
            </form>
        </div> 
        </div>
        </header>
        <div class="container-fluid">
        <div class="container2">
          <div class="row">
            <!--START OF FRAMELEFT-->
            <div class="col-sm-12 col-md-8">
              <center>
                <div class="Title1">Find Your Place Here</div>
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="img/pool1.jpg" class="card-img-top" alt="..." style="cursor:pointer" onclick=" onClick(this)">
                        <div class="card-body">
                          <h5 class="card-title">Swimming Pool 1</h5>
                            <p class="card-text">Swim more worry less!</p>
                          <!-- <a href="img/pool1.jpg" class="btn hotelButton">Visit Me</a> -->
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="img/p6.jpg" class="card-img-top" alt="..." style="cursor:pointer" onclick=" onClick(this)">
                        <div class="card-body">
                          <h5 class="card-title">Swimming Pool 2</h5>
                          <p class="card-text">Keeping it cool in the pool!</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="img/pool4.jpg" class="card-img-top" alt="..." style="cursor:pointer" onclick=" onClick(this)">
                        <div class="card-body">
                          <h5 class="card-title">Swimming Pool 3</h5>
                          <p class="card-text">Life's better poolside!</p>
                        </div>
                    </div>
                  </div>
              </div><br />
              <div class="row">
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img src="img/bedroom1.jpg" class="card-img-top" alt="..." style="cursor:pointer" onclick=" onClick(this)">
                      <div class="card-body">
                        <h5 class="card-title">Room 1</h5>
                          <p class="card-text">Sleep like you own it</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img src="img/bedroom2.jpg" class="card-img-top" alt="..." style="cursor:pointer" onclick=" onClick(this)">
                      <div class="card-body">
                        <h5 class="card-title">Room 2</h5>
                          <p class="card-text">Relax as you deserve</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                  <div class="card">
                    <img src="img/bedroom3.jpg" class="card-img-top" alt="..." style="cursor:pointer" onclick=" onClick(this)">
                      <div class="card-body">
                        <h5 class="card-title">Room 3</h5>
                          <p class="card-text">Feel like home</p>
                      </div>
                  </div>
                </div>
              </div>
                <br />
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="img/gym4.jpg" class="card-img-top" height="180x" style="cursor:pointer" onclick=" onClick(this)">
                        <div class="card-body">
                          <h5 class="card-title">Fitness Center 1</h5>
                            <p class="card-text">Every workout counts</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="img/gym2.jpg" class="card-img-top" height="180x" style="cursor:pointer" onclick=" onClick(this)">
                        <div class="card-body">
                          <h5 class="card-title">Fitness Center 2</h5>
                            <p class="card-text">Change takes time</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="card">
                      <img src="img/gym3.jpg" class="card-img-top" height="180x" style="cursor:pointer" onclick=" onClick(this)">
                        <div class="card-body">
                          <h5 class="card-title">Fitness Center 3</h5>
                            <p class="card-text">Be Healthy, and slay!</p>
                        </div>
                    </div>
                  </div>
              </div>
            </center>
          </div>
          <!--START OF FRAME RIGHT-->
          <div class="col-sm-12 col-md-4">
            <center>
            <div class="Title1">Most Visited Place in Vienna Villa Hotel</div>
                <img src="img/v5.jpg" class="modal-hover-opacity" height="220px" width="320px" style="cursor:pointer" onclick="onClick(this)">
                <img src="img/v7.jpeg" class="modal-hover-opacity" height="220px" width="320px" style="cursor:pointer" onclick="onClick(this)">
                <img src="img/gym6.jpg" class="modal-hover-opacity" height="220px" width="320px" style="cursor:pointer" onclick="onClick(this)">
                <img src="img/pool2.jpg" class="modal-hover-opacity" height="220px" width="320px" style="cursor:pointer" onclick="onClick(this)">
            <div id="modal01" class="modal" onclick="this.style.display='none'">
              <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <div class="modal-content">
                <img id="img01" style="max-width:100%">
              </div>
            </div>
            </center>
          </div>
      </div>
    </div>
    </div>
    <!--END OF CLASS CONTAINER FLUID-->

    <!--FACEBOOK PAGE OF HOTEL USING JS-->
    <br /><br />
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <center>
          <div class="Title1">
            Follow us on our FB Page
          </div><br />
          <div class="fb-page" data-href="https://m.facebook.com/sheratonmanila/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://m.facebook.com/sheratonmanila/" class="fb-xfbml-parse-ignore">
            <a href="https://m.facebook.com/sheratonmanila/">Vienna Villa Hotel</a>
            </blockquote>
          </div>
        </center>
      </div>
      <!--NEWSLETTER-->
      
      <div class="col-sm-12 col-md-6">
        <center>
          <div class="Title1">
            Subscribe to our Newsletter
          </div><br />
          <div class="Title2">
            Keep updated with our latest news and promo.
            Join our mailing list
          </div><br />
          <form class="" action="newsletter.php" method="post">
            <input class="hotelTB" type="email" name="myEmail" value="" required>
            <button class="hotelSB" type="submit" name="button"><img src="img/icons/bell-fill.svg" alt=""> SUBSCRIBE</button>
          </form><br />
        </center>
      </div>
</div>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

            <script type="text/javascript" src="js/script.js"></script>
            <script>
            function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            }      
          </script>
    </body>
    <br /><br /><br /><br />
    <?php include 'myfooter.php' ?>
</html>
