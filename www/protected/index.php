<?php
	require_once '../casconfig.php';

	// protected page -> force authentication
	phpCAS::forceAuthentication();
?>
<!DOCTYPE html>
<html>
<head>
	<title>php-cas-client-demo</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li><a href="/index.php">Call the /index.php page</a></li>
			<li class="active"><a href="/protected/index.php">You are on the /protected/index.php page</a></li>
			<li><a href="https://localhost:8443/cas/logout?service=http://localhost:8000">Call the CAS logout</a></li>
		</ul>
		<h3>
			<p>User: <?php echo phpCAS::getUser(); ?></p>
			<p>Attributes: <?php print_r(phpCAS::getAttributes()); ?></p>
		</h3>
	</div>
</body>
</html>
