<!DOCTYPE html>

<html lang="en">
     <?php
         
          
          
        ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/desplegable/CSSJuego1.css" rel="stylesheet" type="text/css">
        <script src="css/desplegable/JQueryLatest.js"></script>
        <script src="css/desplegable/main.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
        
        </script>
        <script>
    var pu;
    $( function() {
      
    $( ".draggable" ).draggable();
    $( ".droppable" ).droppable({
      drop: function( e, ui ) {
          var posX = e.pageX - $(this).position().left;
          var posY = e.pageY - $(this).position().top;
          pu = this.id;
          
        $( this )
//          .append('<div id="recuadro" style="width: 130px; height: 130px; border: solid green 1px; position:absolute; top:'+posY+'px; left:'+posX+'px;"></div>');
        
            .addClass( "ui-state-highlight" );
            console.log("ha funcionado");
            sumaPuntos();
      }
    });
  } );
  var puntuacion = 0;
        var R1 = false;
        var R2 = false;
        var R3 = false;
        var R4 = false;
        var sumar = false;
        function sumaPuntos(){
           
            sumar = false;
            if(pu === "Res1" && R1 === false){
                sumar = true;
                R1 = true;
            }
            if(pu === "Res2" && R2 === false){
                sumar = true;
                R2 = true;
            }
            if(pu === "Res3" && R3 === false){
                sumar = true;
                R3 = true;
            }
            if(pu === "Res4" && R4 === false){
                sumar = true;
                R4 = true;
            }
            if(sumar){
                 puntuacion = puntuacion + 10;
                $( puntos )
                    .text(puntuacion);
            
        }
            console.log(puntuacion);
            
        }
  </script>
        <style>
            body{
                    background-image: url(imagenes/ciudad.jpg);

            }
            p{
                color: white;
                
            }
        </style>
    </head>
    <body>
        
        <div class="container" >
            <div class="row">
                <!--<Este es la primera fila que incluye el titulo Histologia >-->
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                <div class="col-md-12"><h2 class="text-center" style="color:white;">HISTOLOGÍA</h2>
                <!--<Aqui empieza el menu de la pagina >-->
                <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu">Histología</a>
		</div>

		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li class="submenu">
					<a href="#">Juegos</a>
					<ul class="children">
                                            <li><a href="Juego1.php">Juego 1</a></li>
						<li><a href="#">Juego 2</a></li>
						<li><a href="#">Juego 3</a></li>
                                                <li><a href="Juego4.php">Juego 4</a></li>
					</ul>
				</li>
				<li><a href="#">Resultados</a></li>
                                <li><a href="#" onclick="getRandom()" id="random">Random</a></li>
				
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
                
                    <div class="col">
                        <div class="col-sm-4">
                            <div class="draggable">
                            <img src="imagenes/fondoNico.jpg" alt="..." style="max-height: 250px; max-width: 300px">
                            <br>
                            
                            </div>
                            <div class="draggable">
                                
                            <img src="imagenes/fondoNico.jpg" style="max-height: 250px;  max-width: 300px">
                            </div>
                            <div class="draggable">
                            
                            <img src="imagenes/fondoNico.jpg" style="max-height: 250px;  max-width: 300px">
                            </div>
                            <div class="draggable">
                            
                            <img src="imagenes/fondoNico.jpg" style="max-height: 250px;  max-width: 300px">
                            </div>
                        </div>
                    
                     </div>
                <div class="col">
                        <div class="col-sm-4">
                            
                        </div>
                    
                     </div>
                <div class="col">
                        <div class="col-sm-4">
                            <div id="Res1" class="droppable">
                            <img src="imagenes/fondoNico.jpg" alt="..." style="max-height: 250px;  max-width: 300px">
                            <br>
                            
                            </div>
                            <div id="Res2" class="droppable">
                                
                            <img src="imagenes/fondoNico.jpg" style="max-height: 250px; max-width: 300px">
                            </div>
                            <div id="Res3" class="droppable">
                            
                            <img src="imagenes/fondoNico.jpg" style="max-height: 250px; max-width: 300px">
                            </div>
                            <div id="Res4" class="droppable">
                            
                            <img src="imagenes/fondoNico.jpg" style="max-height: 250px; max-width: 300px">
                            </div>
                        </div>
                    
                     </div>
            </div>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <p id="score" class="bt-menu">Puntuacion: </p>
                            <p id="puntos" class="bt-menu"></p>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    
                <svg><line id="line1"/></svg>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>       
        function getRandom() {
            var numero;
            numero = Math.floor(Math.random() * (5 - 1)) + 1;
            random.href="Juego"+numero+".php";
        }
    </script>