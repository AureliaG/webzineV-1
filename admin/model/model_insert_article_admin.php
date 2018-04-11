<?php
//AJOUT D'UN ARTICLE SUR LA BASE DE DONNE
function addArticle() {

  if (isset($_POST['submit'])) {
    $titre = htmlspecialchars($_POST['titre']);
    $chapo = htmlspecialchars($_POST['chapo']);
    $auteur = htmlspecialchars($_POST['auteur']);
    $rubrique = htmlspecialchars($_POST['rubrique']);
    $article = htmlspecialchars($_POST['article']);
    $nom_photo = htmlspecialchars($_POST['nom_photo']);

    $path_photo = './pictures/p_articles/'.(htmlspecialchars($_POST['path_photo']));

    if (isset($titre, $chapo ,$auteur ,$rubrique ,$article, $nom_photo, $path_photo)) {
//insert article
      $sql = 'INSERT INTO articles (titre,chapo, auteur, rubrique, article ) VALUES (?, ?, ?, ?, ?)';
      $statement = connectionDb($sql);
      $statement->execute(array($titre, $chapo, $auteur, $rubrique, $article));

//Récupérer l'id
      $sql = 'SELECT * FROM articles ORDER BY date_article DESC LIMIT 1';
      $statement = connectionDb($sql);
      $statement->execute();
      $article = $statement->fetch();


//insert photo
      $sql = 'INSERT INTO photo_articles (articles_id, nom_photo, path_photo) VALUES (?, ?, ?)';
      $statement = connectionDb($sql);
      $statement->execute(array($article['id'], $nom_photo, $path_photo));

      $formMessage = "<h6 align =\"center\" style=\"color: green\">L'article a bien été envoyer dans la base de donné</h6>";
      header('location: ./page_admin.php?message=' . $formMessage);
    } 
  }
}
