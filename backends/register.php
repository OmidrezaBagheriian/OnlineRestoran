<?php

try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

    echo "<body  onload=\"alert('مشکلی در سرور وجود داشت! لطفا بعد از مدتی دوباره امتحان کنید!');\">";


}

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {

    echo "<body  onload=\"alert('کلیدهای متغیر POST نامعتبر! صفحه را تازه کنید!');\">";


}

$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
//$regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';

$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (  strcmp($_POST['repassword'], $_POST['password'])) {

    echo "<body  onload=\"alert('کلمه عبور و تکرار کلمه عبور یکسان نیستند');\">";



} else {

	date_default_timezone_set("Asia/Kolkata");

	$email = $_POST['email'];
	$name = $_POST['name'];
	$password = $_POST['password'];

	$timest = date("d:m:Y h:i:sa");


	$sql = "SELECT * FROM users WHERE email=?";

	$query  = $pdoconn->prepare($sql);
	$query->execute([$email]);
	$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);

	if (count($arr_login) != 0) {

        echo "<body  onload=\"alert('قبلاً از این ایمیل برای ثبت نام استفاده شده است');\">";




    } else {

		$sql = "INSERT INTO users(name,email,password,timestamp) VALUES(?,?,?,?)";
	    $query  = $pdoconn->prepare($sql);
	    if ($query->execute([$name, $email, $password, $timest])) {

			header('location: ../index.php');
            echo "<body  onload=\"alert('مشخصات کاربری شما با موفقیت ثبت شد. از قسمت ورود اقدام کنید');\">";



        } else {

            echo "<body  onload=\"alert('مشکلی در سرور وجود داشت! لطفا بعد از مدتی دوباره امتحان کنید!');\">";


        }
	}

}
echo "	<link rel=\"stylesheet\" href=\"../css/alert.css\">";
echo "    <script src=\"../js/alert.js\"></script>";