<!DOCTYPE html>  
<html>
	<head>
		<title>Espace membre </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	</head>

	<body>
	<header>
	    <h1 align="center">Gestion des articles sur le site</h1><br>
	    <div style="display:flex; justify-content:center">
	      <a href="page_admin.php" role="button" class="btn btn-outline-secondary">Page administrateur</a>
	    </div>
	    <div style="display:flex; justify-content:center; margin:10px;">
	      <a href="../index.php" role="button" class="btn btn-outline-secondary">Retourner sur le site</a>
	    </div>
    </header>
	<hr>


	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<ul align="center" style="list-style-type: none;">	
				<?php
		 		while($article = $articles->fetch()) {
		 		?>
		 		<li class="m-4 border">
		 			<h3 id="<?= $article['id'] ?>" >
		 			<?= $article['titre'] ?></h3>
		 			<?php 
		 			$photo = callPhoto($article['id']);
		 			?>
		 			<img src="../<?= $photo['path_photo'] ?>" style="width: 20em;" >
		 			<div class="row mx-auto">	
		 				<!--bouton edite--> 
			 			<a class="lien_main_article" href="edit_article.php?id=<?= $article['id'] ?>"><i class="fas fa-pencil-alt"></i></a>					
			 			<!--bouton delete-->
			 			<form action="" method="get">
			 				<button type="submit" name="id" value="<?= $article['id'] ?>"><i class="fas fa-trash-alt "></i></button>
			 			</form>
			 			 		 		
		 			</div> 
		 		</li>
				<?php } ?> 
			</ul>
		</div>
		<div class="col-md-3"></div>
	</div>
	
	</body>
</html>