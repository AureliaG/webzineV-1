 

<h1 class="title" align="center" > "PATATE CHAUDE"</h1>
<h2 class="sous_titre" align="center">Les derniers articles publiés</h2>

<p class="text-center"> <a class="btn btn-outline-secondary"" role="button" href="./articles_tous.php">Tous les articles</a> </p>


<ul class="container" style="list-style: none;">
	<div class="row ">
		<?php 
		$x = 1;   
		while($article_orderby = $articles_orderby->fetch() AND $x <= 4) { 
		?>
			<div class="card col-lg-4 col-md-8 col-sm-8"
				style="margin: 2em; padding: 1em;">
			    <li id="<?= $article_orderby['id'] ?>">
			    <?php $photo = callPhoto($article_orderby['id_article']);?>
					<a class="lien_main_article" href="article.php?id=<?= $article_orderby['id_article'] ?>">
						<p class="font_Kreon"><?= $article_orderby['auteur'] ?></p>
						<p class="font_Kreon"
								style="margin-bottom: 0.5em; font-weight: bold;"><?= $article_orderby['titre'] ?></p>
						<img class="card-img-top" src="<?= $photo['path_photo'] ?>" 
						style="margin-top: 1em;" >
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
	
<hr>		

<ul class="container" style="list-style: none;">
	<div class="row ">
		<?php 
		$x = 1; 
		while($article_orderby = $articles_orderby->fetch() AND $x <= 3) { ?>
			<div class="card col-lg-3 col-md-8 col-sm-8"
				style="margin: 1em; padding: 1em;">
			    <li id="<?= $article_orderby['id'] ?>"> 
			    <?php $photo = callPhoto($article_orderby['id_article']);?>
					<a class="lien_main_article" href="article.php?id=<?= $article_orderby['id_article'] ?>">
					<p class="font_Kreon"><?= $article_orderby['auteur'] ?></p>
						<p class="font_Kreon"
							style="margin-bottom: 0.5em; font-weight: bold;"><?= $article_orderby['titre'] ?></p>
						<img class="card-img-top" src="<?= $photo['path_photo'] ?>" 
						style="margin-top: 1em;" >
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

<ul class="container" style="list-style: none;">
	<div class="row ">
		<?php 
		$x = 1; 
		while($article_orderby = $articles_orderby->fetch() AND $x <= 3) { ?>
			<div class="card col-lg-3 col-md-8 col-sm-8"
				style="margin: 1em; padding: 1em; ">
			    <li id="<?= $article_orderby['id'] ?>">
			    <?php $photo = callPhoto($article_orderby['id_article']);?>
					<a class="lien_main_article" href="article.php?id=<?= $article_orderby['id_article'] ?>">
					<p class="font_Kreon"><?= $article_orderby['auteur'] ?></p>
						<p class="font_Kreon"
							style="margin-bottom: 0.5em; font-weight: bold;"><?= $article_orderby['titre'] ?></p>
						<img class="card-img-top" src="<?= $photo['path_photo'] ?>" 
						style="margin-top: 1em;" >
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


