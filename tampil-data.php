<?php

require_once "conn.php";

$sql = "SELECT * FROM mahasiswa WHERE `no` =";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo $row['no']." | ".$row['nim']." | ".$row['nama']." | ".$row['jns_kelamin']." | ".$row['tpt_lahir']." | ".$row['tgl_lahir']." | ".$row['alamat'];
        echo "<br>";
    }
} else {
    echo "Result : 0";
}