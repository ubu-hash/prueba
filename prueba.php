<?php
if(!empty($_ENV['MYSQL_HOST']))
   $host = $_ENV['MYSQL_HOST'];
else
   $host = 'db';

if(!empty($_ENV['MYSQL_USER']))
   $user = $_ENV['MYSQL_USER'];
else
   $user = 'root';

if(!empty($_ENV['MYSQL_PASSWORD']))
   $pass = $_ENV['MYSQL_PASSWORD'];
else
   $pass = 'docker';

if(!empty($_ENV['MYSQL_DB']))
   $db_name = $_ENV['MYSQL_DB'];
else
   $db_name = 'web-DS';

echo "Conectándose a la base de datos con host: $host";
echo "<br><br>";

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Conectado.";
echo "<br><br>";

$conn->close();
?>
