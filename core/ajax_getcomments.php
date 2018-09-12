<?php
	include 'config.php';
	include 'class/db.class.php';
	include 'class/blog.class.php';

	//Подключаем Базу Данных
	$db = new DB();
	$dbconnection = $db->open();

	$comments = $db->select("SELECT * FROM comments WHERE post_id='".$_POST['id']."'");

	foreach ($comments as $key => $value) {
		echo "<div class='card'>
          <div class='card-body'>
          <p class='card-title'><b>".$value['name']." | ".$value['email']."</b></p>
            <p>".$value['msg']."</p>
          </div>
        </div>
        <br/>";
	}