<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sim";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Can't Connect The Server. Error : ".$conn->connect_error);
}