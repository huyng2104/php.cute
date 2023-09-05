<?php
    include "connect.php";
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE `id_user` = $id";
    $data = $connect->query($sql);
    $proedit = $data->fetch();
    if(isset($_POST['btn_edit']))
    {
        $dir = "upload/";
        $up_n = basename($_FILES['image']['name']);
        $upfile = $dir.$up_n;
        $check= false;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$upfile))
        {
            $check=true;
        }
        if($check==true)
        {
            $up = $upfile;
        }
        else{
            $up = $proedit['image'];
        }
        
        $user=$_POST['user'];
        $image=$upfile;
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $choke=$_POST['chon'];
      
        $sql = "UPDATE `users` SET ,`user_name`='$user',`image`='$image',`email`='$email',`phone`='$phone',`address`='$address',`id_role`='$choke' WHERE `id_user`='$id'";
        $connect->exec($sql);
        header("Location:view.php");
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data" >
    <table>
            
            <tr>
                <td>User</td>
                <td><input type="text" name="user" id=""></td>
            </tr>
            <tr>
                <td>image</td>
                <td><input type="file" name="image" id=""></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="text" name="phone" id=""></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address" id=""></td>
            </tr>
            <tr>
                <td>id_role</td>
                <td>
                <td><select name="chon" id="" required>
                        <?php
                        foreach ($listP as $val) {
                            echo "<option value='" . $val["id_role"] . "' >" . $val["role_name"] . "</option>";
                        }
                        ?>
                    </select></td>
                </td>
            </tr>
        </table>
        <input type="submit" name="btn_edit"></input>
    </form>
</body>
</html>