<?php 
// // URL có chứa hai thông tin name và diachi
// $url = 'https://mpcc.mptelecom.com.vn/MPCC_FBNotifier/getFBRealtimeData/?hub.mode=subscribe&hub.verify_token=MPCC&hub.challenge=phongtest_curl_11_24';

// // Khởi tạo CURL
// $ch = curl_init($url);

// // Thiết lập có return
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Thiết lập sử dụng Firefox
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6');

// $result = curl_exec($ch);

// curl_close($ch);

// echo $result;

echo $_GET["hub_challenge"];
?>