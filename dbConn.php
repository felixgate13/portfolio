<?php

function dbConn(){
    $db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
$db = dbConn();