<?PHP 
    require_once  'Controller/Login.php';
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Servicio One page Tecnico responsive HTML Template ">
        <meta name="author" content="Muhammad Morshed">
        <title>Servico Técnico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/st21.png" />
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
       
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">                  
        <!-- Oswald / Title Font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <!-- Ubuntu / Body Font -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
   
    </head>
    <body id="body">
        <div>
            <div class="title text-center">
                    <h2>Ingresa al<span class="color">Administrador</span></h2>
                    <div class="border"></div>
                </div>
            <div class="contact-form col-md-6 wow fadeInUp" style="width: 100%;" data-wow-duration="500ms" data-wow-delay="300ms">
                
                <form id="contact-form-login" method="post" action="" class="form-login" role="form" style="text-align: center;width: 425px;margin: 0 auto;">
                    <div class="form-group">
                        <input type="text" placeholder="Ingrese su usuario" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Ingrese su contrasena" class="form-control" name="pass" id="pass">
                    </div>

                    <div id="mail-success" class="success">
                        Thank you. The Mailman is on His Way :)
                    </div>
                    <div id="mail-fail" class="error" <?PHP if ($validateError == TRUE) {?>style="display: block;" <?php } ELSE {?>style="display: none;"<?php }  ?>>
                        <?PHP echo $msjError; ?> 
                    </div>
                    <div id="cf-submit">
                        <input type="submit" id="contact_submit_login" name="contact_submit_login" class="btn btn-transparent" value="Ingresar">
                    </div>						
                </form>
            </div>
        </div>
        <a href="javascript:;" id="scrollUp">
            <i class="fa fa-angle-up fa-2x"></i>
        </a>
       
        <script src="js/jquery-1.12.2.min.js"></script>
        <!-- Bootstrap 3.1 -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/adminitrator.js"></script>
        
        
    </body>
</html>