<?php 

	$connect = mysql_connect('173.201.88.134', 'stacefacedev', 'Stacefacedev3@') or die (mysql_error());
	
	mysql_select_db('stacefacedev', $connect) or die(mysql_error());
	
?>