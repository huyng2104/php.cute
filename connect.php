<?php
    try{
        $connect = new PDO("mysql:host=localhost;dbname=huynqph33802_examphp1", "root", "");
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        $e->getMessage();
    }
    $sql="SELECT * FROM `roles`";
    $data=$connect->query($sql);
    $listP=$data->fetchAll();

    $sql="SELECT * FROM `users`as p INNER JOIN `roles` as c on p.id_role=c.id_role";
    $data=$connect->query($sql);
    $listpro=$data->fetchAll();
?>