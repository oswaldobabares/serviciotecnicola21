<?PHP
require_once 'Controller/SearchUser.php';
require_once 'Controller/UpdateCompany.php';
require_once 'Controller/saveImageList.php';
require_once 'Controller/getListImage.php';
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
        <!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
        <!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">                  
        <!-- Oswald / Title Font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <!-- Ubuntu / Body Font -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
        <!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="body">
        <div id="loading-mask">
            <div class="loading-img">
                <img alt="St 21 Preloader" src="img/preloader.gif"  />
            </div>
        </div>

        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                            <img src="img/st21_logo.png" alt="St 21" />
                        </h1>
                    </a>
                </div>
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#about">Informacion</a></li>
                        <li><a href="#showcase">Portfolio</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#our-team">Equipo</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-us">Contactanos</a></li>
                        <li><a href="Controller/Logout.php">Salir</a></li>
                    </ul>
                </nav>		
            </div>
        </header>	

        <section id="about" class="bg-one">
            <div class="container">
                <div class="row">
                    <div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
                        <h2>Informacion <span class="color">Empresa</span></h2>
                        <div class="border"></div>
                    </div>
                    
                    <form id="contact-form-save-information" method="post" action="" role="form" accept-charset="utf-8">
                             <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                 <input type="hidden" class="form-control" name="idCompany" id="idCompany" value="<?php echo $dataUser['idCompany'];?>">
                                 <div class="form-group">
                                     <input type="text" placeholder="Ingrese su Numero Telefonico" class="form-control" name="phone" id="phone" value="<?php echo $dataCompany['phone'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Ingrese su Email" class="form-control" name="email" id="email" value="<?php echo $dataCompany['email'];?>">
                                </div>
                                <div class="form-group">
                                    <textarea rows="6" placeholder="Ingrese su Direccion" class="form-control" name="message" id="message" ><?php echo $dataCompany['address'];?></textarea>	
                                </div>
                               
                            </div>
                           <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                 <div class="form-group">
                                    <input type="text" placeholder="Ingrese su Direccion de Youtube" class="form-control" name="youtube" id="youtube" value="<?php echo $dataCompany['youtube'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Ingrese su Direccion de Facebook" class="form-control" name="facebook" id="facebook" value="<?php echo $dataCompany['facebook'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Ingrese su Direccion de Twitter" class="form-control" name="twitter" id="twitter" value="<?php echo $dataCompany['twitter'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Ingrese su Direccion de Instagram" class="form-control" name="instagram" id="instagram" value="<?php echo $dataCompany['instagram'];?>">
                                </div>
                            </div>
                            <div id="cf-submit">
                                <input type="submit" id="contact-submit-save-information" name="contact-submit-save-information" class="btn btn-transparent" value="Guardar">
                            </div>				
                        </form>
                    
                </div>
            </div>

        </section>

    <!--<section id="main-features">
        <div class="container">
            <div class="row">
                <div id="features">
                    <div class="item">	
                        <div class="features-item">
                            <div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
                                <iframe src="http://player.vimeo.com/video/108018156" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores corporis maxime modi amet nisi quod delectus voluptas deleniti facere. Suscipit, modi ex magni quam nesciunt ullam nemo natus soluta!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores corporis maxime modi amet nisi quod delectus voluptas deleniti facere. Suscipit, modi ex magni quam nesciunt ullam nemo natus soluta!</p>
                                <a href="galery-video.html" class="btn btn-transparent">Ver Todos</a>
                            </div>
                        </div>
                    </div>
                </div>					
            </div>
        </div>
    </section>-->

    <!--<section id="counter" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                    <div class="counters-item">
                        <div>
                            <span data-speed="3000" data-to="320">320</span>
                        </div>
                        <i class="fa fa-users fa-3x"></i>
                        <h3>Clientes felices</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                    <div class="counters-item">
                        <div>
                            <span data-speed="3000" data-to="565">565</span>
                        </div>
                        <i class="fa fa-check-square fa-3x"></i>
                        <h3>Proyectos completados</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                    <div class="counters-item">
                        <div>
                            <span data-speed="3000" data-to="95">95</span>
                            <span>%</span>
                        </div>
                        <i class="fa fa-thumbs-up fa-3x"></i>
                        <h3>Me gustas</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="counters-item kill-margin-bottom">
                        <div>
                            <span data-speed="3000" data-to="2500">2500</span>
                        </div>
                        <i class="fa fa-coffee fa-3x"></i>
                        <h3>Tazas de Cafe</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>-->		

    <section id="showcase">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-duration="500ms">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h2>Cargar <span class="color">Imagen</span></h2>
                        <div class="border"></div>
                    </div>
                    <form  id="contact-form-save-listImage" method="post" action="" role="form" accept-charset="utf-8">
                        <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

                            <div class="form-group">
                                <input type="text" placeholder="Ingrese Tipo de Imagen" class="form-control" name="imageList" id="imageList" >
                            </div>
                        </div>
                        <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div id="cf-submit">
                                <input type="submit" id="submit-save-imageList" name="submit-save-imageList" class="btn btn-transparent" value="Guardar" style="margin-top: 0">
                            </div>
                        </div>
                    </form>    
                    <div class="portfolio-filter clearfix">
                        <ul class="text-center" id="containerListImage">
                            <?php  foreach($listImage as $listImage):?>
                            <li><a href="#" class="filter" data-filter="<?php echo $listImage['name'];?>"><?php echo $listImage['name'];?></a></li>
                             <?php endforeach; ?>
                           
                        </ul>
                    </div>						
                </div>
            </div>
        </div>
        <div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
            
        </div>
    </section>
    
    <section id="services" class="bg-one">
        <div class="container">
            <div class="row">
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Nuestros <span class="color">Servicios</span></h2>
                    <div class="border"></div>
                </div>
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="fa fa-wordpress fa-5x"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="fa fa-desktop fa-5x"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="fa fa-play fa-5x"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="fa fa-eye fa-5x"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="fa fa-android fa-5x"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="service-block text-center kill-margin-bottom">
                        <div class="service-icon text-center">
                            <i class="fa fa-link fa-5x"></i>
                        </div>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
                    </div>
                </article>						
            </div>
        </div>
    </section>    
        
    <section id="team-skills" class="parallax-section">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-duration="500ms">
                <div class="title text-center">
                    <h2>Nuestras <span class="color">Habilidades</span></h2>
                    <div class="border"></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                    <div class="skill-chart text-center">
                        <span class="chart" data-percent="80">
                            <span class="percent"></span>
                        </span>
                        <h3><i class="fa fa-android"></i> Lorem ipsum </h3>
                        <p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                    <div class="skill-chart text-center">
                        <span class="chart" data-percent="90">
                            <span class="percent">86</span>
                        </span>
                        <h3><i class="fa fa-android"></i> Lorem ipsum </h3>
                        <p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                    <div class="skill-chart text-center">
                        <span class="chart" data-percent="85">
                            <span class="percent"></span>
                        </span>
                        <h3><i class="fa fa-android"></i> android </h3>
                        <p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="skill-chart text-center">
                        <span class="chart" data-percent="70">
                            <span class="percent"></span>
                        </span>
                        <h3><i class="fa fa-apple"></i> IOS </h3>
                        <p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-team">
        <div class="container">
            <div class="row">
                <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
                    <h2>Nuestro <span class="color">Equipo</span></h2>
                    <div class="border"></div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
                    <article class="team-mate">
                        <div class="member-photo">
                            <img class="img-responsive" src="img/team/client.jpg" alt="Meghna">
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-title">
                            <h3>Lorem ipsum dolor</h3>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="member-info">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                    <article class="team-mate">
                        <div class="member-photo">
                            <img class="img-responsive" src="img/team/client.jpg" alt="Meghna">
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-title">
                            <h3>Lorem ipsum dolor</h3>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="member-info">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                    <article class="team-mate">
                        <div class="member-photo">
                            <img class="img-responsive" src="img/team/client.jpg" alt="Meghna">
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-title">
                            <h3>Lorem ipsum dolor</h3>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="member-info">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                    <article class="team-mate kill-margin-bottom">
                        <div class="member-photo">
                            <img class="img-responsive" src="img/team/client.jpg" alt="Meghna">
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-title">
                            <h3>Lorem ipsum dolor</h3>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="member-info">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                    </article>
                </div>			
            </div>
        </div>
    </section>

    <section id="Instagram-feed" class="parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="Instagram-bird wow fadeInDown" data-wow-duration="500ms">
                        <span>
                            <i class="fa fa-instagram fa-4x"></i>
                        </span>
                        <div id="instafeed" style="display: inline-block"></div>
                    </div>
                    <div class="Instagram wow fadeIn" data-wow-duration="2000ms"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="bg-one">
        <div class="container">
            <div class="row">
                <div class="title text-center wow fadeInDown">
                    <h2> Ultimos <span class="color">Posts</span></h2>
                    <div class="border"></div>
                </div>
                <div class="clearfix">
                    <article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
                        <div class="note">
                            <div class="media-wrapper">
                                <img src="img/blog/1.png" alt="" class="img-responsive">
                            </div>		
                            <div class="excerpt">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="single-post.html">Leer más</a>
                            </div>
                        </div>						
                    </article>
                    <article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                        <div class="note">
                            <div id="gallery-post" class="media-wrapper">
                                <div class="item">
                                    <img src="img/blog/1.png" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="img/blog/2.png" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="img/blog/3.png" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="excerpt">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="single-post.html">Leer más</a>
                            </div>
                        </div>						
                    </article>
                    <article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="note">
                            <div id="gallery-post" class="media-wrapper">
                                <div class="item">
                                    <img src="img/blog/1.png" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="img/blog/2.png" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="img/blog/3.png" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="excerpt">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="single-post.html">Leer más</a>
                            </div>
                        </div>						
                    </article>
                    <article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="note kill-margin-bottom">
                            <div class="media-wrapper">
                                <img src="img/blog/2.png" alt="" class="img-responsive">
                            </div>
                            <div class="excerpt">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
                                <a class="btn btn-transparent" href="single-post.html">Leer más</a>
                            </div>
                        </div>						
                    </article>
                </div>
                <div class="all-post text-center">
                    <a class="btn btn-transparent" href="blog.html">Ver todos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Contacta<span class="color">nos</span></h2>
                    <div class="border"></div>
                </div>
                <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                    <h3>Lorem ipsum dolor </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                    <div class="contact-details">
                        <div class="con-info clearfix">
                            <i class="fa fa-home fa-lg"></i>
                            <span>Lorem ipsum dolor sit amet</span>
                        </div>
                        <div class="con-info clearfix">
                            <i class="fa fa-phone fa-lg"></i>
                            <span>Phone: +880-31-000-000</span>
                        </div>						
                        <div class="con-info clearfix">
                            <i class="fa fa-envelope fa-lg"></i>
                            <span>Email: hello@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <form id="contact-form" method="post" action="sendmail.php" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Ingrese su nombre" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Ingrese su apellido" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <textarea rows="6" placeholder="Mensaje" class="form-control" name="message" id="message"></textarea>	
                        </div>
                        <div id="mail-success" class="success">
                            Thank you. The Mailman is on His Way :)
                        </div>
                        <div id="mail-fail" class="error">
                            Sorry, don't know what happened. Try later :(
                        </div>
                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Enviar">
                        </div>						
                    </form>
                </div>
            </div>
        </div>
        <div class="google-map wow fadeInDown" data-wow-duration="500ms">
            <div id="map-canvas"></div>
        </div>	
    </section>

    <footer id="footer" class="bg-one">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="500ms">
                <div class="col-lg-12">
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright text-center">
                        <a href="index.html">
                            <img src="img/st21_logo.png" alt="" /> 
                        </a>
                        <br />
                        <p>Desarrollado por <a href="http://www.themefisher.com"> SYSARTECK</a>. Copyright &copy; 2015. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="javascript:;" id="scrollUp">
        <i class="fa fa-angle-up fa-2x"></i>
    </a>
    <script>
        var distributorToken = "1510430526.1677ed0.02735a6f6a5249b89400530a115c322a";
    </script>

    <!-- Main jQuery -->
    <script src="js/jquery-1.12.2.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Slitslider -->
    <script src="js/jquery.slitslider.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- Custom Scrollbar -->
    <script src="js/jquery.nicescroll.min.js"></script>
    <!-- Jappear js -->
    <script src="js/jquery.appear.js"></script>
    <!-- Pie Chart -->
    <script src="js/easyPieChart.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing-1.3.pack.js"></script>
    <!-- Highlight menu item -->
    <script src="js/jquery.nav.js"></script>
    <!-- Sticky Nav -->
    <script src="js/jquery.sticky.js"></script>
    <!-- Number Counter Script -->
    <script src="js/jquery.countTo.js"></script>
    <!-- For video responsive -->
    <script src="js/jquery.fitvids.js"></script>
    <!-- Grid js -->
    <script src="js/grid.js"></script>
    <!-- Custom js -->
    <script src="js/adminitrator.js"></script>
</body>
</html>