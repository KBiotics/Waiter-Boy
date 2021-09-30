<?php
session_start();
$host = "127.0.0.1"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "Waiter_Boy"; /* Database name */
define('MAX_UP', 16000000); // 16MB

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
