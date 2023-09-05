<?php
    include "connect.php";
    if(isset($_POST['btn_add'])){
        $dir="upload/";
        $up_n = basename($_FILES['image']['name']);
        $upfile = $dir.$up_n;
        move_uploaded_file($_FILES['image']['tmp_name'],$upfile);
        $id=$_POST['id'];
        $user=$_POST['user'];
        $image=$upfile;
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $choke=$_POST['chon'];
        $sql="INSERT INTO `users`(`id_user`, `user_name`, `image`, `email`, `phone`, `address`, `id_role`) 
                    VALUES ('$id','$user','$image','$email','$phone','$address','$choke')";
                    $connect->exec($sql);
                    header("Location:view.php");
    }
?>