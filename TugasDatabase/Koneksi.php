<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "prakwebminggu3";

$koneksi = mysqli_connect($server,$user,$pass,$db);

if(!$koneksi){
	die("Koneksi gagal : ".mysqli_connect_error());
}

?>