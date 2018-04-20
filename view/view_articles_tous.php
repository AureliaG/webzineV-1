<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Webzine</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kreon" rel="stylesheet">
		<!-- jQuery library -->
  		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	</head>

		<!-- marge de gauche-->	
		<?php
		require 'marge_gauche.php';
		?>

		<!-- header-->
		<?php
		require 'header.php';
		?>
		
		<ul class="container" style="list-style: none;">
			<div class="row ">	
			<?php
	 		foreach ($articles as $article) {
	 		?>
	 		
	 		<div class="card col-4"
				style="margin: 2em; padding: 1em;">
			    <li id="<?= $article['id'] ?>">
			    <?php $photo = callPhoto($article['id']);?>
					<a class="lien_main_article" href="article.php?id=<?= $article['id'] ?>">
						<p class="font_Kreon"><?= $article['auteur'] ?></p>
						<p class="font_Kreon"
								style="margin-bottom: 0.5em; font-weight: bold;"><?= $article['titre'] ?></p> 
			 			<img class="img-fluid" src="<?= $photo['path_photo'] ?>" style="width: 20em;" >
						<div class="card-body">
							<p class= "font_Kreon"><?= $article['chapo'] ?></p>
						</div>
					</a>
				</li>
			</div>
			
			<?php } ?>
			</div> <!--en of row-->
		</ul>	
			
		</div> <!-- fin header col-md-8-->
		
	</div> <!-- fin row marge_gauche-->

</html>