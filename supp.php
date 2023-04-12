<?php
require "config.php" ;
$bdd=connect() ;
extract($_GET) ;

try{
    $sql="delete from produit where id=$id" ;
    echo $sql;
    $resultat = $bdd->exec($sql) ; 

}
catch (PDOException $e){

    echo "erreur dans la requête <br>". $e->getMessage() ;
}
header("location:accueil-admin.php") ;
?>