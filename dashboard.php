<?php
include("auth_session.php");
?>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dashboard-style.css?version=51"/>
</head>

<body>
<p>Hey, <?php echo $_SESSION['username']; ?>!</p>

    <div class="header">
        <h1>Get CovidFreeNated</h1>
        <p>Vaccine Slot Booking</p>
    </div>

    <div class="navbar">
        <a href="#footer">Got to Bottom</a>
        <a href="bookings.php">My Bookings</a>

    </div>

    <div class="row">
        <div class="side">
        <?php
    require('db.php');

    if (isset($_POST['fname'])) {
        $booking_account_id=stripslashes($_SESSION['username']);
        $booking_account_id = mysqli_real_escape_string($con, $booking_account_id);
        $fname = stripslashes($_REQUEST['fname']);
        $fname = mysqli_real_escape_string($con, $fname);
        $age =$_REQUEST['age'];
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);
        $date = stripslashes($_REQUEST['date']);
        $date = mysqli_real_escape_string($con, $date);
        $query    = "INSERT into `bookings` (Name, Age, Address, Bookings_Date, Booking_Account_Id)
        VALUES ('$fname', $age, '$address', '$date','$booking_account_id')";
        $result   = mysqli_query($con, $query);
        if($result){
            header("Location: bookings.php");
        }else{
            echo "<div class='form'>
            <h3>There was an error !!</h3><br/>
            </div>";
        }
        }
    else {
?>
    <h2>Book Slot</h2>
            <form class="form" method="post" name="book">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="age">Age:</label><br>
                <input type="number" id="age" name="age"><br>
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address"><br>
                <label for="date">Select Vaccination Date:</label><br>
                <input type="date" id="date" name="date"><br><br>
                <input type="submit" value="Submit">

            </form>
<?php
    }
?>
           
        </div>
        <div class="main">
            <h2>Is online registration mandatory for Covid 19 vaccination?</h2>
            <img class="fakeimg"
                src="https://wwwassets.rand.org/content/rand/blog/2020/08/its-going-to-be-the-vaccination-stupid/jcr:content/par/teaser.aspectfit.0x1200.jpg/1598296544648.jpg"
                style="height:200px;"></img>
            <p>
                Vaccination Centres provide for a limited number of on-spot registration slots every day. Beneficiaries
                aged 45 years and above can schedule appointments online or walk-in to vaccination centres.
                Beneficiaries aged 18 years and above can schedule appointments online or walk-in to Government
                vaccination centres. However, beneficiaries aged 18-44 years should mandatorily register themselves and
                schedule appointment online before going to a Private vaccination centre.

                In general, all beneficiaries are recommended to register online and schedule vaccination in advance for
                a hassle-free vaccination experience.</p>
            <br>
            <h2>Where will I receive confirmation of date and time of vaccination?</h2>
            <img class="fakeimg" src="https://www.jhsph.edu/sebin/z/z/SARS-CoV-2-vaccine-820x440.jpg"
                style="height:200px;"></img>
            <p>
                Once an appointment is scheduled, you will receive the details of the vaccination centre, date and time
                slot chosen for appointment in an SMS sent to your registered mobile number. You can also download the
                appointment slip and print it or keep it on your smart phone.</p>
        </div>
    </div>

    <div class="footer" id="footer">
        <address>
            Made by <a href="mailto:hs6789@srmist.edu.in">Himanshu Singh RA1911031010011</a>.<br>
        </address>
        <p><a href="logout.php">Logout</a></p>
    </div>

</body>

</html>