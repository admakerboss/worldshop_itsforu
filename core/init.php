<?php
	//Старт сессии
	if (!isset($_SESSION)) session_start();
	
	//Файл настроек
	include 'core/config.php';

	//Функция автоподключения нужного класса
	function __autoload($class_name) {
		if (file_exists('core/class/'.strtolower($class_name).'.class.php')) {
	    	include_once 'core/class/'.strtolower($class_name).'.class.php';
	    }
	}

	//Подключаем Базу Данных
	$db = new DB();
	$dbconnection = $db->open();

	// Подключаем роутер
	include 'core/router.php';