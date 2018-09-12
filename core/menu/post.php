<?php
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);
		$post = $db->select("SELECT * FROM posts WHERE id='$id'");
		$comments_am = $db->count("SELECT COUNT(1) FROM comments WHERE post_id='$id'");
		if (!isset($post[0]['id'])) header("Location:/404");
	}