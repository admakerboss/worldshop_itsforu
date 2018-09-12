<?php
    if (!isset($_SESSION['requestedUrl'])) $_SESSION['requestedUrl'] = "/";
    if (empty($_SESSION['requestedUrl'])) $_SESSION['requestedUrl'] = "/";
    if ($_SESSION['requestedUrl'] == "") $_SESSION['requestedUrl'] = "/";


	$value = explode('?', $_SERVER["REQUEST_URI"]);
	$uri = reset($value);
    $requestedUrl = urldecode(rtrim($uri, '/'));

    if (empty($requestedUrl) or $requestedUrl == "" or $requestedUrl == "/") {
        header("Location:/main");
        exit();
    }

    $routes = array(
        // Роуты
        "/404" => array(
            "view" => "views/menu/404.php",
            "temp" => "main",
            "title" => "Страница не найдена",
        ),
        "/main" => array(
            "model" => "core/menu/main.php",
            "view" => "views/menu/main.php",
            "temp" => "main",
            "title" => "Главная страница",
        ),
        "/newpost" => array(
            "model" => "core/menu/newpost.php",
            "view" => "views/menu/newpost.php",
            "temp" => "main",
            "title" => "Добавить запись",
        ),
        "/edit" => array(
            "model" => "core/menu/edit.php",
            "view" => "views/menu/edit.php",
            "temp" => "main",
            "title" => "Изменить запись",
        ),
        "/remove" => array(
            "model" => "core/menu/remove.php",
            "temp" => "main",
            "title" => "Удалить",
        ),
        "/post" => array(
            "model" => "core/menu/post.php",
            "view" => "views/menu/post.php",
            "temp" => "main",
            "title" => "Полный пост",
        ),
	);

	if (isset($routes[$requestedUrl])) {
		$title = "Главная страница";
        
		if (isset($routes[$requestedUrl]['title'])) {
			$title = $routes[$requestedUrl]['title'];
		}
        if (isset($routes[$requestedUrl]['model'])) {
            include $routes[$requestedUrl]['model'];
        }
    
		$_SESSION['requestedUrl'] = $requestedUrl;
	}else{
        header("Location:/404");
    }