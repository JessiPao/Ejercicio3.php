<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Numeros del 100 al 1.</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
 </head>
 <body>

   <div class="container col-12 col-md-8 col-9">

         <?php


         echo("los numeros de 100 hasta 1 son: ");
         echo("<br>");
           $i = 100;
         while($i >= 1) {
           echo $i . "<br>";
           --$i;
         }
         ?>


   </div>

 </body>
 <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
