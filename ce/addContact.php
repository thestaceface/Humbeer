<?php 
	include('config.php');
	
	if(!$_GET['name'] or !$_GET['comment'])
	{
		echo '{"result":"false"}';
		die();
	}
	
	//if name and comment are both present
	$query = 'INSERT INTO contact (
		name,
                email,
		comment
		) VALUES (
		"'.$_GET['name'].'",
                "'.$_GET['email'].'",
		"'.$_GET['comment'].'"
		)';
	
	mysql_query( $query, $connect ) or die( mysql_error() );
	
	echo '{"result":true,"id":'.mysql_insert_id().'}';

?>