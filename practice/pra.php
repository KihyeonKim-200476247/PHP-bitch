<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <?php
    class Chef{
      function makeChiken(){
        echo "THE chef makes chicken <br>";
      }
      function makesSalad(){
        echo "The chef makes salad <br>";
      }
      function makesSpecialDish(){
        echo "The chef makes bbq ribs <br>";
      }
    } 

    $chef = new Chef();
    $chef->makeChiken();
 ?>
  
</body>
</html>