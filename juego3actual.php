

<html>
     <?php
         
           session_start();
          
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
        <script>
            
            document.getElementById("imagenPreguntaB").src = "<?php echo $_SESSION['imagenes'][1]['Direccion'] ?>";
        </script>
        <script>
            
            function checkAnswer(){

            }
        </script>
        <style>
            body{
                    background-image: url(imagenes/ciudad.jpg);

            }
			.zoom{
                            /* Aumentamos la anchura y altura durante 2 segundos */
                            transition: width 2s, height 2s, transform 2s;
                            -moz-transition: width 2s, height 2s, -moz-transform 2s;
                            -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
                            -o-transition: width 2s, height 2s,-o-transform 2s;
                            }
   			.zoom:hover{
                            /* tranformamos el elemento al pasar el mouse por encima */
                            transform : scale(2);
                            -moz-transform : scale(2);      /* Firefox */
                            -webkit-transform : scale(2);   /* Chrome - Safari */
                            -o-transform : scale(2);        /* Opera */
                            }

            
        </style>
    </head>
    <body >
        <div class="container" >
            <div class="row">
                <!--<Este es la primera fila que incluye el titulo Histologia >-->
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                <div class="col-md-12"><h2 class="text-center" style="color:white;">HISTOLOG?A</h2>
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
						<li><a href="Juego4.php">Juego 4</a></li>
					</ul>
				</li>
				<li><a href="resultados.html">Resultados</a></li>
                <li><a href="#" onClick="getRandom()" id="random">Random</a></li>
                                                       
				<ul class="nav navbar-nav navbar-right">          
           <li><a href="index_1.php" >Cerrar sesi?n </a></li>
            <img src="imagenes/alumnos/<?php echo $_SESSION['username']; ?>.jpg" 
                 class="img-circle" style="width:55px;padding:10px;">
          
			</ul>	</ul>
				
			
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
                    <div class="thumbnail">			<!--Imagen base de datos-->
                        
                            <img id="imagenPreguntaB" src="" style="width: 50%; border: Black 5px solid;
                            border-radius: 20px;" class="zoom" >
                    										<!--Respuestas Posibles-->

                     </div>
                    <button id="btn1" type="button" onclick="checkAnswer();" class="btn btn-primary btn-lg btn-block">Respuesta correcta</button>
                    <button id="btn2" type="button" onclick="checkAnswer();" class="btn btn-primary btn-lg btn-block">Respuesta falsa</button>
                    <button id="btn3" type="button" onclick="checkAnswer();" class="btn btn-primary btn-lg btn-block">Respuesta falsa</button>
                    <button id="btn4" type="button" onclick="checkAnswer();" class="btn btn-primary btn-lg btn-block">Respuesta falsa</button>
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
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
                </html>