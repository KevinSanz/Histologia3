<!DOCTYPE html>

<html>
     <?php
         
          
          
        ?>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/desplegable/CSSJuego1.css" rel="stylesheet" type="text/css">
        <script src="css/desplegable/JQueryLatest.js"></script>
        <script src="css/desplegable/main.js"></script>
        <script src="js/Random.js"></script>
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
						<li><a href="Juego4.php">Juego 4</a></li>
					</ul>
				</li>
				<li><a href="#">Resultados</a></li>
                                <li><a href="#" onclick="getRandom()" id="random">Random</a></li>
                                                        
				<ul class="nav navbar-nav navbar-right">          
                                    <li><a href=""onclick="logout.php">Cerrar sesión <span class="sr-only"></span></a></li>
            <img src="imagenes/alumnos/<?php echo $dni;?>.jpg" 
                 class="img-circle" style="width:55px;padding:10px;">
          </ul>
                        </ul>		
			
		</nav>
	</header>
                <!--<Fin menu>-->
                
                </div>
            </div>
            
            <div class="col-md-18"><h2 class="text-center" style="color:white;">Juegos</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                    <!--<qui empiezan las imagenes>-->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <a href="Juego1.php" class="thumbnail">
                                <img src="imagenes/fondos/fondoNico.jpg" alt="...">
                        </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="Juego2.php" class="thumbnail">
                                <img src="imagenes/fondos/fondoNico.jpg">
                        </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="Juego3.php" class="thumbnail">
                                <img src="imagenes/fondos/fondoNico.jpg" >
                        </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="Juego4.php" class="thumbnail">
                                <img src="imagenes/fondos/fondoNico.jpg" >
                        </a>
                        </div>
                    
                </div>
                    <div class="col-md-18"><h2 class="text-center" style="color:white;">Progreso</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">  </h2>
                    <div class="row">
                       <!--<Aqui empieza el Progreso LA tabla >--> 
                       
                       <div class="jumbotron">
                            <div class="container">
                                <h1>Tu Progreso</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p><a class="btn btn-primary btn-lg" role="button">Leer más</a></p>
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4"></div>
            </div>
                        <div id="cerrar">
                           
                            
                        </div>
        </div>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>