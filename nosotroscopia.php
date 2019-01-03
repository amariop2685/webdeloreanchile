<!DOCTYPE html>
<html lang="en">
<head>
  <title>DeLorean</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?¿family=Open Sans">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href= "css/style.css">
	<link rel="stylesheet" href= "css/style_nosotros.css">
  <link rel="stylesheet" href= "bootstrap-4.1.3/bootstrap-4.1.3/dist/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  

  </head>

	<body>

  <!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="tel:#" class="w3-bar-item w3-button"><i class="fa fa-phone"></i> Telefóno: +56(2)2897-4700</a>
  <a href="tel:#" class="w3-bar-item w3-button"><i class="fa fa-whatsapp"></i> Telefóno: +56(9)5228-4219</a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-map-marker"></i> Av.Libertador Bernardo O'Higgins 1302, Of.70, comuna Santiago</a>
  <a href="https://www.facebook.com/deloreanch/" class="w3-bar-item w3-button w3-right" target="_blank"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/deloreancl/" class="w3-bar-item w3-button w3-right" target="_blank"><i class="fa fa-instagram"></i></a>
  <a href="https://www.twitter.com/deloreanch" class="w3-bar-item w3-button w3-right" target="_blank"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/company/deloreanchile/" class="w3-bar-item w3-button w3-right" target="_blank"><i class="fa fa-linkedin"></i></a>
  </div>

<!-- Header -->
<header class="w3-container w3-center w3-padding-48 w3-white">
<div class="row"> <!--dividir la misma columna de logo y menu-->


<div class="col-sm-4 col-11">
  

  
    <!--<h1 class="w3-xxxlarge"><b>DELOREAN CHILE</b></h1>-->
    <a href="http://localhost">
    <img src="imagen/logo-delorean.png" width="200" height="70">
    </a>
    </div>
    <!--<h6>Nuevas soluciones de <span class="w3-tag">Nube o Cloud</span></h6>-->
  
  <div class="col-sm-8">
    <style>

      .navbar-toggler{
    display: -webkit-flex; /* Safari */
    -webkit-align-items: center; /* Safari 7.0+ */
    display: flex;
    align-items: right;}
</style>

  <!--menu-->
  <nav class="navbar navbar-expand-sm bg-none navbar-dark">
    <a class="navbar-brand" href="#">DeLorean Chile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-black" href="nosotros.php">Nosotros</a>
        </li>
        <div class="w3-dropdown-hover">
                  <ul><button class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-black" title="Notifications">Servicios <i class="fa fa-caret-down"></i></button>  
                    <div class="w3-dropdown-content w3-card-4" style="width:500px">

                      
                      <li><a href="#" class="w3-bar-item w3-button">Internet y Software Colaborativo</a></li>
						<ul>
                      <li><a href="#" class="w3-bar-item w3-button">Software de Gestión Documental</a></li>
                      <li><a href="servicios/sharepoint.php" class="w3-bar-item w3-button">Sharepoint </a></li>
                      <li><a href="servicios/administracionoffice365.php"class="w3-bar-item w3-button">Office365</a></li>
                      <li><a href="servicios/softwareerp.php	" class="w3-bar-item w3-button">Software ERP</a></li>
							</ul>
                      <li><a href="#" class="w3-bar-item w3-button">Riesgo de seguridad</a></li>
                      <li><a href="#" class="w3-bar-item w3-button">Analisis de Información</a></li>
                      <li><a href="#" class="w3-bar-item w3-button">Nuevas Tecnologías</a></li>
                      <li><a href="#" class="w3-bar-item w3-button">Migración</a></li>
                    </div>
					  </ul> 
                  </div>
			 
                  <div class="w3-dropdown-hover">
                    <ul><button class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-black">Industrias <i class="fa fa-caret-down"></i></button>
                  <div class="w3-dropdown-content w3-card-4" style="width:550px">
                                
                      <li><a href="#" class="w3-bar-item w3-button">Sector Publico</a></li>
                      <li><a href="#" class="w3-bar-item w3-button">Sector Minero</a></li>
                      <li><a href="#" class="w3-bar-item w3-button">Sector Logistico y de transporte</a></li>
                      <li><a href="#" class="w3-bar-item w3-button">Sector Financiero</a></li>
                    </div>
						</ul>
                  </div>
		  		<ul class="navbar-nav">
                      <li class="nav-item">
                    <a class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-black" href="#">Contacto</a>
                    </li>
                    
  </div>  
