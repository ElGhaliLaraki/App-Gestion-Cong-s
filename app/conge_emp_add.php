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
								<li><span class="bread-blod">Conge</span> </li>
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
								<h1>Ajout <span class="res-ds-n">Demande de Conge</span></h1>
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
		
		
		<input type="hidden" name="num" value="<?php echo $_SESSION['id']; ?>" />
		
		<div class="form-group">
			<label style="text-align: left !important;" for="typeconge" class="col-sm-3 control-label">Type de conge</label>
			<div class="col-sm-9">
				<select class="form-control select2" style="width: 100%;" name="idtype">
				<?php 
					$sql = "SELECT * FROM typeconge";
					$query = $connection->query($sql);
					while($data = $query->fetch_object())
					{
						echo "<option value=\"{$data->idtype}\">" . $data->libelle . "</option>";
					}
				?>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="ADRESSE" class="col-sm-3 control-label">Date debut</label>
			<div class="col-sm-9">
				<div class="date-picker-inner">
					<div class="form-group data-custon-pick" id="data_1">
						<div class="input-group date">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="text" class="form-control" name="datedebut">
						</div>
					</div>
                </div>
			</div>
		</div>
		
		<div class="form-group">
			<label style="text-align: left !important;" for="ADRESSE" class="col-sm-3 control-label">Date fin</label>
			<div class="col-sm-9">
				<div class="date-picker-inner">
					<div class="form-group data-custon-pick" id="data_1">
						<div class="input-group date">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="text" class="form-control" name="datefin">
						</div>
					</div>
                </div>
			</div>
		</div>
		
		
		
		<div class="col-sm-12" id="col-sub" style="text-align: right !important;">
			<button type="submit" class="btn btn-default" name="submit" value="Envoyer la demande">
			<span class="glyphicon glyphicon-plus"></span> Envoyer la demande </button>
		</div>
	  </div>
		
	</form>
<?php	
if(isset($_POST['submit']))
{
	if(!empty($_POST['datedebut']) && !empty($_POST['datefin']))
	{
		$dd = new DateTime($_POST['datedebut']);
		$datedebut = $dd->format('Y-m-d');
		$df = new DateTime($_POST['datefin']);
		$datefin = $df->format('Y-m-d');
	   
		$dStart = new DateTime($datedebut);
		$dEnd  = new DateTime($datefin);
		$dDiff = $dStart->diff($dEnd);
		//echo $dDiff->format('%R'); 
		//echo $dDiff->days;
		$nbjd = $dDiff->days;
		
		$num = htmlspecialchars($_POST['num'], ENT_QUOTES);	
		$statut = "encours";
		$idt = htmlspecialchars($_POST['idtype'], ENT_QUOTES);	
		
		$sql1 = "INSERT INTO conge(datedebut, datefin, nbjd, statut, num, idt) VALUES('$datedebut', '$datefin', '$nbjd', '$statut', '$num', '$idt')"; 
		$query1 = $connection->query($sql1);
		if($query1){ 
			echo "<script type=\"text/javascript\">alert(\"Demande de conge envoye avec succes.\");</script>"; 
			echo "<script language=\"Javascript\">";
			echo "<!--
			document.location.replace(\"index.php?page=conge_emp\");
			// -->
			</script>"; 
		}
		else{ echo "<script type=\"text/javascript\">alert(\"Erreur d'envoie !\");</script>"; }/**/
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