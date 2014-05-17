<?php 

	include('config.php');
	
	//validate for name and comment value
	if(!$_GET['name'] or !$_GET['comment'])
	{
		echo '{"result":"false"}';
		die();
	}
	
	//if name and comment are both present
	$query = 'INSERT INTO comment (
		name,
		comment, 
		page
		) VALUES (
		"'.$_GET['name'].'",
		"'.$_GET['comment'].'",
		"'.$_SERVER['HTTP_REFERER'].'"
		)';
	
	mysql_query( $query, $connect ) or die( mysql_error() );
	
	echo '{"result":true,"id":'.mysql_insert_id().'}';

?>