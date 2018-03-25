<?php

require_once 'Conexion.php';
$msj = '';
if (isset($_POST['email'])) {
    $conectar = new Conectar();
    $phone = $_POST['phone'];
    $address = $_POST['message'];
    $email = $_POST['email'];
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $id = $_POST['idCompany'];
    $query = $conectar->prepare('UPDATE company SET phone = :phone, address = :address, email = :email, twitter = :twitter, instagram = :instagram, facebook = :facebook,  youtube = :youtube  WHERE id = :id');
    $query->bindParam(':phone', $phone);
    $query->bindParam(':email', $email);
    $query->bindParam(':address', $address);
    $query->bindParam(':facebook', $facebook);
    $query->bindParam(':youtube', $youtube);
    $query->bindParam(':twitter', $twitter);
    $query->bindParam(':instagram', $instagram);
    $query->bindParam(':id', $id);
    $query->execute();
    $msj = 'El usuario se a modificado';
}