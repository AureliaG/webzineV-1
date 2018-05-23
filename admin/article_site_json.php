<?php
require __DIR__.'/../connection_bdd/connection_bdd.php';
$input_data = file_get_contents("php://input"); 
var_dump($input_data);
//$input_data= '["59","61","58","57","56","55","53","52","51","50"]';


if ($input_data !== FALSE) {
	$data = json_decode($input_data);
	

	$i = 1;
	foreach ($data as &$value) {	    
	    $value = intval($value); 
	    //var_dump($value);
	    $sql = 'UPDATE articles_page_daccueil SET id_article= :id_article 
	    WHERE id='.$i; //This is the loop index: 1-10
	    //var_dump($i);
	    //var_dump($sql);

	    $pdo_statement = connectionDb($sql);
	    var_dump($pdo_statement);
        $pdo_statement->bindParam(':id_article', intval($value), PDO::PARAM_INT);
        //var_dump($pdo_statement);
		$pdo_statement->execute(); 
		$i++;
	}
}
