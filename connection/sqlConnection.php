<?php
$server = 'localhost';
$userName = 'root';
$passWord = '';

$connect = mysqli_connect($server, $userName, $passWord);
var_export($connect, true);

if ($connect) {
    echo 'Connection established';
    $connect->close();
} else {
    echo 'Connection failed';
}
