<?php
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$blog = new Blog();
		$result = $blog->addPost($_POST['title'],$_POST['content']);
		if (!$result) {
			$alert = "<div class='alert alert-danger' role='alert'>
			  Ошибка! Данные не корректны!
			</div>";
		}else{
			$alert = "<div class='alert alert-success' role='alert'>
			  Успешно! Запись добавлена.
			</div>";
		}
	}