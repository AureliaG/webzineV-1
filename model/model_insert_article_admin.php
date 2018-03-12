<?php
//AJOUT D'UN ARTICLE SUR LA BASE DE DONNE
function addArticle() {

  if (isset($_POST['submit'])) {
    $titre = htmlspecialchars($_POST['titre']);
    $chapo = htmlspecialchars($_POST['chapo']);
    $auteur = htmlspecialchars($_POST['auteur']);
    $rubrique = htmlspecialchars($_POST['rubrique']);
    $article = htmlspecialchars($_POST['article']);
    $date_article = date($_POST['date_article']);

    if (isset($titre, $chapo ,$auteur ,$rubrique ,$article, $date_article )) {

      $sql = 'INSERT INTO articles (titre,chapo, auteur, rubrique, article, date_article) VALUES (?, ?, ?, ?, ?,?)';
      $statement = connectionDb($sql);
      $statement->execute(array($titre, $chapo, $auteur, $rubrique, $article, $date_article));
      $formMessage = "<h6 align =\"center\" style=\"color: green\">L'article a bien été envoyer dans la base de donné</h6>";
      header('location: ./page_admin.php?message=' . $formMessage);
    }
  }
}