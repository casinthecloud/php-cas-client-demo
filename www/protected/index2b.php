<?php
	require_once '../casconfig.php';

	if (isset($_SESSION["casResource"]) && $_SESSION["casResource"] !== "resource2") {
		unset($_SESSION["phpCAS"]["user"]);
	}
	$_SESSION["casResource"] = "resource2";

	// protected page -> force authentication
	phpCAS::forceAuthentication();
?>
<!DOCTYPE html>
<html>
<head>
	<title>php-cas-client-demo</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h1>Index2b</h1>
	<a href="index1.php">Index1</a>
	<a href="index2.php">Index2</a>
	<h3>
		<p>User: <?php echo phpCAS::getUser(); ?></p>
		<p>Attributes: <?php print_r(phpCAS::getAttributes()); ?></p>
	</h3>
</body>
</html>
