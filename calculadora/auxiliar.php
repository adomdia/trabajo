<?php
/**
 * @author Antonio J Domínguez
 * @copyright Copyright (c) 2022 Antonio J Domínguez
 * @license http://www.gnu.org/licenses/gpl.txt
 */


/**
 * Calcula el resultado de hacer la operacion de $operando sobre los argumentos de $operando1 y $operando2.
 * 
 * @param mixed  $op1 El primer operando. 
 * @param mixed  $op2 El segundo operando. 
 * @param string $op  El operador 
 *                          (valores validos: '+', '-', '*', '/'). 
 * @return mixed  El resultado. 
 */
function calcular_resultado($op1, $op2, $op)

{


    switch  ($op) {
        case '+':
            $resul = $op1 + $op2;
            break;
        case '-':
            $resul = $op1 - $op2;
            break;
        case '*':
            $resul = $op1 * $op2;
            break;
        case '/':
            $resul = $op1 / $op2;
            break;

        default:
            $resul = "Error: operación incorrecta.";
        }
return $resul;
}