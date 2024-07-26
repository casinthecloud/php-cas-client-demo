<?php
	require_once $_SERVER["DOCUMENT_ROOT"] . '/../vendor/autoload.php';

	phpCAS::setLogger();
	// Enable verbose error messages. Disable in production!
	phpCAS::setVerbose(true);
	phpCAS::client(CAS_VERSION_3_0, 'localhost', 8443, '/cas', 'http://localhost:8000');
	//phpCAS::setCasServerCACert($_SERVER["DOCUMENT_ROOT"] . '/../certs/usertrust_ca.cer');
	phpCAS::setNoCasServerValidation();

	// handle logout requests directly from the CAS server
	phpCAS::handleLogoutRequests(true, array('localhost'));
?>
