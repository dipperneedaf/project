<?php
//lay id
$id = $_GET['sid'];
//ket noi
require_once 'connect.php';
 //lay thong tin ve user duoc chon
$editsql = "SELECT FROM user where id=$id";

$result = mysqli_query($conn, $editsql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class ="container">
        <form action = "update.php" method = "post">
        Avatar*
        <input type="file" name="fileupload" id="fileupload"><br><br>
        <label for="fname">Name*</label>
        <input id = "input1" type="text" id="name" name="name" value ="<?php echo $row['name'];?>"><br><br>
        <label for="fname">Email*</label>
        <input id = "input1" type="text" id="email" name="email" value ="<?php echo $row['email'];?>"><br><br>
        <label for="lname">Password*</label>
        <input id = "input1" type="text" id="password" name="password" value ="<?php echo $row['password'];?>"><br><br>
        <label for="lname">Password verify*</label>
        <input id = "input1" type="text" id="passwordv" name="passwordv"><br><br>
        <p>Roles* <br>
            <input type="checkbox" id="role1" name="role" value="Superadmin">
            <label for="role1"> Super admin</label><br>
            <input type="checkbox" id="role2" name="role" value="Admin">
            <label for="role2"> Admin</label><br>
        </p>
        <button type = "reset">Reset</button>
        <input id ="button1" type="submit" name="btn-reg" value="Save">
        </form>
    </div>    
</body>
</html>