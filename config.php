<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparks_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}