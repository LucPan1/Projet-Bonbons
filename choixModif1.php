<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <?php
  include "config.php";
  $bdd = connect();

  //requête 
  $sql = "select * from produit ";
  //execution de la requête
  $resultat = $bdd->query($sql);


  ?>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Que voulez vous acheter?</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="d-flex" method="POST" action="recherche.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="bonbon">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>

  </nav>
  <a href="accueil-admin.php">menu</a>
  <div class="container">
    <div class="row justify-content-center"></div>

  </div>
  <center>
  <form method="POST" action="modif1.php" enctype="multipart/form-data">

    <?php
    //affichage des resultats dans un objet 
    while ($produit = $resultat->fetch(PDO::FETCH_OBJ)) {
    ?>

      <div class="card" style="width: 18rem;">
        <img src="images/<?php echo $produit->photo ?>" class="card-img-top img-fluid" alt="...">

        <div class="card-body">
          <h5 class="card-title"> <?php echo $produit->nom ?> </h5>
          <p class="card-text"> <?php echo $produit->prix ?> </p>
          <a href="modif1.php?id=<?php echo $produit->id?>" class="btn btn-primary"> Modifier</a>
        </div>
      </div>



    <?php

    }

    ?>
  </center>
</body>

</html>