<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";

	$title = clearStr($_POST["title"]);
	$author = clearStr($_POST["author"]);
	$pubyear = clearInt($_POST["pubyear"]);
	$price = clearInt($_POST["price"]);

	if(!addItemToCatalog($title, $author, $pubyear, $price)) {
		echo "Error with this code, please fix it!";
	} else {
		header("Location: add2cat.php");
		exit;
	}