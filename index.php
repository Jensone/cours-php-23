<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
    <link rel="icon" href="https://api.iconify.design/logos:php-alt.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Inter', sans-serif;">
    <div class="container" style="padding:1em; text-align:center;">
        <kbd>PHP STARTER</kbd>
    </div>
    <main class="container">
        <form action="signup.php" method="post">
            <fieldset>
                <legend>Inscription</legend>
                <input type="text" name="name" placeholder="Martin" required>
            </fieldset>
            <fieldset>
                <legend>Votre âge</legend>
                <input type="number" name="age" placeholder="32" required>
            </fieldset>
            <fieldset>
                <legend>Votre 1er dépôt</legend>
                <input type="number" name="amount" placeholder="1900.50" required>
            </fieldset>
            <input type="submit" value="S'inscrire">
        </form>
    </main>
</body>

</html>