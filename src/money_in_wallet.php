<?php

include('mtrack_db_connection.php');

$result = mysqli_query($con,"SELECT `wallet_amt` FROM `wallet`;");
$row = mysqli_fetch_array($result);

echo $row['wallet_amt'];

//echo $row['wallet_amt'];



?>