<?php
	$posts = $db->select("SELECT * FROM posts");

	if (isset($_GET['removed'])) {
		$alert = "<div class='alert alert-success' role='alert'>
			  Успешно! Запись удалена.
			</div>";
	}