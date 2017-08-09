<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Suma de los numeros pares del 1 al 100.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">
      <h2>  suma de todos los numeros pares del 1 al 100.</h2>
      <?php
      $num = 0;
      $suma = 0;

       while ($num <100) {
            $num = $num + 1;
            $suma = $suma + $num;
            echo "$num.<br>";


          }
           echo "La sumatoria es: $suma";


      ?>

    </div>


  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
