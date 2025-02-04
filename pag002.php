<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $num_i=$_GET["num_in"];
    $num_f=$_GET["num_fim"];
    $inc=$_GET["incremento"];
    for($i=$num_i;$i<=$num_f;$i+=$inc){
      echo $i."<br>";
    }
  ?>
  <button><a href="pag002.html">Voltar</a></button>
</body>
</html>