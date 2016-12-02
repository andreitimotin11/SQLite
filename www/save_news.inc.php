<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 02.12.2016
 * Time: 22:31
 */
$t = $news->clearStr($_POST["title"]);
$d = $news->clearStr($_POST["description"]);
$s = $news->clearStr($_POST["source"]);
$c = $news->clearStr($_POST["category"]);
if(empty($t) or empty($d)){
	$errMsg = "Заполните все поля формы!";
}else{
	if(!$news->saveNews($t, $c, $d, $s)){
		$errMsg = "Произошла ошибка при добавлении новости";
	}else{
		header("Location: news.php");
		exit;
	}
}