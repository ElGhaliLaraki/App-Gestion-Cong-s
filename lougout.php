<?php 

		session_start();

		session_destroy();

		echo "<script language=\"Javascript\">";
		echo "<!--
		document.location.replace(\"index.php\");
		// -->
		</script>";

 ?>