<?php
require_once 'DB.php';
 
function debug($data) {
     echo '<pre>';
     print_r($data);
     echo '</pre>';
 }

$orderConn = new DB();

if(isset($_POST['name']) && isset($_POST['calories'])) {
    $orderConn->insert('INSERT INTO products (name, calories) VALUES (?, ?)');
    debug('Запись успешно добавлена в базу, вернуться на ' .  '<a href=\'../index.php\'>главную страницу</a>');
}

$method = $_SERVER['REQUEST_METHOD'];
//$path = $_SERVER['PATH_INFO'];

debug($method);
//debug($path);


