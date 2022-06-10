
<?php

$host = 'localhost';
$dbname = 'p_event';
$user = 'root';
$pass = '';

$con = mysqli_connect($host,$user,$pass,$dbname);

if(!$con)
{
    die("Connection Failed.");
}
?>