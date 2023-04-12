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
session_start();

require "config.php" ;
$bdd=connect() ;
extract($_GET) ;
$_SESSION["produit"]["id"]=$id;

try{
//creation de la requête
$sql = "select * from produit where id=$id ";
  //execution de la requête
  $resultat = $bdd->query($sql);
  //récupérer les résultats
  $produit = $resultat->fetch(PDO::FETCH_OBJ);
  $info=[$produit->nom, $produit->prix, $produit->photo];
}
catch (PDOException $e){

    echo "erreur dans la requête <br>". $e->getMessage() ;
}
?>


    <form method="POST" action="modif2.php" enctype="multipart/form-data">
   
    Nom du produit 
    <input type="text" name="nom" value="<?php echo $info[0]?>">
       
     Prix du produit 
    <input type="text" name="prix"value="<?php echo $info[1]?>">
    Image du produit <input type="text" name="doc" value="<?php echo $info[2]?>">
    <br>
    <br>
    <input type="submit" value="Validez les modifications">
    </form>
</body>
</html>
