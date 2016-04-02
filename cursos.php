<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/cssRedes.css" rel="stylesheet"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buscar en tiempo real con jQuery y Bootstrap</title>

    <link rel="stylesheet" type="text/css " href="<?=base_url()?>css/outSourcing.css" />

    <!--<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>-->
    <script src="<?=base_url()?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

-->


      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script>    

  </head>
  <body>
<?php 
   //$this->load->view('header');
?>
 

  <center>
<h2>Próximos Cursos</h2>
<h5>Da click en la imagen para más información y registro</h5><br>
</center>

<center>
      <div class="input-group buscar"> 
      <span class="input-group-addon colorBotonBuscar"> 
      <span class="glyphicon glyphicon-search"></span> Buscar</span>
        <input id="filtrar" type="text" class="form-control focuss" placeholder=" Buscar por palabra ej. UNAM, IPN, JAVA... ">
      </div>


<br><br><br>
      <table class="jtaable">
        <thead>
          <tr>
  
                      
          </tr>
        </thead>
        <tbody class="buscar">
        <!--
          <tr class="images">
          <td>sergio</td>
          <tr class="images">
          <td>ayala</td>
          <tr>-->

    <center>


  <tr class="alineacion_icursos">
<td>
<a href="<?=base_url()?>index.php/certificatic/inscribete">
<p class='title-curso'>asdasd</p>
<img src="./cursos_img/26.02.16_IPN.png" class='sergio'>

</div>
</td>

<td>
<a href="<?=base_url()?>index.php/certificatic/inscribete">
<p class='title-curso' >asdasd</p>
<img src="./cursos_img/26.02.16_IPN.png" class='sergio'>

</div>
</td>

<td>
<a href="<?=base_url()?>index.php/certificatic/inscribete">
<p class='title-curso'>asdasd</p>
<img src="./cursos_img/26.02.16_IPN.png" class='sergio'>
&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</td>
     
        </tbody>
      </table>
    </div>


    
<div> 
<?php 
    $this->load->view('redes');
?>
</div>

<div>
<?php 
    $this->load->view('bannerLogos');
?>
</div>

 <!-- Start Who We Are -->
            <section id="who-we-are" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="" style="margin-top: -60px;">
                <div class="row" style="position:relative;">
                    <div class="parallax-overlay"></div>
                    <div class="container">
                        <div class="col-md-6 col-we-are wow flipInX">
                            <h2 class="we-are-info">Nuestros Instructores<br><small class="highlight">Con Amplia Experiencia Laboral</small></h2>          

                            <p class="p-info" style="font-size: 16px !important; width: 100% !important;">
                           Nuestro equipo de instructores certificados esta conformado por:
Arquitectos de software, Arquitectos de base de datos, Oracle DBAs Sr., Developers Sr., 
Administradores y directores de proyectos así como Expertos en Seguridad de la información 
y Consultores Sr. en Business Intelligence y Big Data
                            </p> 
                            
                            <p class="p-info"  style="font-size: 16px !important; width: 100% !important;">
                           Nuestro equipo de instructores certificados esta conformado por:
Arquitectos de software, Arquitectos de base de datos, Oracle DBAs Sr., Developers Sr., 
Administradores y directores de proyectos así como Expertos en Seguridad de la información 
y Consultores Sr. en Business Intelligence y Big Data

