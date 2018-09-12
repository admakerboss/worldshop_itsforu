<?php
	if (isset($routes[$requestedUrl])) {
		if ($routes[$requestedUrl]['temp'] == "main") {
		?>
		<!DOCTYPE html>
		<html lang="en">
			<?php
				require_once "views/head.php"; 
			?>
			<body>
				<?php	
				// NavBar
				require_once "views/navbar.php"; 
		
				// Content
				require_once "views/content.php";

				// Footer
				require_once "views/footer.php"; 
				?>
		    </body>
		</html>
		<?php
		}
	}
?>