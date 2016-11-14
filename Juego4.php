<!DOCTYPE html>

<html lang="en">
     <?php
        session_start();
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
        <script>
        var arrayImg= <?php echo json_encode($_SESSION['imagenes']); ?> ;
        </script>
        <script>
    var pu;
    var res;
    var movido;
    var comprobarRes;
    var comprobarPu;
    var posicion = [];
    var respuestas = [];
    var k = 0;
    while (k < arrayImg.length){
        posicion[k] = k;
        k++;
    }
    k = 0;
    shuffle(posicion);
    while (k < 4){
        respuestas[k] = posicion[k];
        k++;
    }
    var uno = 1;
    var dos = 2;
    var tres = 3;
    var cuatro = 4;
    
//    for (var i = 1; i<8; i++){
//        var imagen = "img"+i;
//        console.log("imagen");
//        if($(imagen).src === ?php echo imagen1 ?>){
//            $(imagen).addClass("pr"+uno);
//        }
//        if($(imagen).src === ?php echo imagen2 ?>){
//            $(imagen).addClass("pr"+dos);
//        }
//        if($(imagen).src === ?php echo imagen3 ?>){
//            $(imagen).addClass("pr"+tres);
//        }
//        if($(imagen).src === ?php echo imagen4 ?>){
//            $(imagen).addClass("pr"+cuatro);
//        }
//    }
//    $(img1).addClass("pr"+uno);   
//    $(img5).addClass("pr"+uno);
//    $(img2).addClass("pr"+dos);
//    $(img6).addClass("pr"+dos);
//    $(img3).addClass("pr"+tres);
//    $(img7).addClass("pr"+tres);
//    $(img4).addClass("pr"+cuatro);
//    $(img8).addClass("pr"+cuatro);
    $( function() {
      
    $( ".draggable" ).draggable({
        drag: function(e, ui){
            res = this.value;
            
            movido = $(this);
        }
    });
    $( ".droppable" ).droppable({
      drop: function( e, ui ) {
          var posX = e.pageX - $(this).position().left;
          var posY = e.pageY - $(this).position().top;
          pu = this.value;
          
        
        $( this )
//          .append('<div id="recuadro" style="width: 130px; height: 130px; border: solid green 1px; position:absolute; top:'+posY+'px; left:'+posX+'px;"></div>');
        
            .addClass( "ui-state-highlight" );
            console.log("ha funcionado");
            sumaPuntos();
        $(movido).removeClass(draggable);
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
            if(pu === res && pu !== 0){
                sumar = true;
                R1 = true;
            }
            if(sumar){
                 puntuacion = puntuacion + 10;
                
            
        }
            console.log(puntuacion);
            
        }
        function shuffle(a) {
    var j, x, i;
    for (i = a.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = a[i - 1];
        a[i - 1] = a[j];
        a[j] = x;
    }
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
                                            <li><a href="Juego2.php">Juego 2</a></li>
                                            <li><a href="Juego3.php">Juego 3</a></li>
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
                            <div class="draggable" id="Res1">
                            <img id="img1"  alt="..." style="max-height: 250px; max-width: 300px">
                            <br>
                            
                            </div>
                            <div class="draggable" id="Res2">
                                
                                <img id="img2"  style="max-height: 250px;  max-width: 300px">
                            </div>
                            <div class="draggable" id="Res3">
                            
                                <img id="img3"  style="max-height: 250px;  max-width: 300px">
                            </div>
                            <div class="draggable" id="Res4">
                            
                                <img id="img4"  style="max-height: 250px;  max-width: 300px; min-height: 200px; min-width: 300px">
                            </div>
                        </div>
                    
                     </div>
                <div class="col">
                        <div class="col-sm-4">
                            
                        </div>
                    
                     </div>
                <div class="col">
                        <div class="col-sm-4">
                            <div id="Res5" class="droppable">
                            <img id="img5"  alt="..." style="max-height: 250px;  max-width: 300px">
                            <br>
                            
                            </div>
                            <div id="Res6" class="droppable">
                                
                            <img id="img6"  style="max-height: 250px; max-width: 300px">
                            </div>
                            <div id="Res7" class="droppable">
                            
                                <img id="img7"  style="max-height: 250px; max-width: 300px">
                            </div>
                            <div id="Res8" class="droppable">
                            
                            <img id="img8"  style="max-height: 250px; max-width: 300px; min-height: 200px; min-width: 300px">
                            </div>
                        </div>
                    
                     </div>
            </div>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            
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
    var elemento;
    var j = 0;
    while(j< 2){
        shuffle(respuestas);
        var i = 0;
        while(i < 4){
            if(j===1){
                elemento = document.getElementById("img"+(i+5));
                elemento.src = arrayImg[(respuestas[i])]["Direccion"] ;
                elemento = document.getElementById("Res"+(i+5));
                elemento.value = arrayImg[(respuestas[i])]["id"];
            }
            else{
                elemento = document.getElementById("img"+(i+1));
                elemento.src = arrayImg[(respuestas[i])]["Direccion"] ;
                elemento = document.getElementById("Res"+(i+1));
                elemento.value = arrayImg[(respuestas[i])]["id"];
            }
            i++;
        }
        i= 0;
        j++;
    }
    console.log(elemento.value);
        function getRandom() {
            var numero;
            numero = Math.floor(Math.random() * (5 - 1)) + 1;
            random.href="Juego"+numero+".php";
        }
    </script>