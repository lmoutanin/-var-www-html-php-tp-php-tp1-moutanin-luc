  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css ">
    <title>Octroi</title>
  </head>

  <body>

    <?php
    function prixTtc($prixHt, $droitDouane)
    {
      $resultat = $prixHt  * $droitDouane / 100;
      $resultat += $prixHt;
      return $resultat;
    }
    ?>
    <p>- Prix HT : <mark id="php"><?php echo $prixHt = 100; ?></mark>€</p>
    <p>- Droits de douane : <mark id="php"> <?php echo $droitDouane = 20; ?></mark>€ </p>
    <p>- Prix TTC : <mark id="php"><?php echo prixTtc($prixHt, $droitDouane); ?></mark>€</p>

  </body>

  </html>