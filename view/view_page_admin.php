<!DOCTYPE html>
<html>
	<head>
		<title>Espace Admin </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_membre.css">
	</head>
	<header>
		<h1 id="title">Salut toi</h1>
		<!--message de confimation-->
	    <?php
	      if(isset($_GET['message'])){
	       echo $_GET['message']; 
	      }
	    ?>
	</header>
	<body>
		<ul>
			<li><a href="./index.php">Revenir sur le site</a></li>
			<li><a href="insert_article.php">Envoyer un article dans la base de donné</a></li>
			<li><a href="article_site.php">Gestion d'articles</a></li>
			<li><a href="">Gestion du forum</a></li>
			<li><a href="">Gestion des membres</a></li>
		</ul>		
	</body>