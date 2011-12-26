<?php
//
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Template</title>
		<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
	</head>
	<body>
		<div class="topbar">
			<div class="topbar-inner">
				<div class="container">
					<h3><a href="?page=dashboard">min<sup>2</sup></a></h3>
					<ul class="nav">
						<li><a href="?page=dashboard">Dashboard</a></li>
						<li class="dropdown" data-dropdown="dropdown">
							<a href="#" class="dropdown-toggle">Modules</a>
							<ul class="dropdown-menu">
								<li><a href="?page=products">Products</a></li>
								<li><a href="?page=products">Navigation</a></li>
								<li><a href="?page=products">Banners</a></li>
							</ul>
						</li>
						<li><a href="?page=users">Users</a></li>
						<li><a href="?page=media">Media</a></li>
						<li><a href="?page=tools">Tools</a></li>
						<li><a href="?page=settings">Settings</a></li>
						<li><a href="?page=reports">Reports</a></li>
					</ul>
					<ul class="nav secondary-nav">
						<li class="dropdown" data-dropdown="dropdown">
							<a href="#" class="dropdown-toggle">Raghunath</a>
							<ul class="dropdown-menu">
								<li><a href="?page=account">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="?page=logout">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="http://twitter.github.com/bootstrap/1.4.0/bootstrap-dropdown.js"></script>
		<script>
			$(function() {
				$('#topbar').dropdown();
			});
		</script>
	</body>
</html>