<?php
$mysqli = new mysqli("localhost", "root", "", "website");

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối cơ sở dữ liệu không thành công: " . $mysqli->connect_error;
    exit();
}
