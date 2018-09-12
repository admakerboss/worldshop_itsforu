<?php
	include 'config.php';
	include 'class/db.class.php';
	include 'class/blog.class.php';

	//Подключаем Базу Данных
	$db = new DB();
	$dbconnection = $db->open();

	$blog = new Blog();
	$result = $blog->addComment($_POST['id'],$_POST['name'],$_POST['email'],$_POST['comment']);
	if (!$result) {
		echo "Ошибка!";
	}else{
		echo "Успешно!";
	}