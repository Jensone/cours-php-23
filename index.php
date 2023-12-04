<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>
<table>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lien de la correction</th>
    </tr>
  </thead>
  <tbody>
    <?php 

        for ($i=1; $i <= 10; $i++) { 
            echo '<tr><th scope="row">' . $i . '</th>';
            echo '<td><a href="./algo/' . $i . '.php">Voir la correction</a></td></tr>';
        }

    ?>
  </tbody>
</table>
</body>
</html>