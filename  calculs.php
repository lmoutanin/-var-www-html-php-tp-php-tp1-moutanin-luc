<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css ">
  <title>Calculs</title>
</head>

<body>
  <?php
  $a = 2;
  $a = $a - 1;
  $a++;

  $b = 8;
  $b += 2;

  $c = $a + $b * $b;
  $d = $a * $b + $b;
  $e = $a * ($b + $b);
  $f = $a * $b / $a;
  $g = $b / $a * $a;
  ?>


  <p>$a = 2 ; <br />
    $a = $a - 1; <br />
    $a++;</p>
  <mark id="php">
    <?php echo " \$a est égale à " . $a; ?>
  </mark>

  <p>$b = 8;<br />
    $b += 2;<br />
  </p>
  <mark id="php">
    <?php echo " \$b est égale à " . $b; ?>
  </mark>
  <br />
  <p>$c = $a + $b * $b;<br />
    <mark id="php"><br />
      <?php echo " \$c est égale à " . $c; ?>
    </mark>
    <br />
  <p>$d = $a * $b + $b; <br />
    <mark id="php"><br />
      <?php echo " \$d est égale à " . $d; ?>
    </mark>
    <br />
  <p>$e = $a * ($b + $b); <br />
    <mark id="php"><br />
      <?php echo " \$e est égale à " . $e; ?>
    </mark>
    <br />
  <p>$f = $a * $b / $a; <br />
    <mark id="php"><br />
      <?php echo " \$f est égale à " . $f; ?>
    </mark>
    <br />
  <p>$g = $b / $a * $a; <br />
    <mark id="php"> <br />
      <?php echo " \$g est égale à " . $g; ?>
    </mark>






</body>

</html>