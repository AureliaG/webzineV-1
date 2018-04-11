 <?php 
//récupère les nom des utilisateurs
 function callUsers() {
	$sql = "SELECT * FROM users ORDER BY id DESC " ;
	$users = connectionDb($sql);
	$users->execute();
	return $users;	
}
 