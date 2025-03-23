<?php


require_once 'connection_credits.php';
//require_once "../utils.php";

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



function insertData($name, $email, $message, $subject, $image){

    try{
        $conn = connect_to_db_pdo();
        $inst_query = "insert into `students`(name, email, subject, message, image) 
            values(:username, :useremail, :usersubject, :usermessage, :userimage); ";

        $stmt = $conn->prepare($inst_query);
        $stmt->bindParam(':usersubject', $subject);
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':useremail', $email);
        $stmt->bindParam(':usermessage', $message);
        $stmt->bindParam(':userimage', $image);
        $res=$stmt->execute();
        if($res){
            $inserted_id   = $conn->lastInsertId();
            return $inserted_id;
        }

        $conn = null;
    }catch (PDOException $e){
        echo $e->getMessage();
    }

    return false;
}

function selectData(){
    $data = [];
    try{
        $conn  = connect_to_db_pdo();
        if($conn){
            $select_query = "select * from `students`";
            $stmt = $conn->prepare($select_query);
            $res=$stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_NUM);


        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }

    return $data;
}