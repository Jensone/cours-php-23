<?php

/** Superglobale $_SERVER
 * $_SERVER est une superglobale qui contient des informations sur les en-têtes, 
 * les chemins et les emplacements de script.
 * Les entrées de cette superglobale sont créées par le serveur web.
 * Il n'y a aucune garantie que chaque serveur web fournira l'une des entrées suivantes; 
 * les serveurs peuvent omettre certains d'entre eux, fournir d'autres non demandés.
 */

// Affiche toutes les informations sur le serveur
$all = $_SERVER;
echo '<pre>' . print_r($all, true) . '</pre>';

// Ce tableau contient des informations telles que les en-têtes, les chemins et les emplacements de script.

/** 
 * Voici une liste des éléments les plus importants de ce tableau :
 * [DOCUMENT_ROOT] : Répertoire racine sous lequel le script en cours est exécuté
 * [REMOTE_ADDR] : Adresse IP de l'utilisateur qui visualise la page en cours
 * [REMOTE_PORT] : Port du client
 * [SERVER_SOFTWARE] : Chaîne d'identification du serveur hôte
 * [SERVER_PROTOCOL] : Nom et révision du protocole d'information (par exemple, "HTTP/1.0")
 * [SERVER_NAME] : Nom d'hôte du serveur
 * [SERVER_PORT] : Port utilisé par le serveur pour communiquer
 * [REQUEST_URI] : URI qui a été fourni pour accéder à cette page
 * [REQUEST_METHOD] : Méthode de requête utilisée pour accéder à la page
 * [SCRIPT_NAME] : Chemin du script en cours d'exécution
 * [SCRIPT_FILENAME] : Chemin absolu du script en cours d'exécution
 * [PHP_SELF] : Chemin relatif du script en cours d'exécution
 * [HTTP_HOST] : Nom de l'hôte de la page actuelle
 * [HTTP_CONNECTION] : Type de connexion utilisé par le navigateur
 * Les valeurs de la chaîne d'agent utilisateur du navigateur :
    * [HTTP_SEC_CH_UA]
    * [HTTP_SEC_CH_UA_MOBILE]
    * [HTTP_SEC_CH_UA_PLATFORM]
    * [HTTP_UPGRADE_INSECURE_REQUESTS]
    * [HTTP_USER_AGENT]
    * [HTTP_ACCEPT]
    * [HTTP_SEC_GPC]
    * [HTTP_ACCEPT_LANGUAGE]
    * [HTTP_SEC_FETCH_SITE]
    * [HTTP_SEC_FETCH_MODE]
    * [HTTP_SEC_FETCH_USER]
    * [HTTP_SEC_FETCH_DEST]
    * [HTTP_ACCEPT_ENCODING]
 * [REQUEST_TIME_FLOAT] : Heure à laquelle la requête a commencé à être traitée (avec précision fractionnaire)
 * [REQUEST_TIME] : Heure à laquelle la requête a commencé à être traitée
 */
