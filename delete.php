<?php
    include "connect.php";
    $id=$_GET['id'];
    $sql="DELETE FROM `users` WHERE `id_user`=$id";
    $connect->exec($sql);
    header("Location:view.php");

?>