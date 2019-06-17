<?php session_start();
	include "mysqlconecta.php";
	include "mysqlexecuta.php";
//inicio else
	?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>QueryList | Contatos Pessoais</title>
		<meta name="keywords" content="QueryList" />
		<meta name="description" content="QueryList">
		<meta name="author" content="QueryList">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->		
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />		
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />		
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="index.php" class="logo">
						<img src="images/logo.png" height="35" alt="QueryList" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo $_SESSION["Perfil"]; ?>" alt="Joseph Doe" class="img-circle" data-lock-picture="" />
							</figure>
							<div class="profile-info"" data-lock-email="">
								<span class="name"></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="cadastro-perfil.php"><i class="fa fa-user"></i> Perfil</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout-agenda.php"><i class="fa fa-power-off"></i> Deslogar</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							QueryList
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
				<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Visualização</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="index.php">
													 Visualizar Contatos de Emergência
												</a>
											</li>
											<li>
												<a href="contato-pessoal.php">
													 Visualizar Contatos Pessoais
												</a>
											</li>
										</ul>
									</li>
									
									<li class="nav-active">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Cadastros</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="cadastro-contato.php">
													 Cadastro de Contatos Pessoais
												</a>
											</li>
											<li>
											<a href="cadastro-contato-emergencia.php">
													 Cadastro de Contatos de Emergência
												</a>
											</li>
											<li>
												<a href="cadastro-grupo.php">
													 Cadastro de Grupos Pessoais
												</a>
											</li>
											<li>
												<a href="cadastro-grupo-emergencia.php">
													 Cadastro de Grupos de Emergência
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2 style="border-bottom-color: #cc0000;">Inicial</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Inicial</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					
					<div class="row">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
								</div>
						
								<h2 class="panel-title">Contatos Cadastrados</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>ID</th>
												<th>Instituição</th>
												<th class="text-right">Endereço</th>
												<th class="text-right">Telefone</th>
												
												<th class="text-right">Grupo</th>
												<th class="text-right">Observação</th>
											</tr>
										</thead>
										<tbody>
										<?php
											
											$sql = "SELECT * FROM contatos WHERE id_categoria = '1'";
											$res = mysqlexecuta($con,$sql);
											while($row = mysqli_fetch_assoc($res)){
												echo '<tr>
														<td>'.$row["id"].'</td>
														<td>'.$row["nome"].'</td>
														<td class="text-right">'.$row["endereco"].'</td>
														<td class="text-right">'.$row["telefone"].'</td>
														
														<td class="text-right">'.$row["grupo_id"].'</td>
														<td class="text-right">'.$row["observacao"].'</td>
														';
											}
										?>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>
					
					<!-- end: page -->
				</section>
			</div>

		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>		
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>		
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>		
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>		
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>		
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>		<script src="assets/vendor/flot/jquery.flot.js"></script>		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>		<script src="assets/vendor/raphael/raphael.js"></script>		<script src="assets/vendor/morris/morris.js"></script>		<script src="assets/vendor/gauge/gauge.js"></script>		<script src="assets/vendor/snap-svg/snap.svg.js"></script>		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>