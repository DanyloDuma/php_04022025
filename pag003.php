<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>TABUADA</h1>
  <?php
    $n=$_GET["num"];
    for($i=1;$i<=10;$i++){
      echo "$i x $n = ".($i*$n)."<br>";
    }
  ?>
  <button><a href="pag003.html">Voltar</a></button>
</body>
</html>