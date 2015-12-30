<?php





function get_techs(){
	global $db;
	$query = 'SELECT * FROM technicians';
	$statement = $db->prepare($query);
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
	return $technicians;
}
?>