<?php
 require 'init.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];
	//$q=$db->query("SELECT project_id FROM student WHERE id= $id ");
    //$query1=$db->query("UPDATE project SET allocation= '0' WHERE id= '$q' ");
	$query = $db->exec("UPDATE project SET allocation= 0 WHERE id=(SELECT project_id FROM student WHERE id= $id);
	                    DELETE FROM student WHERE id = $id;");
	header('location: create-student.php');
}