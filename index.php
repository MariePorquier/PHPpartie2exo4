<?php
$age = 19;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHPpartie2exo4</title>
  </head>
  <body>
      <p>
        <?php
        if ($age >= 18) {
        echo "Vous êtes majeur";
        } else {
        echo "Vous êtes mineur";
        }
        ?>
      </p>
  </body>
</html>
