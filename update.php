<?php
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordverified = $_POST['passwordv'];
$role = $_POST['role'];
$id = $_POST['sid'];
require_once 'connect.php';

if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($passwordverified)&&!empty($role)){
    //insert dữ liệu
    echo "<pre>";
    print_r($_POST);
    $updatesql = "UPDATE user SET name= '$username', email='$email', password='$password', role_type='$role' WHERE id=$sid";
    if($conn->query($sql)===TRUE){
        echo "Sửa dữ liệu thành công";
    }
    else{
        echo "Lỗi{$sql}".$conn->error;
    }
}
else{
    echo"Bạn cần nhập đầy đủ thông tin trước khi lưu";
}
?>