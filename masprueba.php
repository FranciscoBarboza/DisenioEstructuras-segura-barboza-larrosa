<?php

/*
La librería tateti posee la definición de constantes y funciones necesarias
para jugar al tateti.
Puede ser utilizada por cualquier programador para incluir en sus programas.
*/

/**************************************/
/***** DEFINICION DE CONSTANTES *******/
/**************************************/
define('LIBRE',  'L');
define('CRUZ',    'X');
define('CIRCULO', 'O');

define('PTOS_PERDEDOR', '0');
define('PTOS_EMPATE',   '1');
define('PTOS_GANADOR',  '2');

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/
/**
 * Iniciliza una estructura de datos TABLERO para jugar al tateti
 * @return array
 */
function iniciarTablero()
{
    //array $tableroTateti
    $tableroTateti =
        [  //col0  //col1 //col2
            [LIBRE, LIBRE, LIBRE], //fila 0
            [LIBRE, LIBRE, LIBRE], //fila 1
            [LIBRE, LIBRE, LIBRE]  //fila 2
        ];
    return $tableroTateti;
}

/**
 * Determina si un casillero del tablero está libre
 * @param array $tableroTateti
 * @param int $fila
 * @param int $columna
 * @return boolean
 */
function esCasilleroLibre($tableroTateti, $fila, $columna)
{
    //string $casillero
    $casillero = $tableroTateti[$fila][$columna];
    return $casillero == LIBRE;
}

/**
 * Reemplaza el simbolo de un casillero. 
 * El casillero (fila,columna) ingresado debe ser válido.
 * @param array $tableroTateti
 * @param int $fila
 * @param int $columna
 * @param string $nuevoSimbolo
 * @return array tablero con el casillero cambiado.
 */
function reemplazarSimboloCasillero($tableroTateti, $fila, $columna, $nuevoSimbolo)
{
    $tableroTateti[$fila][$columna] = $nuevoSimbolo;
    return $tableroTateti;
}

/**
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int 
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}

/**
 * Retorna una arreglo asociativo ["fila"=>nro de fila, "columna"=>nro de col] que representa el lugar libre.
 * @param array $tableroTateti
 * @return array 
 */
function solicitarCasilleroLibre($tableroTateti)
{
    //int $dimension, $nroFila, $nroColumna, boolean $esLibre, array $casillerolibre
    $dimension = count($tableroTateti);
    do {
        echo "Ingrese el número de FILA: ";
        $nroFila = solicitarNumeroEntre(1, $dimension);
        $nroFila = $nroFila - 1;
        echo "Ingrese el número de COLUMNA: ";
        $nroColumna = solicitarNumeroEntre(1, $dimension);
        $nroColumna = $nroColumna - 1;
        $esLibre = esCasilleroLibre($tableroTateti, $nroFila, $nroColumna);
        if (!$esLibre) {
            echo "El casillero ingresado se encuentra ocupado! Ingrese un casillero libre.\n";
        }
    } while (!$esLibre);
    $casillerolibre = ["fila" => $nroFila, "columna" => $nroColumna];
    return $casillerolibre;
}
$tableroTateti =
        [  //col0  //col1 //col2
            [LIBRE, 23, 25], //fila 0
            [12, 23, 25], //fila 1
            [12, 23, 25]
        ];

//solicitarCasilleroLibre($tableroTateti);

 if (solicitarCasilleroLibre($tableroTateti)) {
     echo "tucson";
 };

 //tonto
 