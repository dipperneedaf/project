<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class ="container">
        <form action = "create.php" method = "post">
        Avatar*
        <input type="file" name="fileupload" id="fileupload"><br><br>
        <label for="fname">Name*</label>
        <input id = "input1" type="text" id="name" name="name"><br><br>
        <label for="fname">Email*</label>
        <input id = "input1" type="text" id="email" name="email"><br><br>
        <label for="lname">Password*</label>
        <input id = "input1" type="text" id="password" name="password"><br><br>
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
        <table border="1">
        <tr>
            <td id="id">Id</td>
            <td id="ava">Avatar</td>
            <td id="name">Name</td>
            <td id="email">Email</td>
            <td id="role">Role</td>
            <td id="act">Action</td>
        </tr>
        <?php
        $conn = new mysqli('localhost','root','','user-information');
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        while($row=$result ->fetch_assoc()){
            ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['avatar']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['role_type']; ?></td>
            <td><a href="edit.php?sid=<?php echo $row['id']; ?>">Edit</a>
            <a href="delete.php?sid=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
        
       
    </table>
    </div>
</body>
</html>
