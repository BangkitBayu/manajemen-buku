<?php
$servername = "localhost";
$username = 'root';
$password = '';
$database = "db_aplikasi_buku";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) die('Connection Failed!');

