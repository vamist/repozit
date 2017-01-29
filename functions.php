<?php
$mysqli = false;

function connectDB() {
	global $mysqli;
	$mysqli = new mysqli("localhost", "root", "", "sozvezdie");
	$mysqli->query("SET NAMES = 'utf8'");
}
function closeDB() {
	global $mysqli;
	$mysqli->close();
}
function getAllCategorys($parent=0) {
	global $mysqli;
	connectDB();
	$result = $mysqli->query("SELECT * FROM categorys WHERE `parent`= $parent");
	closeDB();
	return resultToArray($result);
}
function getAllProducts($category_id) {
	global $mysqli;
	connectDB();
	$result = $mysqli->query("SELECT * FROM product WHERE `category_id`= $category_id");
	closeDB();
	return resultToArray($result);
}
function getProduct($id) {
	global $mysqli;
	connectDB();
	$result = $mysqli->query("SELECT * FROM product WHERE `id`= $id");
	closeDB();
	return resultToArray($result);
}
function getAllPosts() {
	global $mysqli;
	connectDB();
	$result = $mysqli->query("SELECT * FROM posts");
	closeDB();
	return resultToArray($result);
}
function getPost($id) {
	global $mysqli;
	connectDB();
	$result = $mysqli->query("SELECT * FROM posts WHERE `id`= $id");
	closeDB();
	return resultToArray($result);
}
function resultToArray($result) {
	$array = array();
	while (($row = $result->fetch_assoc()) != false) {
		$array[] = $row;
	}
	return $array;
}
?>