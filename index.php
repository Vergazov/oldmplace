<?php

 require_once 'test2.html';
 require_once 'model/DB.php';

 function debug($data) {
     echo '<pre>';
     print_r($data);
     echo '</pre>';
 }
 $a = 'Глобальная';
 $path = $_SERVER['PATH_INFO'];
 debug($path);
 $b  = $GLOBALS;
 debug($b);

//$orderConn = new DB();
//$result = $orderConn->query('Select * FROM products');
//debug($result[0]['number']);
//debug($result);

//$token = 'AQAAAAA90PkgAAflMNIDwWYCG0N0h3LbmV3qnDo';
// 
//$ch = curl_init('https://cloud-api.yandex.net/v1/disk/resources/download?path=QR-код.txt' . '&permanently=true');
//curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: OAuth ' . $token]);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER ,true);
//$result = curl_exec($ch);
//$raw = json_decode($result,true);
//curl_close($ch);
 








        



    


