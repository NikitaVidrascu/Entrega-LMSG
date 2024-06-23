// Espera a que toda la página esté lista antes de ejecutar cualquier código
document.addEventListener('DOMContentLoaded', function () {
  // Obtiene el elemento de entrada con id 'input' y el cuerpo de la página
  var input = document.getElementById('input');
  var body = document.body;
  // Cuando el valor del input cambia, cambia el estilo de fondo de la página
  input.addEventListener('change', function () {
    body.classList.toggle('light');
  });

  // Función para mostrar texto letra por letra con un retraso
  function showText(elementId, text, delay, callback) {
    // Obtiene el elemento del DOM donde se mostrará el texto
    const element = document.getElementById(elementId);
    let index = 0;

    // Función recursiva para agregar cada letra del texto con un retraso
    function addChar() {
      // Verifica si todavía hay letras por agregar
      if (index < text.length) {
        // Añade la letra actual al contenido del elemento
        element.textContent += text.charAt(index);
        index++;  // Incrementa el índice para apuntar a la siguiente letra

        // Programa la llamada recursiva para agregar la siguiente letra después de un retraso
        setTimeout(addChar, delay);
      } else if (callback) {
        // Si se completó la adición de todas las letras y hay una función de callback, llama al callback
        callback();
      }
    }

    // Inicia el proceso llamando a la función addChar por primera vez
    addChar();
  }


  // Muestra texto animado en dos partes diferentes del documento
  showText('text1', 'HOLA!!!, Soy Nikita', 130, function () {
    showText('text2', 'Estudiante de la EFA ElCampico de 1º de Desarrollo de Aplicaciones Web, un gusto. 😊', 130);
  });

  // Permite navegar suavemente entre diferentes secciones del documento al hacer scroll
  var sections = document.getElementsByClassName('cabeza, skill,tarjetas,Pie');
  var currentSection = 0;

  window.addEventListener('wheel', function (event) {
    if (event.deltaY > 0) {
      currentSection = Math.min(sections.length - 1, currentSection + 1);
    } else {
      currentSection = Math.max(0, currentSection - 1);
    }
    sections[currentSection].scrollIntoView({ behavior: 'smooth' });
  });
});
