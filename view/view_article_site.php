<!DOCTYPE html>
<html>
	<head>
		<title>Espace membre </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.css">
	</head>

	<header>
	    <h1 align="center">Choix des articles intégrés</h1><br>
	    <div style="display:flex; justify-content:center">
	      <a href="page_admin.php" role="button" class="btn btn-outline-secondary">retouner sur la page administrateur</a>
	    </div>
	    <div style="display:flex; justify-content:center; margin:10px;">
	      <a href="./index.php" role="button" class="btn btn-outline-secondary">retourner sur le site</a>
	    </div>
    </header>
	
	<body>
	<div align="center">
		<h2>Choix des articles sur la page d'accueil</h2>
		<h4>Les 4 premiers articles seront les "main_articles"</h3>
		<h4>Les articles de 5 à 12 seront les "articles_medium"</h3>
	</div>
	<hr>


	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<ul align="center" id="drag-elements" style="list-style-type: none;">	
		<?php
 		while($article = $articles->fetch()) {
 		?>
 		<li class="m-4 border">
 			<h3 class="get_id"
 			id="<?= $article['id'] ?>" >
 			<?= $article['titre'] ?></h3>
 			<?php 
 			$photo = callPhoto($article['id']);
 			?>
 			<img src="<?= $photo['path_photo'] ?>" style="width: 20em;" >
 		</li>
		<?php } ?>
		</ul>
		<button id="generer_dom">clic clic!</button>
	</div>
	<div class="col-md-3"></div>
	</div>
	
	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous"></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js'></script>

	<!--nbre d'entrée disponible dans le tableau odre_article-->
	<script>let news_count = <?php echo $news_count; ?>;</script>
	
	<!--drag-n-drop list-->
	<script src="js/main.js"></script>

	</body>
</html>
	



