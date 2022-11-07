<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Сountries of the World</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<!-- custom -->
	<link href="public/css/templatemo-style.css" rel="stylesheet">
	<link href="public/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="public/css/search.css">
</head>

<body>
	<div id="container">
		<div id="header">
			<!-- start navigation -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a href="./" class="navbar-brand"><strong>Сountries of the World</strong></a>
						<br>
						<hr>
					</div>
					<div class="row">
						<div class="search">
							<form class="form-search" method="GET" action="search">
								<input type="text" name="text" class="form-control input-sm" maxlength="64" placeholder="Введите название или код страны" />
								<button type="submit" class="btn btn-primary btn-sm">Search</button>
							</form>
						</div>
					</div>
					<!--  меню --> 

					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right tnav">
							<!-- php code meny -->
							<?php
							echo '<li><a href="./">Главная</a></li>';
							echo '<li><a href="states">Государства</a></li>';
							echo '<li><a href="cities">Города</a></li>';
							echo '<li><a href="continent">Континенты</a></li>';
							echo '<li><a href="countrylist">Manage_Country</a></li>';
							echo '<li><a href="citylist">Manage_City</a></li>';
							?>
						</ul>
					</div>
					<!--    end меню              -->
				</div>
			</div>
			<!-- end navigation -->
		</div>
		<div id="body">
			<!-- start content -->
			<section class="templatemo-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<br>
							<br>
							<br>
							<h2 class="text-uppercase text-center"><?php if (isset($titel)) echo $titel; ?></h2>
							<hr>
							<?php
							if (isset($content)) {
								echo $content;
							}
							?>
							<!-- php code content -->
						</div>
					</div>
				</div>
			</section>
			<!-- end content -->
		</div>
		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy; 2022 Сountries of the world IVKHK JPTV20 Daniil Vassiljev</p>
						<hr>

					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
	</div>
</body>

</html>