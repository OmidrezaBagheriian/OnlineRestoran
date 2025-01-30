<?php


session_start();
try {

    if (!file_exists('../connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'مشکلی در سرور بوجود آمده است لطفاً بعداً امتحان کنید';

	header('location: ../../admin/food-list.php');

	exit();
	
}

if (!isset($_POST['name']) || !isset($_POST['desc'])) {

	$_SESSION['msg'] = 'کلیدهای متغیر POST نامعتبر! صفحه را تازه کنید!';

	header('location: ../../admin/food-list.php');

	exit();
}



	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$category = $_POST['category'];

	$sql = "INSERT INTO food(cat_id,fname,description) VALUES(?,?,?)";
    $query  = $pdoconn->prepare($sql);
    if ($query->execute([$category, $name, $desc])) {

    	$_SESSION['msg'] = 'غذای جدید اضافه شد';

		header('location: ../../admin/food-list.php');
    	
    } else {

    	$_SESSION['msg'] = 'مشکلی در سرور بوجود آمده است لطفاً بعداً امتحان کنید';

		header('location: ../../admin/food-list.php');

    }


