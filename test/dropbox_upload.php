<?php
/*
70eSqm3tnKAAAAAAAAAAT9hsuN8VfEGrOjdLzQfklm4 !!!!!!!
		require 'vendor/autoload.php';
		$dropbox_config = array(
			'key'    => 'xowzggae1grj64z',
			'secret' => '1vzh9bdgrnownku'
		);
	
		$appInfo = \Dropbox\AppInfo::loadFromJson($dropbox_config);
		$webAuth = new \Dropbox\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");
		$authorizeUrl = $webAuth->start();
echo "1. Go to: " . $authorizeUrl . "<br>";
echo "2. Click \"Allow\" (you might have to log in first).<br>";




$authCode = trim('70eSqm3tnKAAAAAAAAAAT9hsuN8VfEGrOjdLzQfklm4');
$dbxClient = new \Dropbox\Client('70eSqm3tnKAAAAAAAAAAEHZwDf8qHIpJxAjoDBMjV1tU83mT43TDcq7ja-WhSMSA', "PHP-Example/1.0");




$f = fopen("2.jpg", "rb");
$result = $dbxClient->uploadFile("/2.jpg", \Dropbox\WriteMode::add(), $f);
fclose($f);
print_r($result);

*/

?>

