<?php 
	$sql = "SELECT * FROM typeconge";
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
								<h1>Liste des <span class="res-ds-n">Types de congé</span></h1>
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
													<th data-field="cin">Id Type</th>
													<th data-field="nom" data-editable="true">Libelle</th>
													<th> &nbsp; </th>
													<th> &nbsp; </th>
												</tr>
											</thead>
										<tbody>
<?php
	while($data = $query->fetch_object())
	{
		echo "<tr>";
			echo "<td></td>";
			echo "<td> $data->idtype </td>";
			echo "<td> $data->libelle </td>";
			echo "<td><a href=\"index.php?page=typeconge_upd&idtype={$data->idtype}\"class=\"btn btn-default btn-sm\"><i class=\"fa fa-pencil\"></i></a></td>";
			echo "<td><a href=\"index.php?page=typeconge_sup&idtype={$data->idtype}\"class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash\"></i></a></td>";
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