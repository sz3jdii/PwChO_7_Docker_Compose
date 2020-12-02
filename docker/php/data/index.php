<?php 

$servername = 'db';
$username = 'root';
$password = 'toor';
 
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
   exit('Nie polaczono: '.mysqli_connect_error().PHP_EOL);
}
echo 'Hello Adam! Proxy dziala!'.PHP_EOL;
 
echo 'Polaczono do bazy!'.PHP_EOL;

die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nie dziala :(</title>
</head>
<body>
   Nie dziala proxy :(
</body>
</html>