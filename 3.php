<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Numeros pares del 1 al 100.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">
      <h2>Algoritmo que muestre los numeros pares del 1 al 100.</h2>
      <?php
       $numero = 0;

      while ($numero <= 100)
        {
          $numero++;
          if ($numero % 2 == 0)
            {
              echo "</br> $numero  ";
            }

        }



      ?>

    </div>



  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
