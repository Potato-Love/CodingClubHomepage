<?php
session_start();

error_reporting(1);
ini_set("display_errors", 1);


	$host_name="localhost"; // 자신의 MySQL DB 서버의 위치입니다. 보통 localhost로 하시면 됩니다.
	$user_name="root";    // 자신의 계정 아이디를 적으시면 됩니다.
	$db_name="chiakhs";       // 자신의 MySQL DB 아이디를 적으세요.
	$db_password="pipi2380";  // 자신의 DB의 패스워드 입니다.
$conn = mysqli_connect($host_name, $user_name, $db_password, $db_name);
if(!$conn){
    echo 'Error mysql';
} 

?>