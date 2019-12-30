<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcome-list map-mg-t-40-gl shadow-reset">
					<div class="row">
						<div class="col-lg-12">
							<ul class="breadcome-menu" style="text-align: left;">
								<li><a href="index.php?page=home">Home</a> <span class="bread-slash">/</span></li>
								<li><span class="bread-blod">Types de conge</span> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcome End-->

<div class="transition-world-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="transition-world-list shadow-reset">
					<div class="sparkline7-list">
						<div class="sparkline7-hd">
							<div class="main-spark7-hd">
								<h1>Ajout <span class="res-ds-n">type de congé</span></h1>
								<div class="sparkline7-outline-icon">
									<span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
									<span><i class="fa fa-wrench"></i></span>
									<span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
								</div>
							</div>
						</div>
						<div class="sparkline7-graph">
							<div class="row">
								<div class="col-lg-12">
								
<form class="form-horizontal" method="POST" action="">
	  <div class="box-body" id="box-b">
		
		<div class="form-group">
			<label style="text-align: left !important;" for="libelle" class="col-sm-3 control-label">Libelle</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Libelle" name="libelle">
			</div>
		</div>
		
		<div class="col-sm-12" id="col-sub" style="text-align: right !important;">
			<button type="submit" class="btn btn-default" name="submit" value="Ajouter">
			<span class="glyphicon glyphicon-plus"></span> Ajouter </button>
		</div>
	  </div>
		
	</form>
<?php	
if(isset($_POST['submit']))
{
	if(!empty($_POST['libelle']))
	{
		$libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
		
		$sql1 = "INSERT INTO typeconge(libelle) VALUES('$libelle')"; 
		$query1 = $connection->query($sql1);
		if($query1){ 
			echo "<script type=\"text/javascript\">alert(\"Type de conge ajouter avec succes.\");</script>"; 
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=typeconge\");
			// -->
			</script>"; 
		}
		//else{ echo "<script type=\"text/javascript\">alert(\"Erreur d'ajout !\");</script>"; }
	}else{ echo "<script type=\"text/javascript\">alert(\"Veuillez remplir les champs !\");</script>"; }	
}
?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>