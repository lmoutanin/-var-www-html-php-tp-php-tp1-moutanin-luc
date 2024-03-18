  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css ">
    <title>Presentation-etudiant</title>
  </head>

  <body>

    <?php
    $nom = "test";
    $prenom = "Luc";
    $adresse = "1658 Avenue Île de France";
    $codePostal = "SAINT-ANDRÉ";
    $age = 22;


    ?>

    <h1> Présentation de <mark id="php"><?php echo $nom; ?> </mark></h1>
    <p>

      Bonjour, mon nom est <mark id="php"><?php echo $nom . " " . $prenom; ?></mark>, j'habite au <mark id="php"><?php echo $adresse; ?></mark> à <mark id="php"><?php echo $codePostal; ?></mark> et j'ai <mark id="php"><?php echo $age; ?></mark> ans .



    </p>
    <p>Bienvenue sur cette page !</p>
  </body>

  </html>