Los cuales cuentan con más de 10 años de experiencia real en su profesión y habilidadades en la docencia,
todos trabajan entre semana y los sábados se desempeñan como instructores enseñando lo que les apasiona.
                            </p>  





                        </div>
                        <div class="col-md-6 col-md-skills wow flipInX">
                            <div class="skills-col">
                                <br><br><br><br>
                                <p style="font-size: 18px !important;"><em>Instructores certificados</em></p>
                                <div class="skillbar" data-percent="100%">
                                    <div class="skillbar-title"><span>100%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                
                                <p style="font-size: 18px !important;"><em>Experiencia laboral</em></p>
                                <div class="skillbar" data-percent="100%">
                                    <div class="skillbar-title"><span>100%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                
                                <p style="font-size: 18px !important;"><em>Recolocación y vinculación laboral</em></p>
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>90%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                
                                <p style="font-size: 18px !important;"><em>Practicas Durante el Curso con ejemplos reales</em></p>
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>70%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                <div></div>
                                <p class="porcentaje"style="font-size: 18px !important;"><em>Porcentaje de alumnos Certificados por curso </em></p>
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>80%</span></div>
                                    <div class="skillbar-bar"></div>
                                </div>
                                     
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- End Who We Are -->

                <!-- Start Separator Video -->
          <!--  <section id="separator-video" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="">      
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 separator-video-content wow flipInX">
                                <h2 class="video-info">TExto<br><small>TExto</small></h2>
                                
                                <br>
                                <p class="p-info">--------------------------------------------------------------------
                                ..............................</p> 
                                <p class="p-info">------------------------------------------------------------------

                                .....................................................</p>
                                
                            </div>
                            <div class="col-md-6 separator-video-content">
                                <div class="fluid-width-video-wrapper" style="padding-top:56.25%;">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/T-z1DNs6fK8" frameborder="0" allowfullscreen></iframe>
                                     Replace just numbers of video link
                                </div>
                            </div>
                            
                        </div>
                    </div>
            </section>-->
            <!-- End Separator Video -->
        
               <!-- Counter -->
            <section id="fun-facts">
                <div class="container">
                    <div class="row wow flipInX">
                        <div class="col-md-3 col-sm-6 fact-container">
                            <div class="fact">
                                <span class="counter highlight" style="color: #045FB4">2246</span>
                                <p class="lead">Alumnos satisfechos</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 fact-container">
                            <div class="fact">
                                <span class="counter highlight" style="color: #045FB4">5500</span>
                                <p class="lead">Likes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 fact-container">
                            <div class="fact">
                                <span class="counter highlight" style="color: #045FB4">3000</span>
                                <p class="lead">Twitter</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 fact-container">
                            <div class="fact">
                                <span class="counter highlight" style="color: #045FB4">2056</span>
                                <p class="lead">Alumnos Certificados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Counter -->
            
            <!-- Start Separator-Quotes -->
            <section id="separator-quotes" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="">
                <div class="row text-center" style="position:relative;">
                    <div class="parallax-overlay"></div> 
                    <div class="quotes liquid-slider" id="separator-slider-1"><!--Nuestro slogan "Beyond Certification" significa que siempre vamos a ir más allá de solo la certificación de nuestros alumnos.-->
                        <div class="col-lg-12">
                            <h2><i class="fa fa-quote-left highlight"></i> <small class="white">Nuestro slogan</small>"Beyond Certification",<small class="white"> significa que siempre vamos a ir más allá de solo la certificación de nuestros alumnos.</small> <i class="fa fa-quote-right highlight"></i></h2>
                            <!--<p class="label label-primary">EQUIPO DIVERSIX</p>-->
                        </div>
                        <div class="col-lg-12"><!-- Nuestros instructores son los mejores a nivel nacional en lo que hacen-->
                            <h2><i class="fa fa-quote-left highlight"></i> <small class="white">Nuestros instructores son los mejores a </small>nivel nacional en lo que hacen<i class="fa fa-quote-right highlight"></i></h2>
                            <!--<p class="label label-primary">ALBERT EINSTEIN</p>-->
                        </div>
                        <div class="col-lg-12"><!-- Nos encargamos de darle seguimiento a nuestros egresados en el mercado laboral -->
                            <h2><i class="fa fa-quote-left highlight"></i> Nos encargamos de darle seguimiento a nuestros egresados <small class="white">en el mercado laboral</small> <i class="fa fa-quote-right highlight"></i></h2>
                            <!--<p class="label label-primary">DIETER F. UCHTDORF</p>-->
                        </div>

                        <div class="col-lg-12"><!-- Te ayudamos en tu proceso de recolocación laboral, así como a crear un buen CV -->
                            <h2><i class="fa fa-quote-left highlight"></i> Te ayudamos en tu proceso de recolocación laboral, <small class="white"> así como a crear un buen CV</small> <i class="fa fa-quote-right highlight"></i></h2>
                            <!--<p class="label label-primary">DIETER F. UCHTDORF</p>-->
                        </div>

                           <div class="col-lg-12"><!--   En 6 meses te cambiamos la vida, mejorando tus oportunidades e ingresos -->
                            <h2><i class="fa fa-quote-left highlight"></i> En 6 meses te cambiamos la vida, <small class="white"> mejorando tus oportunidades e ingresos</small> <i class="fa fa-quote-right highlight"></i></h2>
                            <!--<p class="label label-primary">DIETER F. UCHTDORF</p>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Separator-Quotes -->
            
            <!-- Start Services -->
            <!--
            <section id="services">
                <div class="container">
                    <div class="col-lg-12 section-title wow flipInX">
                        <h2><small>¿Qué hacemos?</small><br><strong>Nuestras Capacidades</strong></h2>
                        <p class="lead">Un servicio profesional altamente calificado con un <span class="highlight">toque creativo.</span></p>
                    </div>
                    <div class="services-container">
                        <div class="row services-row">
                            <div class="col-md-4 col-sm-6 wow flipInX">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-ios7-monitor-outline ion-3x highlight"></i>
                                        <i class="icon ion-ios7-monitor-outline back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Diseño paginas Web<br><small>Diseñamos con creatividad</small></h4>
                                        <p class="service-description">Diseñamos tu página Web Empresarial o personal con programación en PHP y base de datos MYSQL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow flipInY">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-social-github ion-3x highlight"></i>
                                        <i class="icon ion-social-github back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Cursos de Diseño<br><small>Creamos con pasión</small></h4>
                                        <p class="service-description">Curso de retoque de fotografía, diseño de logotipos, creación de personajes con PhotoShop e Illustrator.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow flipInX">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-speedometer ion-3x highlight"></i>
                                        <i class="icon ion-speedometer back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Aplicaciones móviles<br><small>Desarrollamos con diversión</small></h4>
                                        <p class="service-description">Desarrollamos aplicaciones móviles nativas para optimizar tu negocio en plataforma iOS y Android.</p>
                                    </div>
                                </div>
                            </div>                
                            <div class="col-md-4 col-sm-6 wow flipInY">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-map ion-3x highlight"></i>
                                        <i class="icon ion-map back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Renta de oficinas<br><small>Ambiente agradable</small></h4>
                                        <p class="service-description">Disponemos de renta de salas con capacidad de 6 y 10 personas con proyector y TV para sus reuniones.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow flipInX">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-ionic ion-3x highlight"></i>
                                        <i class="icon ion-ionic back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Cursos de programación<br><small>Enseñamos con pasión</small></h4>
                                        <p class="service-description">Curso de programación Java te prepáramos para que presentes tu examen de certificación.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow flipInY">
                                <div class="service">
                                    <div class="service-icon">
                                        <i class="icon ion-paper-airplane ion-3x highlight"></i>
                                        <i class="icon ion-paper-airplane back-icon"></i>
                                    </div>
                                    <div class="service-info">
                                      <h4>Curso de Videjuegos<br><small>Nos divertimos trabajando</small></h4>
                                        <p class="service-description">Desarrolla videojuegos para dispositivos móviles y además comienza a obtener ganancias con publicidad.</p>
                                    </div>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- End Services -->
            
           
            
            <!-- Start Portfolio -->
           <!-- <section id="our-work">
                <div class="container">
                    <div class="col-lg-12 section-title wow flipInX">
                        <h2><small>Echa un Vistazo en</small><br><strong>Nuestros Cursos</strong></h2>
                        <p class="lead">Amplia gama de cursos <span class="highlight">presenciales</span> 100% prácticos.</p>
                    </div>
                    
                    <div class=" ">

                        <div id="filters-container" class="cbp-l-filters-button">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Todos<div class="cbp-filter-counter"></div></div>
                            <div data-filter=".java" class="cbp-filter-item">Java<div class="cbp-filter-counter"></div></div>
                            <div data-filter=".diseno" class="cbp-filter-item">Diseño<div class="cbp-filter-counter"></div></div>
                            <div data-filter=".android" class="cbp-filter-item">Android<div class="cbp-filter-counter"></div></div>
                            <div data-filter=".ios" class="cbp-filter-item">iOS<div class="cbp-filter-counter"></div></div>
                            <div data-filter=".ventas" class="cbp-filter-item">Ventas<div class="cbp-filter-counter"></div></div>
                            <div data-filter=".web" class="cbp-filter-item">Web<div class="cbp-filter-counter"></div></div>
                            
                        </div>

                        <div id="grid-container" class="cbp-l-grid-projects">
                            <ul class="grid cs-style-3">

                                <li class="cbp-item java">
                                    <figure>
                                        <img src="img/portfolio/thumb/java_new.png" alt="">
                                        <figcaption>
                                            <a href="java.html"  data-title="Our Project 1"><i class="fa fa-search fa-2x"></i></a>

                                            
                                        </figcaption>
                                    </figure> 
                                </li> 

                                <li class="cbp-item ventas">
                                    <figure>
                                        <img src="img/portfolio/thumb/ventas_new.png" alt="">
                                        <figcaption>
                                            <a href="ventas.html" data-title="Our Project 2"><i class="fa fa-search fa-2x"></i></a>

                                        </figcaption>
                                    </figure>
                                </li>

                               <li class="cbp-item java">
                                    <figure>
                                        <img src="img/portfolio/thumb/javacert.png" alt="">
                                        <figcaption>
                                            <a href="javacert.html" data-title="Our Project 3"><i class="fa fa-search fa-2x"></i></a>

                                          
                                        </figcaption>
                                    </figure>
                                </li>

                                 <li class="cbp-item android">
                                    <figure>
                                        <img src="img/portfolio/thumb/curso_android.png" alt="">
                                        <figcaption>
                                           <a href="android/index.html" data-title="Our Project 3"><i class="fa fa-search fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>
                                
                                 <li class="cbp-item web">
                                    <figure>
                                        <img src="img/portfolio/thumb/desarrollo.jpg" alt="">
                                        <figcaption>
                                           <a href="web.html" data-title="Our Project 3"><i class="fa fa-search fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>


                                <!--<li class="cbp-item apps branding">
                                    <figure>
                                        <img src="img/portfolio/thumb/3.jpg" alt="">
                                        <figcaption>
                                            <a href="img/portfolio/full/3.jpg" class="cbp-lightbox" data-title="Our Project 5"><i class="fa fa-search fa-2x"></i></a>

                                            <a href="projects/project5.html" class="cbp-singlePage"><i class="fa fa-expand fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="cbp-item web-design video">
                                    <figure>
                                        <img src="img/portfolio/thumb/3-video.jpg" alt="">
                                        <figcaption>
                                            <a href="http://vimeo.com/64518471#at=0" class="cbp-lightbox" data-title="Our Project 6"><i class="fa fa-search fa-2x"></i></a>

                                            <a href="projects/project6.html" class="cbp-singlePage"><i class="fa fa-expand fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="cbp-item apps">
                                    <figure>
                                        <img src="img/portfolio/thumb/4.jpg" alt="">
                                        <figcaption>
                                            <a href="img/portfolio/full/4.jpg" class="cbp-lightbox" data-title="Our Project 7"><i class="fa fa-search fa-2x"></i></a>

                                            <a href="projects/project7.html" class="cbp-singlePage"><i class="fa fa-expand fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="cbp-item photography">
                                    <figure>
                                        <img src="img/portfolio/thumb/5.jpg" alt="">
                                        <figcaption>
                                            <a href="img/portfolio/full/5.jpg" class="cbp-lightbox" data-title="Our Project 8"><i class="fa fa-search fa-2x"></i></a>

                                            <a href="projects/project8.html" class="cbp-singlePage"><i class="fa fa-expand fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>

                                <li class="cbp-item web-design photography">
                                    <figure>
                                        <img src="img/portfolio/thumb/6.jpg" alt="">
                                        <figcaption>
                                            <a href="img/portfolio/full/6.jpg" class="cbp-lightbox" data-title="Our Project 9"><i class="fa fa-search fa-2x"></i></a>

                                            <a href="projects/project9.html" class="cbp-singlePage"><i class="fa fa-expand fa-2x"></i></a>
                                        </figcaption>
                                    </figure>
                                </li>-->

                           <!-- </ul>
                        </div>-->

                       <!-- <div class="cbp-l-loadMore-button">
                            <a href="projects/loadMore.html" class="cbp-l-loadMore-button-link">Load More</a>
                        </div>-->

                    <!--</div>
                    
                </div>
            </section>-->
            <!-- End Portfolio -->
            
            <!-- Start Separator Testimonials -->
            <section id="separator-testimonials" data-stellar-background-ratio="0.7" >
                <div class="row text-center" style="position:relative;">
                    <div class="parallax-overlay"></div> 
                    <div class="liquid-slider" style="z-index: 3;" id="testimonials-slider">
                        
                    </div>
                </div>
            </section>
            <!-- End Separator Testimonials -->
            
            <!-- Start Clients -->
            <!--<section id="clients">
                <div class="container">
                    <div class="col-lg-12 section-title-clients wow flipInX">
                        <h2><small>Son Algunos De Nuestros</small><br><strong>Clientes Satisfechos</strong></h2>
                        <p class="lead">Enseñado Con <span class="highlight">Pasión.</span></p>
                    </div>
                    
                    <div class="clients-logos">
                        <div class="col-sm-2 col-xs-4">
            
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <img class="img-responsive" src="img/tec-01.png"/></a>
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <img class="img-responsive" src="img/kfc-01.png"/></a>
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <img class="img-responsive" src="img/pizza-01.png"/></a>
                        </div>
                        <div class="col-sm-2 col-xs-4">
            
                        </div>
                        <div class="col-sm-2 col-xs-4">
            
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- End Clients -->
<br><br><br>
            <!-- Start Get Connected -->
            <section id="get-connected" data-stellar-background-ratio="0.7">
                <div class="row text-center" style="position:relative; background: #121212;">
                    <div class="parallax-overlay"></div> 
                    
                    <div class="container connected-row text-center wow flipInX">
                            <h2><small class="white">Conéctese <br></small>Síganos</h2>
                            <p class="lead">¡Conéctese con nosotros en las redes sociales!</p>

                        <ul class="connected-icons text-center">
                            <li class="col-sm-2 col-xs-2 connected-icon"><a target="_blank" >
                                    <span class="fa-stack fa-lg fa-4x">
                                        <!--<i class="fa fa-circle fa-stack-2x"></i>-->
                                        <!--<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>-->
                                    </span><br>
                                    <!--<span class="lead">Facebook</span><br>-->
                                    <!--<span class="white">Sea Nuestro Amigo</span>-->
                                </a>
                            </li>
                            <li class="col-sm-2 col-xs-2 connected-icon"><a target="_blank" >
                                    <span class="fa-stack fa-lg fa-4x">
                                        <!--<i class="fa fa-circle fa-stack-2x"></i>-->
                                        <!--<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>-->
                                    </span><br>
                                    <!--<span class="lead">Twitter</span><br>-->
                                    <!--<span class="white">Síganos</span>-->
                                </a>
                            </li>

	<link type="text/css" rel="stylesheet" href="../htdocs/ayalatest/css/cssLogos.css" >
	<link rel="stylesheet" type="text/css " href="<?=base_url()?>css/cssLogos.css" />
