<?php

require_once  "../utils.php";
require_once  "connect_pdo.php";




function createTable(){
    try{
        $conn = connect_to_db_pdo();

        $create_query = "create table if not exists  
        `employees` (`id` int  auto_increment primary key, 
        `name` varchar(30) not null, 
        `email` varchar(30) unique , `subject` varchar(30) ,
        `message` varchar(30), 
        `image` varchar(255) );";


        # execute query
        #### use prepared stmt
        $stmt = $conn->prepare($create_query);
        $res=$stmt->execute();
        var_dump($res);

        # closing pdo object
        $conn = null;


    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

#createTable();




generateTitle("--- Insert using prepared stmt with ? place holder- ");

function insert(){
    try{

        $conn = connect_to_db_pdo();
        if($conn){
            $inst_query = "insert into `students`(name, email, subject, message) 
            values(?, ?, ? , ?); ";

            $stmt = $conn->prepare($inst_query);
            $name= 'abc';
            $email = 'abc@gmaill.com';
            $subject= 'test';
            $message= 'test';
            $res=$stmt->execute([$name, $email, $subject, $message]);

            /// display inserted id
            if($res){
                $inserted_id   = $conn->lastInsertId();
                displaySuccess("Inserted successfully, {$inserted_id} ");
            }


            $conn = null;
        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

//insert();


function insertwithpreparedPlaceHolders(){
    try{
        generateTitle("using colon placeholder prepared statement");

        $conn = connect_to_db_pdo();
        if($conn){
            $inst_query = "insert into `students`(name, email, subject, message) 
            values(:username, :useremail, :usersubject, :usermessage); ";

            $stmt = $conn->prepare($inst_query);
            $name= 'abc';
            $email = 'abc@iti.com';
            $subject= 'test';
            $message= 'test';
            $stmt->bindParam(':usersubject', $subject);
            $stmt->bindParam(':username', $name);
            $stmt->bindParam(':useremail', $email);
            $stmt->bindParam(':usermessage', $message);
            $res=$stmt->execute();
            /// display inserted id
            if($res){
                $inserted_id   = $conn->lastInsertId();
                displaySuccess("Inserted successfully, {$inserted_id} ");
            }

            $conn = null;

        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}
//insertwithpreparedPlaceHolders();

function update(){
    try{

        $conn = connect_to_db_pdo();
        if($conn){
            ##
            $update_query = "update `students` set `name`=:updatename, `email`=:updatedEmail where id=:updatestd;";
            $stmt = $conn->prepare($update_query);
            $name= 'ali';
            $email = 'ali@itiii.gov';
            $id=  7;

            $stmt->bindParam(':updatename', $name);
            $stmt->bindParam(':updatedEmail', $email);
            $stmt->bindValue(':updatestd', 13);
            $res = $stmt->execute();
            if($res){
                $affected_rows = $stmt->rowCount();# affected rows
                displaySuccess("Student updated : {$affected_rows}");
                var_dump($res);

            }

            $conn = null;
        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

update();



####
generateTitle("--- Select --- ");
function selectData(){
    try{
        $conn  = connect_to_db_pdo();
        if($conn){
            $select_query = "select * from `students`";
            $stmt = $conn->prepare($select_query);
            $res=$stmt->execute();
           #$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            #print_r($data);
//            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            # print_r($data);

            $data = $stmt->fetchAll(PDO::FETCH_NUM);
            print_r($data);

            drawTable(["id", "name", "email", "subject", "message", "image"],
            $data);

        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }
}

//selectData();
























