<?php
session_start();
if (!isset($_SESSION["page"])){
    unset($_SESSION["page"]);
}
include "config.php" ;

$bdd = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form method="POST" action="ajout.php" enctype="multipart/form-data">
   
    Nom du produit 
    <input type="text" name="nom">
       
     Prix du produit 
    <input type="text" name="prix">
    Image du produit <input type="file" name="doc" accept="image/png, image/jpg">
    <br>
    <br>
    <input type="submit" value="Enregistrer">
    </form>
    <?php
//}
?>
</body>
</html>
