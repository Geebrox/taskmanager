<?php
echo 'Hello world!<br />';
$host = 'mysql';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$base = getenv('MYSQL_DATABASE');

$conn = mysqli_connect($host, $user, $pass, $base);
if (!$conn) {
    exit('Connection failed: ' . mysqli_connect_error() . PHP_EOL);
}

echo 'Successful database connection!' . PHP_EOL;
