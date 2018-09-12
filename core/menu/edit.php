<?php
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);
		$post = $db->select("SELECT * FROM posts WHERE id='$id'");
		if (!isset($post[0]['id'])) header("Location:/404");
		if (isset($_POST['title']) && isset($_POST['content'])) {
			$blog = new Blog();
			$result = $blog->editPost($id,$_POST['title'],$_POST['content']);
			if (!$result) {
				$alert = "<div class='alert alert-danger' role='alert'>
				  Ошибка! Данные не корректны!
				</div>";
			}else{
				$post = $db->select("SELECT * FROM posts WHERE id='$id'");
				$alert = "<div class='alert alert-success' role='alert'>
				  Успешно! Запись редактирована.
				</div>";
			}
		}
	}