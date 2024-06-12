<?php
define('DB_SERVER','hospitalzaliczenie-server.mysql.database.azure.com');
define('DB_USER','hjdoyovazf');
define('DB_PASS' ,'qweasdzxc1!');
define('DB_NAME', 'hospitalzaliczenie-database');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
