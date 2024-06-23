// Función para añadir un valor al campo 'pantalla'
function añadirAPantalla(valor) {
    document.getElementById('pantalla').value += valor;
}

// Función para vaciar el campo 'pantalla'
function limpiarPantalla() {
    document.getElementById('pantalla').value = '';
}

// Función para obtener un número de la operación (incluyendo decimales)
function obtenerNumero(operacion, indice) {
    var numero = '';
    var longitud = operacion.length;

    // Avanzar hasta encontrar el inicio de un número
    while (indice < longitud && (operacion[indice] < '0' || operacion[indice] > '9') && operacion[indice] !== '.') {
        indice++;
    }

    // Construir el número encontrando dígitos y el punto decimal
    while (indice < longitud && (operacion[indice] >= '0' && operacion[indice] <= '9' || operacion[indice] === '.')) {
        numero += operacion[indice];
        indice++;
    }

    return parseFloat(numero);
}

// Función para calcular la operación matemática ingresada
function calcularOperacionMatematica(operacion) {
    var indice = 0;
    var longitud = operacion.length;
    var resultado = 0;
    var numero1 = obtenerNumero(operacion, indice);

    indice += numero1.toString().length; // Avanzar el índice después del primer número

    // Iterar sobre la operación mientras haya caracteres para evaluar
    while (indice < longitud) {
        var operador1 = operacion[indice]; // Obtener el operador actual
        indice++; // Avanzar al siguiente carácter

        var numero2 = obtenerNumero(operacion, indice); // Obtener el siguiente número
        indice += numero2.toString().length; // Avanzar el índice después del siguiente número

        // Realizar la operación correspondiente según el operador
        switch (operador1) {
            case '+':
                resultado = numero1 + numero2;
                break;
            case '-':
                resultado = numero1 - numero2;
                break;
            case '*':
                resultado = numero1 * numero2;
                break;
            case '/':
                resultado = numero1 / numero2;
                break;
            case '^':
                resultado = Math.pow(numero1, numero2);
                break;
            default:
                throw new Error('Operación inválida');
        }

        // El resultado de la operación se convierte en el nuevo operando para la siguiente iteración
        numero1 = resultado;
    }

    return resultado;
}

// Función para calcular y mostrar el resultado en el campo 'pantalla'
function calcularResultado() {
    var operacion = document.getElementById('pantalla').value;
    var resultado;
    try {
        resultado = calcularOperacionMatematica(operacion);
        document.getElementById('pantalla').value = resultado;
    } catch (error) {
        alert(error.message); // Manejar errores de formato de operación inválida
    }
}
