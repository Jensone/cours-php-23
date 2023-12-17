<?php 

/**
 * Superglobale $_GET
 * $_GET est une superglobale qui est largement utilisée pour collecter
 * les paramètres d'URL.
 */

$data = $_GET;

if (!empty($_GET)) {
    echo '<h3>' . $data['name'] . '</h3>';
    echo '<h3>' . $data['email'] . '</h3>';
}

// Exemple de lien HTML

echo '<a href="?name=Martin&email=martin@gmail.com">Cliquer ici</a>';