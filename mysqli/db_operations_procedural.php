<?php

require_once  "../utils.php";
require_once  "connect_to_db.php";


generateTitle("--- function create new table ");


function createTable(){
    try{
        $conn = connect_to_db();

        $create_query = "create table if not exists  
        `students` (`id` int  auto_increment primary key, 
        `name` varchar(30) not null, 
        `email` varchar(30) unique , `subject` varchar(30) ,
        `message` varchar(30), 
        `image` varchar(255) );";


        # execute query
        $res = mysqli_query($conn, $create_query);

        if($res){
            displaySuccess("Table created");
            var_dump($res);
        }else{
            displayError("Error creating table");
        }

        # close connection
        mysqli_close($conn);


    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

//createTable();




generateTitle("--- Insert --- ");

function insert(){
    try{

        $conn = connect_to_db();
        if($conn){
            $inst_query = "insert into `students`(name, email, subject, message) 
            values('noha', 'noha@gmaill.co', 'hi', 'hello'); ";

            $res = mysqli_query($conn, $inst_query);
            var_dump($conn);
            if($res){
                $inserted_id = mysqli_insert_id($conn);
                displaySuccess("Student inserted successfully with id {$inserted_id}");
                var_dump($res);

            }

            mysqli_close($conn);

        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

//insert();


function update(){
    try{

        $conn = connect_to_db();
        if($conn){
            ##
            $update_query = "update `students` set `name`='rahma<3', `email`='rahma@gmail.com' where id=1";

            $res = mysqli_query($conn, $update_query);
            var_dump($conn);
            if($res){
                $affected_rows = mysqli_affected_rows($conn);
                displaySuccess("Student updated : {$affected_rows}");
                var_dump($res);

            }

            mysqli_close($conn);

        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }
}

#update();



generateTitle("Delete", "red");
function delete(){
    try{

        $conn = connect_to_db();
        if($conn){
            ##
            $delete_query = "delete from students where id = 3;";
            $res = mysqli_query($conn, $delete_query);
            #var_dump($conn);
            if($res){
                $affected_rows = mysqli_affected_rows($conn);
                displaySuccess("Student Deleted : {$affected_rows}");
                var_dump($res);

            }

            mysqli_close($conn);

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
        $conn  = connect_to_db();
        if($conn){
            $select_query = "select * from `students`";
            $res = mysqli_query($conn, $select_query);
            #var_dump($res);
           #var_dump($conn);

            # use mysqli_result to fetch data ??
            #$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
            $data = mysqli_fetch_all($res);
            #print_r($data);
            mysqli_close($conn);
            drawTable(["id", "name", "email", "subject", "message", "image"],
            $data);

        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }
}


selectData();























