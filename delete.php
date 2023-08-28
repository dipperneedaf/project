<?php
//lay du lieu id can xoa
$id = $_GET['sid'];
//ket noi
require_once 'connect.php';
$delsql = "DELETE FROM user WHERE id=$id";

mysqli_query($conn, $delsql);
echo "xoa thanh cong";
?>