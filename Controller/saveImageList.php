<?php
require_once 'Conexion.php';
if (isset($_POST['imageList'])) {
    $conectar = new Conectar();
    $imageList = $_POST['imageList'];
    $query = $conectar->prepare('Insert into listJob (name) VALUES (:imageList) ');
    $query->bindParam(':imageList', $imageList);
    $query->execute();
    echo 'true';
}

