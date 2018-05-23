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

//modification d'un article sur la bdd
function EditArticle($id) {
    $titre = htmlspecialchars($_POST['titre']);
    $chapo = htmlspecialchars($_POST['chapo']);
    $auteur = htmlspecialchars($_POST['auteur']);
    $rubrique = htmlspecialchars($_POST['rubrique']);
    $article = htmlspecialchars($_POST['article']);

    if (isset($titre, $chapo ,$auteur ,$rubrique ,$article)) {
      $sql = 'UPDATE articles SET `titre`= ?,`chapo`=?,`article`= ?,`auteur`= ?,`rubrique`= ? WHERE id = ?' ;
      $statement = connectionDb($sql);
      $statement->execute(array($titre, $chapo, $article, $auteur, $rubrique, $id));
      $formMessage='Bien joué coco <3';
      header('location: ./page_admin.php?message=' . $formMessage);
    } 
}


//récupère les nom des utilisateurs
 function callUsers() {
  $sql = "SELECT * FROM users ORDER BY id DESC " ;
  $users = connectionDb($sql);
  $users->execute();
  return $users;  
}

//efface l'utilisateur selectionné
function deleteUser($id) {
  $sql = "DELETE FROM users WHERE id = :id";
  $delete_user = connectionDb($sql);

  $result = false;
  if (
    $delete_user != false AND
    $delete_user->bindParam(':id', $id, PDO::PARAM_INT) AND
    $delete_user->execute()
  ) {
    $result = true;  
  }

  return $result;
}
 
//récupère tous les articles sur la base de données
 function callArticle() {
  $sql = "SELECT * FROM articles ORDER BY id DESC " ;
  $articles = connectionDb($sql);
  $articles->execute();
  return $articles; 
}
 
//récupère les photo par article sur la base de données
//$id sera remplacé par $article['id'] dans la view
function callPhoto($id) { 
  $sql = "SELECT * FROM photo_articles WHERE articles_id = ?";
  $statement = connectionDb($sql);
  $statement->execute(array($id));
  return $statement->fetch(); 
} 

//recupère le nombre d'article en fonction des lignes de la table article_page_daccueil
function getNewsCount() {
  $sql = 'SELECT * FROM articles_page_daccueil';
  $sth = connectionDb($sql);
  $execute = $sth->execute();
  if ($execute){
    $count = $sth->rowCount();
    return $count;
  }
  else{
    return "Erreur: execute renvoie faux";
  } 
}  

//recupère un article en fonction de son id
 function get_article($id){ 
  $sql="SELECT * FROM articles WHERE id = ?";
  $article = connectionDb($sql);
  $article->execute(array($id));
  $coco = $article->fetch();   
  return $coco; 
} 

//efface l'article selectionné
function deleteArticle($id) {
  $sql = "DELETE FROM articles WHERE id = :id";
  $delete_article = connectionDb($sql);

  $result = false;
  if (
    $delete_article != false AND
    $delete_article->bindParam(':id', $id, PDO::PARAM_INT) AND
    $delete_article->execute()
  ) {
    $result = true;  
  }

  return $result;
}
