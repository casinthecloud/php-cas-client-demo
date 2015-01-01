<?php
	require_once 'casconfig.php';
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
			<li class="active"><a href="/index.php">You are on the /index.php page</a></li>
			<li><a href="/protected/index.php">Call the /protected/index.php page</a></li>
			<!-- #### change with your own CAS in the cloud server and your host name #### -->
			<li><a href="https://freeuse1.casinthecloud.com/leleujgithub/logout?service=http://localhost">Call the CAS logout</a></li>
		</ul>
		<h3>
			<?php
				if (phpCAS::checkAuthentication()) {
				?>
					<p>User: <?php echo phpCAS::getUser(); ?></p>
					<p>Attributes: <?php print_r(phpCAS::getAttributes()); ?></p>
				<?php
				} else {
				?>
					<p>Unauthenticated / anonymous user</p>
				<?php
				}
			?>
		</h3>
	</div>
</body>
</html>
