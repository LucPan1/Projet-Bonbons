<?php
session_start();
require "config.php";
$bdd = connect();

$id = $_POST["id"];
$mdp = md5($_POST["mdp"]);


$sql = "select mdp from admin where login='$id' and mdp='$mdp' ";

$resultat = $bdd->query($sql);

    $nb_lignes=$resultat->rowCount() ;
    
    if ($nb_lignes==0){
        
        echo "L'identifiant est inconnue et/ou le mot de passe est incorrect" ;
        ?>
        <a href="admin.php"> Reloguez vous ! </a>
<?php
    }
    else{
    $_SESSION["autorisation"]="OK" ;
    header("Location:accueil-admin.php");
    }
?>

