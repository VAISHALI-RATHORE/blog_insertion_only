<?php

$title="";
$category ="";
$comment="";
$desc='';

//connecti2on database

$mysqli = new mysqli('localhost','root','','blog') or die(mysql_error($mysqli));
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$category = $_POST['category'];
    $desc = $_POST['desc'];
    $mysqli->query("INSERT INTO data (title,category,description,) VALUES ('$title', '$category','$desc',)") ;
}
if (isset($_POST['comment1'])) {
	$comment = $_POST['comment'];
    $mysqli->query("INSERT INTO comment (comment) VALUES ('$comment')") ;

}

?>