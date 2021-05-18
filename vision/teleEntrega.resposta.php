<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>

   <head>
     <meta charset="utf-8">
     <title>Mini Mercado Moura</title>
   </head>

   <body>
     <fieldset><legend>Seu Pedido</legend>
       <?php
       if (isset($_SESSION['mensagem'])&&
           isset($_SESSION['teleentrega'])) {

             include '../model/teleEntrega.class.php';
             $tele = new teleEntrega();

             $tele = unserialize ($_SESSION['teleentrega']);

             echo '<br/>'.$_SESSION['mensagem'].
                  '<br/>Dados:'.$tele;
           }
        ?>
     </fieldset>
   </body>

 </html>
