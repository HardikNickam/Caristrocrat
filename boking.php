<?php

include 'config.php';
session_start();

$name= $_SESSION['username'];
$mail=$_SESSION['email'];
$pdate=$_SESSION['pickupdate'];
$rdate=$_SESSION['returndate'];
$pplace=$_SESSION['place'];
$mmail=$_SESSION['email'];
// $car=$_SESSION['car'];
// $datediff=dateDiffInDays($pdate, $rdate);
$pday;

if(isset($_POST['submitw'])){
    $car = 'WagonR';
    $_SESSION["CAR"] = $car;
    $pday = 500;
    $_SESSION["PDAY"] = $pday;
}
elseif(isset($_POST['submitc'])){
    $car='Honda City';
    $_SESSION["CAR"] = $car;
    $pday = 1000;
    $_SESSION["PDAY"] = $pday;
}
elseif(isset($_POST['submitj'])){
    $car = 'Jeep Compus';
    $_SESSION["CAR"] = $car;
    $pday = 1500;
    $_SESSION["PDAY"] = $pday;

}
elseif(isset($_POST['submiti'])){
    $car = 'Innova';
    $_SESSION["CAR"] = $car;
    $pday = 2000;
    $_SESSION["PDAY"] = $pday;
}
elseif(isset($_POST['submitm'])){
    $car = 'Mercedez C45E';
    $_SESSION["CAR"] = $car;
    $pday= 2500;
    $_SESSION["PDAY"] = $pday;
}
elseif(isset($_POST['submitb'])){
    $car = 'BMW Eclass';
    $_SESSION["CAR"] = $car;
    $pday= 3000;
    $_SESSION["PDAY"] = $pday;
}
else{
    // echo "<scripit>alert('select a car to book')";
}
$datediff;
// $datediff=date_diff($pdate, $rdate);

// $diff = strtotime($rdate) - strtotime($pdate1);
// $datediff=abs(round($diff / 86400));

function dateDiff($date1, $date2)
{
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400);
}
$PDAY = $_SESSION["PDAY"];

$datediff = dateDiff($pdate, $rdate);
$_SESSION["datediff"] = $datediff;
$DATEDIFF = $_SESSION["datediff"];

$AMOUNT = $DATEDIFF * $PDAY ;

$_SESSION["AMOUNT"] = $AMOUNT;

$TAMOUNT = $_SESSION["AMOUNT"]; 

$CCAR = $_SESSION["CAR"];

// $_SESSION["CAR"] = $car;

// $AMOUNT = $_SESSION["AMOUNT"]; 
// $car= $_SESSION["CARNAME"];

// if(isset($_POST['submitw']) || isset($_POST['submitc']) || isset($_POST['submitj']) || isset($_POST['submiti']) || isset($_POST['submitm']) || isset($_POST['submitb'])){
//     echo"inserted";
// }
// else{
//     echo "ERROR: $sqlhome<br>$conn->error"; 
// }

// $sql = "SELECT * FROM finalbooking WHERE ='$email' AND password='$password'";

// $sqlbooking = "INSERT INTO `finalbooking` (`uname`, `eemail`, `pplace`, `pdate`, `rdate`, `amount`) VALUES ($name , $mmail , $pplace , $pdate , $rdate ,  $datediff * $pday);";

// $name , $mmail , $pplace , $pdate , $rdate ,  $datediff * $pday



$sqlbooking = "INSERT INTO `carrental`.`finalbooking` (`NAME`, `EMAIL`, `CARNAME`, `PLACE`, `PDATE`, `RDATE`, `TOTAL`) VALUES ('$name' , '$mmail' , '$CCAR' , '$pplace', '$pdate' , '$rdate' , '$TAMOUNT' );";
$_SESSION['sqlbooking'] = $sqlbooking;
$Booking = $_SESSION['sqlbooking'];
if($conn->query($sqlbooking) == true){
    echo"inserted";
}
else{
    echo "ERROR: $sqlbooking<br>$conn->error";
}


if(isset($_POST['booking'])){
   
    echo "<script>alert('your car is booked ')</script>";
     
}
// if($conn->query($sqlbooking) == true){
//     echo "inserted";

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
    <!--NAVBAR-->
    <header>
        <a href="#" class="logo"><img src="img/jeep.png" alt=""></a>
        <!-- <h2><span>CAR</span><span class="cratt">ISTROCRAT</span></h2> -->
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
    <!--CONFORMATION BOOKING-->
    <div class="booking-form">
        <form action="boking.php" method="post">
            <div class="NAME">
                <label for="">name:</label> <?php echo "$name"; ?> 
                </div>
            <div class="EMAIL">
                <label for="">email: </label> <?php echo "$mmail"; ?>
            </div>
            <div class="CARNAME">
                <span>car:</span> <?php echo "$CCAR"; ?> 
            </div>
            <div class="PLACE">
                <span>place:</span> <?php echo "$pplace"; ?> 
            </div>
            <div class="PDATE">
                <span>pickup date:</span> <?php echo "$pdate"; ?>

            </div>
            <div class="RDATE">
                <span>return date:</span> <?php echo "$rdate"; ?>
            </div>
            <div class="TOTAL">
                <span>Total Amount:</span> <?php echo "$TAMOUNT"; ?>
            </div>
            <input type="submit" name="booking" class='btn' value="Conform Booking">  
        </form>
    </div>


    <script src="main.js"></script>
    
</body>
</html>

<!-- INSERT INTO `carrental`.`finalbooking` ( `username`, `car`, `place`, `pickupdate`, `returndate`, `amount`) VALUES ('dd', 'WagonR', 'pune', '2021-11-24', '2021-11-25', '500'); -->

