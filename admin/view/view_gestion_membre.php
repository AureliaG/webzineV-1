<!DOCTYPE html> 
<html>
	<head>
		<title>Espace membre </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.css">
	</head>

	<body>
	<header>
	    <h3 align="center">Gestion des membres</h3><br>
	    <div style="display:flex; justify-content:center">
	      <a href="page_admin.php" role="button" class="btn btn-outline-secondary">retouner sur la page administrateur</a>
	    </div>
	    <div style="display:flex; justify-content:center">
	      <a href="../index.php" role="button" class="btn btn-outline-secondary">retourner sur le site</a>
	    </div>
  	</header>
	<div class="row">
		<div class="col-md-4"></div>
			<ul class="col-md-4" align="center" style=" list-style-type: none;">	
				<?php
		 		while($user = $users->fetch()) {
		 		?>
		 		<li class="m-4 border">
		 			<h3 id="<?= $user['id'] ?>" >
		 			<?= $user['pseudo'] ?></h3>
		 			<h3 <?= $user['email'] ?></h3> 			
		 		</li>
				<?php } ?> 
			</ul>
		<div class="col-md-4"></div>
	</div>	
	</body>