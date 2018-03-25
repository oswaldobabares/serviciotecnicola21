<?php

require_once 'Conexion.php';
$conectar = new Conectar();
$query = $conectar->prepare('SELECT * FROM company ');
$query->execute();
$dataCompany = $query->fetch();


