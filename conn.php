<?php 
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'isrs';

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
if ($conn) {
	echo "";
}

if (!isset($_SESSION)) {
	session_start();
}
#error_reporting(E_ERROR | E_PARSE);

?>