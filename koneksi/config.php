<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ewar";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$mysqli= new mysqli("localhost", "root", "", "ewar");

?>