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
function  setCrumb($crumb, $id, $name){

	$bredCrumbs[]['name'] = $name;
	$bredCrumbs[]['link'] = "index.php?" . $crumb . "=" . $id;
	print_r($bredCrumbs);

}
function getCrumb($bredCrumbs){
	foreach ($bredCrumbs as $page) {
		$name = $page["name"];
		$link = $page["link"];
		$sum = "<a>$link" . $name . "</a> >>";
		return $sum;
	}

}

////////////// Навигация ХЛЕБНЫЕ КРОШКИ ///////////////////////////////
function breadCrumbs() {
	$cat = clearData($_GET["categor"]);				// получаю cat и name из гиперссылки
	$name = clearData($_GET["name"]);
	$l = $_GET["l"];								// получаю l(уровень вложения) из гиперссылки
	if( empty( $_SESSION['_breadcrumbs_'] ) ) {		//проверяю существует ли сессионная переменная
		$breadcrumbs = array(0=>array("cat"=>"Main", "name"=>"Главная"));	//	если нет, то создаю массив
		$_SESSION['_breadcrumbs_']=$breadcrumbs;	// и присваиваю его значение сессионной переменной
	}
	else {											// если сессионная переменная существовала
		$breadcrumbs=$_SESSION['_breadcrumbs_'];	// считываю содержание массива из нее в локальную переменную
		for ($n=count($breadcrumbs);$n>$l;  $n--) {	// в цикле удаляю верхние ненужные элементы массива
			unset ($breadcrumbs[$n]);
		}
	}
	$breadcrumbs[$l] = array ("cat" => $cat, "name" => $name);	// дополняю массив новой записью
	$_SESSION['_breadcrumbs_']=$breadcrumbs;					// обновляю сессионную переменную
	echo "<ul id='menuTop'><li><a href='index.php?&amp;categor=main&amp;l=0' class=''>Главная</a></li></ul>"; // вывод первой крошки Главная
	for ($i=1; $i<=$l; $i++) {	// в цикле формирование и вывод остальных крошек
		$cat = $breadcrumbs [$i]["cat"];
		$name = $breadcrumbs [$i]["name"];
		echo "<ul id='menuTop'><li><a href='index.php?&amp;categor=$cat&amp;name=$name&amp;l=$i' class=''>>>$name</a></li></ul>";
	}
	return $l;
}


?>