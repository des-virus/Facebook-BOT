<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$requestBody = file_get_contents('php://input');
	$ch = curl_init('https://mpcc.mptelecom.com.vn/MPCC_FBNotifier/getFBRealtimeData/');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
	$response = curl_exec($ch);
	curl_close($ch);
} else{
	echo $_GET["hub.challenge"];
}
?>