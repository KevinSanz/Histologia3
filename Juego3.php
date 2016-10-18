

<html>
     <?php
         
          
          
        ?>
    <head>
        <meta charset="UTF-8">
        <title>Juego3</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/desplegable/CSSJuego1.css" rel="stylesheet" type="text/css">
        <link href="css/desplegable/transfomracion.css" rel="stylesheet" type="text/css">
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
						<li><a href="#">Juego 4</a></li>
					</ul>
				</li>
				<li><a href="#">Resultados</a></li>
                               <li><a href="#" onclick="getRandom()" id="random">Random</a></li>
                                                       </ul>
				<ul class="nav navbar-nav navbar-right">          
            <li><a href="./">Cerrar sesión <span class="sr-only"></span></a></li>
            <img src="imagenes/alumnos/<?php echo $dni;?>.jpg" 
                 class="img-circle" style="width:55px;padding:10px;">
          </ul>
				
			
		</nav>
	</header>
                <!--<Fin menu>-->
                
                </div>
            </div>
            
            <div class="col-md-18"><h2 class="text-center" style="color:white;">Juego 3</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                  
            <div class="row">
                <div class="col-md-12">
                    
                     
                     
                <div class="col-md-18">
                    <a href="#" class="thumbnail">
                        
                            <img src="imagenes/imagen0021.jpg" style="width: 50%; border: Black 5px solid;
                            border-radius: 20px;" >
                    

                     </a>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                    <br>
                    <br>

                    
                    <h2 class="text-center" style="color:white;">  </h2>
                    <div class="row"> 
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
            </div>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap
