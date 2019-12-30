<?php
	// valide ou refuse un conge
	if(isset($_GET['page']) && isset($_GET['stat']) && isset($_GET['numero']))
	{
		$page = $_GET['page'];
		$stat = $_GET['stat'];
		$numero = $_GET['numero'];
		
		if($stat == "valide")
		{
			$sql1 = "UPDATE conge SET statut='valide' WHERE numero='$numero'"; 
			$query1 = $connection->query($sql1);
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=conge\");
			// -->
			</script>"; 
		}
		if($stat == "refuse")
		{
			$sql1 = "UPDATE conge SET statut='refuse' WHERE numero='$numero'"; 
			$query1 = $connection->query($sql1);
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=conge\");
			// -->
			</script>"; 
		}
	}
	else
	{
		echo "<script language=\"Javascript\">";
		echo "<!--
		document.location.replace(\"index.php?page=conge\");
		// -->
		</script>"; 
	}
?>