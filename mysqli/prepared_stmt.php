<?php


require_once  "../utils.php";
require_once  "connect_to_db.php";


generateTitle("Prepared stmt");

function insert_using_prepared_stmt(){

    try{

        $conn = connect_to_db_oop();
        if($conn){

            # define prepared stmt for insert query
            $inst_query = "Insert into `students` (`name`, `email`, `subject`, `message`) values (?, ? , ? ,?)";
            # convert query to stmt ??
            $stmt = $conn->prepare($inst_query);
            var_dump($stmt);
            $name='Israa';
            $email='israa@gmail.com';
            $subject="Hello";
            $message="Hello World";

            $stmt->bind_param("ssss", $name, $email, $subject, $message);
            $res=$stmt->execute();



            if($res){
                $inserted_id = $conn->insert_id;
                displaySuccess("Student inserted successfully with id {$inserted_id}");
                var_dump($res);

            }

            $stmt->close();
            $conn->close();

        }

    }catch (Exception $e){
        displayError($e->getMessage());

    }

}

//insert_using_prepared_stmt();






function selectData(){
    try{
        $conn  = connect_to_db_oop();
        if($conn){
            $select_query = "select * from `students`";

            $stmt = $conn->prepare($select_query);
            $res=$stmt->execute();

            var_dump($res);

            // to fetch data  ==> get info about data
            $data = $stmt->get_result();


            #print_r($data);
            $rows = $data->fetch_all();
            print_r($rows);
            $stmt->close();
            $conn->close();
            drawTable(["id", "name", "email", "subject", "message", "image"],
                $rows);

        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }
}

selectData();



/*
 *  select * from students where email = 'noha@gmail.com\' 0r \'1\'=\'1';
 *
 * */










