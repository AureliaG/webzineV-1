 

<h1 class="title" align="center" > "PATATE CHAUDE"</h1>
<h2 class="sous_titre" align="center">Les derniers articles publiés</h2>

<p class="text-center"> <a class="btn btn-outline-secondary"" role="button" href="./articles_tous.php">Tous les articles</a> </p>


<ul class="container" id= "container">
	<div class="row ">
		<?php 
		$x = 1; 
		while($article_orderby = $articles_orderby->fetch() AND $x <= 10) { ?>
			<div class="card col-lg-4 col-sm-8" id="card">
			    <li id="<?= $article_orderby['id'] ?>"> 
			    <?php $photo = callPhoto($article_orderby['id_article']);?>
					<a class="lien_main_article" href="article.php?id=<?= $article_orderby['id_article'] ?>">
					<p class="font_Kreon"><?= $article_orderby['auteur'] ?></p>
						<p class="font_Kreon" id="card_titre-article"><?= $article_orderby['titre'] ?></p>
						<img class="card-img-top" src="<?= $photo['path_photo'] ?>" id="card_image-article" >
						<div class="card-body">
							<p class= "font_Kreon"><?= $article_orderby['chapo'] ?></p>
						</div>
					</a>
				</li>
			</div>
		<?php  $x++;
		} 
		?>			
	</div> <!--en of row-->
</ul>
		
<p class="text-center"> <a class="btn btn-outline-secondary"" role="button" href="./articles_tous.php">Tous les articles</a> </p>


