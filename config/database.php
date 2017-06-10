<?php
// konfigurasi database
$db_hostname    =   "localhost";
$db_username    =   "root";
$db_password    =   "tratap60";
$db_name        =   "indomlm";

$koneksi = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$koneksi)
{
    die('Could not connect to database: ' . mysqli_error());
}
?>