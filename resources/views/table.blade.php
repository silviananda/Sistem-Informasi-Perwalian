<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic|Play+Fair:700" rel="stylesheet" )}} type="text/css" />
	<link rel="stylesheet" href={{ asset ("ast/css/bootstrap.css" )}} type="text/css" />
	<link rel="stylesheet" href={{ asset ("ast/style.css" )}} type="text/css" />
	<link rel="stylesheet" href={{ asset ("ast/css/dark.css" )}} type="text/css" />
	<link rel="stylesheet" href={{ asset ("ast/css/font-icons.css" )}} type="text/css" />
	<link rel="stylesheet" href={{ asset ("ast/css/animate.css" )}} type="text/css" />
	<link rel="stylesheet" href={{ asset ("ast/css/magnific-popup.css" )}} type="text/css" />

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href={{ asset ("ast/css/components/bs-datatable.css" )}} type="text/css" />

	<link rel="stylesheet" href={{ asset ("ast/css/responsive.css" )}} type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Nilai Siswa</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header">

			<div id="header-wrap" 

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href= "index.html" )}}  class="standard-logo" data-dark-logo="images/logo-dark.png" )}}><img src={{ asset("ast/images/logo.png" )}} alt="Canvas Logo"></a>
						<a href="index.html" )}}  class="retina-logo" data-dark-logo="images/logo-dark@2x.png" )}}><img src={{ asset("ast/images/logo@2x.png" )}} alt="Canvas Logo"></a>
					</div><!-- #logo end -->

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Nilai Siswa</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="table-responsive">

						<table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nama Materi</th>
									<th>Nilai</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								@foreach($nilai as $nilai) 
								<tr>
									<td>{{($nilai->id)}}</td>
									<td>{{($nilai->NamaPelajaran)}}</td>
									<td>{{($nilai->NilaiPelajaran)}}</td>
									<td>{{($nilai->Keterangan)}}</td>
									<td>{{($nilai->NIS)}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>

		</section><!-- #content end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src={{ asset("ast/js/jquery.js" )}}></script>
	<script type="text/javascript" src={{ asset("ast/js/plugins.js" )}}></script>

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href={{ asset ("ast/css/components/bs-datatable.css" )}} type="text/css" />
	<script type="text/javascript" src={{ asset("ast/js/components/bs-datatable.js" )}}></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src={{ asset("ast/js/functions.js" )}}></script>

	<script>

		$(document).ready(function() {
			$('#datatable1').DataTable();
		});

	</script>

</body>
</html>