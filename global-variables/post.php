<?php

/**
 * Superglobale $_POST
 * $_POST est une superglobale qui est largement utilisée pour collecter 
 * des données de formulaire après leur soumission.
 */

$data = $_POST;

if (!empty($_POST)) {
    echo '<h3>' . $data['name'] . '</h3>';
    echo '<h3>' . $data['email'] . '</h3>';
}

// Exemple de formulaire HTML
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Votre nom">
    <input type="email" name="email" placeholder="Votre email">
    <input type="submit" value="Envoyer">
</form>
