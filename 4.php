<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Numeros impares del 1 al 100.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">
      <h2>Algoritmo que muestre los numeros impares del 1 al 100.</h2>
      <?php
      $num=1;

      while ($num<=100) {
            if( ( $num % 2 ) != 0 ) {
                  echo  $num;
            }

            if ($num<=100)  {
                echo  "-";
            }

            $num++;
      }
      ?>

    </div>


  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
