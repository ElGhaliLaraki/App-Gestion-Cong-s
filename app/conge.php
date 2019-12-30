<?php 
	$sql = "SELECT * FROM conge ORDER BY numero DESC";
	$query = $connection->query($sql);
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
								<li><span class="bread-blod">Conges</span> </li>
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
								<h1>Liste des <span class="res-ds-n">congés</span></h1>
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
									<div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
										
										<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
											<thead>
												<tr>
													<th data-field="state" data-checkbox="true"></th>
													<th data-field="numero">Numero</th>
													<th data-field="datedebut" data-editable="true">Date debut</th>
													<th data-field="datefin" data-editable="true">Date fin</th>
													<th data-field="nbjd" data-editable="true">Nombre de jours</th>
													<th data-field="statut" data-editable="false">Statut</th>
													<th data-field="Valider" data-editable="false">Valider</th>
													<th data-field="Refuser" data-editable="false">Refuser</th>
												</tr>
											</thead>
										<tbody>
<?php
	while($data = $query->fetch_object())
	{
		echo "<tr>";
			echo "<td></td>";
			echo "<td> $data->numero </td>";
			echo "<td> $data->datedebut </td>";
			echo "<td> $data->datefin </td>";
			echo "<td> $data->nbjd </td>";
			//echo "<td> $data->statut </td>";
			
			switch($data->statut){
				case "encours":
					echo "<td class=\"datatable-ct\"><i class=\"fa fa-exclamation-triangle fa-2x\" style=\"color:orange\"></i>
						<br /><span style=\"color:orange; font-size: 12px; font-weight: bold;\">Encours</span></td>";
				break;
				case "valide":
					echo "<td class=\"datatable-ct\"><i class=\"fa fa-check fa-2x\" style=\"color:yellow\"></i>
						<br /><span style=\"color:yellow; font-size: 12px; font-weight: bold;\">Validé</span></td>";
				break;
				case "refuse":
					echo "<td class=\"datatable-ct\"><i class=\"fa fa-times fa-2x\" style=\"color:red\"></i>
					<br /><span style=\"color:red; font-size: 12px; font-weight: bold;\">Refusé</span></td>";
				break;
			}
			
			echo "<td><a href=\"index.php?page=conge_statut&stat=valide&numero={$data->numero}\" class=\"btn btn-default btn-sm\" style=\"color:green\"><i class=\"fa fa-check\" style=\"color:green\"></i></a></td>";
			echo "<td><a href=\"index.php?page=conge_statut&stat=refuse&numero={$data->numero}\"class=\"btn btn-default btn-sm\"><i class=\"fa fa-times\" style=\"color:red\"></i></a></td>";
		echo "</tr>";
	}
?>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>