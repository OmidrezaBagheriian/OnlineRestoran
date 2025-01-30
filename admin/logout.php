<?php


session_start();

session_destroy();

session_start();

$_SESSION['msg'] = 'خروج از بخش مدیریت با موفقیت انجام شد';

header('location: index.php');