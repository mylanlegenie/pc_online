<?php include 'get_articles.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/boutique.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include '../menu.php'; ?>
    <div id="div_boutique" class="">
      <h1 id="nom_boutique">BOUTIQUE</h1>
      <div id="articles">

      <?php

      $articles = get_articles($db);

      foreach ($articles as $ligne) {
        
        echo " <div class=\"article\" onclick= \"window.location.href='article.php?id=" . $ligne["id"] . "'\">
        <div class=\"image_article\" style=\"background-image: url('/images/boutique/" . $ligne["nom_images"] . "');\"></div>
        <div class=\"infos\">
          <h2>" . $ligne["titre"] . "</h2>
          <p>" . convert_prix($ligne["prix"]) . "€ </p>
        </div>
      </div>
";

      }

       
      ?>

      </div>
    </div>

    <?php include '../footer.html' ?>



  </body>
</html>
