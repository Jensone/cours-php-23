<?php
/** 
 * Exercice 1: Inversion de Chaîne
 * Objectif: Inverser une chaîne de caractères.
 * 
 * Entrée: "Bonjour"
 * Sortie attendue: "ruojnoB"
 * 
 * Solution:
 * DÉBUT ALGORITHME
 *     chaine = "Bonjour"
 *     inversée = ""
 *     POUR CHAQUE caractère DANS chaine
 *         inversée = caractère + inversée
 *     FIN POUR
 *     AFFICHER inversée
 * FIN ALGORITHME
*/

$chaine = "Bonjour";
$inversee = "";
for ($i = 0; $i < 7; $i++) {
    $inversee = $chaine[$i] . $inversee;
}
echo $inversee;
