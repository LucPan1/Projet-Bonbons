<?php
session_start();
require "config.php" ;
$bdd=connect() ;
extract($_POST) ;
$id = $_SESSION["produit"]["id"];
try{
    $sql="update produit set nom='$nom', prix=$prix ,photo='$doc' where id=$id" ;
    echo $sql;
    $resultat = $bdd->exec($sql) ; 

}
catch (PDOException $e){

    echo "erreur dans la requête <br>". $e->getMessage() ;
}
header("location:accueil-admin.php") ;
?>