</nav>
</div>
</div>
  </header>

	<div class="imagenprime_nosotros"><!--imagen con efecto de desplazamiento-->
	<div class="texto-encima"><h3>DELOREAN</h3></div>
  	<div class="centrado"><p>Es una empresa creada en el 2013 con el propósito de brindar servicios de excelencia en el área TI con una disposición de atención completa a las distintas industrias, garantizando la implementación de las mejores herramientas dentro del mercado tecnológico para así solucionar de manera segura las problemáticas y necesidades que presenten nuestros clientes.</p></div>
	</div>
	
<!--<div class="beforecontainer"><img src="imagen/circuito.jpg" height="500px" width="1500px">
	</div>-->

  


<body>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 class="segundotitulo">MISIÓN</h2>
     <p class="parrafosegundo">Ser un canal de soluciones confiable; con el personal técnico más capacitado y comprometido en aportar valor al negocio de nuestros clientes, apoyando sus estrategias de desarrollo en el área tecnológica, implementando servicios y/o productos de calidad que brinden resultados positivos e innovadores, cubriendo las necesidades de pequeñas, medianas y grandes empresas.</p>
      
      
    </div>
    <div class="col-sm-8">
      
      <div class="fakeimg">  <img src="imagen/mision.jpg" width="746px" height="497px">
		</div>
		 </div>
  </div>
<div class="container_mision">
<h2 id=titulovision>VISIÓN</h2>
<div class="row text-mision">
	
  <div class="col"><img src="imagen/check-solid_naranja.svg" width="10px" heigth="30px"> Alcanzar la integración de las mejores herramientas y servicios de la industria tecnológica.</div>
  <div class="col"><img src="imagen/check-solid_naranja.svg" width="10px" heigth="30px"> Brindar soluciones a todas las empresas que busquen un crecimiento tecnológico de información.</div>
  <div class="col"><img src="imagen/check-solid_naranja.svg" width="10px" heigth="30px"> Mantener un equipo de trabajo capacitado que certifique una efectividad continua.</div>
  <div class="col"><img src="imagen/check-solid_naranja.svg" width="10px" heigth="30px">  Obtener un reconocimiento que nos posicione como pioneros a nivel nacional e internacional.</div>
</div>
	</div>
	
	</div>	
</body>  
<footer>
<div class="jumbotron text-center">
  <div class="row align-items-start">
              <div class="col">
                <h2>Icomac</h2>
                <p>Somos una empresa aliada en suministro de Equipos de computo y elementos de oficinas.</p>
                </div>
              <div class="col">
                <h2>Contáctanos</h2>
                   +56 (9) 52284219</br>
                  comercial@delorean.cl</br>
                 Av. Libertador Bernardo O'Higgins 1302, Of. 70</br>
                </div>
              <div class="col">
                <h2>Nuestra Ubicación</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.162137096874!2d-70.65650604884683!3d-33.44508210452918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a7988a4645%3A0x7dc3122dc08c133b!2sAv+Libertador+Bernardo+O&#39;Higgins+1302%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1542736513974" width="400" height="300" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
                </div>
                </div>
                <div class="row">	
                  <div class="col-sm">
                    
                    </div>
                  <div class="col-sm">
                    &copy;2018 DeLorean. Todos los Derechos Reservados.
                    </div>
                  <div class="col-sm">
                    
                    </div>
                  </div>
</div>
</footer>
</body>
</html>
