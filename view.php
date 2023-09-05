<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="add.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" id=""></td>
            </tr>
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
        <input type="submit" name="btn_add" value="thêm">
        </form>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>image</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>id_role</th>
            </tr>
            <?php foreach($listpro as $vl):?>
                <tr>
                    <td><?php echo $vl['id_user']?></td>
                    <td><?php echo $vl['user_name']?></td>
                    <td><img src="<?php echo $vl['image'] ?>" width="100" alt="" srcset=""></td>
                    <td><?php echo $vl['email']?></td>
                    <td><?php echo $vl['phone']?></td>
                    <td><?php echo $vl['address']?></td>
                    <td><?php echo $vl['id_role']?></td>
                    <td><a href="edip.php?id=<?php echo $vl['id_user'] ?>">Sửa</a></td>
                <td><a href="delete.php?id=<?php echo $vl['id_user'] ?>">Xóa</a></td>
                </tr>
                <?php endforeach;?>
        </table>
    </body>
</html>