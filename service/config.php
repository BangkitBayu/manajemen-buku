<?php
$servername = "localhost";
$username = 'root';
$password = '';
$database = "db_aplikasi_buku";

$conn = mysqli_connect($servername, $username, $password, $database);
$db = $conn;

if (!$conn) die('Connection Failed!');

