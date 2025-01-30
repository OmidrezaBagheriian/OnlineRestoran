<?php

try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

    echo "<body  onload=\"alert('مشکلی در سرور وجود داشت! لطفا بعد از مدتی دوباره امتحان کنید!');\">";

	
}

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo "<body  onload=\"alert('کلیدهای متغیر POST نامعتبر! صفحه را تازه کنید!');\">";

}

$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($regex_email, $_POST['email']) || !preg_match($regex_password, $_POST['password'])) {

    session_start();

    echo "<body  onload=\"alert('نام کاربری یا کلمه عبور اشتباه است');\">";


} else {

	$email = $_POST['email'];

	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email=?";

	$query  = $pdoconn->prepare($sql);
	$query->execute([$email]);
	$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);

	if (count($arr_login) != 0) {
		
		foreach ($arr_login as $key) {
			
			$tmp_pass = $key['password'];
			$tmp_name = $key['name'];
			$tmp_id = $key['id'];

		}

		if ($tmp_pass == $password) {

			session_start();

			$_SESSION['user'] = explode(" ", $tmp_name)[0];
			$_SESSION['user_id'] = $tmp_id;

			header('location: ../index.php');
			echo "<body onload=\"alert('کاربر گرامی $tmp_name  ورود شما با موفقیت انجام شد');\">";
			
            


		} else {
            session_start();
            echo "<body  onload=\"alert('نام کاربری یا کلمه عبور اشتباه است');\">";

		}

	} else {


        session_start();
        echo "<body  onload=\"alert('نام کاربری یا کلمه عبور اشتباه است');\">";
		echo "نام کاربری یا کلمه عبور اشتباه است";


	}

}

echo "	<link rel=\"stylesheet\" href=\"../css/alert.css\">";
echo "    <script src=\"../js/alert.js\"></script>";



