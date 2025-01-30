<?php

session_start();
try {

    if (!file_exists('../connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';

	header('location: ../../admin/category-list.php');

	exit();
	
}

if (!isset($_REQUEST['id'])) {

	$_SESSION['msg'] = 'Invalid ID!';

	header('location: ../../admin/category-list.php');

	exit();
} 

	$id = $_REQUEST['id'];


	$sql = "DELETE FROM categories WHERE id = ?";
    $query  = $pdoconn->prepare($sql);
    if ($query->execute([$id])) {

    	$_SESSION['msg'] = 'آیتم مورد نظر حذف شد';

		header('location: ../../admin/category-list.php');
    	
    } else {

    	$_SESSION['msg'] = 'اشکالی در سرور بوجود آمده لطفاً بعداً این کار را انجام دهید';

		header('location: ../../admin/category-list.php');

    }

