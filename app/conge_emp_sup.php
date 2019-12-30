<?php
	//supprimer conge
	if(isset($_GET['page']) && isset($_GET['numero'])) 
	{
		$numero = $_GET['numero'];
		$page = $_GET['page'];
		
		if($page == "conge_emp_sup")
		{
			$sql = "DELETE FROM conge WHERE numero='$numero'";
			$query = $connection->query($sql);
			
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=conge_emp\");
			// -->
			</script>";
		}
	}
	else
	{
		echo "<script language=\"Javascript\">";
		echo "<!--
		document.location.replace(\"index.php?page=conge_emp\");
		// -->
		</script>"; 
	}
?>