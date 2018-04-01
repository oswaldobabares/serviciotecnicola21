<?php
require_once 'Conexion.php';
$listImag = '';
$conectar = new Conectar();
$query = $conectar->prepare('SELECT * FROM listJob ');
$query->execute();
$listImage= $query->fetchAll();
