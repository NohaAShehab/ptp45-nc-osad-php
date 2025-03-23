<?php

require_once  "../utils.php";
require_once  "connect_to_db.php";


generateTitle("--- function create new table ");


function createTable(){
    try{
        $conn = connect_to_db_oop();

        $create_query = "create table if not exists  
        `users` (`id` int  auto_increment primary key, 
        `name` varchar(30) not null, 
        `email` varchar(30) unique , `subject` varchar(30) ,
        `message` varchar(30), 
        `image` varchar(255) );";


        # execute query
        $res = $conn->query($create_query);

        if($res){
            displaySuccess("Table created");
            var_dump($res);
        }else{
            displayError("Error creating table");
        }

        # close connection
        $conn->close();


    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

#createTable();




generateTitle("--- Insert --- ");

function insert(){
    try{

        $conn = connect_to_db_oop();
        if($conn){
            $inst_query = "insert into `students`(name, email, subject, message) 
            values('ahmed', 'ahmed@gmaill.com', 'hi', 'hello'); ";

            $res = $conn->query($inst_query);
            var_dump($conn);
            if($res){
                $inserted_id = $conn->insert_id;
                displaySuccess("Student inserted successfully with id {$inserted_id}");
                var_dump($res);

            }

            $conn->close();

        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

#insert();


function update(){
    try{

        $conn = connect_to_db_oop();
        if($conn){
            ##
            $update_query = "update `students` set `name`='rahma<3<3', `email`='rahma@gmail.com' where id=1";

            $res = $conn->query($update_query);
            var_dump($conn);
            if($res){
                $affected_rows = $conn->affected_rows;
                displaySuccess("Student updated : {$affected_rows}");
                var_dump($res);

            }

            $conn->close();
        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

#update();



generateTitle("Delete", "red");
function delete(){
    try{

        $conn = connect_to_db_oop();
        if($conn){
            ##
            $delete_query = "delete from students where id = 5;";
            $res = $conn->query($delete_query);
            #var_dump($conn);
            if($res){
                $affected_rows = $conn->affected_rows;
                displaySuccess("Student Deleted : {$affected_rows}");
                var_dump($res);

            }

            $conn->close();

        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}
delete();
####
generateTitle("--- Select --- ");
function selectData(){
    try{
        $conn  = connect_to_db_oop();
        if($conn){
            $select_query = "select * from `students`";
            $res = $conn->query($select_query);

            $data = $res->fetch_all();
            #print_r($data);
            $conn->close();
            drawTable(["id", "name", "email", "subject", "message", "image"],
            $data);

        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }
}


selectData();























