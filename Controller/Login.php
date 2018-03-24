<?php
    require_once  'Conexion.php';
        session_start();
	$msjError = '';
        $validateError = FALSE;
	if(isset($_POST['name'])){
		$username = $_POST['name'];
		$pass = $_POST['pass'];
                $conectar = new Conectar();
		$query = $conectar -> prepare('SELECT * FROM user WHERE username = :username AND pass = md5(:pass)');
		$query -> bindParam(':username', $username);
		$query -> bindParam(':pass', $pass);
		$query -> execute();
		$data = $query -> fetch();
		if ($data) {
                    $_SESSION['id']= $data['id'];
		    header('location: admin.php');
		} else {
                    $msjError = 'Clave o Usuario incorrecto';
                    $validateError = TRUE;
		}
	}
