<?php include '../config.php';

// Récupérer tous les articles
function get_articles($db)
{
  $query = "SELECT * FROM `articles`;";
  $resultat = $db->prepare($query);
  $resultat->execute();

  $articles = $resultat->fetchAll();

  return $articles;
}


function convert_prix($prix)
{
    $res = number_format(floatval($prix), 2);
    return $res;
  
}


?>