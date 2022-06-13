<?php


// Mmebuat koneksi dengan var $mysqli
$databaseHost = 'localhost';
$databaseName = 'system-helpdesk';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}
?>