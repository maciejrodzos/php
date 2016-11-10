<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
</head>

<body style="background: #333; color: #efefef; font-size: 75px;">
  <?php
    for($a = 100; $a>=80; $a--)
    {
      $b = $a % 5;
      if ($b == 0) echo $a."<br/>";
    }
  ?>
</body>

</html>
