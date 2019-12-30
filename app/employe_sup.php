<?php
	//supprimer employe
	if(isset($_GET['page']) && isset($_GET['cin'])) 
	{
		$cin = $_GET['cin'];
		$page = $_GET['page'];
		
		if($page == "employe_sup")
		{
			$sql = "DELETE FROM employe WHERE cin='$cin'";
			$query = $connection->query($sql);
			
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=employe\");
			// -->
			</script>"; 
		}
	}
	else
	{
		echo "<script language=\"Javascript\">";
		echo "<!--
		document.location.replace(\"index.php?page=employe\");
		// -->
		</script>"; 
	}
?>