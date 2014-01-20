<?php 
	include_once('BookDAO.php');
	include_once('config.php');

	$search = $_POST['search'];
	$config = array("_search" => $search);
	
	BookDAO::getSearch($search);
	
 ?>