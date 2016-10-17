<!DOCTYPE html>

<html>
     <?php
         
          
          
        ?>
    <head>
        <meta charset="UTF-8">
        <title>Juego2</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/desplegable/menu.css" rel="stylesheet" type="text/css">
        <link href="css/desplegable/CSSJuego2.css" rel="stylesheet" type="text/css">
        <script src="css/desplegable/JQueryLatest.js"></script>
        <script src="css/desplegable/Juego2.js"></script>
        <script src="css/desplegable/main.js"></script>
        
        <style>
            body{
                    background-image: url(imagenes/ciudad.jpg);

            }
            
        </style>
    </head>
    <body >
        <div class="container" >
            <div class="row">
                <!--<Este es la primera fila que incluye el titulo Histologia >-->
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                <div class="col-md-12"><h2 class="text-center" style="color:white;">HISTOLOGÍA</h2>
                <!--<Aqui empieza el menu de la pagina >-->
                <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu">Hitoslogía</a>
		</div>

		<nav>
			<ul>
                            <li><a href="inicio.php">Inicio</a></li>
				<li class="submenu">
					<a href="#">Juegos</a>
					<ul class="children">
                                            <li><a href="Juego1.php">Juego 1</a></li>
                                            <li><a href="Juego2.php">Juego 2</a></li>
                                            <li><a href="Juego3.php">Juego 3</a></li>
						<li><a href="#">Juego 4</a></li>
					</ul>
				</li>
				<li><a href="#">Resultados</a></li>
                                <li><a href="#">Ramdom</a></li>
				
			</ul>
		</nav>
	</header>
                <!--<Fin menu>-->
                
                </div>
            </div>
            
            <div class="col-md-18"><h2 class="text-center" style="color:white;">Juego2</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                    <!--<qui empiezan las imagenes>-->
           <div class="row">
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/easing/EasePack.min.js"></script>

<div id="wrapper">
	<div id="game"></div>
    <div id="popUp">
        <div id="popUpImage"></div>
        <div id="popUpHeadline"></div>
        <div id="popUpBody"></div>
    </div>
</div>
                    
                </div>
                    <div class="col-md-18"><h2 class="text-center" style="color:white;">Progreso</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">  </h2>
                    <div class="row">
                      
                    
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></