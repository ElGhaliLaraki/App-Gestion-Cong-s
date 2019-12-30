<?php
	//supprimer employe
	if(isset($_GET['page']) && isset($_GET['idtype'])) 
	{
		$idtype = $_GET['idtype'];
		$page = $_GET['page'];
		
		if($page == "typeconge_sup")
		{
			$sql = "DELETE FROM typeconge WHERE idtype='$idtype'";
			$query = $connection->query($sql);
			
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=typeconge\");
			// -->
			</script>"; 
		}
	}
	else
	{
		echo "<script language=\"Javascript\">";
		echo "<!--
		document.location.replace(\"index.php?page=typeconge\");
		// -->
		</script>"; 
	}
?>