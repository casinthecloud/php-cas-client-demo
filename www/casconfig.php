<?php
	require_once $_SERVER["DOCUMENT_ROOT"] . '../vendor/autoload.php';

	// #### change with your own CAS server ####
	//phpCAS::setDebug();
	phpCAS::client(CAS_VERSION_3_0, 'localhost', 8888, '/cas');
	phpCAS::setCasServerCACert($_SERVER["DOCUMENT_ROOT"] . '../certs/usertrust_ca.cer');
	//phpCAS::setNoCasServerValidation();

	// handle logout requests directly from the CAS server
	phpCAS::handleLogoutRequests(true, array('localhost'));
?>
