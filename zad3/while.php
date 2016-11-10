<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body style="background: #333; color: #efefef; font-size: 75px;">
  <?php
    $a = 100;
    while($a>=80)
    {
      $b = $a % 5;
      if ($b == 0) echo $a."<br/>";
      $a--;
    }
  ?>
</body>

</html>
