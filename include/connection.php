<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "db_quest";

$koneksi = mysqli_connect($server, $username, $pass, $db) or die(mysqli_error());
