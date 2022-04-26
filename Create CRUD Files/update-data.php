<?php

require_once "conn.php";

$sql = "UPDATE mahasiswa SET ``='' WHERE `no`=";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated Successfully";
} else {
    echo "Error ". $sql . "<br>" . $conn->error;
}