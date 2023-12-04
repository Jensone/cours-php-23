<?php
/**
 * Exercice 4: Trouver le Plus Grand Nombre
 * Objectif: Trouver le plus grand nombre dans un tableau.

 * Entrée: [3, 7, 2, 5]
 * Sortie attendue: 7
 * Solution:

 * DÉBUT ALGORITHME
 *     tableau = [3, 7, 2, 5]
 *     plusGrand = tableau[0]
 *     POUR CHAQUE nombre DANS tableau
 *         SI nombre > plusGrand
 *             plusGrand = nombre
 *         FIN SI
 *     FIN POUR
 *     AFFICHER plusGrand
 * FIN ALGORITHME
 */

$tableau = [3, 7, 2, 5];
$plusGrand = $tableau[0];
for ($i = 0; $i < count($tableau); $i++) {
    if ($tableau[$i] > $plusGrand) {
        $plusGrand = $tableau[$i];
    }
}
echo $plusGrand;