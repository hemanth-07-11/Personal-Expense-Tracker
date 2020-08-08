<?php

include('mtrack_db_connection.php');

$a = $_POST['wallet_money'];

$result = mysqli_query($con,"SELECT `wallet_amt` FROM `wallet`;");
$row = mysqli_fetch_array($result);

$b = $row['wallet_amt'];

$c = $a + $b;

if(mysqli_query($con,"UPDATE `wallet` SET `wallet_amt`='$c' WHERE `wallet_amt` = '$b';"))
	header("Location: mainpage.php");
else
	echo "ERROR";


?>