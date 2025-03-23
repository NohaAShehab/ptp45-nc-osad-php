<?php


require_once "../utils.php";
require_once "connection_credits.php";


function connect_to_db_pdo(){
    $pdo=false;
    try{
        $dns = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=3306";
        $pdo = new PDO($dns, DB_USER, DB_PASSWORD);
        var_dump($pdo);

    }catch (PDOException $e){
        displayError($e->getMessage());
    }

    return $pdo;
}

connect_to_db_pdo();