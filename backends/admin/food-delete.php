<?php

session_start();
try {

    if (!file_exists('../connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'اشکالی در سرور بوجود آمده لطفاً بعداً این کار را انجام دهید';

	header('location: ../../admin/food-list.php');

	exit();
	
}

if (!isset($_REQUEST['id'])) {

	$_SESSION['msg'] = 'شماره ثبت نامعتبر است';

	header('location: ../../admin/food-list.php');

	exit();
} 

	$id = $_REQUEST['id'];


	$sql = "DELETE FROM food WHERE id = ?";
    $query  = $pdoconn->prepare($sql);
    if ($query->execute([$id])) {

    	$_SESSION['msg'] = 'آیتم مورد نظر حذف شد';

		header('location: ../../admin/food-list.php');
    	
    } else {

    	$_SESSION['msg'] = 'اشکالی در سرور بوجود آمده لطفاً بعداً این کار را انجام دهید';

		header('location: ../../admin/food-list.php');

    }

