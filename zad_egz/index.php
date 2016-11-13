<!DOCTYPE HTML>
<html lang="pl">
<head>
</head>
<body style="background: #444; color: #efefef; font-size: 50px; font-family: monospace; text-align: center; line-height: 1em;">
  <?php

    $a = 10;
    echo $a."<br/>";
    $b = $a + $a + 1;
    $a++;
    echo $a."&nbsp;&nbsp;"."<span style='color: #52ff00;'>".$b."</span>"."<br/>";
    while ( $b < 1000 )
    {
      $a++;
      $b += $a;
      if ( $b > 1000 ) break;
      echo $a."&nbsp;&nbsp;"."<span style='color: #52ff00;'>".$b."</span>"."<br/>";
    }
   ?>
</body>
</html>
