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

  <button type="button"><a href="index.php" class="btn btn-dark">Menu</button></a>
  <div class="container">
    <div class="row justify-content-center"></div>

  </div>

  <a href="admin.php">admin</a>

  </br>



  <center>
    <h1>Bienvenue sur le site de bonbons !</h1>
  </center>
  </br>


  <center>
    <form method="POST" action="index.php" enctype="multipart/form-data">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Modifier un produit
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="formAjout.php">Ajouter un produit</a></li>
          <li><a class="dropdown-item" href="choixSupp.php">Supprimer un produit</a></li>
          <li><a class="dropdown-item" href="choixModif1">Modifier un produit</a></li>
        </ul>
      </div>

      <!--<h2>LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name</label>
    <input type="text" name="id" placeholder="login"><br>

    <label>Password</label>
    <input type="password" name="mdp" placeholder="password"><br>

    <button type="submit">Login</button>-->
    </form>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>