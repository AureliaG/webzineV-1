<?php
?>
<!DOCTYPE html>
<html> 
	<head>
		<title>Article</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
	</head>
	<body>   
		<header>
		    <h1 align="center">Edition d'un article</h1><br>
		    <div style="display:flex; justify-content:center; margin:10px;">
		      <a href="gestion_articles.php" role="button" class="btn btn-outline-secondary">Gestion d'article</a>
		    </div>
		    <div style="display:flex; justify-content:center">
		      <a href="page_admin.php" role="button" class="btn btn-outline-secondary">Page administrateur</a>
		    </div>
		    <div style="display:flex; justify-content:center; margin:10px;">
		      <a href="../index.php" role="button" class="btn btn-outline-secondary">Retourner sur le site</a>
		    </div>
	    </header>

		<form action="" method="POST">

        <div class="form-group">
          <label for="titre">Titre</label>
          <input class="form-control" type="text" name="titre" id="titre" value="<?= $article['titre'] ?>">
        </div>

        <div class="form-group">
          <label for="chapo">Chapo</label>
          <input class="form-control" type="text" name="chapo" id="chapo" value="<?= $article['chapo'] ?>">
        </div>

        <div class="form-group">
          <label for="auteur">Auteur</label>
          <input class="form-control" type="text" name="auteur" id="auteur" value="<?= $article['auteur'] ?>">
        </div>

        <div class="form-group">
          <label for="rubrique">Rubrique</label>
          <input class="form-control" type="text" name="rubrique" id="rubrique" value="<?= $article['rubrique'] ?>">
        </div>

        <div class="form-group">
          <textarea rows="30" cols="180" name="article" id="article">
          <?= $article['article'] ?>
          </textarea>
        </div>
        
        <div class="form-group">
          <button class="btn btn-dark" type="submit" name="submit" >Envoyer les modif'</button> 
        </div>
      </form>
	</body>

 