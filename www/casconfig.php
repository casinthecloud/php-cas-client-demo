<?php
	require_once $_SERVER["DOCUMENT_ROOT"] . '../libs/CAS-1.3.3/CAS.php';

	// #### change with your own CAS in the cloud server ####
	//phpCAS::setDebug();
	phpCAS::client(CAS_VERSION_3_0, 'freeuse1.casinthecloud.com', 443, '/leleujgithub');
	phpCAS::setCasServerCACert($_SERVER["DOCUMENT_ROOT"] . '../certs/usertrust_ca.cer');
	//phpCAS::setNoCasServerValidation();

	// handle logout requests directly from the CAS server
	phpCAS::handleLogoutRequests(true, array('freeuse1.casinthecloud.com'));
?>
