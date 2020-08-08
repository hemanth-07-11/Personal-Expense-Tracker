<?php

include('mtrack_db_connection.php');

$a = $_POST['exp_name'];
$b = $_POST['exp_amount'];
$c = $_POST['exp_date'];

mysqli_query($con,"INSERT INTO `mtrack`.`expenses` (`exp_name`, `exp_amt`, `exp_date`) VALUES ('$a', '$b', '$c');");

$result = mysqli_query($con,"SELECT `wallet_amt` FROM `wallet`;");
$row = mysqli_fetch_array($result);

$d = $row['wallet_amt'];

$e = $d - $b;

if(mysqli_query($con,"UPDATE `wallet` SET `wallet_amt`='$e' WHERE `wallet_amt` = '$d';"))
	header("Location: mainpage.php");
else
	echo "ERROR";

?>
