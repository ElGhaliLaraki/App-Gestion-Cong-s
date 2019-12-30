<?php 
	$sql = "SELECT * FROM employe WHERE type='employe'";
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
								<!-- <li><a href="index.php?page=home">Home</a> <span class="bread-slash">/</span></li> -->
								<li><span class="bread-blod">Home</span></li>
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
								<h1>Liste des <span class="res-ds-n">Employes</span></h1>
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
													<th data-field="cin">CIN</th>
													<th data-field="nom" data-editable="true">Nom</th>
													<th data-field="prenom" data-editable="true">Prenom</th>
													<th data-field="email" data-editable="true">Email</th>
													<th data-field="telephone" data-editable="true">Telephone</th>
													<th data-field="login" data-editable="true">Login</th>
													<th data-field="password" data-editable="true">Password</th>
													<th data-field="adresse" data-editable="true">Adresse</th>
													<th data-field="date" data-editable="true">Date d'embouche</th>
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
			echo "<td> $data->cin </td>";
			echo "<td> $data->nom </td>";
			echo "<td> $data->prenom </td>";
			echo "<td> $data->email </td>";
			echo "<td> $data->telephone </td>";
			echo "<td> $data->login </td>";
			echo "<td>******</td>";
			echo "<td> $data->adresse </td>";
			echo "<td> $data->dateembouche </td>";
			echo "<td><a href=\"index.php?page=employe_upd&cin={$data->cin}\"class=\"btn btn-default btn-sm\"><i class=\"fa fa-pencil\"></i></a></td>";
			echo "<td><a href=\"index.php?page=employe_sup&cin={$data->cin}\"class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash\"></i></a></td>";
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