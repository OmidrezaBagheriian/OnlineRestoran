<?php
include_once("../backends/connection-pdo.php");

if (!isset($_POST['email']) || !isset($_POST['password'])) {

	$_SESSION['msg'] = 'کلیدهای متغیر POST نامعتبر! صفحه را تازه کنید!';

	header('location: index.php');

	exit();
}


$email=$_POST['email'];
$password=$_POST['password'];


$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);


if (count($arr_login) > 0) {

	foreach($arr_login as $val)
	{
	   $tmp_name= $val['name'];

	}


	session_start();
    $_SESSION['username']=$tmp_name;
    $_SESSION['msg']="ورود شما با موفقیت انجام شد";
    header('location: dashboard.php');

} else {
	session_start();
	$_SESSION['msg']="نام کاربری یا کلمه عبور اشتباه است";
	header('location: index.php');
}



?>