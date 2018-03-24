<?php

require_once 'Conexion.php';
session_start();
$id = $_SESSION['id'];
$conectar = new Conectar();
$query = $conectar->prepare('SELECT * FROM user WHERE id = :id');
$query->bindParam(':id', $id);
$query->execute();
$data = $query->fetch();
if (!$data['username']) {
    if (session_destroy()) {
        header('Location: index.php');
    }
} 
        

