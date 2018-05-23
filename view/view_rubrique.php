<html>
	<head>
		<title>Webzine</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">
	</head>
		<?php
		require 'marge_gauche.php';
		?>
		<?php
		require 'header.php';
		?>
	<ul class="container" id= "container">
		<div class="row ">	
		<?php
 		foreach ($articles as $article) {
 		?>
 		<div class="card col-4" id="card">
		    <li id="<?= $article['id'] ?>">
		    <?php $photo = callPhoto($article['id']);?>
				<a class="lien_main_article" href="article.php?id=<?= $article['id'] ?>">
					<p class="font_Kreon"><?= $article['auteur'] ?></p>
					<p class="font_Kreon" id="card_titre-article"><?= $article['titre'] ?></p> 
		 			<img class="img-fluid" src="<?= $photo['path_photo'] ?>" 
		 			id="card_image-article">
					<div class="card-body">
						<p class= "font_Kreon"><?= $article['chapo'] ?></p>
					</div>
				</a>
			</li>
		</div>
		<?php } ?>
		</div> <!--en of row-->
	</ul>	
</html>