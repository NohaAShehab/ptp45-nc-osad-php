<?php


require_once "../utils.php";
require_once "connection_credits.php";

//generateTitle("procedural mysqli");
function connect_to_db() {
    $conn= false;

    // any connection to db --> inside try catch

    try{
        #
        $conn = mysqli_connect(DB_HOST, DB_USER,
            DB_PASSWORD, DB_NAME, DB_PORT);

        if($conn ){
            displaySuccess("Connected ");
//            var_dump($conn);
        }else{
            displayError("Connetion failed");
//            var_dump($conn);

        }
    }catch (Exception $e){
       displayError($e->getMessage());
    }

    return $conn;
}

function connect_to_db_oop(){
    $conn= false;
    try{
        $conn = new mysqli(DB_HOST, DB_USER,DB_PASSWORD,
            DB_NAME, DB_PORT);


    }catch (Exception $e){
        displayError($e->getMessage());
    }
    return $conn;
}
//var_dump(connect_to_db());
//var_dump(connect_to_db_oop());