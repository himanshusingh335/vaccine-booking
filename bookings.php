<?php

include("auth_session.php");
include("db.php");
?>

<html lang="en">

<head>
    <title>My Bookings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dashboard-style.css"/>
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