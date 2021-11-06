<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("db.php");
?>

<html lang="en">

<head>
    <title>My Bookings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Style the body */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Header/logo Title */
        .header {
            padding: 80px;
            text-align: center;
            background: #1abc9c;
            color: white;
        }

        /* Increase the font size of the heading */
        .header h1 {
            font-size: 40px;
        }

        /* Column container */
        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
        }

        /* Main column */
        .main {
            -ms-flex: 70%;
            /* IE10 */
            flex: 70%;
            background-color: white;
            padding: 20px;
        }

        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
            .row {
                flex-direction: column;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .navbar a {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Get CovidFreeNated</h1>
        <p>Your Bookings</p>
    </div>
    <?php

$accid=$_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM Bookings WHERE Booking_Account_Id='$accid' ");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Date of Vaccination</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['Bookings_Date'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>

</html>