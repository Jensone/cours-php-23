<?php 
/**
 * Exercice 2: Somme des Nombres
 * Objectif: Calculer la somme de tous les nombres jusqu'à un nombre donné.
 * 
 * Entrée: 5
 * Sortie attendue: 15 (1+2+3+4+5)
 * Solution:
 * 
 * DÉBUT ALGORITHME
 *     nombre = 5
 *     somme = 0
 *     POUR i DE 1 À nombre
 *         somme = somme + i
 *     FIN POUR
 *     AFFICHER somme
 * FIN ALGORITHME
 */


$nombre = 5;
$somme = 0;
for ($i = 1; $i <= $nombre; $i++) {
    $somme = $somme + $i;
}
echo $somme;