<table class="jtabla" style=" width: 90%; margin-top: -60px;">
<tr>
<td style="width: 30%; height: 250px; "> 
                            <li class="col-sm-2 col-xs-6 connected-icon"><a target="_blank" href="https://www.facebook.com/Certificatic-1394154247491901/?fref=ts">
                                    <span class="fa-stack fa-lg fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span><br>
                                    <span class="lead">Certificatic</span><br>
                                    <span class="white">Me gusta</span>
                                </a>
                            </li>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
                            <li class="col-sm-2 col-xs-6 connected-icon"><a target="_blank" href="https://twitter.com/CertificaTIC?ref_src=twsrc%5Etfw">
                                    <span class="fa-stack fa-lg fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span><br>
                                    <span class="lead">@Certificatic</span><br>
                                    <span class="white">Síguenos</span>
                                </a>
                            </li>
</td>
</tr>
</table>
                            <li class="col-sm-2 col-xs-6 connected-icon"><a target="_blank" >
                                    <span class="fa-stack fa-lg fa-4x">
                                        <!--<i class="fa fa-circle fa-stack-2x"></i>-->
                                        <!--<i class="fa fa-google-plus-square fa-stack-1x fa-inverse"></i>-->
                                    </span><br>
                                    <!--<span class="lead">Google+</span><br>-->
                                    <!--<span class="white">Join Our Circle</span>-->
                                </a>
                            </li>
                            <li class="col-sm-2 col-xs-6 connected-icon"><a target="_blank">
                                    <span class="fa-stack fa-lg fa-4x">
                                        <!--<i class="fa fa-circle fa-stack-2x"></i>-->
                                        <!--<i class="fa fa-vimeo-square fa-stack-1x fa-inverse"></i>-->
                                    </span><br>
                                    <!--<span class="lead">Vimeo</span><br>-->
                                    <!--<span class="white">Check Out New Videos</span>-->
                                </a>
                            </li>
                        </ul>        
                    </div>    
                </div>
            </section>
            <!-- End Get Connected -->    
            
            <!-- Start Price List --><!--
            <section id="price-list">
                <div class="container">
                    <div class="col-lg-12 section-title-price wow flipInX">
                        <h2><small>¡Inscríbete ahora!</small><br><strong>Nuestras últimas ofertas</strong></h2>
                        <p class="lead"> <span class="highlight">Sólo hoy</span></p>
                    </div>
                    <div class="price-container">     
                        <div class="row">   
                            
                            <div class="col-md-4 col-sm-4 wow flipInY">
                                <div class="price-box text-center">
                                    <div class="price-box-info">
                                        <h2>Oracle 12c</h2>
                                        <h2>2,500<span>$</span><small>/mxn.</small></h2>
                                    </div>  
                                    <div class="price-box-offer">
                                       <ul class="offer-list">
                                        <li><span>Precio de lista</span> $6,800</li>
                                        <li><span>Inicio curso</span> 20 de Septiembre</li>
                                        <li><span>Válido hasta</span> 26 de Agosto</li>                     
                                       </ul>
                                    </div>
                                    <div class="sign-up-btn">
                                        <a href="#"><button type="button" class="btn btn-primary">Comprar Ahora</button></a>
                                    </div>
                                </div>           
                            </div>
                            
                            <div class="col-md-4 col-sm-4 wow flipInX">
                                <div class="price-box-big text-center">
                                    <div class="price-box-info">
                                        <h2>Java</h2>
                                        <h2>1,600<span>$</span><small>/mnx.</small></h2>
                                    </div>  
                                    <div class="price-box-offer">
                                       <ul class="offer-list">
                                        <li><span>Precio de lista</span> $5,000</li>
                                        <li><span>Inicio curso</span> 10 de Septiembre</li>
                                        <li><span>Válido hasta</span> 26 de Agosto</li> 
                                       </ul>
                                    </div>
                                    <div class="sign-up-btn">
                                        <a href="#"><button type="button" class="btn btn-primary btn-lg">Comprar ahora</button></a>
                                    </div>
                                </div>           
                            </div>
                            
                            <div class="col-md-4 col-sm-4 wow flipInY">
                                <div class="price-box text-center">
                                    <div class="price-box-info">
                                        <h2>Scrum</h2>
                                        <h2>4,500<span>$</span><small>/mxn.</small></h2>
                                    </div>  
                                    <div class="price-box-offer">
                                       <ul class="offer-list">
                                       <li><span>Precio de lista</span> $8,000</li>
                                        <li><span>Inicio curso</span> 20 de Septiembre</li>
                                        <li><span>Válido hasta</span> 26 de Agosto</li> 
                                       </ul>
                                    </div>
                                    <div class="sign-up-btn">
                                        <a href="#"><button type="button" class="btn btn-primary">Comprar ahora</button></a>
                                    </div>
                                </div>           
                            </div>



                                                                   
                        </div>        
                    </div>
                </div>
            </section>    -->    
            <!-- End Price List -->
            
            <!-- Start Contact Details -->
            <section id="telefono" data-stellar-background-ratio="0.7">
                <div class="row text-center" style="position:relative; background: #121212;">
                    <div class="parallax-overlay"></div> 
                    <div class="container">
                            <div class="details col-lg-12 wow flipInX">
                                <div class="phone-infos">
                                    <font color="#045FB4"><h1><i class="fa fa-phone"></i> (55) 67232060</h1></font>
                                     <font color="#045FB4"><h2> <img src="<?=base_url()?>img/logoWhatsApp.png" width="50"> 55-69-63-62-55</h2></font>
                                </div>
                                <div class="col-lg-12">
                                    
                                    <h2 style="color: #fff !important;"><font> contacto@certificatic.org</font></h2>
                                    
                                    <h3><small class="white">Direccion. Sur 69-A número 3118 Col. Viaducto Piedad Del. Iztacalco, 08200, México D.F.
</small></h3>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Details -->
            
            <!-- Start Contact Form -->
            <!--<section id="contact-form">
                <div class="container">
                    <div class="col-lg-12 section-title-price wow flipInX">
                        <h2><small>Quieres saber más</small><br><strong>Contáctanos</strong></h2>
                        <p class="lead">Nos gustaría <span class="highlighst">saber de ti.</span></p>
                    </div>
                    <div class="col-lg-12 text-center wow flipInX" id="contact">
                        <div id="message"></div>
                        <form method="post" action="" name="contactform" id="contactform">
                        <fieldset>
                        <div class="col-md-6"> 
                            <input name="name" type="text" id="name" size="30" value="" placeholder="Nombre"/>
                            <br />
                            <input name="email" type="text" id="email" size="30" value="" placeholder="Email"/>
                            <br /> 
                            <input name="phone" type="text" id="phone" size="30" value="" placeholder="Telefono"/>
                        </div>
                        <div class="col-md-6"> 
                            <textarea name="comments" cols="40" rows="5" id="comments" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="submit" class="submit" id="submit" value="Enviar" />
                        </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Contact Form -->
 </body>           
</html>
