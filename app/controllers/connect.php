<?php 

$host = 'db4free.net';
$username = 'kevinjake3';
$password = 'heavenisforreal0';
$dbname = 'todo_app_list';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

echo 'connected succesfully';

 ?>