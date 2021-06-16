// ### VARIABLES ###
var x=0,y=0;

// Array de palabras
var palabras = [["Uno", "Primer numero impar"], ["Dos", "Par"], ["Tres", "Segundo impar"], ["Cuatro", "Numero de caras de un cuadrado"], ["Cinco", "Picos de una estrella navideña"], ["Seis", "Número máximo en un dado"]];
// Palabra a averiguar
var palabra = "";
// Nº aleatorio
var rand;
// Palabra oculta
var oculta = [];
// Elemento html de la palabra
var hueco = document.getElementById("palabra");
// Contador de intentos
var cont = 6;
// Botones de letras
var buttons = document.getElementsByClassName('letra');
// Boton de reset
var btnInicio = document.getElementById("reset");


// ### FUNCIONES ###

// Escoger palabra al azar
function generaPalabra() {
  rand = (Math.random() * 6).toFixed(0);
  palabra = palabras[rand][0].toUpperCase();
  x=palabra.length;
  document.getElementById("hueco-pista").innerHTML = palabras[rand][1];
}

// Funcion para pintar los guiones de la palabra
function pintarGuiones(num) {
  for (var i = 0; i < num; i++) {
    oculta[i] = "_";
  }
  hueco.innerHTML = oculta.join("");
}

//Generar abecedario
function generaABC (a,z) {
  document.getElementById("abcdario").innerHTML = "";
  var i = a.charCodeAt(0), j = z.charCodeAt(0);
  var letra = "";
  for( ; i<=j; i++) {
    letra = String.fromCharCode(i).toUpperCase();
    document.getElementById("abcdario").innerHTML += "<button value='" + letra + "' onclick='intento(\"" + letra + "\")' class='letra' id='"+letra+"'>" + letra + "</button>";
    if(i==110) {
      document.getElementById("abcdario").innerHTML += "<button value='Ñ' onclick='intento(\"Ñ\")' class='letra' id='"+letra+"'>Ñ</button>";
    }
  }
}

// Chequear intento
function intento(letra) {
  document.getElementById(letra).disabled = true;
  if(palabra.indexOf(letra) != -1) {
    for(var i=0; i<palabra.length; i++) {
      if(palabra[i]==letra) oculta[i] = letra;
    }
    hueco.innerHTML = oculta.join("");
    document.getElementById("acierto").innerHTML = "Bien!";
    document.getElementById("acierto").className += "acierto verde";
    y=y+1;
  }else{
    cont--;
    document.getElementById("intentos").innerHTML = cont;
    document.getElementById("acierto").innerHTML = "Fallo!";
    document.getElementById("acierto").className += "acierto rojo";
    document.getElementById("image"+cont).className += "fade-in";
  }
  compruebaFin();
  setTimeout(function () { 
    document.getElementById("acierto").className = ""; 
  }, 800);
}

// Obtener pista
function pista() {
  document.getElementById("hueco-pista").innerHTML = palabras[rand][1];
}

// Compruba si ha finalizado
// Compruba si ha finalizado
function compruebaFin() {
  if( oculta.indexOf("_") == -1 ) {
      saveIntent((y*10)/x,2).then(()=>{
        document.getElementById("msg-final").innerHTML = "Felicidades !!";
        document.getElementById("msg-final").className += "zoom-in";
        document.getElementById("palabra").className += " encuadre";
        for (var i = 0; i < buttons.length; i++) {
          buttons[i].disabled = true;
        }
        document.getElementById("reset").innerHTML = "Empezar";
        btnInicio.onclick = function() { location.reload() };
      });
    
  }else if( cont == 0 ) {
    saveIntent((y*10)/x,2).then(()=>{
      document.getElementById("msg-final").innerHTML = "Fin del juego";
      document.getElementById("msg-final").className += "zoom-in";
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].disabled = true;
      }
      document.getElementById("reset").innerHTML = "Empezar";
      btnInicio.onclick = function () { location.reload() };
    });
    
  }
}

// Restablecer juego
function inicio() {
  generaPalabra();
  pintarGuiones(palabra.length);
  generaABC("a","z");
  cont = 6;
  document.getElementById("intentos").innerHTML=cont;
}

function saveIntent(grade,alumnoId){
  rq = {
    "grade":grade,
    "alumnoId":alumnoId
  }
    return $.ajax({
        method: "POST",
        url: '../../tzolkin/api/controller/dado.php',
        data:rq,
        success: (data, status) => {
          console.log(data);
            return data;
        }
    });

}

// Iniciar
window.onload = inicio();

