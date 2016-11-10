<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body style="background: #333; color: #efefef; font-size: 50px; font-family: 'Verdana';">
  <?php
    $a = 1;
    do {
      echo "<span style='color: #ff8c1a;'>Liczba: </span>".$a."<br/>";
      echo "<span style='color: #ff8c1a;'>Pierwiastek: </span>".round(sqrt(sqrt($a)), 2)."<br/>";
      $a++;
    }while($a <= 100)
  ?>
</body>

</html>
