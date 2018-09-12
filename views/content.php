<?php

	if (isset($routes[$requestedUrl])) {
		include $routes[$requestedUrl]['view'];
	}else{
		echo "<br/><center>404: Not Found</center>";
	}

?>