<?php

require_once 'Conexion.php';
session_start();
$id = $_SESSION['id'];
$conectar = new Conectar();
$query = $conectar->prepare('SELECT * FROM user WHERE id = :id');
$query->bindParam(':id', $id);
$query->execute();
$dataUser = $query->fetch();
if (!$dataUser['username']) {
    if (session_destroy()) {
        header('Location: index.php');
    }
} else {
    $query = $conectar->prepare('SELECT * FROM company WHERE id = :id');
    $query->bindParam(':id', $dataUser['idCompany']);
    $query->execute();
    $dataCompany = $query->fetch();
    
}
        

