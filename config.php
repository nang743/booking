<?php
define('DB_SERVER','Localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'testdb');

$conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
var_dump($conn);

if($conn == false)
{
    die('ERROR: Could not connect!'.mysqli_connect_error());
}
else
{
    echo "Connection Successfully <br> ";
}
?>