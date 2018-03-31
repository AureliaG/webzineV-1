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
		
	</head>
		<!-- marge de gauche-->	
		<?php
		require 'marge_gauche.php';
		?>

		<!-- header-->
		<?php
		require 'header.php';
		?>

		<!-- articles (2*2)-->
		<?php
		require 'main_articles.php';
		?>
			
		</div> <!-- fin header col-md-8-->
		
	</div> <!-- fin row marge_gauche-->

</html>