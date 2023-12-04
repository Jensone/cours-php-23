<?php
/**
* Exercice 3: Factorielle
* Objectif: Trouver la factorielle d'un nombre.

* Entrée: 4
* Sortie attendue: 24 (123*4)
* Solution:

* DÉBUT ALGORITHME
*     nombre = 4
*     factorielle = 1
*     POUR i DE 1 À nombre
*         factorielle = factorielle * i
*     FIN POUR
*     AFFICHER factorielle
* FIN ALGORITHME
*/

$nombre = 4;
$factorielle = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $factorielle = $factorielle * $i;
}
echo $factorielle;