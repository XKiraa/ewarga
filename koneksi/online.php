<?php

$server = "localhost";
$user = "ewar";
$password = "#brawijaya341";
$nama_database = "ewar";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$mysqli= new mysqli("localhrost", "ewar", "#brawijaya341", "ewar");

?>