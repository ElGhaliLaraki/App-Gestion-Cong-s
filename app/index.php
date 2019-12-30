<?php 
	require('../ini.php');
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = "home";
	}
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Gestion Conge | Application </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="../css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
	 <!-- datapicker JS
		============================================ -->
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
	 <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
	
</head>

<body class="materialdesign">
   
    <div class="wrapper-pro">
        
		
		<?php 
				if(en_ligne() === true) 
				{
					$sql = "SELECT * FROM employe WHERE cin = '{$_SESSION['id']}'";
					$query = $connection->query($sql);
					$data = $query->fetch_object();
		?>
		
		<?php
			require('header.php');
		?>
		
        <!-- Header top area start-->
        <div class="content-inner-all">
			
			<?php
				require('header-top.php');
			
				if($data->type == "rh")
				{
					switch($page){
						case "employe":
							require('employe.php');
						break;
						case "employe_add":
							require('employe_add.php');
						break;
						case "employe_sup":
							require('employe_sup.php');
						break;
						case "employe_upd":
							require('employe_upd.php');
						break;
						case "typeconge":
							require('typeconge.php');
						break;
						case "typeconge_upd":
							require('typeconge_upd.php');
						break;
						case "typeconge_sup":
							require('typeconge_sup.php');
						break;
						case "typeconge_add":
							require('typeconge_add.php');
						break;
						case "conge":
							require('conge.php');
						break;
						case "conge_statut":
							require('conge_statut.php');
						break;
						case "profile":
							require('profile.php');
						break;
						default:
							require('home.php');
						break;
					}
				}else{
					switch($page){
						case "conge_emp":
							require('conge_emp.php');
						break;
						case "conge_emp_add":
							require('conge_emp_add.php');
						break;
						case "conge_emp_sup":
							require('conge_emp_sup.php');
						break;
						case "profile":
							require('profile.php');
						break;
						default:
							require('conge_emp.php');
						break;
					}
				}
			?>
		   
        </div>
    </div>
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 GestionConge All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
	
	
			<?php 
				}else{
			?>
			
				<h2 style="text-align: center;margin: 150px auto;color: red;font-size: 15px;"> 
				
					HORS LIGNE  <br /> <br /> <br />
					<a href="../index.php" class="login-button login-button-lg">Log in</a>
					
				</h2>
				
				
			<?php 
				}
			?>
			

    <!-- jquery ============================================ -->
    <script src="../js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="../js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS ============================================ -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS ============================================ -->
    <script src="../js/jquery.sticky.js"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="../js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="../js/wow/wow.min.js"></script>
    <!-- counterup JS ============================================ -->
    <script src="../js/counterup/jquery.counterup.min.js"></script>
    <script src="../js/counterup/waypoints.min.js"></script>
    <script src="../js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS ============================================ -->
    <script src="../js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS ============================================ -->
    <script src="../js/peity/jquery.peity.min.js"></script>
    <script src="../js/peity/peity-active.js"></script>
    <!-- sparkline JS ============================================ -->
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/sparkline-active.js"></script>
    <!-- flot JS ============================================ -->
    <script src="../js/flot/jquery.flot.js"></script>
    <script src="../js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot/jquery.flot.spline.js"></script>
    <script src="../js/flot/jquery.flot.resize.js"></script>
    <script src="../js/flot/jquery.flot.pie.js"></script>
    <script src="../js/flot/jquery.flot.symbol.js"></script>
    <script src="../js/flot/jquery.flot.time.js"></script>
    <script src="../js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS ============================================ -->
    <script src="../js/data-table/bootstrap-table.js"></script>
    <script src="../js/data-table/tableExport.js"></script>
    <script src="../js/data-table/data-table-active.js"></script>
    <script src="../js/data-table/bootstrap-table-editable.js"></script>
    <script src="../js/data-table/bootstrap-editable.js"></script>
    <script src="../js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../js/data-table/colResizable-1.5.source.js"></script>
    <script src="../js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS ============================================ -->
    <script src="../js/main.js"></script>
	
    <!-- datapicker JS ============================================ -->
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
</body>

</html>