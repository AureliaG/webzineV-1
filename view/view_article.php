<?php
?>
<!DOCTYPE html>
<html> 
	<head>
		<title>Article</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">
		<!-- jQuery library -->
  		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>	
	</head>
	<body> 
		<?php
		require 'marge_gauche.php';
		?>
		<?php
		require 'header.php';
		?>
		<div class="row"> 
			<div class="col-md-1"></div>
			<div class="col-md-7 article" id="background-color_article">
				<h1 class="title"><?= $article['titre'] ?></h1>
				<h2 class="title_article font_Kreon"><?= $article['chapo'] ?></h2>
				<p><?= $article['auteur'] ?></p>

				<?php $photo = callPhoto($article['id']);?>

				<img class="img-fluid" src="<?= $photo['path_photo'] ?>">
				<p id="placement_article"><?= $article['article'] ?></p>
			</div>	
			<div class="col-md-1"></div>
		</div>	
	</body>
