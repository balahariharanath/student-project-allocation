<?php
 require 'init.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];

	$query = $db->exec("DELETE FROM project WHERE id = $id;
                        DELETE FROM student WHERE project_id = $id;");
	header('location: create-project.php');
}