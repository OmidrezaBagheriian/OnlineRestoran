<?php

session_start();

try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

    echo "<body  onload=\"alert('مشکلی در سرور وجود داشت! لطفا بعد از مدتی دوباره امتحان کنید!');\">";

	
}

if (!isset($_SESSION['user']) || !isset($_SESSION['user_id'])) {
	$_SESSION['msg'] = "برای سفارش ابتدا باید وارد حساب کاربری خود شوید";
	header('location: ../foods.php');
	exit();
}

if (!isset($_REQUEST['id'])) {
	$_SESSION['msg'] = "آیتم انتخاب شده معتبر نمی باشد";
	header('location: ../foods.php');
	exit();
}

date_default_timezone_set("Asia/Kolkata");

$food_id = $_REQUEST['id'];

$user_name = $_SESSION['user'];

$user_id = $_SESSION['user_id'];

$order_id = "RSTGF" . strval(mt_rand(100000, 999999));

$timest = date("d:m:Y h:i:sa");


$sql = "INSERT INTO orders(order_id,user_id,food_id,user_name, timestamp) VALUES(?,?,?,?,?)";

$query  = $pdoconn->prepare($sql);

if ($query->execute([$order_id, $user_id, $food_id, $user_name, $timest])) {

	$_SESSION['msg'] =  ' ثبت شد '.$order_id. 'سفارش شما با شماره ';

	header('location: ../foods.php');
	
} else {

	$_SESSION['msg'] = 'مشکلی در سرور وجود داشت! لطفا بعد از مدتی دوباره امتحان کنید';

	header('location: ../foods.php');

}

echo "	<link rel=\"stylesheet\" href=\"../css/alert.css\">";
echo "    <script src=\"../js/alert.js\"></script>";