<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Os números pares</title>
  <style>
    div{
      background-color: gray;

      box-shadow: 10px 10px 5px #888888;
    }
  </style>
</head>
<body>
  <div>
    <?php
    $num=$_GET["num"];
    echo "<h1><b><u>OS NÚMEROS PARES DE 1 A $num:</u></b></h1>";
    for($i=1;$i<=$num;$i++){
      if($i%2==0){
        echo $i ."<br>";
      }
    }
    ?>
  </div>
  <button><a href="pag001.html">Voltar</a></button>
</body>
</html>