<?php
require "config.php" ;
$bdd=connect() ;
extract($_POST) ;


$nom_image=$_FILES["doc"]["name"];
$chemin_destination="images/$nom_image";
move_uploaded_file($_FILES["doc"]["tmp_name"], $chemin_destination);

try{
    $sql="insert into produit (nom, prix, photo) values('$nom', $prix, '$nom_image')" ;
    echo $sql;
    $resultat = $bdd->exec($sql) ; 

}
catch (PDOException $e){

    echo "erreur dans la requête <br>". $e->getMessage() ;
}
header("location:index.php") ;

?>

</body>