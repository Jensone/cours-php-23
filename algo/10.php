<?php 
/**
 * Objectif: Générer une série Fibonacci jusqu'au N-ième terme.
 * 
 * Entrée: 5
 * Sortie attendue: [0, 1, 1, 2, 3]
 * Solution:
 * 
 * DÉBUT ALGORITHME
 *     nombre = 5
 *     fibonacci = [0, 1]
 *     POUR i DE 2 À nombre
 *         fibonacci[] = fibonacci[i-1] + fibonacci[i-2]
 *     FIN POUR
 *     AFFICHER fibonacci
 * FIN ALGORITHME
 */

$nombre = 5;
$fibonacci = [0, 1];
for ($i = 2; $i <= $nombre; $i++) {
    $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];
}
print_r($fibonacci);