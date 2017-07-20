<?php
$id = $_GET['id'];
$apikey = 'ENTER_YOUR_APIKEY';
$apiEndpoint = 'ENTER_API_ENDPOINT';
$apiURL = $apiEndpoint.'?apikey='.$apikey.'&id='.$id;
$apiResponseObject = file_get_contents($apiURL);
$apiResponseArr = json_decode($apiResponseObject, true);

echo 'Download Links<br/>';
foreach($apiResponseArr['link'] as $itag => $link){
	echo $itag.' <a href="'.$link[0].'">Download</a><hr/>';
}
?>
