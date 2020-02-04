<?php
 
  var_dump($_POST['name']);


  if(isset($_POST['name'])) {

    $product_name = $_POST['name'];
  }
 
  // Je me connecte à ma base de données. $mysqli sauvegarde le résultat de la connexion à la base de données. ça me permet de voir si je suis bien connecté, puis de l'utiliser lorsque j'éxecute mysqli_query
  $mysqli = mysqli_connect('localhost', 'root', '', 'product_db');

  // Ici je vérifie la connexion à base de données
  if ($mysqli) {
    // J'execute la requete me permettamnt d'insérer mon film, en base de données. je passe ma variable dans la requete, grace à la concatenation.
    $query = mysqli_query($mysqli, "INSERT INTO products (name, category) VALUES ('" . $product_name . "','')");
  } else {
    // Dans le cas contraire, je redirige vers index.php  avec pour paramètre d'url ?success=false.
    header("Location: index.php?success=false");
    exit;
  }


  echo  "INSERT INTO products (name, category) VALUES ('" . $product_name . "','')";

   header("Location: index.php?success=true");
   exit;
