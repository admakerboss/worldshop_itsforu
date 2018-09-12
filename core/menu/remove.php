<?php
	if (isset($_GET['id'])) {
		$id = intval($_GET['id']);

		$db->delete("DELETE FROM posts WHERE id='$id'");

		header("Location:/main&removed");
	}