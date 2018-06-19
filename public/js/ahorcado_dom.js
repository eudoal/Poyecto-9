// Retorna un número aleatorio entre min (incluido) y max (excluido)
function ramdomPalabras(min, max) {
  let numerodecimal = Math.random() * (max - min) + min;
  return Math.floor(numerodecimal);
}
var elemnet = "";
var palabras = ["capullo", "tolay", "tontolaba", "borinot", "merengue"];
var maximoPalabras = palabras.length;
var minPalabras = 0;
var palabraElegida = palabras[ramdomPalabras(minPalabras, maximoPalabras)];
var frase = "";
console.log(palabraElegida);


//subtituir palabraElegida por 0
var plantilla = new Array(palabraElegida.length);
for (var i = 0; i < plantilla.length; i++) {
  plantilla[i] = "0";
}

var vidas = 4;
var letraElegida = "";
var letraEncontrada = false;
var numLetrasEncontradas = 0;
var salir = false;


elemnet = document.getElementById("intentos");
elemnet.textContent = ("Intentos disponibles: " + vidas);

function interactuar() {

  letraElegida = document.getElementById("letraFormulario").value;
  document.getElementById('letraFormulario').value = "";


  if (vidas > 0 && (numLetrasEncontradas != palabraElegida.length) && (salir == false)) {


    if (letraElegida == "fin") {
      salir = true;
    } else {
      vidas--;
      for (var i = 0; i < palabraElegida.length; i++) {
        if (palabraElegida.charAt(i) == letraElegida) {
          plantilla[i] = letraElegida;
          //  frase=plantilla.join("") convierte el array en string sin comas
          frase = plantilla.join("")
          letraEncontrada = true;
          numLetrasEncontradas++;
        }
      }
      if (letraEncontrada == true) {
        vidas++;
        letraEncontrada = false;
      }
      elemnet = document.getElementById("plantilla");
      elemnet.textContent = plantilla;
      elemnet = document.getElementById("intentos");
      elemnet.textContent = ("Intentos disponibles: " + vidas);
    }
  }

  if (frase == palabraElegida) {

    elemnet = document.getElementById("acertado");
    elemnet.textContent = "BIEN HECHO, HAS ACERTADO!!";
  }
  if (vidas == 0) {

    elemnet = document.getElementById("fallado");
    elemnet.textContent = "UPPS!! TE HAS QUEDADO SIN VIDAS";
    elemnet = document.getElementById("palabraAleatoria");
    elemnet.textContent = "La palabra correcta era: ";
    elemnet = document.getElementById("palabraCorrecta");
    elemnet.textContent = "\"" + palabraElegida + "\"";
  }
  if (salir == true) {
    elemnet = document.getElementById("fin");
    elemnet.textContent = "¡¡TE HAS RENDIDO!!";
  }
}
