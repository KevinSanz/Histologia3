     
        function getRandom() {
            var numero;
            numero = Math.floor(Math.random() * (5 - 1)) + 1;
            random.href="Juego"+numero+".php";
        }

function random(_max, _min){
    var numero;
    numero = Math.floor(Math.random() * ((_max+1) - (_min+1))) + 1;
    return numero;
}

