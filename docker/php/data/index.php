<?php 

$servername = getenv('MYSQL_IP');
$username = getenv('MYSQL_ROOT_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');
 
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
   exit('Nie polaczono: '.mysqli_connect_error().PHP_EOL);
}
echo 'Hello Adam!'.PHP_EOL;
 
echo 'Successful database connection!'.PHP_EOL;
