<?php

// foutmelding zichtbaar maken
error_reporting(E_ALL);
ini_set('display_error', '1');

//wordt gebruikt voor de MySQL database connectie
$db_hostname = 'localhost:3306'; //of '127.0.0.1'
$db_username = '84822';
$db_password = 'Samm1204@!--';
$db_database = '84822_senne';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$conn) {
    echo "Fout: geen connectie naar database. <br/>";
    echo "Errno: " . mysqli_connect_errno() . "<br/>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
}


?>
