<?php
	if(isset($_GET['page']) && isset($_GET['cin'])) 
	{
		$cin = $_GET['cin'];
		$page = $_GET['page'];
		$sql = "SELECT * FROM employe WHERE cin='$cin'";
		$query = $connection->query($sql);
		$data = $query->fetch_object();
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
								<li><span class="bread-blod">Employes</span> </li>
								<!-- <li><span class="bread-blod">Dashboard 2</span> </li> -->
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
								<h1>Modifier <span class="res-ds-n">Employe</span></h1>
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
		
		<input type="hidden" class="form-control" placeholder="cin" name="cin" value="<?php echo $data->cin; ?>" />
		
		<div class="form-group">
			<label style="text-align: left !important;" for="Nom" class="col-sm-3 control-label">Nom</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Nom" name="nom" value="<?php echo $data->nom; ?>" />
			</div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="Prenom" class="col-sm-3 control-label">Prenom</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Prenom" name="prenom" value="<?php echo $data->prenom; ?>" />
			</div>
		</div>
		
		<div class="form-group">
		  <label style="text-align: left !important;" for="inputEmail3" class="col-sm-3 control-label">E-mail</label>
		  <div class="col-sm-9">
			<input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" name="email" value="<?php echo $data->email; ?>" />
		  </div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="Telephone" class="col-sm-3 control-label">Telephone</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Telephone" name="telephone" value="<?php echo $data->telephone; ?>" />
			</div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="Telephone" class="col-sm-3 control-label">Login</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Login" name="login" value="<?php echo $data->login; ?>" />
			</div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="Telephone" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $data->password; ?>" />
			</div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="Adresse" class="col-sm-3 control-label">Adresse</label>
			<div class="col-sm-9">
				<textarea class="form-control" rows="3" placeholder="Adresse" name="adresse"><?php echo $data->adresse; ?></textarea>
			</div>
		</div>
		
		<!-- Date -->
		  <div class="form-group">
			<label style="text-align: left !important;" for="ADRESSE" class="col-sm-3 control-label">Date d'embouche</label>
			<div class="col-sm-9">
				<div class="date-picker-inner">
					<div class="form-group data-custon-pick" id="data_1">
						<div class="input-group date">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="text" class="form-control" name="dateembouche" value="<?php echo $data->dateembouche; ?>" />
						</div>
					</div>
                </div>
			</div>
			<!-- /.input group -->
		  </div>
		  <!-- /.form group -->
		<div class="col-sm-12" id="col-sub" style="text-align: right !important;">
			<button type="submit" class="btn btn-default" name="submit" value="Ajouter">
			<span class="glyphicon glyphicon-saved"></span> Modifier </button>
		</div>
	  </div>
		
	</form>
<?php	
if(isset($_POST['submit']))
{
	if(!empty($_POST['cin']))
{
	$cin = htmlspecialchars($_POST['cin'], ENT_QUOTES);
	$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
	$prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	$telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);
	$login = htmlspecialchars($_POST['login'], ENT_QUOTES);
	$password = htmlspecialchars($_POST['password'], ENT_QUOTES);
	$adresse = htmlspecialchars($_POST['adresse'], ENT_QUOTES);	
	$dd = new DateTime($_POST['dateembouche']);
	$dateembouche = $dd->format('Y-m-d');
	$type = "employe";
	
	$sql1 = "UPDATE employe SET nom='$nom', prenom='$prenom', email='$email', telephone='$telephone', login='$login', password='$password', adresse='$adresse', dateembouche='$dateembouche' WHERE cin='$cin'"; 
	$query1 = $connection->query($sql1);
	if($query1){ 
		echo "<script type=\"text/javascript\">alert(\"Employe modifier avec succes.\");</script>"; 
		echo "<script language=\"Javascript\">";
		echo "<!--
		document.location.replace(\"index.php?page=employe\");
		// -->
		</script>"; 
	}
	else{ echo "<script type=\"text/javascript\">alert(\"Erreur de modification !\");</script>"; }
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