<?php

require_once( 'CAS.php' );
define('CAS_ENABLE', true);
$cas_host = '';
$cas_context = '';
$cas_port = 8080;
//$cas_server_ca_cert_path = '/root/keys/tomcat.cer';
$cas_real_hosts = array (
	''
);

phpCAS::setDebug();
phpCAS::setVerbose(true);
phpCAS::client(CAS_VERSION_2_0, $cas_host, $cas_port, $cas_context);
phpCAS::setNoCasServerValidation();
phpCAS::handleLogoutRequests(true, $cas_real_hosts);
phpCAS::forceAuthentication();
//phpCAS::logout(['service'=>'http://example.com/mantis']);
?>
