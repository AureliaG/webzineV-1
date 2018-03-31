<?php
require __DIR__.'/connection_bdd/connection_bdd.php';
$input_data = file_get_contents( "php://input" );

if ($input_data !== FALSE) {
	$data = json_decode( $input_data ); //$data is now a php array array(id_articles)
	var_dump($data);

	$i = 1;
	foreach ($data as &$value) {	    
	    $value = intval($value);
	    var_dump($value);
	    $sql = 'UPDATE articles_page_daccueil SET id_article= :id_article 
	    WHERE id='.$i;
	    $pdo_statement = connectionDb($sql);
        $pdo_statement->bindParam(':id_article', intval($value), PDO::PARAM_INT
        );
		$pdo_statement->execute(); 
		$i++;
	}
}
