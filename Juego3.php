

<html>
     <?php
         
           session_start();
          
           $numero = 0;
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
            
            
//            var textoResCorrecta = "<?php echo $_SESSION['imagenes'][$numero]['Nombre'] ?>";
//            var textoResFalsa = "esta respuesta es falsa";
//            // global variable to hold total score
var total = 0;

// begin plugin to handle each answer
$.fn.answer = function() {

  // for this element, listen for a click event, then run the onClick function
  this.click(onClick);

  // define the onClick function
  function onClick() {
var resCorrecta = random(4,1);
    // get value from the clicked button and store in the varialble val
    
    var number = 1;
    // if val is equal to one...
    if (number === 1) {

      // ...add one to the total variable...
      total++;

      // ...change the color of the button from blue to green, add some html to the end of the div and unbind the event to prevent buttons for this question from being clicked again
      $(this).removeClass('btn-primary'); $(this).addClass('btn-success'); $(this).find('button').unbind();;
    }

    // if val does not equal one, change button from blue to red, add some html and unbind the event
    else {
      $(this).removeClass('btn-primary').addClass('btn-danger').find('button').unbind();
    };

  };
};
// end of answer plugin

// begin plugin to calculate the final score and display one of a range of images
$.fn.calcScore = function() {
  this.click(onClick)

  function onClick() {

    // if the score is equal to or less than 4, do the following
    if (total == 0) {
      // add some html to the end of the score element
      $('.score').append('<h2>You got ' + total + ' right. WTF loser.');
      // find the first element and slidedown to reveal it
      $('.first').slideDown();

    } else if (total > 0 && total <= 4) {
      // add some html to the end of the score element
      $('.score').append('<h2>You got ' + total + ' right!');
      // find the first element and slidedown to reveal it
      $('.first').slideDown();
    }
    // if total is greater than or equal to 5 AND less than or equal to 9, do the following
    else if (total >= 5 && total <= 9) {
      // repeat function contents from above with different image reveal
    };

    // etc etc for other score brackets

    // unbind the click event
    $(this).unbind();
  };
};
// end of calcScore plugin

// call answer plugin on each question
$('.q1b').answer();

// call calcScore plugin on score button
$('.scoreButton').calcScore();
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
                        
                            <img id="imagenPreguntaB" src="<?php echo $_SESSION['imagenes'][$numero]['Direccion'] ?>" style="width: 50%; border: Black 5px solid;
                            border-radius: 20px;" class="zoom" >
                    										<!--Respuestas Posibles-->

                     </div>
                    <button id="btn1" type="button" class="btn btn-primary btn-lg btn-block answer">Respuesta correcta</button>
                    <button id="btn2" type="button" class="btn btn-primary btn-lg btn-block answer">Respuesta falsa</button>
                    <button id="btn3" type="button" class="btn btn-primary btn-lg btn-block answer">Respuesta falsa</button>
                    <button id="btn4" type="button" class="btn btn-primary btn-lg btn-block answer">Respuesta falsa</button>
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