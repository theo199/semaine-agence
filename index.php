<?php

  if (isset($_GET['success'])) {
    if ($_GET['success'] == 'true') {
      echo '<p>Le produit a bien été ajouté en base de données.</p>';
    } else {
      echo '<p>Le produit n'a pas été ajouté en base de données.</p>';
    }
  } 


  $mysqli = mysqli_connect('localhost', 'root', '', 'product_db');


  $query = mysqli_query($mysqli, "SELECT * FROM products");




  $products = [];

  while($product = mysqli_fetch_assoc($query)) {

    $products[] = $product;
  }
 
  var_dump($products);


?>



<ul>
  <?php

    foreach ($products as $key => $product): ?>
    <li> 

    <?php echo $product['name']; ?> 

    </li>

    <?php endforeach; ?>

</ul>

<form action="add_product.php" method="post">
  <input type="text" name="name" value="" placeholder="Nom ">
  <input type="submit" name="" value="Envoyer">
</form>
