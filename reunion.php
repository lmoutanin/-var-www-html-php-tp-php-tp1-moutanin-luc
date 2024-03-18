<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css ">
    <title>Compte rendu</title>
</head>

<body>

    <?php include 'variables.php'; ?>
    <h1>Compte rendu de la réunion</h1>



    <p>
        <mark id="php">
            <?php echo "Bonjour, la réunion du $date  n'a pas été organisée pour la classe $classe."; ?></mark>
        <!-- Un commentaire -->
        <br />
        <mark id="php">
            <?php echo "Il y avait " . $nbAbsents . " absents ."; ?></mark>
    </p>

</body>

</html>