<?php
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordverified = $_POST['passwordv'];
$role = $_POST['role'];

require_once 'connect.php';

if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($passwordverified)&&!empty($role)){
    //insert dữ liệu
    echo "<pre>";
    print_r($_POST);
    $sql = "INSERT INTO `user` (`name`,`email`,`password`,`role_type`) VALUES('$username','$email','$password','$role') ";
    if($conn->query($sql)===TRUE){
        echo "Thêm dữ liệu thành công";
    }
    else{
        echo "Lỗi{$sql}".$conn->error;
    }
}
else{
    echo"Bạn cần nhập đầy đủ thông tin trước khi lưu";
}
?>