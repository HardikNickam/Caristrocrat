<?php
include 'config.php';
session_start();


$place=$_POST['place'];
$pickupdate=$_POST['pickupdate'];
$returndate=$_POST['returndate'];
$sqlhome = "INSERT INTO `carrental`.`booking` ( `place`, `pickupdate`, `returndate`) VALUES ('$place', '$pickupdate', '$returndate');";
$_SESSION['pickupdate'] = $_POST['pickupdate'];
$_SESSION['returndate'] = $_POST['returndate'];
$_SESSION['place'] = $_POST['place'];

$pd = $pickupdate; 
$rd = $returndate;
// echo $_SESSION['mail'];
// echo "$sqlhome";
if($conn->query($sqlhome) == true){
    // echo"inserted";
}
else{
    echo "ERROR: $sqlhome<br>$conn->error";
}
// $conn->query($Booking);

if(isset($_POST['submit1'])){
    echo "<script>alert('your place and date are added in the database')</script>";
}

// $sqlbooking = "INSERT INTO `carrental`.`finalbooking` (`NAME`, `EMAIL`, `CARNAME`, `PLACE`, `PDATE`, `RDATE`, `TOTAL`) VALUES ('$name' , '$mmail' , '$CCAR' , '$pplace', '$pdate' , '$rdate' , '$TAMOUNT' );";
// if($conn->query($sqlbooking) == true){
//     echo"inserted";
// }
// else{
//     echo "ERROR: $sqlbooking<br>$conn->error";
// }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car rentals website</title>
    <!-- LINK CSS-->
    <link rel="stylesheet" href="homestyle.css">
    <!-- BOX IC-->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="#" class="logo"><img src="img/jeep.png" alt=""></a>
        <div class="tittle">
            <h2><span>CAR</span><span class="cratt">ISTROCRAT</span></h2>
        </div>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Reviews</a></li>
        </ul>
        <div class="header-btn">
            <!-- <a href="#" class="sign-up">Sign Up</a> -->
            <a href="logout.php" class="sign-in">Log out</a>
        </div>

    </header>
    <!--HOME-->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> to <br>rent a car</h1>
            <p>Get the lowest rental car here</p>
            <div class="app-stores">
                <img src="img/ios.png" alt="">
                <img src="img/play.png" alt="">
            </div>
        </div>
        <div class="form-container">
            <form action="home.php #services" method="post">     <!--FORM-->    
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="place" id=""placeholder="Seach Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="pickupdate" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="returndate" id="">
                </div>
                <input type="submit" name="submit1" class="btn" href> <!--yaha hai button ka naam-->
            </form>
        </div>
    </section>
    <!--RIDE-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div> 
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>Choose any location you want your rented car to be availabe we will keep the car ready for you in the specific area in time so that you dont have to worry about wasting your time just to Get Your Car</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check' ></i>
                <h2>Pick-Up Date</h2>
                <p>Choose your dates to rent your car we have services available in various parts of the country especially the famouse tourist attraction where people tend to rent a car dont worry we got you covered</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star' ></i>
                <h2>Book A Car</h2>
                <p>We have a large variey of cars available for your purpose you may want to rent a car for a off road trip or a a smooth cruize ride through highway we got it all as more options is always better</p>
            </div>
        </div>
    </section>
    <!--SERVICE-->
    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out Top Deals <br>From Top Rated Dealers</h1>
        </div> 
        <div class="services-container">
            <!-- <form action="home.php" method="POST"> -->
            <div class="box">
                <div class="box-img">
                    <img src="img/car1.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 Suzuki Wagon R</h3>
                <h2>xxx | 500 <span>/day</span></h2>
                <form action="boking.php" method="post">
                <input type="submit" class="btn" name="submitw" value="Rent Now">
                </form>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car2.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 Honda City</h3>
                <h2>xxx | 1000 <span>/day</span></h2>
                <form action="boking.php" method="post">
                <input type="submit" class="btn" name="submitc" value="Rent Now">
                </form>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car3.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 Jeep Compus</h3>
                <h2>xxx | 1500 <span>/day</span></h2>
                <form action="boking.php" method="post">
                <input type="submit" class="btn" name="submitj" value="Rent Now">
                </form>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car4.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 Innova</h3>
                <h2>xxx | 2000 <span>/day</span></h2>
                <form action="boking.php" method="post">
                <input type="submit" class="btn" name="submiti" value="Rent Now">
                </form>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car5.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 Mercedez C45E</h3>
                <h2>xxx | 2500 <span>/day</span></h2>
                <form action="boking.php" method="post">
                <input type="submit" class="btn" name="submitm" value="Rent Now">
                </form>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/car6.jpg" alt="">
                </div>
                <p>2020</p>
                <h3>2020 BMW Eclass</h3>
                <h2>xxx | 3000 <span>/day</span></h2>
                <form action="boking.php" method="post">
                <input type="submit" class="btn" name="submitb" value="Rent Now">
                </form>
            </div>
        <!-- </form> -->
        </div>
      

    </section>
    <!--ABOUT-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="img/about.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>We at charistrocrat believe in giving the best customer service at the most affordable price.We have some of the biggest car chains for rentals in all of india we can provide you the best service at any part of the country</p>
                <p>We have been in this industry for past 5 years our goal is to help the growing tourism and make rental cars more affordable and easy to book our services is rated the best among other competitors and our aim is to go for the moon we'd like to know your review of our services</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    <!--REVIEWS-->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>What Our Customers Say</h1>
        </div>

        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="img/rev1.jpg" alt="">
                </div>
                <h2>Kartik Singh</h2>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <p>Great service got the car on time and the car was in top condition and everyone was very kind and helpfull. also got the deal for nearly half the prise than what other retailers sell.Great experience</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="img/rev2.jpg" alt="">
                </div>
                <h2>Najimi</h2>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <p>Had some issue with my rented car so i called caristrocrat helpline they fixed me with a replacement as soon as possible and were very cooperative and helpfull.Thats why I recomend caristricrat over other rentals</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="img/rev3.jpg" alt="">
                </div>
                <h2>Micheal Scott</h2>
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <p>Had to visit Jammu during the peak tourist time of december was stuck in a hotel cuz every other car rentals were full then i opened caristrocrat and saw they provided services even in jammu what a life savor. genuinwly a great website and easy to use too</p>
            </div>
        </div>
    </section>

    <!--NEWLETTER-->
    <section class="newsletter">
        <h2>Subscribe To Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your Email...">
            <a href="#" class="btn">Subscribe</a>
        </div>

    </section>
    <!--COPYRIGHT-->
    <div class="copyright">
        <p>&#169 CARISTROCRAT All Right Reserved</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>

    </div>
    <!--SCROLLREVEAL-->
<script src="https://unpkg.com/scrollreveal"></script>

     
<!--LINK JS-->
    <script src="main.js"></script>
</body>
</html>